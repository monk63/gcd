<?php


	function formatDate($date_str){
		if (!$date_str)
			return "n/a";
		$date = date_create($date_str);
		return date_format($date,"d-M-Y");
	}


	function formatNumber($val){
		return number_format($val,2,"."," ");
	}


	function formatDateForSQL($date_str){
		$date = date_create($date_str);

		return date_format($date,"Y-m-d");
	}


	function obscure(
		$plain,
	) {
		$str_len = floor(strlen($plain) /3);
		return substr_replace($plain,str_repeat("*",$str_len ),$str_len,ceil($str_len*2)-2);
	}

	function signedIn($session){
		if (! isset($session["user_id"])){
			header("LOCATION: index.php");
		}

	}
?>