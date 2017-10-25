<?php include 'header.php'; ?>
	<?php $type = $_GET['q'];  ?>
	<!--start-image-slider---->
			<div class="slider">					     
					<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">									           
						<div data-src="images/slider3.jpg">  </div> 
						<div data-src="images/slider2.jpg">  </div>
						<div data-src="images/slider1.jpg">  </div>
						<div data-src="images/slider2.jpg">  </div>
					</div>
					<div class="clear"> </div>					       
			</div>					
		 <!--End-image-slider---->
		 <!---start-content---->
		 <div class="content">
		 	<div class="top-grids">
		 		<div class="wrap">
			 		<div class="top-grid">
			 			<!-- <a href="sale.php?q=house&s=<?php echo $type ?>"> --><img src="images/icon1.png" title="icon-name"></a>
			 			<h3>House</h3>
			 			<p>Click on the button below to submit your information to sell your house. </p>
			 			<a class="button" href="sale.php?q=house&s=<?php echo $type ?>">Click Here</a>
			 		</div>
			 		<div class="top-grid">
			 			<a href="#"><img src="images/icon2.png" title="icon-name"></a>
			 			<h3>Flats</h3>
			 			<p>Click on the button below to submit your information to sell your flat.  </p>
			 			<a class="button" href="sale.php?q=Flats&s=<?php echo $type ?>">Click Here</a>
			 		</div>
			 		
			 		
			 		
			 		<div class="top-grid last-topgrid">
			 			<a href="#"><img src="images/icon3.png" title="icon-name"></a>
			 			<h3>Land</h3>
			 			<p>Click on the button below to submit your information to sell your land. </p>
			 			<a class="button" href="land1.php?q=land&s=<?php echo $type ?>">Click here</a>
			 		</div>
			 		
			 		<div class="clear"> </div>
		 		</div>
		 	</div>
		 	<div class="mid-grid">

		 	<!-- <?php echo $type; ?> -->
		 		

		 		<?php include 'footer.php'; ?>