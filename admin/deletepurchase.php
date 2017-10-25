<?php 

	include 'config.php';
	// echo $_GET['id'];
	$id = $_GET['id'];
	$select = "select * from purchase where id ='$id'";
	$query = mysqli_query($conn, $select);
	$data = mysqli_fetch_array($query);
	

	$delete="delete from purchase where id='$id'";
		mysqli_query($conn,$delete);
		header("location:purchase.php")
 ?>