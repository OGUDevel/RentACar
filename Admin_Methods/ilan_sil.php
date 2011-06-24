<?php
function ilan_sil(){
        // Abi allaskina nedir bu 'id' nereden gelecek nereye gidecek comment duserseniz iyi olur diye
        // dusunuyorum. Yanlis miyim ? Ve bu arada burda deyimsel hatalar cikiyor gormek istiyorsaniz netbeans kullanıp
        // readme.md dosyasinda yazdigim gibi 5.3 php framework kullanin.
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