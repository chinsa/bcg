$(document).ready(function(){

	// Validate
	$('#register-form').validate({
	    rules: {
		  civilite: {
	        required: true
	      },
	      lastName: {
	        minlength: 2,
	        required: true
	      },
	      email: {
	        required: true,
	        email: true
	      },
	      firstName: {
	      	minlength: 2,
	        required: true
	      },
	      address: {
	      	minlength: 2,
	        required: true
	      }, 
	      postal: {
	      	minlength: 5,
	        required: true
	      },   
	      city: {
	      	minlength: 2,
	        required: true
	      }, 
	      nationality: {
	      	minlength: 2,
	        required: true
	      }, 
	      naissance: {
	      	minlength: 2,
	        required: true
	      },	    
	      tel1: {
	      	minlength: 8,
	        required: true
	      }	     
	        
	    },
	    highlight: function(label) {
	    	$(label).closest('.control-group').removeClass('success').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').removeClass('error').addClass('success');
	    }
		
	  });
	  
}); // end document.ready