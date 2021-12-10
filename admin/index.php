<!-- Admin capabilities -->
<?php session_start();
	if (isset($_SESSION["user_id"])){
		header("LOCATION: dashboard.php");
	}
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="styles/admin_index.css" type="text/css">




	<title>GCD Admin</title>


<body>
	<section id="main">
		<div class="card" >
			<form action="" method='post'>
				<div class="mb-3">
					<label for="email" class="form-label">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
					<small ></small>
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" class="form-control" id="password" name="password">
					<small></small>
				</div>
				<p>Not an admin? <a href="../index.php">Return to user website</a></p>
				<button type="submit" class="btn btn-primary" name="login">Submit</button>
			</form>
		</div>
	</section>
</body>

<?php
require_once(dirname(__FILE__) ."/controllers/admin_controller.php");
	if (isset($_POST["login"])){
		$result = sign_in($_POST["email"], $_POST["password"]);

		if ($result){
			$_SESSION["user_id"] = $result["user_id"];
			$_SESSION["user_name"] = $result["last_name"];
			header("LOCATION: dashboard.php");

		}

	}
?>





</html>