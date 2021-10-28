<?php include('header.php') 
?>
<!--start of banner section-->
        <section class="bannerSec">
        <div class="container">
        <div class="row">
          <div class="col-lg-12">
                  <div id="slider" class="carousel slide" data-ride="carousel">
   <!-- Indicators -->
             <ol class="carousel-indicators">
             <li data-target="#slider" data-slide-to="0" class="active"></li>
             <li data-target="#slider" data-slide-to="1"></li>
             <li data-target="#slider" data-slide-to="2"></li>
             </ol>
      <!--create slider-->
      <div class="carousel-inner">
      <div class="item active">
      <img src="images\banner.jpg">
      <div class="carousel-caption">
        <h1>Welcome<br>Real Canas Seeds<br></h1>
        <p>We are providing one of the best market demanded<br> seeds and we ensure that our quality would not compromise</p>
        <a href="contactus.php">
        	<button type="button" class="btn btn-success btn-lg">
          ContactUs</button></a>
      </div>      
    </div>
   <div class="item">
    <img src="images\banner.jpg">
   </div>
   <div class="item">
    <img src="images\banner.jpg">
   </div>
</div>
</div>
</div>
</div>
</div>
</section>
   <!--end of banner section-->

<!--start of services section-->
<section class="Services">
	<div class="container">
		<div class="row">
			<center>
				<h2>Our Products</h2>
			</center>
			<br>
			<div class="col-sm-4">
				<img src="images/star.png">
				<h3 class="seo">SEO</h3>
				<p>It is a long established fact<br>
				   that a reader will be distr-<br>
				   -cted by the readable content<br>
				   of a page when looking at its<br>
				   layout</p>
			</div>
			<div class="col-sm-4">
				<img src="images/star.png">
				<h3 class="service">SERVICES</h3>
				<p>It is a long established fact<br>
				   that a reader will be distr-<br>
				   -cted by the readable content<br>
				   of a page when looking at its<br>
				   layout</p>
			</div>
			<div class="col-sm-4">
				<img src="images/star.png">
				<h3 class="logo">LOGO</h3>
				<p>It is a long established fact<br>
				   that a reader will be distr-<br>
				   -cted by the readable content<br>
				   of a page when looking at its<br>
				   layout</p>
			</div>
		</div>
	</div>
</section>
<!--end of service section-->

<!-- start of video gallery section-->
<section class="Video_Gallery">
	<div class="container">
		<div class="row">
			<br>
			<center>
				<h2>Video Gallery</h2>
			</center>
			<br>
			
			<div class="col-sm-8">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Y63oofQycXQ" allowfullscreen></iframe>
                </div>
			</div>
			
			<div class="col-sm-4">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IBW34r4JbWA" allowfullscreen></iframe><br>
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JgPa6rU9z6I" allowfullscreen></iframe><br>
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nccrA8oz0Qc" allowfullscreen></iframe><br>
            </div>
            
            <center>          
            	<br>
            	<button class="btn btn-success btn-lg">View More</button>
            </center>
		</div>
	</div>
</section>
<!--end of video gallery section-->

<!--start of about us section-->
<section class="AboutUs">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<br>
				<div class="jumbotron">
					<div class="col-sm-7">
					<h2>ABOUT US</h2>
					<br>
					<p>Lorem ipsum dolor sit elit, consectuer adispicting<br>
					   elit,sed do eisumod tempor incidendent at labour et<br>
					   dolare magnate segnata. El chezore erong defects and<br>
					   lorem ipsum significanta.
					</p>
				    </div>
				    <div class="col-sm-5">
				    	<img src="images/seeds_aboutUsSection.jpg">
				    </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--end of about us section-->
<!-- start of review secton-->
<section class="review">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<img src="images/left-arrow(blue).png" class="img-left">
			</div>
			<div class="col-sm-2">
				<img src="images/profile-photo.png" class="img-client">
			</div>
			<div class="col-sm-4">
				<h2>LARA ANGIE</h2><br>
				<p>I reviewed all the products and it was a great<br>
				   experience for me this time.</p>
			</div>
			<div class="col-sm-3">
				<img src="images/right-arrow(blue).png" class="img-right">
			</div>
		</div>
	</div>
</section>
<!--end of review section-->

<!--start of email section-->
<section class="emailSec">
	<div class="container">
		<div class="row">
			<div class="well-lg">
        		<center>
				<form action="emailConnection.php" method="post">
					<label>Email ID</label>
					<input type="email" name="email" id="email" class="email" placeholder="Email ID" required="">
					<input type="submit" value="Subscribe" class="btn btn-lg">
				</form>
				</center>
			</div>
		</div>
	</div>
</section>
<!--end of email section-->
<?php include('footer.php')?>