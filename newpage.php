<?php
$cityname=$_REQUEST['cityname'];
setcookie("city",$cityname,time()+3600);


if(isset($_POST['bookbtn'])){
       $hid=$_COOKIE['hid'];
       $uid=$_COOKIE['user'];
       $chkin=$_POST['chkin'];
       $chkout=$_POST['chkout'];
       $room=$_POST['roomselect'];
        setcookie('chkin',$chkin,time()+3600);
       $db=mysqli_connect("localhost","root","","hotel") or die();
       mysqli_query($db,"INSERT INTO book VALUES('$uid','$hid','$chkin','$chkout','$room','0')");
       echo "<script type='text/javascript'>alert('hotel booked');</script>";
       header('location:index.php');
}
if(isset($_POST['lgbtn'])){
	setcookie("city",0,time()-3600);
	setcookie('user',0,time()-3600);
	setcookie('hid',0,time()-3600);
	header('location:index.php');
}
?>



<!DOCTYPE html>
<html ng-app="mymodule">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="app\lib\angular.min.js"></script>
	<script type="text/javascript" src="app/app.js"></script>
	<link rel="stylesheet" type="text/css" href="content/style.css?version=991">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body ng-controller="mycontroller">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<div class="container-fluid">
			<div class="col-sm-9"><h2 class="text-center" style="color: white;">MyHotel</h2></div>
			<form class="form-inline" action="/action_page.php">
				<input class="form-control mr-sm-2" type="text" placeholder="Search" ng-model="hname">
				
			</form>
			<form action="newpage.php" method="post"><input class="btn btn-success" type="submit" name="lgbtn" value="logout"></input></form>
		</div>
	</nav>
	<div class="maindisplay" >
		<div class="col-sm-3 filter">
			<p>Room Available</p>
			<select ng-model="selectroom">
				<option value="sroomo" selected>Single Room</option>
				<option value="droomo">Double Room</option>
				<option value="froomo">Family Room</option>
			</select>
			<br>
			<br>
           <p>
           	Sort By Price
           </p>
			<select ng-model="selecroom">
				<option value="sprice" selected>Single Room</option>
				<option value="dprice">Double Room</option>
				<option value="fprice">Family Room</option>
			</select>
		</div>


		<div class="col-sm-9 hotel">
			
			<div class="card w-75" style="margin: 0 auto;" ng-repeat="ninja in ninjas|filter:hname|orderBy:selectroom|orderBy:selecroom">
				<div class="card-body"  >
					<img src="Images/hotels-4.jpg" class="w-25" style="float: right;">
					<h5 class="card-title">{{ninja.name}}</h5>
					<p class="card-text\">{{ninja.address}}</p>
					<p class="card-text">Price:-{{ninja.sprice}}(SR), {{ninja.dprice}}(DR), {{ninja.fprice}}(FR)</p>
					<button type="button" class="btn btn-primary open-AddBookDialog" data-id="{{ninja.id}}" data-toggle="modal" data-target="#myModal">
    Book
  </button>

					

				</div>				
			</div>  
			<div class="modal fade" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title">Book Hotel</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
                       <form class="bookfrm" action="newpage.php?cityname=" method="post">
						<!-- Modal body -->
						<div class="modal-body">
							
								<p>Check-in Date:</p>
								 <input id="datepicker" width="276" ng-model="start" name="chkin" />
								<p>Check-out Date:</p>
								 <input id="datepicker1" width="276" ng-model="end" name="chkout" />
								<select name="roomselect">
									<option value="sprice" selected>Single Room</option>
									<option value="dprice">Double Room</option>
									<option value="fprice">Family Room</option>
								</select>
							
						</div>

						<!-- Modal footer -->
						<div class="modal-footer">
							<input type="submit" class="btn btn-danger" name="bookbtn" value="book"></button>
						</div>

					</form>

					</div>
				</div>
			</div>

		</div>

	</body>
	</html>
	<script type="text/javascript">
		$(document).on("click", ".open-AddBookDialog", function () {
			var myBookId = $(this).data('id');
			document.cookie = "hid="+myBookId;
			//$(".boofrm").action("bookhotel.php?hid="+myBookId);
			console.log(myBookId);
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
 });

		  $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
		  $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap4'
        });
</script>