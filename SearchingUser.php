<?php
session_start(); 
require_once("./Private/DBConnections.php");
//$place=$_POST["place"];
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="Scripts/Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="Scripts/Bootstrap/css/CSS/Style.css" rel="stylesheet" />
    <script src="Scripts/Bootstrap/js/jquery-1.11.3.min.js"></script>
    <script src="Scripts/Bootstrap/js/bootstrap.min.js"></script>
   
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
<div class="col-md-6">

<table class="table table-hover">
<form action="showdirections3.php" method="post">
<tr id="place">
<td>
Place
</td>
<td>
:
</td>
<?php
$sql="select * from coordinates where userid=1";

 $rs = mysqli_query($connection,$sql) or die("Error: ".mysqli_error($connection));
	
	           if(mysqli_num_rows($rs)>0)
			   {
			   
			   while($row = mysqli_fetch_array($rs))
				{
					?>
					<td>
<?=$row["place"]?>&nbsp;<input type="radio" name="place" id="place" value="<?=$row['place']?>" required="required" > 
					</td>
					<?php
				}
				
			   }
?>		

</tr>

<tr>
<td  colspan="3" align="center">
<input id="getLocation" type="submit" value="Save" class="btn btn-warning">
</td>

</tr>
</form>
</table>



</div>

<div class="col-md-3">
</div>

</div>





</body>
</html>