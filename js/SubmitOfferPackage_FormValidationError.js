$(function() {

$('#request').formValidation ({
    framework: 'bootstrap',
        
    err: {
      container: function($field, Validator) {
        return $field.parent().next('.messageContainer');
      }
    },

    fields: {
      username: {
        validators: {
          notEmpty: {
            message: 'The username is required and cannot be empty'
          }
        }
      },
      password: {
        validators: {
          notEmpty: {
            message: 'The password is required and cannot be empty'
          }
        }
      },
      zipfile: {
        validators: {
          notEmpty: {
            message: 'The package zip file is required and cannot be empty'
          }
        }
      }
    }
  });

});