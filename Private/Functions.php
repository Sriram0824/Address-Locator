<?php

function Check_Login_Status($UserName)
{

	
	if (!(isset($_SESSION["UserName"]) && $_SESSION["UserName"] != ''))
	{

	header ("Location: index.php");
	}
}
?>