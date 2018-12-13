// const TEMPLATES = {
//     task_manager: '',
//     steps_wizard: '',
//     support_section: '',
//     payment_upgrades: '',
//     site_traffic_report: '',
//     welcome_block: '',
//     recent_news: '',
//     quick_links: '',
// };
//
$(() => {

    // $('#mCSB_3_container li').on('click', (e) => {
    //     debugger;
    //     e.preventDefault();
    //     $('#mainBlock .row').empty().append(_.template(TEMPLATES[$(e.currentTarget).attr('name')]));
    //
    // });

    // $(document).ready((e) => {
    //     for (var key in TEMPLATES) {
    //         TEMPLATES[key] = $('#' + key).html().replace('\n', '').replace(/\s/g, ' ');
    //     }
    // })

    $('#site-blocks input[type="checkbox"]').on('change', (e) => {
        let target = $(e.currentTarget);
        axios.post('/blockManager', {
            active: target.is(":checked"),
            id: target.attr('id')
        }).then((results) => {
            if(results.errors) {
                errorsField.html(results.errors);
            }
        });
    })
});
