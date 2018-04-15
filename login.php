<?php
$result="";
if(isset($_POST['subbtn'])){
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$db=mysqli_connect("localhost","root","","hotel") or die();
    $dt=mysqli_query($db,"SELECT * FROM user WHERE `email`='$email' AND `password`='$password'");
    $dm=mysqli_fetch_assoc($dt);
    $id=$dm['id'];
    if($id!=null){
    	setcookie('user',$id,time()+3600);
    	header("location:index.php");
    }
    else{
    	$result="Password and Email id doesnt match";
    }

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
		<h2 style="text-align: center;">Login Form</h2>
		<?php echo $result; ?>
		<form action="login.php" method="post">


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
			<input type="submit" class="btn btn-primary" name="subbtn" value="Log in"></input>
		</form>
	</div>
</body>
</html>