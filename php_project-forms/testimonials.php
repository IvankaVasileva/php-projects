<?php include 'header.php';?>



		<section class="testimonials">
			<div class="container">
				<div class="row center_row padding_row">
					<div class="col-md-12">
						<h3>WE LOVE OUR CLIENTS</h3>
						<h5>TESTIMONIALS</h5>
						<img src="./css/images/testimonials-image.jpg" alt="">
						<p class="padding_row">Amazing and SUPER easy to incorporate, looks like a great theme, full functionality indeed</p>
						<h2>Jane Navarro</h2>
					</div>
				</div>
		</section>

		<section class="testimonials-form">
			<div class="container-fluid">
				<div class="row center_row">
					<div class="col-md-4 mr_auto padding_row">
						<form action="testimonials_page.php" target="_blank" method="get">
						  <input type="text" name="fullname" placeholder="Full Name" class="form-control"><br>
						  <input type="email" name="emailaddress" placeholder="Email" class="form-control"><br>
						  <textarea rows="4" cols="50" name="comment" placeholder="Your Testimonial" class="form-control"></textarea><br>
						  <input type="hidden" name="testimonials" value="testimonials">
						  <input type="submit" value="Send">
						</form>

					</div>
				</div>
			</div>
		</section>



<?php include 'footer.php';?>