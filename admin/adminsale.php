<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

<?php 
	include 'config.php';
	$select="select * from sale ";
	$data=mysqli_query($conn,$select) or die(mysqli_error($conn));
	echo"<table class='table table-bordered'>
	<tr>
	<th>ID</th>
	<th>Title</th>
	<th>Category</th>
	<th>Price</th>
	<th>Furnished</th>
	<th>Rooms</th>
	<th>area </th>
	<th>Details</th>
	<th>Locality</th>
	<th>City</th>
	<th>State</th>
	<th>Images</th>
	<th>Type</th>
	</tr>";

	while($res=mysqli_fetch_array($data))
	{
		echo "<tr>
		<td>$res[0]</td>
		<td>$res[1]</td>
		<td>$res[2]</td>
		<td>$res[3]</td>
		<td>$res[4]</td>
		<td>$res[5]</td>
		<td>$res[6]</td>
		<td>$res[7]</td>
		<td>$res[8]</td>
		<td>$res[9]</td>
		<td>$res[10]</td>
		<td><img src='../$res[11]' height=150 width=150></td>
		<td>$res[12]</td>
		<td><a href='edit.php?id=$res[0]'>edit</a></td>
		<td><a href='delete.php?id=$res[0]'>Delete</td>
		
		</tr>";
		

		
	}
	echo "</table>";
	
	
	if(isset($_POST['delete']))
	{
		$delete="delete from sale where id='$id'";
		mysqli_query($conn,$delete);
	}
 ?>