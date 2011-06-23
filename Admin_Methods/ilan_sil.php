<php
function ilan_sil(){
	static $ilan_id = $_GET['id'];
	$ilan_sil = mysql_query ("DELETE FROM cars WHERE id='$ilan_id'");
	if ($ilan_sil){
	echo "<font face='verdana' size='2' color='green'>Ilan basariyla silindi.</font>";
	}
	else {
	echo "<font face='verdana' size='2' color='red'>Ilan silinemedi</font>";
	}
}
?>