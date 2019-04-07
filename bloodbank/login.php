<?php
session_start();
if(isset($_SESSION["email"]))
{
	include ("temp.php");
}
else {
	echo "Unauthorised access found";
}
?>