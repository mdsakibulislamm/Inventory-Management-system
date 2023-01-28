<!----!Header start--->
<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="index.php"><img src="images/logo.png" width="60px" height="50px" class="img-fluid"></i></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class="nav-link" href="dashbord.php"><i class="fas fa-home icon"></i>Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				 <a class="nav-link " href="dashbord.php" tabindex="-1" aria-disabled="true"><i class="fab fa-trello icon"></i>Dashboard</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="manage_categories.php"><i class="far fa-user icon"></i>Categories</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="manage_product.php"><i class="far fa-user icon"></i>Product</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link " href="manage_brand.php" ><i class="fas fa-quidditch icon"></i>
					Brand
				</a>

			</li>
			<li class="nav-item dropdown">
				<a class="nav-link " href="new_order.php" ><i class=" "></i>Ordered file</a>
			</li>

			</ul>
			<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button
				"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sign-out-alt icon"></i>Account</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<?php
		          if (isset($_SESSION["userid"])) {
		            ?>

		            <a class=" dropdown-item " href="logout.php">Log out</a>
		            <?php
		          }
		        ?>
				

			</li>
		</ul>

	</div>
</nav>
</header>
<!--header section end-->