var siteUrl = "http://localhost/investirhoteis/";

$(document).ready(function() {

	var material = {
		beforeSend:function(){

			$("html, body").animate({ scrollTop: 0 }, "slow");

			$(".lmask").css({
				display:"block"
			});

			$("html").css('overflow', 'hidden');
		},
		error:function(error){

		},
		success:function(success){
			if (success.code == 200) {
				alert('Material enviado para o seu e-mail com sucesso!');
				window.location.replace(siteUrl);
			}
		},
		complete:function(complete){

		}
	}
	
	$("#frmSendMaterial").ajaxForm(material);

});