<section id="dashboard_section" class="dashboard_content">


	<h2 id="welcome_text">Welcome <username><?php echo $_SESSION['user_name']; ?></username>. Here's a quick summary</h2>
	<div class="card-group" id="contract_summary">


	<div class="card">
    <h5 class="card-title">Summary of Contracts</h5>
    <div class="card-body">
      <?php
        $cStats = get_contract_statistics();
      ?>
			<p>Number of Pending Contracts: <strong><?php echo $cStats['pending_count'] ?></strong></p>
			<p>Number of Ongoing Contracts: <strong><?php echo $cStats['ongoing_count'] ?></strong></p>
			<p>Number of Abandoned Contracts: <strong><?php echo $cStats['abandoned_count'] ?></strong></p>
			<p>Number of Complete Contracts: <strong><?php echo $cStats['complete_count'] ?></strong></p>
    </div>
    <div class="card-footer">
    </div>
  </div>


  <div class="card">
    <h5 class="card-title">Summary of Users Accounts</h5>
    <?php
      $cStats = get_account_stats();
    ?>
    <div class="card-body">
			<p>Number of Users: <strong><?php echo $cStats['user_count'] ?></strong></p>
			<p>Number of Suspended accounts: <strong><?php echo $cStats['deleted_count'] ?></strong></p>
			<p>Number of Active accounts: <strong><?php echo $cStats['active_count'] ?></strong></p>
    </div>
    <div class="card-footer">
    </div>
  </div>


  <div class="card">
    <h5 class="card-title">Summary of Reports</h5>
      <?php
        $cStats = get_report_stats();
      ?>
    <div class="card-body">
			<p>Number of unaddressed Requests: <strong><?php echo $cStats['unaddressed_count'] ?></strong></p>
			<p>Number of unaddressed Password Resets: <strong><?php echo $cStats['unaddressed_password_count'] ?></strong></p>
			<p>Number of unaddressed Account creation request: <strong><?php echo $cStats['unaddressed_account_count'] ?></strong></p>
    </div>
    <div class="card-footer">
    </div>
  </div>



</div>

</section>