<section id="transactions_section" class="dashboard_content" style="display: none;">
	<h3>Transactions </h3>
	<button data-bs-toggle="modal" data-bs-target="#addTransactionModal" class="btn btn-info">Add Transaction </button>

	<table class="table table-stripped sortable searchable">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Sender Name</th>
				<th scope="col">Sender Account</th>
				<th scope="col">Recipient Name</th>
				<th scope="col">Recipient Account</th>
				<th scope="col">Amount</th>
				<th scope="col">Transaction Date</th>
			</tr>
		</thead>

		<tbody>
			<?php
			$transactions = get_transactions();

			foreach ($transactions as $transaction) {
			?>
				<tr>
					<th scope="row"><?php echo $transaction['transaction_id'] ?></th>
					<td><?php
						echo get_account_owner($transaction['sender_account']);
					?></td>
					<td><?php echo obscure($transaction['sender_account']) ?></td>
					<td><?php
						echo get_account_owner($transaction['recipient_account']);
					?></td>
					<td><?php echo obscure($transaction['recipient_account']) ?></td>
					<td><?php echo formatNumber($transaction['amount']) ?></td>
					<td><?php echo formatDate($transaction['transaction_date']) ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

	<?php require_once("transactionModal.php") ?>

</section>