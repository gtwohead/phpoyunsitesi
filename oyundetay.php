<?php
session_start();

include "inc/vtbaglan.inc.php";
$kod = $_REQUEST["kod"];
$kod = $vt->real_escape_string($kod);

if(isset($_POST["yorumButon"])){
	$yorum = $vt->real_escape_string($_POST["yorum"]);
	$yapan = $_SESSION["eposta"];
	$sql = "INSERT INTO `yorum` (`yapan`, `yapilan`, `metin`, `zaman`) VALUES ('$yapan', '$kod', '$yorum', current_timestamp())";
if ($vt->query($sql) !== TRUE) {
	echo ("<script LANGUAGE='JavaScript'>window.alert('Yorum Eklenemedi');</script>");
	}
}
if(!isset($_REQUEST["kod"])) {
	echo ("<script LANGUAGE='JavaScript'> 
	window.alert('Lütfen Oyun Seçiniz');
	window.location.href='oyunliste.php';
	</script>");
}

$sql = "SELECT * FROM oyunekle where kod = $kod";
$sonuc = $vt->query($sql);

if ($vt->error) {
	echo $vt->error;
	echo "<br/> SQL: $sql;";
	exit;
}
$satir = $sonuc->fetch_assoc();
	echo "<main class='container'>";
	echo "<br />";
	echo "<h5 class='card-header'>";
	echo htmlspecialchars($satir["oyunadi"]);
	echo "</h5>";
	echo "<div class='card-body'>";
	echo "<p class='card-text'>";
	echo htmlspecialchars($satir["ozet"]);
	echo "</p>";
	echo "</div>";
	echo "<br />";
	echo "<embed src='";
	echo htmlspecialchars($satir["yol"]);
	echo "'width='100%' height='600'>";


if(isset($_SESSION["eposta"])){
?>
<form action="" method="POST">
<div class="form-group">
<label for="yorum">Yorum</label>
<textarea class="form-control" id="ozet" name="yorum" rows="3"></textarea>
<input type="hidden" name="kod" value="<?php echo $kod; ?>">
</div>
<input type="submit" class="btn btn-secondary btn-block" name="yorumButon" value="Yorumla">
</form>
<?php 
}
?>
<br />
<table class="table table-hover">
<thead>
<tr>
	<th scope="col">Zaman</th>
	<th scope="col">Yorum Yapan</th>
	<th scope="col">Yorum</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM yorum  WHERE yapilan = '$kod'";
$sonuc = $vt->query($sql);

if ($vt->error) {
	echo $vt->error;
	echo "<br/> SQL: $sql;";
	exit;
}
while ($satir = $sonuc->fetch_assoc()) {
	echo"<tr>";
	echo"<td>";
	echo $satir["zaman"];
	echo"</td>";
	echo"<td>";
	echo htmlspecialchars($satir["yapan"]);
	echo"</td>";
	echo"<td>";
	echo htmlspecialchars($satir["metin"]);
	echo"</td>";
	echo"</tr>";
}
	
include "inc/vtkes.inc.php";
?>
</tbody>
</table>
</main>
	
