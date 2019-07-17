<?php
session_start();
if ($_SESSION['rows'] == 1)
	{
 include 'conn.php';
 $id=$_GET['id'];
 $q="DELETE FROM `records` WHERE id=$id";
 mysqli_query($con,$q);
 header('location:display.php');
}
else
	{
		header("Location: login.php");
	}
?>