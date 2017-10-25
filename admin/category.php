<!DOCTYPE html>
<html>
<head>
	<title>category</title>
</head>
<body>
<form action="" method="post">
<table>
	<tr>
		<td>
			Category
		</td>
		<td>
			<input type="text" name="category">
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="submit">
		</td>
	</tr>
</table>
</body>
</html>

<?php 
include 'config.php';

$select="select * from category";
		$data=mysqli_query($conn,$select);
		echo"
		<br>
		<br><table border=2px>
		<tr>
		<td>ID</td>
		<td>Category</td>
		</tr>";

		while($res=mysqli_fetch_array($data)){
			echo "<tr>
			<td>$res[0]</td>
			<td>$res[1]</td>
			</tr>";
		}
		echo"</table>";
	if(isset($_POST['submit'])){
		
		$category=$_POST['category'];
		$submit=$_POST['submit'];

		$insert="insert into category values('','$category')";
		mysqli_query($conn,$insert);

		// $select="select * from category";
		// $data="mysqli_query($conn,$select)";
		// echo"<table>
		// <tr>
		// <td>ID</td>
		// <td>Category</td>
		// </tr>";

		// while($res=mysqli_fetch_array($data)){
		// 	echo "<tr>
		// 	<td>res[0]</td>
		// 	<td>res[1]</td>
		// 	</tr>";
		// }
		// echo"</table>";

	}

 ?>