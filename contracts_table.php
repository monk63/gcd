<!-- table button and form  -->

<?php

	require_once("backend/php_functions/functions.php");
	require_once("backend/php_functions/contracts_functions.php");
	// Getting all projects and displaying them

	if ($_GET) {
		$contracts = getFunctions($_GET);
	} else {

		$contracts = get_all_projects_with_contractors_status();
	}
?>
<section id="table_actions_section">
	<div id="form_div">
		<form action="" method="get">
			<div class="row justify-content-center pb-4">

				<div class="row g-3">

					<!-- left side  -->
					<div class="col">
						<label>Project Name</label>
						<input type="text" class="form-control" name="project_name" aria-label="Contractor">

						<label>Contractor</label>
						<input type="text" class="form-control" name="contractor_name" aria-label="Contractor">

						<div class="row">

							<!-- expenditure  -->
							<div class="col">
								<label>Expenditure (GHC)</label>
								<div class="row">
									<div class="col-4">
										<input type="number" name="expen_from" class="form-control" placeholder="From" aria-label="Expenditure">
									</div>
									<div class="col-4">
										<input type="number" name="expen_to" class="form-control" placeholder="To" aria-label="Expenditure">
									</div>
								</div>
							</div>


							<!-- budget  -->
							<div class="col">
								<label>Budget (GHC)</label>
								<div class="row">
									<div class="col-4">
										<input type="number" name="budget_from" class="form-control" placeholder="From" aria-label="Budget">
									</div>
									<div class="col-4">
										<input type="number" name="budget_to" class="form-control" placeholder="To" aria-label="Budget">
									</div>
								</div>
							</div>
						</div>
					</div>


					<!-- right side  -->
					<div class="col">
						<label>Index</label>
						<input type="text" class="form-control" placeholder="GHA000" disabled>


						<div class="row">
							<!-- ministry drop down  -->
							<div class="col">
								<label>Ministry</label><br>
								<select class="form-select" aria-label="Ministry" name="ministry " disabled>
									<option selected>All</option>

									<?php
									require_once "constants.php";
									foreach (MINISTRY_LIST as  $ministry) {
										echo "<option value=\"$ministry\">$ministry</option>";
									} ?>

								</select><br>
							</div>
							<!-- ministry drop down  -->
							<div class="col">
								<label>Region</label><br>
								<select class="form-select" aria-label="region" name="region">
									<option selected>All</option>

									<?php
									foreach (REGION_LIST as  $region) {
										echo "<option value=\"$region\">$region</option>";
									} ?>

								</select><br>
							</div>
						</div>



						<div class="row">
							<div class="col">
								<label>Start Year</label>
								<input type="date" name="start_year" class="form-control" aria-label="Start year">
							</div>
							<div class="col">
								<label>End Year</label>
								<input type="date" name="end_year"  class="form-control" aria-label="year">
							</div>
						</div>

					</div>

					<div class="d-grid gap-2 d-md-flex justify-content-md-end">
						<button class="btn btn-warning me-md-2" type="reset">Clear All</button>
						<button class="btn btn-primary" type="submit">Search </button>
					</div>
				</div>


			</div>
		</form>
	</div>




	<div class="d-grid gap-2 d-md-flex justify-content-md-end pb-2">
		<button class="btn btn-success me-md-2" type="button" onclick="download('ghana_contracts.csv')";> Download CSV</button>
	</div>
	<script type="text/javascript" src="backend/js_functions/contracts_table.js">

</script>

</section>







<!-- table  -->
<section id="table_section">

	<table class="table table-hover table-bordered fixed-head">
		<thead>
			<tr>
				<th scope="col">INDEX</th>
				<th scope="col">PROJECT NAME</th>
				<th scope="col">DESCRIPTION</th>
				<th scope="col">CONSTRUCTOR NAME</th>
				<th scope="col">REGION </th>
				<th scope="col">START DATE</th>
				<th scope="col">EXPECTED COMPLETION DATE</th>
				<th scope="col">COMPLETION DATE</th>
				<th scope="col">BUDGET</th>
				<th scope="col">STATUS</th>
			</tr>
		<tbody>
			</thead>
			<?php

			foreach ($contracts as $index => $contract) {

			?>
				<tr>
					<th scope="row"><?php echo $contract["project_id"] ?></th>
					<td><?php echo $contract["project_name"] ?></td>
					<td><?php echo $contract["project_description"] ?></td>
					<td><?php echo $contract["contractor_name"] ?></td>
					<td><?php echo $contract["project_region"] ?></td>
					<td><?php echo formatDate($contract["project_startdate"]) ?></td>
					<td><?php echo formatDate($contract["project_expected_endate"]) ?></td>
					<td><?php echo formatDate($contract["project_enddate"]) ?></td>
					<td><?php echo "GHC " . formatNumber($contract["project_budget"]) ?></td>
					<td><?php echo $contract["status"] ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<caption><?php
				if (sizeof($contracts) == 0) {
					echo "No contracts match your query";
				}
				?></caption>

</section>