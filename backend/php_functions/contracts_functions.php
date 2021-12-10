<?php
	function getFunctions($GET){
		$query = "";


		// Building custom query based on get parameters
		// region
		if (!empty($GET['region']) && $GET['region'] != "All"){
			$query = $query ." projects.project_region ='". $GET['region'] . "'";
		}

		// contractor name
		if (!empty($GET['contractor_name'])){
			$query = $query ." contractors.contractor_name LIKE '%". $GET['contractor_name'] ."%'";
		}

		// status
		if (!empty($GET['status'])){
			$query = $query ." project_status.status = '". $GET['status'] ."'";
		}


		// budget
		if ( !empty($GET['budget_to']) || !empty($GET['budget_from']) ){
			if (!empty($GET['budget_to']) && !empty($GET['budget_from']) ){
				$query = $query ." projects.project_budget BETWEEN ". $GET['budget_from'] ." AND " .$GET['budget_to'] ;
			} elseif (!empty($GET['budget_from'] )){
				$query = $query ." projects.project_budget >= ". $GET['budget_from'] ;
			} else {
				$query = $query ." projects.project_budget <= " .$GET['budget_to'] ;
			}
		}

		// expenditure
		if ( !empty($GET['expen_to']) || !empty($GET['expen_from']) ){
			if (!empty($GET['expen_to']) && !empty($GET['expen_from']) ){
				$query = $query ." projects.project_expenditure. BETWEEN ". $GET['expen_from'] ." AND " .$GET['expen_to'] ;
			} elseif (!empty($GET['expen_from'] )){
				$query = $query ." projects.project_expenditure. >= ". $GET['expen_from'] ;
			} else {
				$query = $query ." projects.project_expenditure <= " .$GET['expen_to'] ;
			}
		}

		// dates
		if ( !empty($GET['end_year']) || !empty($GET['start_year']) ){
			if (!empty($GET['end_year']) && !empty($GET['start_year']) ){
				$query = $query ."  projects.project_startdate >= '". formatDateForSQL($GET['start_year']) ."' AND projects.project_enddate <= '" .formatDateForSQL($GET['end_year']) ."' ";
			} elseif (!empty($GET['start_year'] )){
				$query = $query ." projects.project_startdate >= '". formatDateForSQL($GET['start_year']) ."' " ;
			} else {
				$query = $query ." projects.project_enddate <= '" .formatDateForSQL($GET['end_year'])  ."' ";
			}
		}
		// echo $query;
		return  get_all_projects_with_contractors_status_by_params($query);
	}

	?>