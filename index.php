<?php
include_once("./database/constants.php");
if (isset($_SESSION["userid"])) {
	header("location:".DOMAIN."/dashbord.php");
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
			<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>
	<!--link css style sheet-->
			

	<title>Inventory Managment</title>
</head>
<body>
	<!---navbar -->
	
	<!---navbar end -->
	<!--- Log in form start-->
	<center>
		<div class="container"> 
			<?php
			if (isset($_GET["msg"]) AND !empty($_GET["msg"])) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <?php echo $_GET["msg"]; ?>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				<?php
			}
		?>

			<div class="card"  style="width: 18rem;">
		 	 <img src="images/admin.jpg" class="card-img-top" alt="admin">
				<div class="card-body">
				<!-- form--->
				<form id="form_login" onsubmit="return false">
				  <div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Email address</label>
				    <input type="email" class="form-control" name="log_email" id="log_email">
				    <div id="emailHelp" class="form-text"></div>
				    <small id="e_error" class="form-text text-muted"></small>
				  </div>
						  <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Password</label>
						    <input type="password" class="form-control"name="log_password" id="log_password">
						    <small id="p_error" class="form-text text-muted"></small>
						  </div>
				  <button type="submit" class="btn btn-primary">Log In</button>
				  <span> <a href="register.php" >Register</a></span>
				</form>
				<!-- form end --->
				 </div>
		  		<div class="card-footer"><a href="#">Forget Password?</a></div>
			</div>
		</div>
	</center>
<!--- end login form--->

<!---Footer start --->
<br><br><br>
<?php include_once("./templetes/footer.php"); ?>
<!---Footer end --->

</body>
</html>
