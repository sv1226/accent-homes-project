<?php 

	include 'config.php';
	// echo $_GET['id'];
	$id = $_GET['id'];
	$select = "select * from land where id ='$id'";
	$query = mysqli_query($conn, $select);
	$data = mysqli_fetch_array($query);
	

	$delete="delete from land where id='$id'";
		mysqli_query($conn,$delete);
		header("location:entries.php")
 ?>