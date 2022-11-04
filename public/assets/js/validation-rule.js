$(function(){	
	

	//done
	$("#serviceform").validate({
		rules:{
			servicenamem:{
				required:true
			},
			taglinem:{
				required:true
			},
			catnamem:{
				required:true
			},
			locationm:{
				required:true
			},
			pricem:{
				required:true
			},
			imageurlm:{
				required:true
			},
			thumbnailurlm:{
				required:true
			},
			descriptionm:{
				required:true
			},
			inclusionm:{
				required:true
			},
			exclusionm:{
				required:true
			},			
			activem:{
				required:true
			}
		}	

	});
	


	//done
	$("#servicecategoryform").validate({
		rules:{
			catnamem:{
				required:true
			},				
			imageurlm:{
				required:true
			}		
		}	

	});


	//done
	$("#categorygirdsform").validate({
		rules:{
			titlem:{
				required:true
			},				
			categoriesm:{
				required:true
			}		
		}	

	});



	//done
	$("#servicegirdsform").validate({
		rules:{
			titlem:{
				required:true
			},				
			servicesm:{
				required:true
			}		
		}	

	});

	//done
	
	$("#addlocationform").validate({
		rules:{
			location:{
				required:true
			},			
			city:{
				required:true
			},
			state:{
				required:true
			},
			country:{
				required:true
			},			
			active:{
				required:true
			}	
		}
		
	});

	//done

	$("#locationform").validate({
		rules:{
			locationm:{
				required:true
			},			
			citym:{
				required:true
			},
			statem:{
				required:true
			},
			countrym:{
				required:true
			},			
			activem:{
				required:true
			}		
		}		

	});

	//done
	
	$("#changelocationform").validate({
		rules:{
			location:{
				required:true
			},			
			city:{
				required:true
			},
			state:{
				required:true
			},
			country:{
				required:true
			},			
			active:{
				required:true
			}	
		}		

	});

	//done

	$("#userregisterationform").validate({

		rules: {
			name:{
				required:true,
			},
			email:{
				required:true,
				email:true
			},
			phone:{
				required:true,
				number: true,
				minlength:10, 
				maxlength:10
			},
			password:{
				required:true,
			},
			password_confirmation:{
				required:true,
				equalTo:'#password'
			}			
		},
		messages:{
			phone:{
				number:"Please enter valid phone number",
				minlength:"Please enter valid phone number",
				maxlength:"Please enter valid phone number"								
			}
		}		

	});


	//done

	$("#usercheckoutform").validate({

		rules: {
			name:{
				required:true,
			},
			email:{
				required:true,
				email:true
			},
			phone:{
				required:true,
				number: true,
				minlength:10, 
				maxlength:10
			},
			password:{
				required:true,
			},
			password_confirmation:{
				required:true,
				equalTo:'#password'
			}			
		},
		messages:{
			phone:{
				number:"Please enter valid phone number",
				minlength:"Please enter valid phone number",
				maxlength:"Please enter valid phone number"								
			}
		}		

	});

	

	//done

	$("#passwordresetform").validate({
		rules:{
			email:{
				required:true,
				email:true
			}
		}
		
	});


	//done

	$("#changepasswordform").validate({
		rules:{
			curpassword:{
				required:true
			},
			lnpassword:'required',
			lcpassword:{
				required:true,
				equalTo:'#lnpassword'
			}						
		}
		
	});


	//done 
	$("#userloginform").validate({
		rules:{
			email:{
				required:true,
				email:true
			},
			password:'required'							
		}
		
	}); 


	//contact form	
	$("#contactform").validate({

		rules: {
			name:{
				required:true,
			},
			email:{
				required:true,
				email:true
			},
			phone:{
				required:true,
				number: true,
				minlength:10, 
				maxlength:10
			},
			location:{
				required:true,
			},
			message:{
				required:true,
			}
				
		},
		messages:{
			phone:{
				number:"Please enter valid phone number",
				minlength:"Please enter valid phone number",
				maxlength:"Please enter valid phone number"							
			}
		}		

	});


	//done

	$("#usersform").validate({

		rules: {
			namem:{
				required:true,
			},
			emailm:{
				required:true,
				email:true
			},
			phonem:{
				required:true,
				number: true
			},
			activem:'required'
		}		

	});
	

});