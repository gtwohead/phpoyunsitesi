
<?php
if (!isset($_POST["buton1"])) {

	header('Location:form.php?hata=1');
	exit();
}

$ad = $_POST["ad"];
$eposta = $_POST["eposta"];
$sifre = $_POST["sifre"];

$ad = trim($ad);


if (empty($ad)) {
	header('Location:form.php?hata=3');
	exit();
}

if (strlen($sifre) < 3){
	header('Location:form.php?hata=2');
	exit;
}
if (!filter_var($eposta, FILTER_VALIDATE_EMAIL)){
	header('Location:form.php?hata=4');
	exit;
}
$sifreyeni = password_hash($sifre, PASSWORD_DEFAULT);

include "inc/vtbaglan.inc.php";

$ad = $vt->real_escape_string($ad);
$eposta = $vt->real_escape_string($eposta);

$sql = "INSERT INTO uyeler (ad, eposta, sifre, kayitzamani) VALUES ('$ad','$eposta','$sifreyeni', CURRENT_TIMESTAMP)";
if ($vt->query($sql) === TRUE) {
	echo ("<script LANGUAGE='JavaScript'> 
	window.alert('KAYDINIZ BAŞARI İLE YAPILDI');
	window.location.href='anasayfa.php';
	</script>");
	}
	else {
	echo $vt->error;
	echo "<br /> SQL; $sql;";
}
include "inc/vtkes.inc.php";

?>
