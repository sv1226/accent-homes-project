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
				  	<h3>For Any Further Detail Contact Us</h3>
					    <form method="post" action="" enctype="multipart/form-data">
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
						   		<span><input type="submit"  name="submit"></span>
						  </div>
					    </form>

			


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
		
	if(isset($_POST['submit']))
	{

		include 'config.php';
		$name=$_POST['UserName'];
		$email=$_POST['UserEmail'];
		$mobile=$_POST['UserPhone'];
		$subject=$_POST['UserMsg'];
			
	$insert="insert into contact values('','$name','$email','$mobile','$subject')";
	mysqli_query($conn,$insert);
header('location:aftersend.php');

	}
	
	

 ?>