<?php include('header.php') 
?>
	<!--main banner section-->
	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<img src="images/Contact-Page.jpg">
					<div class="carousel-caption">
					<center>
					<h1>Contact Us</h1>
					<p>Feel free to contact us. We provide the best services of seeds to our <br>
					   customers and promise better quality.</p>
					</center>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--contact form section-->
	<section class="contact-form">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h4>You can provide all the necessary information<br>in the form below</h4>
					<div class="jumbotron">
						<h2>Real Canas Seeds</h2>
						<form action="contactform.php" method="post">
							<label>Full Name</label><br>
							<input type="name" name="name" id="name" class="name" required="" placeholder="Full Name"><br>
							<label>Select Country</label><br>
							<input type="name" name="country" id="country" class="country" required="" placeholder="Select Country"><br>
							<label>Contact No.</label><br>
							<input type="text" name="contact" id="contact" class="contact" required="" placeholder="Contact No."><br>
							<label>Email Address</label><br>
							<input type="email" name="email" id="email" class="email" required="" placeholder="Email Address"><br>
							<label>Comments/Suggestions</label><br>
							<input type="text" name="comments" id="comments" class="comments" required="" placeholder="Provide your feedback here"><br>
							<center>
							<button type="submit" class="btn btn-success btn-lg">Submit</button>
							</center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include('footer.php')
?>