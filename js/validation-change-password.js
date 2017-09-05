// JavaScript Document
 
$(document).ready(function() {
 $('#change-password-form').validate({
   
   rules: {
     OldPassword: {
        required: true,
        rangelength:[6,20]
     },
	 NewPassword: {
        required: true,
        rangelength:[6,20]
     },
     ConfirmNewPassword: {equalTo:'#NewPassword'},
     spam: "required"
   }, //end rules
   messages: {
      OldPassword: {
        required: 'Please type your old password',
        rangelength: 'Password is between 6 to 20 characters long.'
      },
	  NewPassword: {
        required: 'Please type your new password',
        rangelength: 'Password must be between 6 to 20 characters long.'
      },
      ConfirmNewPassword: {
        equalTo: 'The two passwords do not match.'
      }
   },
   errorPlacement: function(error, element) { 
       if (element.is(":checkbox")) {
          error.appendTo( element.parent()); 
        } else {
          error.insertAfter(element);
        } 
    } 

  }); // end validate 
}); // end ready