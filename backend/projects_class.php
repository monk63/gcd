<?php

require_once ('db_class.php');
	class Projects extends Connection{


		//returns a list of all the users in the database;
		function get_all_projects(){
			return $this->fetch("SELECT * FROM projects");
		}
		//returns a list of all the users in the database;
		function get_all_projects_with_contractors(){
			return $this->fetch("SELECT
			*
			FROM project_contractor
			JOIN projects
			  ON projects.project_id = project_contractor.project_id
			JOIN contractors
			  ON contractors.contractor_id = project_contractor.contractor_id;");
		}



		function get_all_projects_with_contractors_status(){
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


		function get_all_projects_with_contractors_status_by_params($params){
			return $this->fetch("SELECT
			*
			FROM project_contractor
			JOIN projects
			  ON projects.project_id = project_contractor.project_id
			JOIN contractors
			  ON contractors.contractor_id = project_contractor.contractor_id
             JOIN project_status
             ON project_status.project_id = projects.project_id
			join institutions
			on institutions.institution_id = projects.institution_id
			WHERE $params;");
		}


		function get_by_region($region){
			return $this->fetch("SELECT 8 FROM projects WHERE project_region = $region");
		}




	}
?>