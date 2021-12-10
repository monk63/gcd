<?php

require_once ('db_connection.php')
;
class Connection{

	public $db = null;
	public $results = null;


	function connection(){

		$this->db = mysqli_connect(servername, username, password, dbname);

		if(mysqli_connect_errno()){
			return false;
		}

		return true;
	}

	function query($query){

		if($this->connection() == false){
			return false;
		}

		$this->results = mysqli_query($this->db, $query);

		if($this->results !=true){
			return false;
		}

		return true;

	}

	function fetch($query){

		if($this->query($query)) {
			return mysqli_fetch_all($this->results, MYSQLI_ASSOC);
		}
		return false;

	}

	function fetchOne($query){

		if($this->query($query)) {
			return mysqli_fetch_assoc($this->results);
		}
		return false;
	}

	function getlast(){
		// if($this->query($query)) {

		if($this->connection() != false){
			return  mysqli_insert_id($this->db);

		}
		return false;
	}

}

?>
