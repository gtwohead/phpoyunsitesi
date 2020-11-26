<?php
session_start();

?>

<?php 
include "inc/vtbaglan.inc.php";

if (isset($_GET["araifade"])){
$ara =	$vt->real_escape_string($_GET["araifade"]);
$sql = "SELECT * FROM oyunekle WHERE oyunadi like '%$ara%'";
}
else {

$sql = "SELECT * FROM oyunekle";
}
$sonuc = $vt->query($sql);

if ($vt->error) {
	echo $vt->error;
	echo "<br/> SQL: $sql;";
	exit;
}
while ($satir = $sonuc->fetch_assoc()) {
	echo " 
	<div class='card'>
<h5 class='card-header'>";
echo htmlspecialchars($satir["oyunadi"]);
echo"
</h5>
<div class='card-body'>
<p class='card-text'>";
echo htmlspecialchars($satir["ozet"]);
echo "</p>
<a href='";
echo "oyundetay.php?kod=". $satir["kod"];
echo"' class='btn btn-primary'>OKU</a>
</div>
</div>
<br />";
}
include "inc/vtkes.inc.php";

?>

<?php 
?>