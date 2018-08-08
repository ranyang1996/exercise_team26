$().ready(function () {
    $('#registerForm').validate({
        rules: {
            given_name: 'required',
            last_name: 'required',
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: [6]
            },
            confirm_password: {
                required: true,
                minlength: [6],
                equalTo: '.password'
            },
            postcode: {
                'required': true,
                rangelength: [4,4]
            },

            mobile: {
                'required': true,
                rangelength: [10,10]
            },

            dob: 'required'
        },
        messages: {
            given_name: 'Please enter your given name',
            last_name: 'Please enter your last name',
            email: {
                required: 'Please enter your email'
                    },

            password: {
                required: 'Please provide a password',
                // rangelength: 'Your password cannot be between 6 to 10 characters'
            },

           confirm_password: {
                required: 'Please provide a password',
                minlength: 'Your password cannot be less than 6 characters',
                equalTo: 'These passwords do not match'
            },

            postcode: {
                required:'Please enter your postcode',
                rangelength: 'Please enter a valid Australian postcode'
            },
            mobile: {
                required: 'Please enter your mobile number',
                rangelength: 'Please enter a valid Australian mobile number'
            },
            dob: 'Please enter your date of birth'
        }
    });


        var passwordEntered = document.querySelector('.password');

        var helperText = {
            charLength: document.querySelector('.helper-text .length'),
            lowercase: document.querySelector('.helper-text .lowercase'),
            uppercase: document.querySelector('.helper-text .uppercase'),
            special: document.querySelector('.helper-text .special')
        };

        var pattern = {
            charLength: function() {
                if( passwordEntered.value.length >= 6 ) {
                    return true;
                }
            },
            lowercase: function() {
                var regex = /^(?=.*[a-z]).+$/; // Lowercase character pattern

                if( regex.test(passwordEntered.value) ) {
                    return true;
                }
            },
            uppercase: function() {
                var regex = /^(?=.*[A-Z]).+$/; // Uppercase character pattern

                if( regex.test(passwordEntered.value) ) {
                    return true;
                }
            },
            special: function() {
                var regex = /^(?=.*[0-9_\W]).+$/; // Special character or number pattern

                if( regex.test(passwordEntered.value) ) {
                    return true;
                }
            }
        };

        // Listen for keyup action on password field
        passwordEntered.addEventListener('keyup', function (){
            // Check that password is a minimum of 8 characters
            patternTest( pattern.charLength(), helperText.charLength );

            // Check that password contains a lowercase letter
            patternTest( pattern.lowercase(), helperText.lowercase );

            // Check that password contains an uppercase letter
            patternTest( pattern.uppercase(), helperText.uppercase );

            // Check that password contains a number or special character
            patternTest( pattern.special(), helperText.special );

            // Check that all requirements are fulfilled
            if( hasClass(helperText.charLength, 'valid') &&
                hasClass(helperText.lowercase, 'valid') &&
                hasClass(helperText.uppercase, 'valid') &&
                hasClass(helperText.special, 'valid')
            ) {
                addClass(passwordEntered.parentElement, 'valid');
            }
            else {
                removeClass(passwordEntered.parentElement, 'valid');
            }
        });

        function patternTest(pattern, response) {
            if(pattern) {
                addClass(response, 'valid');
            }
            else {
                removeClass(response, 'valid');
            }
        }

        function addClass(el, className) {
            if (el.classList) {
                el.classList.add(className);
            }
            else {
                el.className += ' ' + className;
            }
        }

        function removeClass(el, className) {
            if (el.classList) {
                el.classList.remove(className);
            }
            else {
                el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
            }
        }

        function hasClass(el, className) {
            if (el.classList) {
                console.log(el.classList);
                return el.classList.contains(className);
            }
            else {
                new RegExp('(^| )' + className + '( |$)', 'gi').test(el.className);
            }
        }
        ;
});
