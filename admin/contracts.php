
<?php

$contracts = get_all_contracts();

?>
<section id="contracts_section" class="dashboard_content" style="display: none;">
	<h3>Contracts </h3>

	<table class="table table-stripped sortable searchable">
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
		</thead>

		<tbody>
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


</section>