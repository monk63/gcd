<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="styles/main.css" type="text/css">
	<link rel="stylesheet" href="styles/header.css" type="text/css">
	<link rel="stylesheet" href="styles/footer.css" type="text/css">
	<link rel="stylesheet" href="styles/auth_banner.css" type="text/css">
	<link rel="stylesheet" href="styles/account_request.css" type="text/css">


	<?php require_once "header.php";


	if ($_POST){

		if (isset($_POST["account_request"])){ //account request
			request_account($_POST["firstName"],$_POST["lastName"],$_POST["govEmail"],$_POST["supName"],$_POST["address"],$_POST["city"],$_POST["zip"],$_POST["password"]);

		} else if (isset($_POST["password_request"])){ //password reset
			request_password_reset($_POST["lastName"],$_POST["govEmail"],$_POST["supName"],$_POST["address"],$_POST["city"],$_POST["zip"],$_POST["password"]);
		// function request_password_reset ( $last_name, $gov_email, $sup_name, $office_address, $city, $zip, $password){
		}
	}


	?>

	<section class="main-section">
		<div class="row">

			<!-- Request account to manage database  -->
			<div class="col-5" id="requestAccountDiv">
				<h3>Request account to manage database </h3>
				<form class="row g-3" action="" method="POST" name="accountRequest">
					<div class="col-md-6">
						<label for="firstName" class="form-label">First name</label>
						<input type="text" class="form-control" id="firstName" name="firstName">
					</div>
					<div class="col-md-6">
						<label for="lastName" class="form-label">Last name</label>
						<input type="text" class="form-control" id="lastName" name= "lastName">
					</div>
					<div class="col-md-6">
						<label for="govEmail" class="form-label">Government Email</label>
						<input type="email" class="form-control" id="govEmail" name="govEmail">
					</div>
					<div class="col-md-6">
						<label for="supName" class="form-label">Supervisor name</label>
						<input type="text" class="form-control" id="supName" name="supName">
					</div>
					<div class="col-md-6">
						<label for="password" class="form-label">Create Password</label>
						<input type="password" class="form-control" id="passowrd" name="password" >
					</div>
					<div class="col-md-6">
						<label for="password" class="form-label">Confirm Password</label>
						<input type="password" class="form-control" id="cPassowrd" name="cPassowrd">
					</div>
					<div class="col-12">
						<label for="address" class="form-label">Office Address</label>
						<input type="text" class="form-control" id="address" name="address" placeholder="Apartment, studio, or floor">
					</div>
					<div class="col-md-6">
						<label for="city" class="form-label">City</label>
						<input type="text" class="form-control" id="city" name="city">
					</div>
					<div class="col-md-4">
					</div>
					<div class="col-md-2">
						<label for="zip" class="form-label">Zip</label>
						<input type="text" class="form-control" id="zip" name="zip">
					</div>
					<div class="col-12">
						<button type="submit" class="btn btn-primary" name="account_request" id="createAccountBtn">Submit</button>
					</div>
				</form>
			</div>


			<div class="col-2"></div>




			<!-- Request a new password -->
			<div class="col-5" id="newPasswordDiv">
				<h3>Request a new password</h3>
				<form class="row g-3" action="" method="POST">
					<div class="col-md-6">
						<label for="lastName" class="form-label"> Last Name</label>
						<input type="text" class="form-control" id="lastName" name="lastName">
					</div>
					<div class="col-md-6">
						<label for="govEmail" class="form-label">Government Email</label>
						<input type="email" class="form-control" id="govEmail" name="govEmail">
					</div>
					<div class="col-md-6">
						<label for="password" class="form-label">New Password</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<div class="col-md-6">
						<label for="cPassword" class="form-label">Confirm Password</label>
						<input type="password" class="form-control" id="cPassword" name="cPassword">
					</div>
					<div class="col-12">
						<label for="supName" class="form-label">Supervisor name</label>
						<input type="text" class="form-control" id="supName" name="supName" >
					</div>
					<div class="col-12">
						<label for="address" class="form-label">Office Address</label>
						<input type="text" class="form-control" id="address" name="address" placeholder="Apartment, studio, or floor">
					</div>
					<div class="col-md-6">
						<label for="city" class="form-label">City</label>
						<input type="text" class="form-control" name="city" id="city">
					</div>
					<div class="col-md-4">
					</div>
					<div class="col-md-2">
						<label for="secKey" class="form-label">Zip</label>
						<input type="text" class="form-control" id="zip" name="zip">
					</div>
					<div class="col-12">
						<button type="submit" class="btn btn-primary" name="password_request" id="forgotPasswordBtn">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</section>

	<?php require_once "footer.php"; ?>