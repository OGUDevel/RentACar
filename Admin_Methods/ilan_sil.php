<?php
function ilan_sil(){
    static $ilan_id = $_GET['id'];
    $ilan_sil = mysql_query ("DELETE FROM cars WHERE id='$ilan_id'");
    $ilan_resim_sil = mysql_query ("DELETE FROM pictures WHERE owner_id='$ilan_id'");
	if ($ilan_sil || $ilan_resim_sil){
	echo "<b><font face='verdana' size='2' color='green'>Ilan basariyla silindi.</font></b>";
	}
	else {
	echo "<b><font face='verdana' size='2' color='red'>Ilan silinemedi</font></b>";
	}
}
?>