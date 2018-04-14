<?php
$data=$_GET['id'];
$found=0;
$length=strlen($data);
$db=mysqli_connect("localhost","root","","hotel") or die();
$dt=mysqli_query($db,"SELECT DISTINCT `location` FROM info");
if($length!=0){
  $tdata="";


  foreach($dt as $city){
   $city=$city['location'];

   if(stristr($data,substr($city, 0,$length))){
     
     
     $found=1;
    $tdata=$tdata."<tr class=know><td class=row><a href=newpage.php?cityname=$city>".$city."</a></td></tr>";
     
   }
   

}

if($found==1){
	echo "<table class=searchtbl>$tdata</table>";
}
else{
	echo "no match found";
}
}


?>
