 $(document).ready(function(){
 	$('.carousel.carousel-slider').carousel({fullWidth: true});

 	$("#5").click(function() {
 		$("#largura").val(768);
 		$("#altura").val(960);
 		$("iframe").width(768);
 		$("iframe").height(960);
 		$('iframe').attr('src', $('iframe').attr('src'));
 	});

 	$("#6").click(function() {
 		$("#largura").val(960);
 		$("#altura").val(768);
 		$("iframe").width(960);
 		$("iframe").height(768);
 		$('iframe').attr('src', $('iframe').attr('src'));
 	});

 	$("#7").click(function() {
 		$("#largura").val(480);
 		$("#altura").val(800);
 		$("iframe").width(480);
 		$("iframe").height(800);
 		$('iframe').attr('src', $('iframe').attr('src'));
 	});

 	$("#8").click(function() {
 		$("#largura").val(800);
 		$("#altura").val(480);
 		$("iframe").width(800);
 		$("iframe").height(480);
 		$('iframe').attr('src', $('iframe').attr('src'));
 	});

 	$("#9").click(function() {
 		$("#largura").val(320);
 		$("#altura").val(480);
 		$("iframe").width(320);
 		$("iframe").height(480);
 		$('iframe').attr('src', $('iframe').attr('src'));
 	});

 	$("#10").click(function() {
 		$("#largura").val(480);
 		$("#altura").val(320);
 		$("iframe").width(480);
 		$("iframe").height(320);
 		$('iframe').attr('src', $('iframe').attr('src'));
 	});

 	$("#11").click(function() {
 		$("#largura").val(1366);
 		$("#altura").val(768);
 		$("iframe").width(1366);
 		$("iframe").height(768);
 		$('iframe').attr('src', $('iframe').attr('src'));
 	});

 	$("#12").click(function() {
 		$("#largura").val(1920);
 		$("#altura").val(1080);
 		$("iframe").width(1920);
 		$("iframe").height(1080);
 		$('iframe').attr('src', $('iframe').attr('src'));
 	});




 	// Inicia o jQuery
 	$(function(){

	// Cria uma variável que vamos utilizar para verificar se o
	// formulário está sendo enviado
	var enviando_formulario = false;
	
	// Captura o evento de submit do formulário
	$('.fsite').submit(function(){
		
		if ( ! enviando_formulario  ) {
			function envia(){
				var dat = $("#site").val();
				$(location).attr('href', './q?site='+ dat +'');
			}
			$(".sld-left").addClass("opened");
			function sample() {
				$(".prog").fadeIn();
			}
			function fo() {
				$("html").fadeOut("1000");
			}
			setTimeout(sample, 500);
			setTimeout(fo, 2500);
			setTimeout(envia, 3000);
		}
		
		// Anula o envio convencional
		return false;
		
	});
});




 });