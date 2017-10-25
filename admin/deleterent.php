<?php 

	include 'config.php';
	// echo $_GET['id'];
	$id = $_GET['id'];
	$select = "select * from rent where id ='$id'";
	$query = mysqli_query($conn, $select);
	$data = mysqli_fetch_array($query);
	

	$delete="delete from rent where id='$id'";
		mysqli_query($conn,$delete);
		header("location:rent.php")
 ?>