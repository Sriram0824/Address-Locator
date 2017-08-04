<?php
session_start(); 
require_once("./Private/DBConnections.php");
//$address=$_SESSION["address"];
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
<form method="post" action="SearchingUser.php">
<table>
<tr>
<td>
<span>User ID</span>
</td>
<td>
:
</td>
<td>
<input type="text" class="form-control" name="userId" placeholder="Enter User Id">
</td>
</tr>
<tr>
<td colspan="3" align="center">
<br/>
</td>
</tr>
<tr>
<td colspan="3" align="center">
<input class="btn btn-warning" type="submit" value="submit">
</td>
</tr>
</form>
</div>

<div class="col-md-3">
</div>

</div>
</body>
</html>
