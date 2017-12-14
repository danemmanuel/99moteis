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
<div class="sld-right white-text">
	<div class="overlay">
		<div class="title">
			Teste seu site
			<div class="subtitle">
				em qualquer resolução
			</div>
			<div class="form">
				<form class="fsite" enctype="multipart/form-data">
					<div class="input-field">
						<input placeholder="ex: google.com.br" id="site" name="site" type="text" autocomplete="off">
					</div>
					<input type="submit" class="waves-effect waves-light btn white black-text right" id="submit" value="go">

				</form>
			</div>
		</div>
	</div>
</div>
<div class="sld-left">
	<div class="prog">
	</div>
</div>






<?php 
include 'partes/footer.php';
?>

<?php
include 'partes/endFooter.php';
?> 