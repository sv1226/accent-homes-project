<?php 
	include 'config.php';
	// echo $_GET['id'];
	$id = $_GET['id'];
	$select = "select * from sale where id ='$id'";
	$query = mysqli_query($conn, $select);
	$data = mysqli_fetch_array($query);
	

 ?>

 <!-- <form>
 	<input type="text" name="" value="<?php echo $data[0] ?>">
 	<input type="text" name="" value="<?php echo $data[1] ?>">
 	<input type="text" name="" value="<?php echo $data[2] ?>">
 	<input type="text" name="" value="<?php echo $data[3] ?>">
 	<input type="text" name="" value="<?php echo $data[4] ?>">
 	<input type="text" name="" value="<?php echo $data[5] ?>">
 	<input type="text" name="" value="<?php echo $data[6] ?>">
 	<input type="text" name="" value="<?php echo $data[7] ?>">
 	<input type="text" name="" value="<?php echo $data[8] ?>">
 	<input type="text" name="" value="<?php echo $data[9] ?>">
 	<input type="text" name="" value="<?php echo $data[10] ?>"> -->

<table>
<form action="" method="post" enctype="multipart/form-data">
	<!-- <tr>
	<td>
		ID
	</td>
	<td>
		<input type="text" name="id" value="<?php echo $data[0] ?>">
	</td>
	</tr> -->

	<tr>
		<td>
			Title
		</td>
		<td>
			<input type="text" name="title" value="<?php echo $data[1] ?>"  >
		</td>
	</tr>
	<!-- <tr>
		<td>
			Category
		</td>
		<td>
			<select name="category" value="<?php echo $data[2] ?>" >
			<option value="1">select</option>
			<option value="2">House</option>
			<option value="3">Flat</option>
			<option value="4">PG</option>
			<option value="5">Hostel</option>
			
			</select>
		</td>
	</tr> -->
	<tr>
		<td>
			Price
		</td>
		<td>
			<input type="text" name="price" value="<?php echo $data[3] ?>">
		</td>
	</tr>
	<tr>
		<td>
			Furnished
		</td>
		<td>
			<input type="radio" name="furnished" value="<?php echo $data[4] ?>">Yes
			<input type="radio" name="furnished" value="<?php echo $data[4] ?>">No
		</td>
	</tr>
	<tr>
		<td>
			Rooms
		</td>
		<td>
			<input type="text" name="rooms" value="<?php echo $data[5] ?>">
		</td>
	</tr>
	<tr>
		<td>
			Area Sq. Feet
		</td>
		<td>
			<input type="text" name="area" value="<?php echo $data[6] ?>">
		</td>
	</tr>
	<tr>
		<td>
			Details
		</td>
		<td>
			<input type="text" name="details" value="<?php echo $data[7] ?>">
		</td>
	</tr>
	<tr>
		<td>
			locality
		</td>
		<td>
			<input type="text" name="locality" value="<?php echo $data[8] ?>">
		</td>
	</tr>
	<tr>
		<td>
			City
		</td>
		<td>
			<input type="text" name="city" value="<?php echo $data[9] ?>">
		</td>
	</tr>
	<tr>
		<td>
			State
		</td>
		<td>
			<input type="text" name="state" value="<?php echo $data[10] ?>">
		</td>
	</tr>
	<tr>
		<td>
			Images
		</td>
		<td>
			<input type="file" name="img" value="<?php echo $data[11] ?>">
		</td>
	</tr>
	<!-- <tr>
		<td>
			Type
		</td>
		<td>
			<select name="type" value="<?php echo $data[12] ?>">
				<option value="1">select</option>
				<option value="Rent">Rent</option>
				<option value="Sale">Sale</option>

			</select>
		</td>
	</tr> -->
	<tr>
		<td>
			<input type="submit" name="submit">
		</td>
		<td>
			<input type="reset" name="reset">
		</td>
	</tr>
	</form>
	</table>
 </form>

 <?php 
if(isset($_POST['submit']))
{
	include 'config.php';
echo		$title=$_POST['title'];
		$category=$_POST['category'];
		$price=$_POST['price'];
		$furnished=$_POST['furnished'];
		$rooms=$_POST['rooms'];
		$area=$_POST['area'];
		$details=$_POST['details'];
		$locality=$_POST['locality'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$type=$_POST['type'];	
		$id = $_GET['id'];

		$name=$_FILES['img']['name'];
	$size=$_FILES['img']['size'];
	$tmp_name=$_FILES['img']['tmp_name'];
	$typee=$_FILES['img']['type'];

	if(!empty($name)){
		$location="uploads/";
		move_uploaded_file($tmp_name, $location.$name);
		$path = $location.$name;

		$update="update sale set title='$title', category='$category',price='$price',furnished='$furnished',rooms='$rooms',area='$area',details='$details',locality='$locality',city='$city',state='$state',type='$type' where id = '$id' ";
		$delete="delete from sale where id='$id'";
		mysqli_query($conn,$update) ;
		mysqli_query($conn,$delete);
	}
	else{


		$update="update sale set title='$title', category='$category',price='$price',furnished='$furnished',rooms='$rooms',area='$area',details='$details',locality='$locality',city='$city',state='$state',type='$type' where id = '$id' ";
		mysqli_query($conn,$update) or die(mysqli_error($conn));

		$delete="delete from sale where id='$id'";
		mysqli_query($conn,$delete);
		
	}
	header("location:entries.php");
}


  ?>