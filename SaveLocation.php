<?php

session_start(); 
require_once("./Private/DBConnections.php");
//require_once("./Private/Functions.php");

//$UserName=$_SESSION["UserName"];
//Check_Login_Status($UserName);

$longitude= $_POST["longitude"];
$latitude=$_POST["latitude"];
$userid=1;
$place=$_POST["place"];

$maps_url=
'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$latitude.','.$longitude.'&sensor=true';

$maps_json=file_get_contents($maps_url);
$maps_array=json_decode($maps_json,true);
$address=$maps_array['results'][0]['formatted_address'];

$sql = "INSERT INTO `coordinates`( `latitude`, `longitude` , `userid`, `place`,`savedtime`,`isactive`) 
VALUES ('$latitude','$longitude','$userid','$place',NOW(),TRUE)";
	
	if(mysqli_query($connection, $sql))
	{
	  
	header('Location:LocationSaved.php');
	$_SESSION["address"]=$address;

	} 
	
    else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
		 mysqli_close($connection);
	}
   
   
  

?>