<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
 

 <?php 
     include 'config.php';
	$select="select * from purchase";
	$data=mysqli_query($conn,$select) or die(mysqli_error($conn));
	echo"<table border=2px>
	<tr>
    <th>ID</th>
	<th>Property ID</th>
	<th>Customer ID</th>
	<th>Name</th>
	<th>Phone No.</th>
	<th>Email</th>
	<th>Address</th>
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
		</tr>";
		

		
	}
	echo "</table>";
	if(isset($_POST['delete']))
	{
		$delete="delete from purchase where id='$id'";
		mysqli_query($conn,$delete);
	}
 ?>
