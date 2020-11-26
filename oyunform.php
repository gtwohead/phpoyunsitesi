<?php
session_start();
if(!isset($_SESSION["eposta"])) {
	header('Location:form.php?hata=5');
	exit;
}
?>
<main class="container">

<form action="oyunkontrol.php" class="oyunbicim" enctype="multipart/form-data"  method="POST">
<div class="form-group">
<label for ="oyunadi">Oyun Adı:</label>
<input type="text" name="oyunadi" class="form-control" id="oyunadi">
</div>
<div class="form-group">
<label for="ozet">Özet</label>
<textarea class="form-control" id="ozet" name="ozet" rows="4"></textarea>
</div>
<div class="form-group">
<label for="dosya">Dosya Yükle</label>
<input type="file" class="form-control-file" id="dosya" name="dosya">
</div>
<input type="submit" class="btn btn-secondary btn-block" name="butonekle" value="Yükle">
</form>
</main>

