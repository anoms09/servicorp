<?php
	define('myDBis','servicorp');
	$con=mysqli_connect("localhost","root","");
	if(!$con)
		{
			die('could not connect:'.mysqli_error($con));
		}	
?>