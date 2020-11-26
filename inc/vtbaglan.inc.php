<?php 
$vt = new mysqli("localhost", "root", "", "oyunforum");

if ($vt ->connect_errno) {
	printf("Bağlantı kurulmadı : %s\n", $vt->connect_error);
	exit();
}
$vt->set_charset('utf8');
if ($vt->error){
	die("Karakter kodlaması düzgün olarak yapılmadı");
}
?>