$(() => {

    // show body when scripts are loaded
    $('body').show();

    // move placeholders up on input focus
    $(document).on('focus keyup paste', 'input.form-control', (e) => {
        const field = $(e.target);
        let label = field.next();
        if(e.type === 'focus') {
            return label.addClass('active');
        }
        if(field.val().length) {
            label.addClass('active');
        } else {
            label.removeClass('active');
        }
    });

    // disable submit button and show loader when form is submitted
    $('form').on('submit', (e) => {
        const submit = $(e.target).find('button[type="submit"]');
        submit.prop('disabled', true);
        const loader = $('<img src="/images/loader.gif" class="loader-animation" width="60px" style="display:none">');
        loader.insertAfter(submit);
        loader.show('normal');
    });
});

// setup axios response
window.axios.interceptors.response.use((response) => {
    loaderRemove();
    if(response.data.success) {
        if(response.data.message) {
            toastr.success(response.data.message);
        }
    } else {
        if(response.data.message) {
            toastr.error(response.data.message);
        }

        if(response.data.errors) {
            toastr.error(response.data.errors);
        }
    }

    return response.data;
}, (error) => {
    if(error.message) {
        toastr.error(error.message);
    }
});

loaderRemove = () => {
    const loader = $('img.loader-animation');
    loader.hide('normal');
    loader.siblings('button').prop('disabled', false);
    loader.remove();
};

event = ($el, $type, $handler) => {
    if($el) {
        $el.addEventListener($type, $handler);
    }
};