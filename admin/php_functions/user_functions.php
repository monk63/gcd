<?php

if (isset($_POST["deleteUser"])){
	delete_user($_POST["deleteIdValue"]);
}

if (isset($_POST["restoreUser"])){
	restore_user($_POST["restoreIdValue"]);
}

if (isset($_POST["create_user"])){
	if (!empty($_POST["uid"])){ //edit action was intiated
		if (!empty($_POST["password"])){ //edit action was intiated
			$hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
			change_password($_POST["uid"], $hash);
		}
		update_user($_POST["uid"], $_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["city"], $_POST["address"], $_POST["zip"]);
	} else { //account creation was initiated
		$creation_date = date("Y-m-d");
		$result = sign_up($_POST["first_name"], $_POST["last_name"], $_POST["password"], $_POST["email"],
		$_POST["city"], $_POST["address"], $_POST["zip"], $creation_date, "active");
	}
}

if (isset($_POST["password_reset_approve"])){
	$hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
	password_request_action($_POST["id"],"approved", $hash, $_POST["email"]);
}


if (isset($_POST["password_reset_reject"])){
	password_request_action($_POST["id"],"rejected", "",$_POST["email"]);
}

if (isset($_POST["account_approve"])){
	account_request_action_approve($_POST["id"],$_POST["first_name"], $_POST["last_name"], $_POST["password"], $_POST["email"], $_POST["city"], $_POST["office_address"], $$_POST["zip"]);
	}


if (isset($_POST["account_reject"])){
	account_request_action($_POST["id"],"rejected");

}

if (isset($_POST["add_transaction"])){
	$result = addTransansaction($_POST["amount"],formatDateForSQL($_POST["date"]), $_POST["sender"],$_POST["recipient"]);
	header("LOCATION: $result");
}

?>