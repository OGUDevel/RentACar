<?php
function get_all_advert(){
	static $ilan_id = $_GET['id'];
	$query = "SELECT * FROM dbName"
	$get_all = mysql_query($query);
	if($get_all != NULL){
		$idfromtable = mysql_fetch_array($get_all, MYSQL_BOTH);
		print_r($idfromtable, true);
	}
	else{
		echo "Fail";
	}
}
?>