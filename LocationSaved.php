<?php
session_start(); 
require_once("./Private/DBConnections.php");
$address=$_SESSION["address"];
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
echo "Your ".$address."<strong class='text-danger'> has been saved succesfully </strong>";
?>
</span>
</div>

<div class="col-md-3">
</div>

</div>
</body>
</html>
