<?php 





include('functions.php');

if (!isLoggedIn() or $logged_in_user['user_type'] !== 'distributor') {

	$_SESSION['msg'] = "You must log in first";

	header('location: login.php');

}



//...

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>EcoFood Distributor</title>

<!-- Bootstrap -->

<link href="bootstrap-4.3.1.css" rel="stylesheet">

<link href="food-styles.css" rel="stylesheet" type="text/css">

<link href="style.css" rel="stylesheet" type="text/css">



<!--Font Awesome--> 

<script src="https://kit.fontawesome.com/bed6b2190b.js" crossorigin="anonymous"></script>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="index.php">EcoFood <i class="fas fa-drumstick-bite"></i></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto navbar-right">

      <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>

    

    </ul>

  </div>

</nav>

<header> </header>

<section>

  <div class="container">

    <div class="row">

      <div class="col-lg-12 mb-4 mt-2 text-center">

		  <!-- notification message -->

		<?php if (isset($_SESSION['success'])) : ?>

			<div class="error success" >

				<h3>

					<?php 

						echo $_SESSION['success']; 

						unset($_SESSION['success']);

					?>

					

		 

				</h3>

			</div>

		<?php endif ?>

		  <!-- logged in user information -->

		 <div class="profile_info">

<div>

			  <?php  if (isset($_SESSION['user'])) : ?>

		    <strong><?php echo $_SESSION['user']['username']; ?></strong>

						<h3>

						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 

						<br>

						<a href="index.php?logout='1'" style="color: red;">logout</a>

						</h3>



				<?php endif ?>

			</div>

		</div>

        <h1>Distributors Portal</h1>

      </div>

    </div>

  </div

	  

	  

	  

<?php



$status = "";

if(isset($_POST['new']) && $_POST['new']==1)

{



$foodname =$_REQUEST['foodname'];

$foodtype = $_REQUEST['foodtype'];



$ins_query="insert into food (`foodname`,`foodtype`) values ('$foodname','$foodtype')";

mysqli_query($db,$ins_query) or die(mysql_error());

$status = "<h3>New Record Inserted Successfully.</h3></br></br><a href='distributor.php'></a>";

}

?>



<div class="form">



<div>

<h2 align="center">Add Food Items </h2>

<h3><?php echo $status; ?></h3>



</div>

</div>

  <div class="container ">

        <div class="row">

            <div class="col-lg-8 mx-auto text-left offset-lg-0">

              <h3 class="section-heading"></h3>

              <hr />

                <br>

               <form name="form" method="post" action=""> 

				<input type="hidden" name="new" value="1" />

				<p><input type="text" name="foodname" placeholder="Enter Food Name" /></p>

				<p><input type="text" name="foodtype" placeholder="Enter Food Type" /></p>

				<p><input class="btn btn-secondary add"name="submit" type="submit" value="Submit" /></p>

				</form>

        

            </div>

        </div>

  </div>

</section>

<div class="container"> </div>

<footer class="text-center">

  <div class="container">

    <div class="row">

      <div class="col-12">

        <p> © EcoFood. All rights reserved.</p>

      </div>

    </div>

  </div>

</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<script src="js/jquery-3.3.1.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 

<script src="js/popper.min.js"></script> 

<script src="js/bootstrap-4.3.1.js"></script>

</body>

</html>