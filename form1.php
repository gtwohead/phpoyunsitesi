
<! DOCTYPE html>
<html lang="tr">
<head>
<meta charset= "utf-8">
</head>
<body>
<?php
if (isset($_GET["hata"])) {
	?>
	<div class="" role="alert">
	<p style = 'text-align: center '> Eposta veya şfire hatalı </p>
	</div>
	<?php
}
?>
<form action="giris.php" method="POST">
<label for ="">Kullanıcı Eposta</label> <br>
<input type="text" name="eposta"><br>
<label for ="">Şifre</label> <br>
<input type="password" name="sifre"><br>
<input type="submit" onclick="parent.location='form1.php'" name="buton2" value='GİRİŞŞ'>
</form>
</body>
</html>


