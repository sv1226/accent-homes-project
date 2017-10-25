<!DOCTYPE html>
<html>
<head>
	<title>Land</title>
</head>
<body>
<table>
	<form action="" metahod="post">
	<tr>
		<td>
			Title
		</td>
		<td>
			<input type="text" name="title">
		</td>
	</tr>
	
	<tr>
		<td>
			Price
		</td>
		<td>
			<input type="text" name="price">
		</td>
	</tr>
	
	
	<tr>
		<td>
			Area Sq. Feet
		</td>
		<td>
			<input type="text" name="area">
		</td>
	</tr>
	<tr>
		<td>
			Details
		</td>
		<td>
			<input type="text" name="details">
		</td>
	</tr>
	<tr>
		<td>
			locality
		</td>
		<td>
			<input type="text" name="locality">
		</td>
	</tr>
	<tr>
		<td>
			City
		</td>
		<td>
			<input type="text" name="city">
		</td>
	</tr>
	<tr>
		<td>
			State
		</td>
		<td>
			<input type="text" name="state">
		</td>
	</tr>
	<tr>
		<td>
			Images
		</td>
		<td>
			<input type="file" name="images">
		</td>
	</tr>
	
	<tr>
		<td>
			<input type="submit" name="submit">
		</td>
		<td>
			<input type="reset" name="reset">
		</td>
	</tr>
</table>
</body>
</html>




<?php 
	if(isset($_POST['submit'])){

		include 'config.php';
		$title=$_POST['title'];
		
		$price=$_POST['price'];
		
		
		$area=$_POST['area'];
		$details=$_POST['details'];
		$locality=$_POST['locality'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		
	}

 ?>