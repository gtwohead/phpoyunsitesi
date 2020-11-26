<?php 
session_start();
?>

<main class="container">
<form action="oyunliste.php" class="oyunbicim"  method="GET">
<div class="form-group">
<label for="baslik">Aradığınız Oyun Nedir ? </label>
<input type="text" name="araifade" class="form-control" id="baslik">
</div>
<input type="submit" class="btn btn-secondary btn-block" value="ARA">
</form>