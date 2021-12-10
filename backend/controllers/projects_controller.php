<?php
	require_once dirname( __FILE__ ) . '/' . '../projects_class.php';


	function get_all_projects(){
		$project = new Projects();

		return $project->get_all_projects();
	}

	function get_all_projects_with_contractors(){
		$project = new Projects();
		return $project->get_all_projects_with_contractors();
	}

	function get_all_projects_with_contractors_status(){
		$project = new Projects();
		return $project->get_all_projects_with_contractors_status();
	}
	function get_all_projects_with_contractors_status_by_params($region){
		$project = new Projects();
		return $project->get_all_projects_with_contractors_status_by_params($region);
	}

?>