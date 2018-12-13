const changePasswordForm = document.querySelector('#change-password-form');

$(() => {
    $('#loginForm').on('submit', (e) => {
        e.preventDefault();
        const data = {
            email: $('#loginEmail').val(),
            password: $('#loginPassword').val()
        };
        axios.post('/login', data).then((results) => {
            if(results.success) {
                location.href = '/dashboard';
            }
        });
    });

    $('#forgotPasswordForm').on('submit', (e) => {
        e.preventDefault();
        const data = {
            email: $('#forgotPasswordEmail').val()
        };

        axios.post('/forgotPassword', data).then((results) => {
            if(results.success) {
                $('#loginRegisterModal').modal('hide');
                $('a.login-link').prop('disabled', 1);
            }
        });
    });

    $('#forgot-password-link').on('click', () => {
        $('#fp-tab-link')[0].click();
    });

    if(changePasswordForm) {
        changePasswordForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const data = serialize(changePasswordForm, { hash: true });
            axios.post('/resetPassword', data).then((results) => {
                if(results.success) {
                    setTimeout(() => location.href = '/', 3000);
                }
            });
        });
    }
});