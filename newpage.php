<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="app\lib\angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="app/app.js"></script>
	<link rel="stylesheet" type="text/css" href="content/style.css?version=991">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<div class="container-fluid">
			<div class="col-sm-9"><h2 class="text-center" style="color: white;">MyHotel</h2></div>
			<form class="form-inline" action="/action_page.php">
				<input class="form-control mr-sm-2" type="text" placeholder="Search">
				<button class="btn btn-success" type="submit">Search</button>
			</form>
		</div>
	</nav>
	<div class="maindisplay">
		<div class="col-sm-3 filter"></div>
		<div class="col-sm-9 hotel">
			<div class="card w-75" style="margin: 0 auto;">
				<div class="card-body">
                    <img src="Images/hotels-4.jpg" class="w-25" style="float: right;">
					<h5 class="card-title">Card title</h5>
					
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn btn-primary">Button</a>
				</div>
				<div ></div>
				
			</div>
		</div>
	</div>
</body>
</html>