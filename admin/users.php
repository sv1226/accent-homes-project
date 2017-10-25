<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<?php 
     include 'config.php';
	 echo"<h3 align='center'>Users Registered</h3>";
	$select="select * from signup";
	$data=mysqli_query($conn,$select) or die(mysqli_error($conn));
	echo"<table class='table table-bordered'>
	<tr>
    <th>ID</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Username </th>
	<th>Password</th>
	<th>Email</th>
	<th>Phone</th>
	<th>City</th>
	<th>State</th>
	<th>Delete</th>
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
		<td><a href='deleteuser.php?id=$res[0]'>Delete</a></td>
		</tr>";
		

		
	}
	echo "</table>";
	echo"<h4 align='center'><a href='admin.php'>Go to Admin Panel</a></h4>";
	if(isset($_POST['delete']))
	{
		$delete="delete from signup where id='$id'";
		mysqli_query($conn,$delete);
	}
 ?>
