<?php
if(isset($_POST['subbtn'])){
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$add=$_POST['addr'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$db=mysqli_connect("localhost","root","","hotel") or die();
    mysqli_query($db,"INSERT INTO user(`email`,`password`,`fname`,`lname`,`address`,`city`,`state`) VALUES('$email','$pass','$fname','$lname','$add','$city','$state')");
    header("location:index.php");
}

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	  <script src="app\lib\angular.min.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	  <script type="text/javascript" src="app/app.js"></script>
	  <link rel="stylesheet" type="text/css" href="content/style.css?version=991">
</head>
<body>
<div class="col-md-6" style="margin: 0 auto;border:1px solid black;padding: 15px;">
	<h2 style="text-align: center;">Form</h2>
<form action="singup.php" method="post">

	
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="pass">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" name="fname" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" name="lname" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="addr">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" class="form-control" id="inputState" name="state">
    </div>
    
  </div>
  <input type="submit" class="btn btn-primary" name="subbtn" value="Sign up"></input>
</form>
</div>
</body>
</html>