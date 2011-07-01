<?php
function ilan_kampanya_degil(){
    static $ilan_id = $_GET['id'];
    $kampanya_kapat = mysql_query ("UPDATE cars SET campaign=FALSE WHERE id='$ilan_id'");
	if ($kampanya_kapat != NULL){
	echo "<b><font face='verdana' size='2' color='green'>Ilan kampanya durumundan cikartildi.</font></b>";
	}
	else {
	echo "<b><font face='verdana' size='2' color='red'>Ilan kampanya durumundan cikartilamadi.</font></b>";
	}
}
?>