$(window).ready(function () {
var validator = $('#createaccount').bootstrapValidator({
  	framework: 'bootstrap',
    feedbackIcons : {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
       row: {
            valid: 'field-success',
            invalid: 'field-error'
        },
      //validations
    fields : {
      email : {
        validators : {
        	notEmpty : {
        		message : "Please provide an email address"
        	},
          regexp: {
            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
          }
     		}
     	},
     	pwd : {
     		validators : {
     			notEmpty : {
     				message : "Please provide a password"
     			},
     			stringLength : {
     				min : 8,
     				message : "The password must be 8 characters long"
     			},
     			different : {
     				field : "email",
     				message : "Password too weak"
     			}
     		}
     	},
			cpwd : {
     		validators : {
     			notEmpty : {
     				message : "Please retype provide a password"
     			},
     			stringLength : {
     				min : 8,
     				message : "The password must be 8 characters long"
     			},
     			identical : {
     				field : "pwd",
     				message : "Password do not match"
     			}
     		}
     	},
     	fname : {
     		validators : {
     			notEmpty : {
     				message : "Please provide a value"
     			},
     		}
     	},
     	lname : {
     		validators : {
     			notEmpty : {
     				message : "Please provide a value"
     			}
     		}
     	}
    }
  });
});
