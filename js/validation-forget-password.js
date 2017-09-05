// JavaScript Document
 
$(document).ready(function() {
 $('#forget-password-form').validate({
   
   rules: {
     Email: {
        required: true,
        email: true
     },
   }, //end rules
   messages: {
      Email: {
         required: "Please fill in your email address.",
         email: "Invalid email address."
       },
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