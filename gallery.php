<?php include 'header.php'; 
	include 'config.php';
?>

		
			 <!---start-content---->
		 <div class="content">
		 	
		 	<div class="gallerys">
		 		<div class="wrap">
					<h3>gallery</h3>
					<div class="gallery-grids">
					<?php 
					$select= "select* from sale";
					$data=mysqli_query($conn,$select);
					
					while($res=mysqli_fetch_array($data)){ ?>
						<div class="gallery-grid">
							<a href="<?php echo $res[11]; ?>"><img src="<?php echo $res[11]; ?>" height='300' width='300' alt=""></a>
							<h4><?php echo $res[1] ?></h4>
							<p>See List of house types for a complete listing of housing types and layouts, real estate trends for shifts in the market and house or home for more general information.</p>
							<div class="gallery-button"><a href="#">More Info</a></div>
						</div>
				<?php } ?>		
						<!-- <div class="gallery-grid grid">
							<a href="images/slider3.jpg"><img src="images/slider3.jpg" alt=""></a>
							<h4>nonummy hendrerit mauris</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
							<div class="gallery-button"><a href="#">Read More</a></div>
						</div>
						<div class="gallery-grid">
							<a href="images/slider1.jpg"><img src="images/slider1.jpg" alt=""></a>
							<h4>hendrerit mauris. Phasellus</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
							<div class="gallery-button"><a href="#">Read More</a></div>
						</div> -->
						<div class="clear"> </div>
					</div>
					<!-- <div class="clear"> </div>
					<div class="gallery-grids">
						<div class="gallery-grid">
							<a href="images/slider3.jpg"><img src="images/slider1.jpg" alt=""></a>
							<h4>Fusce suscipit varius mi. Cum</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
							<div class="gallery-button"><a href="#">Read More</a></div>
						</div>
						<div class="gallery-grid grid">
							<a href="images/slider3.jpg"><img src="images/slider3.jpg" alt=""></a>
							<h4>sociis natoque penatibus et</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
							<div class="gallery-button"><a href="#">Read More</a></div>
						</div>
						<div class="gallery-grid">
							<a href="images/slider1.jpg"><img src="images/slider1.jpg" alt=""></a>
							<h4>hendrerit mauris. Phasellus</h4>
							<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
							<div class="gallery-button"><a href="#">Read More</a></div>
						</div>
					</div> -->
					<script type="text/javascript" src="js/jquery.lightbox.js"></script>
				    <link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
				  	<script type="text/javascript">
				    $(function() {
				        $('.gallery-grid a').lightBox();
				    });
				    </script>
				    <div class="clear"> </div>
				    <div class="projects-bottom-paination">
						<!-- <ul>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
						</ul> -->
					</div>
				</div>
				</div>
		 	<!---End-gallery----->
		 <!---End-content---->
		 
		 <?php include 'footer.php'; ?>