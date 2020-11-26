<?php
session_start();

if (!isset($_POST["butonekle"])) {
    header('Location:oyunform.php');
	exit;
}

if($_FILES["dosya"]["error"]){
	header('Location: oyunform.php');
	exit;
}
$ozet = $_POST["ozet"];
$oyunadi = $_POST["oyunadi"];

$oyunadi = trim($oyunadi);
$ozet= trim($ozet);

if (empty($oyunadi)) {
	echo ("<script LANGUAGE='JavaScript'> 
	window.alert('OYUN ADI BOŞ KALAMAZ');
	window.location.href='oyunform.php';
	</script>");
	exit;
}

include "inc/vtbaglan.inc.php";

$oyunadi = $vt->real_escape_string($oyunadi);
$ozet = $vt->real_escape_string($ozet);

$dizin = 'yuklenenler/';
$yuklenecek_dosya = $dizin . time(). basename($_FILES['dosya']['name']);

$yukleyen = $_SESSION['eposta'];

if (!move_uploaded_file($_FILES['dosya']['tmp_name'], $yuklenecek_dosya))
{
	echo ("<script LANGUAGE='JavaScript'> 
	window.alert('DOSYA TAŞINIRKEN HATA OLUŞTU TEKRAR DENEYİN');
	window.location.href='oyunform.php';
	</script>");
	exit;
}
if(empty($oyunadi)) {
$sql = "INSERT INTO oyunekle  VALUES (NULL, '$oyunadi', 'NULL', '$yuklenecek_dosya', current_timestamp, '$yukleyen')";
} else {
	$sql = "INSERT INTO oyunekle  VALUES (NULL, '$oyunadi', '$ozet', '$yuklenecek_dosya', current_timestamp, '$yukleyen')";
}
$vt->query($sql);


if ($vt->error) {
	echo $vt->error;
	echo "<br /> SQL: $sql;";
	exit;
}
include "inc/vtkes.inc.php";

header('Location:oyunliste.php');
	exit;


?>
