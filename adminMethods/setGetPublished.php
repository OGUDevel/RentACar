<?php

/**
 * setPublishedAdvert Class
 */ 
class setPublishedAdvert{
	private
	function setTag(){
    $query = "UPDATE cars SET tag='pbl' WHERE id=<<CheckBox'larin name'leri ilan panelden secildiginde buraya yerlestirilecek id degerleri>>";
    $set_pbl = mysql_query($query);
	if($set_pbl){
		echo "Done";
	}
	else{
		echo "Fail";
    }
	}
}

/**
 * getPublishedAdvert Class
 */
class PublishedAdvert extends setPublishedAdvert{
    function getTag(){
    static $pbl_tag = $_GET['tag'];
	$query = "WHERE tag='pbl' SELECT * FROM dbName"
    $select_pbl = mysql_query($query);
	if($select_pbl){
		$idfromtable = mysql_fetch_array($select_pbl, MYSQL_BOTH);
		print_r($idfromtable, true);
	}
	else{
		echo "Fail";
    }
    }
}

function execute_set_published(){
	$setpubl = new setPublishedAdvert;
	$setpubl.setTag();
}
function execute_get_published(){
	$getpubl = new PublishedAdvert;
	$getpubl.getTag();
}
?>
