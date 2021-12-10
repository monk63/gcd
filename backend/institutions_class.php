<?php

require_once ('db_class.php');
	class Institutions extends Connection{


		//returns a list of all the institutions in the database;
		function get_all_institutions(){
			return $this->fetch("SELECT * FROM institutions;");
		}

		//returns a list of all the government institutions in the database;
		function get_government_institutions(){
			return $this->fetch("SELECT * FROM institutions WHERE is_government = 'true';");
		}


		function add_institution($name, $is_government, $account_number){
			return $this->query("INSERT INTO institutions (name, is_government, $account_number) VALUES ('$name', '$is_government', $account_number);");
		}




	}
?>