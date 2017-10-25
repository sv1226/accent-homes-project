<?php 
	include 'config.php';
	// echo $_GET['id'];
	$id = $_GET['id'];
	$select = "select * from signup where id ='$id'";
	$query = mysqli_query($conn, $select);
	$data = mysqli_fetch_array($query);
	

 ?>

 <?php
include '../header.php';
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
		<span><label>First Name</label></span>
		
		<span>	<input type="text" name="fname" class="textbox" value="<?php echo $data[1] ?>">
		</span></div>
		
		<div>
		<span>
		<label>
			Last Name
			</label>
			</span>
			<span><input type="text" name="lname" class="textbox"value="<?php echo $data[2] ?>" ></span>
			</div>
			
			<div>
			<span>
			<label>
			Username
			</label>
			</span>
			<span><input type="text" name="uname" class="textbox" value="<?php echo $data[3] ?>">
			</span>
			</div>
			<div>
			<span>
			<label>
			Password	
			</label>
			</span>

			<span><input type="password" name="pswrd" class="textbox" value="<?php echo $data[4] ?>"></span> 
	
			</div>
	
			<div>
			<span>
			<label>
			Email
			</label>
			</span>
			<span><input type="email" name="email" class="textbox" value="<?php echo $data[5] ?>"></span>
			</div>
	<div>
		<span><label>
			Contact Number
		</label></span>
		<span>	<input type="text" name="phone" class="textbox" value="<?php echo $data[6] ?>"></span>
		</div>

	
	<div>
	<span>
		<label>	City
</label>
</span>	
			<span><input type="text" name="city" class="textbox" value="<?php echo $data[7] ?>"></span>
			</div>
		<div>
		<span>
		<label>
	
			
			State
		</label>
		</span>
		<span>	<input type="text" name="state" class="textbox" value="<?php echo $data[8] ?>">
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
	if(isset($_POST['submit'])){

		include 'config.php';
		
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$uname=$_POST['uname'];
		$pswrd=$_POST['pswrd'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];
		$state=$_POST['state'];

		
		
		$update="update signup set fname='$fname',lname='$lname',username='$uname',password='$pswrd',email='$email',phone='$phone',city='$city',state='$state'";
		mysqli_query($conn,$update);
        
        header('location:users.php');
        

		// echo "SUCCESSFULLY REGISTERED";

	}
	?>

 

		 		<?php include '../footer.php'; ?>