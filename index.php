<?php
$tituloPagina = 'Home';
$bodyID = 'home';
include 'partes/head.php';
?>
<!--
<ul id="menu">
	<li data-menuanchor="firstPage" class="active"><a href="#firstPage">First slide</a></li>
	<li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
	<li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
</ul>
-->

<div id="fullpage">


	<div class="section section-1" id="home" data-section-name="home">
		
		<div class="content">
			<div class="title">
				<h1>
					Oi, eu sou seu assistente amoroso pessoal..
					Minha missão é te ajudar a encontrar
					a noite — ou dia! — de amor perfeita!
				</h1>
			</div>
			<div class="subtitle">
				Você não encontrou ainda um motel ideal pra você?
			</div>
			<div class="button-white btn-section1">
				Encontre seu motel! ;)
			</div>
		</div>
		
	</div>

	<div class="section section-2" id="crie-seu-perfil" data-section-name="crie-seu-perfil">
		<div class="content">
			<div class="title">
				Crie seu perfil
			</div>
			<div class="text">
				Antes de mais nada, converse com o 99motéis e crie seu perfil. Precisamos saber um pouco mais sobre você para definir seu perfil e indicar as melhores suítes/motéis!
			</div>
		</div>
	</div>

	<div class="section section-3" id="suites-para-voce" data-section-name="suites-para-voce">
		<div class="content">
			<div class="title">
				Suítes para você
			</div>
			<div class="text">
				Filtre suítes com tudo que deseja, e encontre as melhores próximas a você, defina o tamanho da sua diversão, seja por um período de felicidade ou uma pernoite inteira de amor!
			</div>
		</div>
	</div>

	<div class="section section-4" id="ame-mais" data-section-name="ame-mais">
		<div class="content">
			<div class="title">
				Ame mais! <3
			</div>
			<div class="text">
				Visualize todos os detalhes, e informações da suíte escolhida especialmente para você, entre em contato, trace rota e curta sua noite — ou dia! — de amor perfeita! <3
			</div>
		</div>
	</div>

	<div class="section section-5" id="download" data-section-name="download">
		<div class="content">
			<div class="title">
				Eae? Deu match? :P
			</div>
			<div class="text">
				 O amor está no ar…e pra falar comigo basta ter acesso a internet. Baixe o app Android, IOS, ou acesse o webapp  o/
			</div>
			<div class="download">
				<div class="acesse">Acesse o webapp ;)</div>
				<div class="googleplay"></div>
				<div class="appstore"></div>
			</div>
		</div>
	</div>

	<div class="section section-6" id="contato" data-section-name="contato">
		<div class="content">

			<form class="form">
				<label for="nome" class="labelnome">Quem ama conversa! Queremos saber o que podemos fazer para te deixar feliz! ;)</label>
				<input type="text" class="nome" id="nome" placeholder="Digite seu nome...." autocomplete="off">

				<label for="email" class="labelemail"><span id="nomeuser"></span></label>
				<input type="text" class="email" id="email" placeholder="Digite seu email..." autocomplete="off">

				<label for="mensagem" class="labelmensagem"><span id="msguser"></label>
					<textarea type="text" class="mensagem" id="mensagem" placeholder="Digite sua mensagem..." autocomplete="off"></textarea>

					<div class="submit">
						<button type="submit" class="submit-btn"></button>
					</div>
				</div>
			</div>


		</div>

		<script>
			$(document).ready(function(){

				var nome = $("#nome");
				var email = $("#email");
				var mensagem = $("#mensagem");

				$("#nomeuser").text("...")
				$("#msguser").text("...")

				nome.on("input", function(e) {
					$(".labelemail").fadeIn();
					$(".email").fadeIn();
					$("#nomeuser").text( "Ok, " + $(e.target).val() + "..")
					if (nome.val()=="") {
						$("#nomeuser").text("...")

					};
				});

				email.on("input", function(e) {
					$("#msguser").text( "Como posso te ajudar?")
					if (email.val()=="") {
						$("#msguser").text("...")
					};
				});

				mensagem.on("input", function(e) {
					$('.submit-btn').css('opacity', '1');
					
					if (mensagem.val()=="") {
						$('.submit-btn').css('opacity', '0');
					};
				});

			});
		</script>

		<?php 
		include 'partes/footer.php';
		?>

		<?php
		include 'partes/endFooter.php';
		?> 