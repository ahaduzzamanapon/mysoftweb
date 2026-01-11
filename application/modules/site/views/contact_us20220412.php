
<div role="main" class="main">
	<section class="page-top">
		<div class="container">
			<div class="row">
				<div class="col-md-7"><h1><?=$meta_title?></h1></div>
				<div class="col-md-5 text-right">
					<ul class="breadcrumb">
						<li><a href="<?=base_url()?>">Home</a></li>
						<li class="active"><?=$meta_title?></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<hr class="tall_slim">

		<div class="row">
			<div class="col-md-6">

				<div class="alert alert-success hidden" id="contactSuccess">
					<strong>Success!</strong> Your message has been sent to us.
				</div>

				<div class="alert alert-danger hidden" id="contactError">
					<strong>Error!</strong> There was an error sending your message.
				</div>

				<h4 class="push-top">Contact <strong>Form</strong></h4>
				<form id="" action="<?=base_url().'site/sendemail'?>" method="POST">
					<div class="row">
						<div class="form-group">
							<div class="col-md-6">
								<label>Your name *</label>
								<input type="text" id="" name="name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" required>
							</div>
							<div class="col-md-6">
								<label>Your email address *</label>
								<input type="email" id="" name="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<label>Subject</label>
								<input type="text" id="" name="subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<label>Message *</label>
								<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="" required></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<h4>The <strong>Office</strong></h4>
				<ul class="list-unstyled">
					<li><i class="fa fa-map-marker"></i> <strong>Head Office:</strong>
						Raisa & Shikder Tower, Level-5, 3/8, North Pirerbag, 60 Fit Road, Mirpur, Dhaka-1207. 
					</li>
					<li><i class="fa fa-map-marker"></i> <strong>Corporate Office:</strong>
						8813 NW 23 Street. Miami, FL 33172, USA.
					</li>
					<li><i class="fa fa-phone"></i> <strong>Phone:</strong> <a href="tel:02 58054029">+88 02 58054029</a>, <a href="tel:01970776606">+88 01970776606</a></li>
					<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:info@mysoftheaven.com">info@mysoftheaven.com</a></li>
				</ul>

				<hr />
			
					<h4>Google <strong>Maps</strong></h4>
				<!-- <div id="googlemaps" class="google-map"></div> -->
					<div class="mapouter">
						<div class="gmap_canvas">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3650.7415276878132!2d90.365331!3d23.7922168!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c16ef5331b7d%3A0x5ed74a7e9e8cbf5!2sMysoftheaven%20(BD)%20Ltd.!5e0!3m2!1sen!2sbd!4v1619586395500!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
								<!-- <a href="https://www.embedgooglemap.net">embedgooglemap.net</a> -->


								<style type="text/css">
									.mapouter{position:relative;text-align:right;}
									.gmap_canvas {overflow:hidden;background:none!important;}
								</style>
						</div>
						
					</div>				
			</div>

		</div>
		
		<hr class="tall">
	</div>
</div>