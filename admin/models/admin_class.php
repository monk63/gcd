<?php

require_once dirname( __FILE__ ) . '/' . '../../backend/db_class.php';


class Admin extends Connection{
	function get_all_users(){
		return $this->fetch("SELECT * FROM users;");
	}

	function get_all_contracts(){
		return $this->fetch("SELECT
		*
		FROM project_contractor
		JOIN projects
		  ON projects.project_id = project_contractor.project_id
		JOIN contractors
		  ON contractors.contractor_id = project_contractor.contractor_id
		 JOIN project_status
		 ON project_status.project_id = projects.project_id;");
	}

	function get_account_requests(){
		return $this->fetch("SELECT * FROM  account_requests");
	}

	function get_password_requests(){
		return $this->fetch("SELECT * FROM  password_requests");
	}

	function get_transactions(){
		return $this->fetch("SELECT * FROM  transactions");
	}

	// function get_account_owner($number){
	// 	return $this->fetchOne("SELECT ");
	// }



	function create_user($first_name, $last_name, $password, $email, $city, $office_address, $zip, $creation_date, $status){
		return $this->query("INSERT INTO users (first_name, last_name, password, email, city, office_address, zip, creation_date, status) "
		."VALUE ('$first_name', '$last_name', '$password', '$email', '$city', '$office_address', '$zip', '$creation_date', '$status');");
	}

	function update_user($id, $first_name, $last_name, $email, $city, $office_address, $zip){
		return $this->query("UPDATE users SET first_name = '$first_name', last_name = '$last_name', email = '$email', city = '$city',
		 office_address = '$office_address', zip = '$zip' WHERE user_id = $id; ");
	}

	function change_password($id, $newPassword){
		return $this->query("UPDATE users SET password= '$newPassword' WHERE user_id = $id;");
	}

	function password_request_update($id, $status){
		return $this->query("UPDATE password_requests SET status= '$status' WHERE request_id = $id;");
	}

	function delete_user($user_id){
		return $this->query("UPDATE users SET status='deleted' where user_id = $user_id;");
	}



	function restore_user($user_id){
		return $this->query("UPDATE users SET status='active' where user_id = $user_id;");
	}


	function search_user_by_email($email){
		return $this->fetchOne("SELECT * FROM users WHERE email = '$email'");
	}
	function get_account_request_by_id($id){
		return $this->fetch("SELECT * FROM  account_requests WHERE request_id = $id;");
	}
	function account_request($id, $status){
	return $this->query("UPDATE account_requests SET status = '$status' WHERE $id = $id");
	}

	function addTransaction($amount,$date, $sender,$recipient){
		return $this->query("INSERT INTO transactions (amount, sender_account, recipient_account, transaction_date) VALUES"
		."($amount, '$sender', '$recipient', '$date');");
	}




	function get_gov_accounts(){
		return $this->fetch("SELECT *
        FROM bank_accounts
        join institutions on bank_accounts.account_number = institutions.account_number;");
	}


	function get_cont_accounts(){
		return $this->fetch('SELECT *
        FROM bank_accounts
        join contractors on bank_accounts.account_number = contractors.account_number;');
	}

	



}?>