$(() => {
    const siteForm = document.querySelector('#site-form');
    const loginForm = document.querySelector('#site-login-form');
    const errorsField = $('div.validation-errors');
    let stepNum = sessionStorage.getItem('stepNum') || 1;

    $('a.start-site-link').on('click', () => {
        if(stepNum == 2) stepNum = 1;
        $('#step' + stepNum).show('normal');
    });

    $('input.site-type-cb').on('change', (e) => {
        $('input.site-type-cb').not(e.target).prop('checked', false);
    });

    // step 1
    event(siteForm, 'submit', (e) => {
        e.preventDefault();
        const siteData = serialize(siteForm, {hash: true});
        axios.get('/flow/loadSkins/'+siteData.site_type).then((results) => {
            if(results.success) {
                $('#skin-types').html(results.skins);
                updateData(siteData);
                changeStep();
                $('#prev-step').show('normal');
            }
        });
    });

    // step 2
    setSkin = (skin) => {
        updateData({ site_skin: skin});
        changeStep();
    };

    // step 3
    setColorPalette = (color) => {
        updateData({ site_color: color });
        changeStep();
    };

    // step 4
    setTypography = (style) => {
        updateData({ site_typography: style });
        changeStep();
    };

    // step 5
    setLayout = (layout) => {
        updateData({ site_layout: layout });
        changeStep();
    };

    // step 6
    event(loginForm, 'submit', (e) => {
        e.preventDefault();
        errorsField.html('');
        updateData(serialize(loginForm, {hash: true}));
        const siteData = getData();
        axios.post('/flow/createSite', siteData).then((results) => {
            if(results.success) {
                $('a.created-site-link').attr('href', results.url);
                $('#step6').slideUp('normal');
                $('#prev-step').hide();
                $('#created-site-link').slideDown('normal');
                sessionStorage.removeItem('site-data');
                sessionStorage.removeItem('stepNum');

                setTimeout($( location ).attr("href", results.url), 3000);//todo change

            } else if(results.errors) {
                errorsField.html(results.errors);
            }
        });
    });

    // back to previous step event
    $('#prev-step').on('click', (e) => {
        e.preventDefault();
        changeStep(true);
        if(stepNum === 1 || stepNum === 7) {
            $(e.target).hide('normal');
        }
    });

    getData = () => {
        return JSON.parse(sessionStorage.getItem('site-data'));
    };

    updateData = (data) => {
        let siteData = JSON.parse(sessionStorage.getItem('site-data')) || {};
        siteData = Object.assign(siteData, data);
        return sessionStorage.setItem('site-data', JSON.stringify(siteData));
    };

    clearData = () => {
        sessionStorage.removeItem('site-data');
    };

    changeStep = (prev) => {
        $('#created-site-link').slideUp('normal');
        $('#step'+stepNum).slideUp('normal');
        if(prev) stepNum--; else stepNum++;
        $('#step'+stepNum).slideDown('normal');
        sessionStorage.setItem('stepNum', stepNum);
    }

});


