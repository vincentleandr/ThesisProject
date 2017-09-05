// JavaScript Document
 
 
$(document).ready(function() {
 $('#profile-form').validate({
   
   rules: {
     Firstname: {
        required: true,
     },
	 Location: {
        required: true,
     },
	 Grade: {
        required: true,
     },
	 GPA: {
        required: true,
		range: [0,4],
     },
	 Religion: {
        required: true,
     },
	 Skill: {
        required: true,
     },
	 Achievement: {
        required: true,
     },
	 Goals: {
        required: true,
     },
   }, //end rules
   messages: {
       Firstname: {
         required: "Please fill in your first name.",
       },
	   Location: {
         required: "Please select your current location.",
       },
	   Grade: {
         required: "Please select your program to take.",
       },
	   GPA: {
         required: "Please fill your GPA. Fill '0' (Zero) if you don't have GPA.",
		 range: "GPA must be between 0.0 - 4.0."
       },
	   Religion: {
         required: "Please select your religion.",
       },
	   Skill: {
         required: "Please fill this form.",
       },
	   Achievement: {
         required: "Please fill this form.",
       },
	   Goals: {
         required: "Please fill this form.",
       },
   },
   errorPlacement: function(error, element) { 
       if ( element.is(":radio") || element.is(":checkbox")) {
          error.appendTo( element.parent()); 
        } else {
          error.insertAfter(element);
        }
    }

  }); // end validate 

}); // end ready