<?php
session_start();
if (!isset($_POST["buton2"])) {

	header('Location: form1.php');
	exit;
}
$eposta = $_POST["eposta"];
$sifre = $_POST["sifre"];

include "inc/vtbaglan.inc.php";

$eposta = $vt->real_escape_string($eposta);

$sql = "SELECT * FROM uyeler WHERE eposta like '$eposta'";
$sonuc = $vt->query($sql);

if ($vt->error) {
	echo $vt->error;
	echo "<br /> SQL: $sql;";
	exit;
}
include "inc/vtkes.inc.php";
if ($sonuc->num_rows) {
	$satir = $sonuc->fetch_assoc();
	if (password_verify($sifre, $satir["sifre"])) {
	$_SESSION["ad"] = $satir ["ad"];
	$_SESSION["eposta"] = $satir ["eposta"];
	
	header('Location: iletisim.php');
	exit;
	} else {
		header('Location: form1.php?hata=1');
		exit ;
	}
}
else {
	header('Location: form1.php?hata=1');
		exit ;
	}



?>
