<?php 





include('functions.php');

if (!isLoggedIn()) {

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

<title>EcoFood Courier</title>

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

        <h2>Couriers Portal</h2>

      </div>

    </div>

  </div>

	

  <div class="container ">

        <div class="row">

            <div class="col-lg-8 mx-auto text-left offset-lg-0">

              <h3 class="section-heading"></h3>

              <hr />

                <br>

                <form action="" method="POST">

                    <div class="form-group">

                        <label htmlFor="">Search by address</label>

                        <input type="text" class="form-control" id="name" placeholder="City"/><br>

					    <input type="text" class="form-control" id="name" placeholder="State"/><br>

                        <input type="text" class="form-control" id="name" placeholder="Zip"/>



                    </div>

                    <div class="form-group">

                        <label htmlFor="" id="category">Courier Jobs</label>

                        <select class="form-control" id="category">

                            <option defaultValue="">All Categories</option>

                            <option value="Proteins">Small Load</option>

                            <option value="Grains">Medium Load</option>

                            <option value="Vegetables">Large Load</option>

                           

                        </select>

                    </div>

                   

               

                    <button onClick={this.openModal} class="btn btn-secondary add" type="button">Search</button>

              </form>

            </div>

        </div>

  </div>

</section>

	

	<h2 align="center">Delivery Options</h2>

<table width="90%" border="1" style="border-collapse:collapse;">

<thead>

	<tr><th><strong></strong></th><th><strong>First Name</strong></th><th><strong>Last Name</strong></th><th><strong>Address</strong></th><th><strong>City</strong></th><th><strong>State</strong></th><th><strong>Zip Code</strong></th><th><strong>Car Make</strong></th><th><strong>Car Model</strong></th><th></th>

	</tr>

</thead>

<tbody>

<?php

$count=1;

$sel_query="SELECT * FROM courier ORDER BY city;";

$result = mysqli_query($db,$sel_query);

while($row = mysqli_fetch_assoc($result)) { ?>

<tr><td align="center"><?php echo $count; ?></td>

	<td align="center"><?php echo $row["FirstName"]; ?></td>

	<td align="center"><?php echo $row["LastName"]; ?></td>

	<td align="center"><?php echo $row["line1"]; ?></td>

	<td align="center"><?php echo $row["city"]; ?></td>

	<td align="center"><?php echo $row["state"]; ?></td>

	<td align="center"><?php echo $row["zip"]; ?></td>

	<td align="center"><?php echo $row["carMake"]; ?></td>

	<td align="center"><?php echo $row["carModel"]; ?></td>





	<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>

<?php $count++; } ?>

</tbody>

</table>

	

	

	

	

	

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