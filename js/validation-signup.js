// JavaScript Document
 
$(document).ready(function() {
 $('#register-form').validate({
   
   rules: {
	 Firstname: {
        required: true,
     },
     Email: {
        required: true,
        email: true
     },
     Password: {
        required: true,
        rangelength:[6,20]
     },
     confirm_password: {equalTo:'#password'},
     spam: "required"
   }, //end rules
   messages: {
	  Firstname: {
         required: "Please fill in your name.",
       },
      Email: {
         required: "Please fill in your email address.",
         email: "Invalid email address."
       },
      Password: {
        required: 'Please type in a password',
        rangelength: 'Password must be between 6 to 20 characters long.'
      },
      confirm_password: {
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