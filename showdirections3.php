<?php
require_once("./Private/DBConnections.php");
$place=$_POST["place"];
$sql = "SELECT * FROM coordinates where userid=1 and place='$place' ";
$rs = mysqli_query($connection,$sql) or die("Error: ".mysqli_error($connection));
if(mysqli_query($connection, $sql))
{
	while($row = mysqli_fetch_array($rs))
{
$latitude=$row["latitude"];
$longitude=$row["longitude"];
}
$url='https://www.google.com/maps/embed/v1/place?key=AIzaSyCdBJJFs56f9r9gMMKeWKtM2UVPVu-lwCU&q='.$latitude.','.$longitude;
?>
<!DOCTYPE html>
<html>
<body>

<?php
 echo '<iframe width="1080" height="1080" frameborder="0" style="border:0" src="'.urldecode($url).'"></iframe>';
?>


</body>
</html>

   

<?php
   } 
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
		 mysqli_close($connection);
	}

?>
