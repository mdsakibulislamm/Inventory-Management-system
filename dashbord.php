<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
	header("location:".DOMAIN."/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--  css cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- css cdn-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script type="text/javascript" rel="stylesheet" src="./js/main.js"></script>

	<!--Font awsome-->
			<script
				src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"
			></script>
			

	<title>Inventory Managment</title>
</head>
<body>
	<!---navbar -->
	<?php include_once("./templetes/header.php"); ?><br><br>
	<!---navbar end -->
<!--- Profile & jumbltron-->
<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card mx-auto">
				  <img class="card-img-top mx-auto" style="width:100%;" src="./images/nusrat.jpg" alt="Card image cap">
				  <div class="card-body">
				    <h4 class="card-title">Profile Info</h4>
				    <p class="card-text"><i class="fa fa-user">&nbsp;</i> nusrat</p>
				    <p class="card-text"><i class="fa fa-user">&nbsp;</i> Admin</p>
				    
				    
				  </div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="jumbotron" style="width:100%;height:100%;">
					<h4>Welcome Admin,</h4>
					<div class="row">
						<div class="col-md-4">
							<div>
								<img class="card-img-top" style="width:100%;" src="./images/category.png" alt="Card image cap">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Categories</h4>
									<p class="card-text">Here you can manage your categories.</p>
									<a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary">Add</a>
									<a href="manage_categories.php" class="btn btn-primary">Manage</a>
								</div>
							</div>
						</div>
						</div>
						<div class="col-md-4">
							<div>
								<img class="card-img-top" style="width:100%;" src="./images/brand.jpg" alt="Card image cap">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Brands</h4>
										<p class="card-text">Here you can manage your brand.</p>
										<a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary">Add</a>
										<a href="manage_brand.php" class="btn btn-primary">Manage</a>
									</div>
								</div>
							</div>
							</div>
						<div class="col-md-4">
							<div>
								<img class="card-img-top" style="width:100%;" src="./images/product.png" alt="Card image cap">
							<div class="card">
									<div class="card-body">
									<h4 class="card-title">Products</h4>
									<p class="card-text">Here you can manage your prpducts.</p>
									<a href="#" data-toggle="modal" data-target="#form_products" class="btn btn-primary">Add</a>
									<a href="manage_product.php" class="btn btn-primary">Manage</a>
								</div>
							</div>
						</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
<!---Footer start --->
<br><br>
<?php include_once("./templetes/footer.php"); ?>
<!---Footer end --->


	<!--js cdn-->
	
<!--js cdn-->
<!--templates call-->
	<?php
	//Category Form
	include_once("./templetes/category.php");
	 ?>
	 <?php
	//Brand Form
	include_once("./templetes/brand.php");
	 ?>
	 <?php
	//Products Form
	include_once("./templetes/products.php");
	 ?>
</body>
</html>
