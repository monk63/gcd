<?php

require_once ('db_class.php');
	class Users extends Connection{


		//returns a list of all the users in the database;
		function get_all_users(){
			return $this->fetch("SELECT * FROM users");
		}

		//returns a list of all delted users in the database;
		function get_deleted_users(){
			return $this->fetch("SELECT * FROM users WHERE status='deleted';");
		}

		//returns a list of all active users in the database;
		function get_active_users(){
			return $this->fetch("SELECT * FROM users WHERE status='active';");
		}




		function request_account ($first_name, $last_name, $gov_email, $sup_name, $office_address, $city, $zip, $password){
			return $this->query("INSERT INTO account_requests(
				first_name,last_name, supervisor_name, password , email, city, zip, office_address)"
				."VALUES ('$first_name', '$last_name', '$sup_name', '$password', '$gov_email', '$city', '$zip', '$office_address')");
		}


		function request_password_reset ( $last_name, $gov_email, $sup_name, $office_address, $city, $zip, $password){
			return $this->query("INSERT INTO password_requests(last_name, supervisor_name, password, email, city, zip, office_address)"
				."VALUES ( '$last_name', '$sup_name', '$password', '$gov_email', '$city', '$zip', '$office_address')");
		}

		function reset_password($user_id, $new_password){

		}






	}
?>