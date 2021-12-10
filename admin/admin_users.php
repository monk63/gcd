<section id="users_section" class="col-9 dashboard_content" style="display: none;">

<?php

require_once(dirname(__FILE__) ."/controllers/admin_controller.php");
require_once(dirname(__FILE__) ."../../backend/php_functions/functions.php");
require_once(dirname(__FILE__) ."/php_functions/user_functions.php");

$users = get_all_users();

?>
		<h3>Users</h3>
		<button data-bs-toggle="modal" data-bs-target="#editUserModal" class="btn btn-info">Add User </button>
	<table class="table table-stripped sortable searchable">
		<script src="javascript/users.js"></script>
		<thead>
			<tr>
				<th scope="col">Index</th>
				<th scope="col">First Name</th>
				<th scope="col">Last Name</th>
				<th scope="col">Email</th>
				<th scope="col">City</th>
				<th scope="col">Office Address</th>
				<th scope="col">Zip</th>
				<th scope="col">Creation Date</th>
				<th scope="col">Status</th>
				<th scope="col">Reset Password</th>
				<th scope="col">Delete user</th>
			</tr>
		</thead>

		<tbody>
		<?php

foreach ($users as $index => $user) {

?>
			<tr>
				<th scope="row"><?php echo $user["user_id"] ?></th>
				<td><?php echo $user["first_name"] ?></td>
				<td><?php echo $user["last_name"] ?></td>
				<td><?php echo $user["email"] ?></td>
				<td><?php echo $user["city"] ?></td>
				<td><?php echo $user["office_address"] ?></td>
				<td><?php echo $user["zip"] ?></td>
				<td><?php echo formatDate($user["creation_date"]) ?></td>
				<td><?php echo $user["status"] ?></td>
				<td><button
				onclick="edit_user_action(
					'<?php echo $user['user_id'];?>',
					'<?php echo $user['first_name'];?>',
					'<?php echo $user['last_name'];?>',
					'<?php echo $user['email'];?>',
					'<?php echo $user['supervisor_name'];?>',
					'<?php echo $user['office_address'];?>',
					'<?php echo $user['city'];?>',
					'<?php echo $user['zip'];?>',
				)"data-bs-toggle="modal" data-bs-target="#editUserModal" class="btn btn-info">Edit </button></td>


				<td>
					<?php if ($user["status"] == "active"){ ?>
					<button
						onclick="delete_user_action('<?php echo $user['email'];?>' ,'<?php echo $user['user_id'];?>')"
					data-bs-toggle="modal" data-bs-target="#deleteUserModal" class="btn btn-danger" >Delete </button>
					<?php } else {?>
						<button onclick="restore_user_action('<?php echo $user['email'];?>' , '<?php echo $user['user_id'];?>')" data-bs-toggle="modal" data-bs-target="#restoreUserModal" class="btn btn-success" >Restore </button>
					<?php } ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php require_once("delete_user_modal.php") ?>
	<?php require_once("restoreUserModal.php") ?>
	<?php require_once("edit_user_modal.php") ?>
</section>


