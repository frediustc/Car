<?php include 'inc/db.php'; ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <mark>Modern</mark>
  </div>
  <h2 class="form-heading">Register</h2>
  <form class="form-signin app-cam" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <?php include 'scr/sign.php'; ?>
      <p>Enter your personal details below</p>
      <input type="text" class="form-control1" placeholder="Full Name" required name="fn">
      <input type="text" class="form-control1" placeholder="Phone" required name="ph">
	  <p> Enter your account details below</p>
      <input type="text" class="form-control1" placeholder="Email" required name="em">
      <input type="password" class="form-control1" placeholder="Password"  required name="ps">
      <input type="password" class="form-control1" placeholder="Re-type Password"  required name="cn">

      <button class="btn btn-lg btn-success1 btn-block" type="submit" name="reg">Submit</button>
      <div class="registration">
          Already Registered.
          <a class="" href="index.php">
              Login
          </a>
      </div>
  </form>
   <div class="copy_layout login register">
      <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
   </div>
</body>
</html>
