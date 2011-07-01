<?php

/**
 * setPublishedAdvert Class
 */ 
class setPublishedAdvert{
	private
	function set_tag(){
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
    function get_tag(){
    static $pbl_tag = $_GET['tag'];
	$query = "SELECT * FROM dbName WHERE tag='pbl'"
    $select_pbl = mysql_query($query);
	if($select_pbl != NULL){
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
	$setpubl.set_tag();
}
function execute_get_published(){
	$getpubl = new PublishedAdvert;
	$getpubl.get_tag();
}
?>
