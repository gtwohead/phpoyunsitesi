<?php
$hatakodlari[1] = ("<script LANGUAGE='JavaScript'> 
	window.alert('Önce Kayıt Olun');
	window.location.href='form.php';
	</script>");
$hatakodlari[2] = "Lütfen Şifrenizi en az 3 karakter ile Giriniz";
$hatakodlari[3] = "Lütfen Kullanıcı Adı Giriniz";
$hatakodlari[4] = "Lütfen Geçerli Eposta Giriniz";
$hatakodlari[5] = ("<script LANGUAGE='JavaScript'> 
	window.alert('Önce Kayıt Olun');
	window.location.href='form.php';
	</script>");
?>



<! DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php
	if(isset($_GET["hata"])){
		?>
	<div>
	<?php
	if($_GET["hata"] == 1) echo $hatakodlari[1];
	if($_GET["hata"] == 2) echo $hatakodlari[2];
	if($_GET["hata"] == 3) echo $hatakodlari[3];
	if($_GET["hata"] == 4) echo $hatakodlari[4];
	if($_GET["hata"] == 5) echo $hatakodlari[5];

	?>
	</div>
	<?php
	}
	?>

	<form action="kayit.php" method="POST">
	Kullanıcı Adı:<br /> <input type="text" name="ad"><br />
	Mail:<br/> <input type="text" name="eposta"> <br /> 
	Şifre:<br /> <input type="password" name="sifre"> <br />
	<input type="submit" name="buton1" value="Gönder" >

	</form>
</body>
</html>
