<?php 
include 'header.php'; ?>	<!----End-wrap----->
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
				  	<h3>Login</h3>
					    <!-- <form method="post" action="contact-post.html">
					    	<div>
						    	<span><label>NAME</label></span>
8=de						    	<span><input name="userName" type="text" class="textbox"></span>
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
		<span><label>Username</label></span>
		
		<span>	<input type="text" name="uname" class="textbox">
		</span></div>
		<div>
			<span>
				Password
			</span>
			<span>
				<input type="password" name="pswrd">
			</span>
		</div>
		
		<div>
		<span>
		<input type="submit" name="submit" value="Login">
				
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
	if(isset($_POST['submit']))
	{	
		include 'config.php';
		$uname=$_POST['uname'];
		$pswrd=$_POST['pswrd'];

		$select="select * from signup where username='$uname' && password='$pswrd' ";
		$data=mysqli_query($conn,$select);
		$res=mysqli_fetch_array($data);

		if($res)
		{
			$_SESSION['user_id']=$res[0];
			header('location:index.php');
		}
         
		else{
			echo"Failed";
			}
		}


 ?>