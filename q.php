<?php
$tituloPagina = 'Home';
$bodyID = 'home';
include 'partes/head.php';
require_once "php/class/user.class.php";

$tests = new tests();


$url=$_GET["site"];

if (isset($_GET["w"]) && (isset($_GET["h"]))) {
	$largura = $_GET["w"];
	$altura = $_GET["h"];
}
else{
	$largura = "600";
	$altura = "700";
}

if (strpos($url, 'http://') !== false) {
$url=$_GET["site"];
}elseif (strpos($url, 'https://') !== false) {
$url=$_GET["site"];
}

else{
	$url="http://". $url."/";

}
$data = date('Y-m-d');
$tests -> setSite($url);
$tests -> setData($data);
$tests -> setIp($_SERVER['REMOTE_ADDR']);
$tests -> inserir();

?>

<div class="sld-full white-text">
	<div class="nav">
		<form action="./q.php" method="get" class="row">
			<div class="col s12 m6">
				<input placeholder="ex: google.com.br" id="site" name="site" type="text" autocomplete="off"  value="<?php echo $url ?>">
			</div>
			<div class="col s12 m2">
				<input placeholder="largura" id="largura" name="w" type="number" autocomplete="off" value="<?php echo $largura ?>">
			</div>
			<div class="col s12 m2">
				<input placeholder="altura" id="altura" name="h" type="number" autocomplete="off" value="<?php echo $altura ?>">
			</div>
			<div class="col s12 m2">
				<input type="submit" class="ff  btn white black-text left" id="submit" value="go">
			</div>
			
		</form>
		<div class="values">
			<div id="5">768x960</div>
			<div id="6">960x768</div>
			<div id="7">480x800</div>
			<div id="8">800x480</div>
			<div id="9">320x480</div>
			<div id="10">480x320</div>
			<div id="11">1366x768</div>
			<div id="12">1920x1080</div>
		</div>
		
		
	</div>

	<div class="content">
		<div id="resizable">
		<iframe id="iframe" src="<?php echo $url ?>" width="<?php echo $largura ?>" height="<?php echo $altura ?>" frameborder="0"></iframe>
		</div>
	</div>

</div>


<?php 
include 'partes/footer.php';
?>

<?php
include 'partes/endFooter.php';
?> 