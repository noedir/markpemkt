$(document).ready(function(){
	$(".chama-login").on("click", function(){
		$(".tela-login").slideToggle();
	});

	$(".esqueci").on("click", function(){
		$(".box-login").slideUp(function(){
			$(".box-esqueci").slideDown();
			$(".campos-login").val('');
		});
	});

	$(".logar").on("click", function(){
		$(".box-esqueci").slideUp(function(){
			$(".box-login").slideDown();
			$(".campos-login").val('');
		});
	});
});