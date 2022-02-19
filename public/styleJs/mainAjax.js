(function($) {
	//document.getElementById('BtnSubmitFormation').innerHTML = "....";
	$("#formulaireFormation").validate({
		rules : {
	    	nom : {
	        	required : true,
	        	minlength : 2,
	        	maxlength: 50
	        },
	        postnom : {
	        	required : true,
	        	minlength : 2,
	        	maxlength: 50
	        },
	        prenom : {
	        	required : true,
	        	minlength : 2,
	        	maxlength: 50
	        },
	        nomEcole: {
	        	required : true,
	        	minlength : 2,
	        	maxlength: 50
	        },
	        telephone: {
	        	required : true,
	        	minlength : 2,
	        	maxlength: 50
	        },
	        email : {
	        	minlength : 2,
	        	maxlength : 50,
	        	email : true 
	        },
	        commune: {
	        	required : true,
	        	minlength : 2,
	        	maxlength: 50
	        },
	        district: {
	        	minlength : 2,
	        	maxlength: 50
	        },
	        ville : {
	          required : true,
	          minlength : 2,
	          maxlength : 50
	        },
	        province : {
	          required : true,
	          minlength: 2,
	          maxlength: 50
	        }
	    },       
	    messages : {
	    	nom : {
	        	required : 'Le Nom est obligatoire',
	        	minlength : 'Le Nom doit avoir au minimun 2 caractère',
	        	maxlength : 'Le Nom doit avoir au maximun 50 caractère',
	        },
	        postnom : {
	        	required : 'Le Postnom est obligatoire',
	        	maxlength : 'Le Postnom doit avoir au maximun 50 caractère',
	        	minlength : 'Le Postnom doit avoir au minimun 2 caractère'
	        },
	        prenom : {
	        	required : 'Le Prenom est obligatoire',
	        	maxlength : 'Le Prenom doit avoir au maximun 50 caractère',
	        	minlength : 'Le Prenom doit avoir au minimun 2 caractère'
	        },
	        nomEcole : {
	        	required : "Le Nom de l'ecole est obligatoire",
	        	maxlength : "Le Nom de l'ecole doit avoir au maximun 50 caractère",
	        	minlength : "Le Nom de l'ecole doit avoir au minimun 2 caractère"
	        },
	        telephone : {
	        	required : "Le telephone est obligatoire",
	        	maxlength : "Le telephone doit avoir au maximun 15 caractère",
	        	minlength : "Le telephone doit avoir au minimun 9 caractère"
	        },
	        email : {
	        	minlength : 'Le Mail doit avoir au minimun 2 caractère',
        		maxlength : 'Le Mail doit avoir au maximun 50 caractère',
        		email : 'entrer un Mail valide'
        	},
        	commune : {
	        	required : "La commune est obligatoire",
	        	maxlength : "La commune doit avoir au maximun 50 caractère",
	        	minlength : "La commune doit avoir au minimun 2 caractère"
	        },
	        district : {
	        	maxlength : "Le district doit avoir au maximun 50 caractère",
	        	minlength : "Le district doit avoir au minimun 2 caractère"
	        },
	        ville : {
	        	required : "La Ville est obligatoire",
	        	maxlength : "La Ville doit avoir au maximun 50 caractère",
	        	minlength : "La Ville doit avoir au minimun 2 caractère"
	        },
	        province : {
	        	required : "La Province est obligatoire",
	        	maxlength : "La Province doit avoir au maximun 50 caractère",
	        	minlength : "La Province doit avoir au minimun 2 caractère"
	        }
	    },
	    submitHandler: function(form){
		  // Pour le formulaire de la formation
		    //e.preventDefault();
		    let nom = $('#nom').val();
		    let postnom = $('#postnom').val();
		    let prenom = $('#prenom').val();
		    let nomEcole = $('#nomEcole').val();
		    let telephone = $('#telephone').val();
		    let email = $('#email').val();
			let commune = $('#commune').val();
			let district = $('#district').val();
		    let ville = $('#ville').val();
		    let province = $('#province').val();
		    let _token = $('input[type="hidden"]').attr('value'); 
		    //let myUrl = $(this).attr('action');
		    //let myMethode = $(this).attr('method');
		    let myUrl = $("#formulaireFormation").attr('action');
		    let myMethode = $("#formulaireFormation").attr('method');

		    //var myButton = document.getElementById('BtnSubmitFormation').innerHTML = "....";
		    $('#BtnSubmitFormation').attr({disabled:true});
		    $('#BtnSubmitFormation').css('backgroundColor','black');
		    $('#BtnSubmitFormation').html("En cour d\'envoi...");
		    $.ajax({
		    	url:myUrl,
		    	method:myMethode,
		    	data:{
		    		_token,
		    		nom,
		    		postnom,
		    		prenom,
		    		nomEcole,
		    		telephone,
			        email,
			        commune,
			        district,
			        ville,
			        province,
		    	},
		    	dataType:'json',
		      //processData:false,
		      //contentType:false,
				beforeSend:function(){
			    //$(document).find('s')
			    //console.log('vidange du span');
			    	$(document).find('span.error-text').text('');
			    },
		    	success:function(data){
			        if(data.status == 0){
			          console.log(data.error);
			          
			          $.each(data.error, function(prefix, val){
			            console.log("var prefix "+prefix+" ::valeur "+val);
			            $('span.'+prefix+'_error').text(val[0]);
			          });
			          $('#BtnSubmitFormation').html('Enregistrer');
			          $('#BtnSubmitFormation').attr('disabled',false);
			          $('#BtnSubmitFormation').css('backgroundColor','');
			        }else{
			        	if (data.status == 1) {
			        		//$('#BtnSubmitFormation')[0].reset();
			        		//document.getElementById('BtnSubmitFormation').reset();
			        		$('input[type=text]').val('');
					        console.log(data.messageSucces);
					        alert("l'enregistrement effectuer avec success");
					        $('#BtnSubmitFormation').html('Enregistrement effectué');
					        $('#BtnSubmitFormation').attr('disabled',false);
					    	$('#BtnSubmitFormation').css('backgroundColor','');
					    }else{
					    	alert("Probleme lié au formulaire ou autre");
					    }
		
			        }
		    	},
		    	error:function(error){
		        console.log(error.responseText);
		        alert('Error sur le serveur');
		    }
		    }); //fin ajax contact           
		} //end fin submitHandler
	});//fin validate contact
})(window.jQuery);