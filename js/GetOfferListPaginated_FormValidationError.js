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
      offerpagenumber: {
        validators: {
          notEmpty: {
            message: 'The page number is required and cannot be empty'
          }
        }
      }
    }
  });

});