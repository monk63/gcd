<!-- Modal -->
<div class="modal fade" id="addTransactionModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editModalTitle">Add Transaction</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">


				<form class="row g-3" method="POST">

					<div class="col-md-6">
						<label for="sender" class="form-label">Sender Account</label>
						<select class="form-select" aria-label="Ministry" id="sender" name="sender">
									<option selected>All</option>

									<?php
									$accountsg = get_gov_accounts();
									$accountsc = get_cont_accounts();

									foreach ($accountsg as  $account) {
										$number =$account['account_number'];
										$name =$account['institution_name'];
										echo "<option value=\"$number\">$name, $number</option>";
									}

									foreach ($accountsc as  $account) {
										$number =$account['account_number'];
										$name =$account['contractor_name'];
										echo "<option value=\"$number\">$name, $number</option>";
									} ?>

								</select>
					</div>
					<div class="col-md-6">
						<label for="recipient" class="form-label">Recipient Account</label>
						<select class="form-select" aria-label="Ministry" id="recipient" name="recipient">
									<option selected>All</option>

									<?php
									$accountsg = get_gov_accounts();
									$accountsc = get_cont_accounts();

									foreach ($accountsg as  $account) {
										$number =$account['account_number'];
										$name =$account['institution_name'];
										echo "<option value=\"$number\">$name, $number</option>";
									}

									foreach ($accountsc as  $account) {
										$number =$account['account_number'];
										$name =$account['contractor_name'];
										echo "<option value=\"$number\">$name, $number</option>";
									} ?>

								</select>
					</div>
					<div class="col-md-6">
						<label for="amount" class="form-label">Amount</label>
						<input type="number" class="form-control" id="amount" name="amount">
					</div>
					<div class="col-md-6">
						<label for="date" class="form-label">Transaction Date</label>
						<input type="date" class="form-control" id="date" name="date">
					</div>
					<input type="text" class="form-control" id="id" name="id" value="none" hidden>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-success" name="add_transaction"> Add Transaction</button>
					</div>
				</form>
			</div>
		</div>
	</div>