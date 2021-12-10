<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href=<?php echo "styles/main.css"?> type="text/css">
	<link rel="stylesheet" href=<?php echo "styles/header.css"?> type="text/css">
	<link rel="stylesheet" href=<?php echo "styles/footer.css"?> type="text/css">
	<link rel="stylesheet" href=<?php echo "styles/auth_banner.css"?> type="text/css">




	<title>Ghana Contracts Database</title>

	<?php

	require_once "header.php"; ?>







	<!-- Always in the know-->
	<section class="p-5" >
		<div class="container">
			<div class="row align-items-center justify-content-between">

					<div class="col-md p-5">
					<h1>Always be in the know</h1>
					<p class="lead my-4">
						The Ghana Contracts Database is a project built and maintanined by Duala Inc.
						The Purpose of this project is allow the everyday Ghanaian to follow up on the
						status of Government initiated projects across the country
					</p>

					</div>


				<div class="col-md">
					<img src="images/always_know.svg" class="img-fluid" alt="">
					</div>

				</div>
			</div>
		</div>
	</section>



<!--Public accountability-->
<section class="p-5 cs-tertiary-transparent" >
	<div class="container">
		<div class="row align-items-center justify-content-between">

			<div class="col-md">
				<img src="images/public_acc.svg" class="img-fluid" alt="">
				</div>
				<div class="col-md p-5">
					<h2>Public accountability simplified</h2>
					<p class="lead">
						Relying on the access to state records provided by the Right To Information Bill,
						the Ghana Contracts Database allows the general public to more freely scrutinise the work
						being done by various government officials. This makes it easier to hold them accountable
						for their actions or lack of.
					</p>

				</div>
			</div>
		</div>
	</div>
</section>






	<!-- FAQ-->
	<section class="p-5 mb-1">
		<div class="container">
			<div class="row text-center g-4">
				<div class="col-md">
					<div class="">
						<div class="card-body text-center">
							<div class="h1">
								Who are we?
							</div>

							<p class="class-text">
								Duala Inc is a Ghanaian owned software company that builds digital solutions
								 to address the African continent’s problems.
								</p>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="">
						<div class="card-body text-center">
							<div class="h1">
								Is this neccessary?
							</div>

							<p class="class-text">
							We realised a growing interest by the every Ghanaian in knowing how the goverment spends tax
							revenue. The Ghana Contracts Database allows such people to conviniently follow up on progress
							of projects started by the government
								</p>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="">
						<div class="card-body text-center">
							<div class="h1">
								Who makes Changes?
							</div>

							<p class="class-text">
							To ensure accuracy of information, the only persons with access previlieges
							 to edit project statuses are only Duala employees working on the project and
							 members of the various government agencies.
								</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>








	<?php require_once "footer.php" ?>
</html>
