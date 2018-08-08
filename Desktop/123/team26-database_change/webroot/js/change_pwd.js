$().ready(function () {
    $('#passwordForm').validate({
        rules: {
            password: {
                required: true,

                minlength: [6],
                password:true
            },
            confirm_password: {
                required: true,
                minlength: [6],
                equalTo: '#password'
            }
        },
        messages: {

            password: {
                required: 'Please provide a password'
                // rangelength: 'Your password cannot be between 6 to 10 characters'
            },
            confirm_password: {
                required: 'Please provide a password',
                equalTo: 'These passwords do not match'
            }
        }
    });


});