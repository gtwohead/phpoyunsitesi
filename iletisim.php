<?php 
session_start();


echo 'HOŞ GELDİNİZ ';
echo $_SESSION['ad'];


?>
 <div class="container">
   <div class="bg-faded p-4 my-4" align="center">
	<input type="submit" onclick="parent.location='gorseller.php'"  value='GÖRSELLER'>
	<input type="submit" onclick="parent.location='oyunform.php'"  value='OYUN FORM'>
	<input type="submit" onclick="parent.location='oyunaraform.php'"  value='OYUN ARA'>
	<input type="submit" onclick="parent.location='oyunliste.php'"  value='OYUN LİSTELERİ'>
	<input type="submit" onclick="parent.location='anasayfa.php'"  value='ÇIKIŞ'>
	
	<div></div>
      <div class="bg-faded p-4 my-4" align="center">
        <div align="center">
        </div> 
		<b>İLETİŞİM BİLGİLERİ</b>
        <hr class="divider">
        <b>Göktuğ İkibaş</b><br>
        MAİL: goktugikibas@gmail.com<br>
        TELEFON: 0 (534) 827 14 50<br><br>
         </div>
		 </div>

    
    

</body>

</html>
