<!-- Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editModalTitle">Create User</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">


				<form class="row g-3" method="POST">


					<div class="col-md-6">
						<label for="first_name" class="form-label">First Name</label>
						<input type="text" class="form-control" id="first_name" name="first_name">
					</div>
					<div class="col-md-6">
						<label for="last_name" class="form-label">Last Name</label>
						<input type="text" class="form-control" id="last_name" name="last_name">
					</div>
					<div class="col-md-12">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="col-md-6">
						<label for="supervisor_name" class="form-label">Supervisor Name</label>
						<input type="text" class="form-control" id="supervisor_name" name="supervisor_name">
					</div>
					<div class="col-12">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<div class="col-12">
						<label for="address" class="form-label">Office Address</label>
						<input type="text" class="form-control" name="address" id="address" placeholder="Apartment, studio, or floor">
					</div>
					<div class="col-md-6">
						<label for="city" class="form-label">City</label>
						<input type="text" class="form-control" id="city" name="city">
					</div>
					<div class="col-md-2">
						<label for="zip" class="form-label">Zip</label>
						<input type="text" class="form-control" id="zip" name="zip">
						<input type="text" class="form-control" id="uid" name="uid" hidden>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-success" name="create_user">Create User</button>
					</div>
				</form>
			</div>
		</div>
	</div>