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
	  
	header('Location:Success.php');
	} 
	
    else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
		 mysqli_close($connection);
	}
   
   
  

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="Scripts/Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="Scripts/Bootstrap/css/CSS/Style.css" rel="stylesheet" />
    <script src="Scripts/Bootstrap/js/Scripts/jquery-1.11.3.min.js"></script>
    <script src="ScriptsScripts/Bootstrap/js/bootstrap.min.js"></script>
   
</head>
<body>

<div class="row">

<div class="col-md-12" id="header">
<h2 class="text-warning" align="center"> Take Me</h2>
</div>

</div>

<div class="row">

<div class="col-md-3">
</div>

<div class="col-md-6" align="center">
<span  align="center">
<strong class="text-danger">
Your Address is:
</strong>
<?php
echo "Your ".$address." has been saved succesfully";
?>
</span>
</div>

<div class="col-md-3">
</div>

</div>



<script>
var x = document.getElementById("lat");
var y = document.getElementById("long");
var z= document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(showPosition);
    } else { 
        x.value = "Geolocation is not supported by this browser.";
		
		}
    }
    
function showPosition(position) {
    document.getElementById("lat").value= position.coords.latitude;
    document.getElementById("long").value= position.coords.longitude;
	
	
	
}
</script>



</body>
</html>