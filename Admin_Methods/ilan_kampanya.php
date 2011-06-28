<?php
function ilan_kampanya(){
    static $ilan_id = $_GET['id'];
    $kampanya_yap = mysql_query ("update cars set campaign='0' where id='$ilan_id'");
	if ($kampanya_yap){
	echo "<b><font face='verdana' size='2' color='green'>Ilan kampanya durumuna getirildi.</font></b>";
	}
	else {
	echo "<b><font face='verdana' size='2' color='red'>Ilan kampanya durumuna getirilemedi.</font></b>";
	}
}
?>