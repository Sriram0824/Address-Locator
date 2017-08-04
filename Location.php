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
<form action="SaveLocation.php" method="post">
<tr>
<td>
<span>Latitude</span>
</td>
<td>
:
</td>
<td>
<input type="text" name="latitude" id="lat" class=" form-control"/>
</td>
</tr>

<tr>
<td>
<span>Longitude</span>
</td>
<td>
:
</td>
<td>
<input type="text" name="longitude" id="long" class="form-control"/>
</td>
</tr>

<tr id="place">
<td>
Place
</td>
<td>
:
</td>
<td>

Home&nbsp;<input type="radio" name="place" id="place" value="Home" required="required" > 
&nbsp;
Work&nbsp;<input type="radio" name="place" id="place" value="Work" > 
</td>

</tr>

<tr>
<td  colspan="3" align="center">
<input id="saveLocation" type="submit" value="Save" class="btn btn-warning">
</td>

</tr>
</form>
</table>

<table align="center">

<tr>

<td colspan="3" align="center">
<button id="getLocation" type="submit" onclick="getLocation()" class="btn btn-warning">Get Location</button>
</td>
</tr>

</table>

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

$(document).ready(function(){
    
        $("#saveLocation").hide();
		$("#place").hide();

    
    $("#getLocation").click(function(){
		$("#getLocation").hide();
		
        $("#saveLocation").show();
		$("#place").show();
		
    });
	
	
});
</script>

</body>
</html>