
	<script src="javascript/requests.js"></script>
<section id="requests_section" class="dashboard_content" style="display: none;">
	<h3>Requests </h3>

	  <button class="btn btn-light table-select" onclick="changeTable(event, 'account_request_table')">Account Requests</button>

		<button class="btn btn-primary table-select" onclick="changeTable(event, 'password_table')">Password Reset Requests</button>


<?php require_once ("password_table.php") ?>
<?php require_once ("account_request_table.php") ?>
</section>