<?php
include 'header.php';
?>
	<!----End-wrap----->
		 <!---start-content---->
		 <div class="content">
		 	<!---start-contact---->
		 	<div class="contact">
		 		<div class="wrap">
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	
			    	 		
      				</div>
      			<div class="company_address">
				     	
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <!-- <form method="post" action="contact-post.html">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit"></span>
						  </div>
					    </form> -->

					    
					    <form action="" method="post" enctype="multipart/form-data">
					    
		<div>
		<span><label>Title</label></span>
		
		<span>	<input type="text" name="title" class="textbox">
		</span></div>
		<div>
		<span><label>
			Category
		</label>
		</span>
			<!-- $select= "select * from category";
			$data= mysqli_query($conn,$select); -->
			<select name="category" class="textbox">
			<option value="1">select</option>
			<option value="2">House</option>
			<option value="3">Flat</option>
			<option value="4">PG</option>
			<option value="5">Hostel</option>
			
			</select>
		</div>
		<div>
		<span>
		<label>
			Price
			</label>
			</span>
			<span><input type="text" name="price" class="textbox" ></span>
			</div>
			<div>
			<span><label>
			Furnished
				</label>
				</span>
			<span><input type="radio" name="furnished" value="Yes">Yes
			<input type="radio" name="furnished" value="No">No</span>
			</div>
			<div>
			<span>
			<label>
			Rooms
			</label>
			</span>
			<span><input type="text" name="rooms" class="textbox">
			</span>
			</div>
			<div>
			<span>
			<label>
			Area Sq. Feet
			</label>
			</span>

			<span><input type="text" name="area" class="textbox"></span> 
	
			</div>
	
			<div>
			<span>
			<label>
			Details
			</label>
			</span>
			<span><input type="text" name="details" class="textbox"></span>
			</div>
	<div>
		<span><label>
			locality
		</label></span>
		<span>	<input type="text" name="locality" class="textbox"></span>
		</div>

	
	<div>
	<span>
		<label>	City
</label>
</span>	
			<span><input type="text" name="city" class="textbox"></span>
			</div>
		<div>
		<span>
		<label>
	
			
			State
		</label>
		</span>
		<span>	<input type="text" name="state" class="textbox">
		</span>
		</div>
		<div>
		<span>
		<label>
			Images
		</label>
		</span>
		<span>	<input type="file" name="img">
		</span>
		</div>
		<div>
		<span>
		<label>
			Type
		</label>
		</span>
		<span>	<select name="type">
				<option value="1">select</option>
				<option value="2">Rent</option>
				<option value="3">Sale</option>

			</select>
		</span>
		</div>
		<div>
		<span>
		<input type="submit" name="submit">
				
		<input type="reset" name="reset">
		</span>
		</div>


				    </div>
  				</div>				
			  </div>
			</div>
			</div>
		 	<!---End-contact---->
		 <!---End-content---->
		<?php 
		include 'footer.php'; ?>



		<?php 
	if(isset($_POST['submit'])){

		include 'config.php';
		$title=$_POST['title'];
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

		$name=$_FILES['img']['name'];
	$size=$_FILES['img']['size'];
	$tmp_name=$_FILES['img']['tmp_name'];
	$typee=$_FILES['img']['type'];

	if(!empty($name)){
		$location="uploads/";
		move_uploaded_file($tmp_name, $location.$name);
		$path = $location.$name;

	
	$insert="insert into sale values('','$title','$category','$price','$furnished','$rooms','$area','$details','$locality','$city','$state','$path','$type')";
	mysqli_query($conn,$insert);
	}
	
}

 ?>