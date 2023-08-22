/*
 *  Document   : base_forms_validation.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Form Validation Page
 */

var BaseFormValidation = function() {
    // Init Bootstrap Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
    var initValidationBootstrap = function(){
        jQuery('.js-validation-bootstrap').validate({
            errorClass: 'help-block animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.form-group > div').append(error);
            },
            highlight: function(e) {
                jQuery(e).closest('.form-group').removeClass('has-error').addClass('has-error');
                jQuery(e).closest('.help-block').remove();
            },
            success: function(e) {
                jQuery(e).closest('.form-group').removeClass('has-error');
                jQuery(e).closest('.help-block').remove();
            },
            rules: {
                'val-username': {
                    required: true,
                    minlength: 3
                },
                'val-email': {
                    required: true,
                    email: true
                },
                'val-password': {
                    required: true,
                    minlength: 5
                },
                'val-confirm-password': {
                    required: true,
                    equalTo: '#val-password'
                },
                'val-pin': {
                    required: true,
                    minlength: 4,
                      maxlength: 4,
                    digits: true
                },
                'val-login': {
                    required: true,
                    minlength: 4,
                      maxlength: 4,
                    digits: true
                },
                'val-suggestions': {
                    required: true,
                    minlength: 5
                },
                'val-skill': {
                    required: true
                },
                'val-website': {
                    required: true,
                    url: true
                },
                'val-digits': {
                    required: true,
                    digits: true
                },
                'val-number': {
                    required: true,
                    number: true
                },
                'val-range': {
                    required: true,
                    range: [1, 5]
                },
                'val-terms': {
                    required: true
                },
                'val-vouchernumber': {
                    required: true,
                      digits: true,
                        minlength: 12,
                          maxlength: 12
                },
                 'val-quantity': {
                    required: true,
                    range: [1, 100]
                },
                'val-balance': {
                    required: true,
                    range: [50, 2000]
                }
            },
            messages: {
                'val-username': {
                    required: 'Please enter a username',
                    minlength: 'Your username must consist of at least 3 characters'
                },
                'val-email': 'Please enter a valid email address',
                'val-password': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long'
                },
                'val-confirm-password': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long',
                    equalTo: 'Please enter the same password as above'
                },
                 'val-vouchernumber': {
                      required: 'Please enter a Voucher Number',
                      digits: 'Please enter only digits!' ,
                    minlength: 'Your Voucher Number must be 12 digit long',
                   maxlength: 'Your Voucher Number must be 12 digit long'
                 },
                   'val-quantity': {
                      required: 'Please enter a Quantity' ,
                      range: 'Please enter a number between 1 and 100'
                 },
                 'val-balance': {
                      required: 'Please enter a Balance', 
                      range: 'Please enter a number between 50 and 2000'
                 },
                  'val-pin': {
                      required: 'Please enter a Pin Number', 
                      digits: 'Please enter only digits!' ,
                      minlength: 'Your Pin Number must be at least 4 Digit long',
                       maxlength: 'Your Pin Number must be at least 4 Digit long',
                 },
                   'val-login': {
                      required: 'Please enter a Login ID', 
                      digits: 'Please enter only digits!' ,
                      minlength: 'Your Login ID must be at least 4 Digit long',
                       maxlength: 'Your Login ID must be at least 4 Digit long',
                   },
                'val-suggestions': 'What can we do to become better?',
                'val-skill': 'Please select a skill!',
                'val-website': 'Please enter your website!',
                'val-digits': 'Please enter only digits!',
                'val-number': 'Please enter a number!',
                'val-range': 'Please enter a number between 1 and 5!',
                'val-terms': 'You must agree to the service terms!'
            }
        });
    };

    // Init Material Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
    var initValidationMaterial = function(){
        jQuery('.js-validation-material').validate({
            errorClass: 'help-block text-right animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.form-group .form-material').append(error);
            },
            highlight: function(e) {
                jQuery(e).closest('.form-group').removeClass('has-error').addClass('has-error');
                jQuery(e).closest('.help-block').remove();
            },
            success: function(e) {
                jQuery(e).closest('.form-group').removeClass('has-error');
                jQuery(e).closest('.help-block').remove();
            },
            rules: {
                'val-username2': {
                    required: true,
                    minlength: 3
                },
                'val-email2': {
                    required: true,
                    email: true
                },
                'val-password2': {
                    required: true,
                    minlength: 5
                },
                'val-confirm-password2': {
                    required: true,
                    equalTo: '#val-password2'
                },
                'val-suggestions2': {
                    required: true,
                    minlength: 5
                },
                'val-skill2': {
                    required: true
                },
                'val-website2': {
                    required: true,
                    url: true
                },
                'val-digits2': {
                    required: true,
                    digits: true
                },
                'val-number2': {
                    required: true,
                    number: true
                },
                'val-range2': {
                    required: true,
                    range: [1, 5]
                },
                'val-terms2': {
                    required: true
                }
            },
            messages: {
                'val-username2': {
                    required: 'Please enter a username',
                    minlength: 'Your username must consist of at least 3 characters'
                },
                'val-email2': 'Please enter a valid email address',
                'val-password2': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long'
                },
                'val-confirm-password2': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long',
                    equalTo: 'Please enter the same password as above'
                },
                'val-suggestions2': 'What can we do to become better?',
                'val-skill2': 'Please select a skill!',
                'val-website2': 'Please enter your website!',
                'val-digits2': 'Please enter only digits!',
                'val-number2': 'Please enter a number!',
                'val-range2': 'Please enter a number between 1 and 5!',
                'val-terms2': 'You must agree to the service terms!'
            }
        });
    };

    return {
        init: function () {
            // Init Bootstrap Forms Validation
            initValidationBootstrap();

            // Init Meterial Forms Validation
            initValidationMaterial();
        }
    };
}();

// Initialize when page loads
jQuery(function(){ BaseFormValidation.init(); });