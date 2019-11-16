<?php


include( 'header.php' );

include( 'functions.php' );

?>
<section>
<header><img src="images/soup-bg.jpg" class="img-fluid" alt="Placeholder image"> </header>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mb-4 mt-2 text-center">
        <h2>HOW IT WORKS</h2>
      </div>
    </div>
  </div>
  <div class="container ">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12 text-center"> <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="images/distributor.jpg" data-holder-rendered="true">
        <h3>Distributor</h3>
        <p>Local restaurants, cafes, and more can schedule a time for a courier to pick up fresh, dried, and canned foods.</p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 text-center"> <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="images/courier.jpg" data-holder-rendered="true">
        <h3>Courier</h3>
        <p>Are assigned to delivery routes connecting distributors with recipients.</p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 text-center"> <img class="rounded-circle" alt="140x140" style="width: 140px; height: 140px;" src="images/recipient.jpg" data-holder-rendered="true">
        <h3>Recipient</h3>
        <p>Local food pantries, soup kitchens, and shelters receive food based upon their needs and preferences (fresh, dried, canned), and schedule the time that works best for them.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 mt-4 mb-2 text-center"> </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-lg-6"> </div>
    </div>
  </div>
  <div class="header">
    <h2>Login</h2>
  </div>
  <form method="post" action="login.php">
    <?php echo display_error(); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_btn">Login</button>
    </div>
  </form>
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="text-center col-md-8 col-12 mx-auto">
          <p class="lead">Be the change you wanna see, sign up now to <strong>donate</strong>, <strong>deliver</strong>, or <strong>receive</strong> food today!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-auto mx-auto"> <a class="btn btn-block btn-lg btn-success" href="create_user.php" title="">Sign up now!</a> </div>
      </div>
    </div>
  </div>
</section>
<div class="container"> </div>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p>Copyright © EcoFood  All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<script src="js/jquery-3.3.1.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 

<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.3.1.js"></script>
</body></html>