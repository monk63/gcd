<?php

require_once ('db_class.php');
	class Transactions extends Connection{


		//returns a list of all the users in the database;
		function get_all_transactions(){
			return $this->fetch("SELECT * FROM transactions");
		}




	}
?>