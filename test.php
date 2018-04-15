<?php
$cityname=$_COOKIE['city'];

$db=mysqli_connect("localhost","root","","hotel") or die();
$dt=mysqli_query($db,"SELECT * FROM info WHERE `location`='$cityname'");

$outp = array();
$outp = $dt->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);

?>
