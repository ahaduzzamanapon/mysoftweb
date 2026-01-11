<section id="page-title">
	<div class="container clearfix">
		<h1><?=$meta_title?></h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_url()?>">Home</a></li>
			<li class="active"><?=$meta_title?></li>
		</ol>
	</div>
</section><!-- #page-title end -->

<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">

			<!-- Contact Form============================================= -->
			<div class="col_half">
				<div class="fancy-title title-dotted-border">
					<h3>Send us an Email</h3>
				</div>
				<div class="contact-widget">
					<div class="contact-form-result"></div>
					<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">
						<div class="form-process"></div>
						<div class="col_one_third">
							<label for="template-contactform-name">Name <small>*</small></label>
							<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
						</div>
						<div class="col_one_third">
							<label for="template-contactform-email">Email <small>*</small></label>
							<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
						</div>
						<div class="col_one_third col_last">
							<label for="template-contactform-phone">Phone</label>
							<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
						</div>
						<div class="clear"></div>
						<div class="col_full">
							<label for="template-contactform-subject">Subject <small>*</small></label>
							<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
						</div>						
						<div class="clear"></div>
						<div class="col_full">
							<label for="template-contactform-message">Message <small>*</small></label>
							<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="11" cols="30"></textarea>
						</div>
						<div class="col_full hidden">
							<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
						</div>
						<div class="col_full">
							<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment</button>
						</div>
					</form>
				</div>
			</div><!-- Contact Form End -->

			<!-- Google Map ============================================= -->
			<div class="col_half col_last">
				<div class="row clear-bottommargin">
				<?php foreach ($contact as $item): ?>
      				<div class="col-md-12 col-sm-12 bottommargin clearfix">
						<div class="feature-box fbox-center fbox-bg fbox-plain">
							<div class="fbox-icon">
								<a href="#"><i class="icon-map-marker2"></i></a>
							</div>
							<address>
		                          <strong><?=$item->title?></strong><br>
		                          <?=$item->address?><br>
		                          Tel: <?=$item->phone?> <br>
		                          Email: <?=$item->email?>
	                      	</address>  
						</div>
					</div>
                  <?php endforeach ?>

				</div>
			</div><!-- Google Map End -->
			<div class="row clear-bottommargin">
  				<div class="col-md-12 col-sm-12 bottommargin clearfix">
					<section id="google-map" class="gmap" style="height: 310px;"></section>
				</div>
			</div>
		</div>
	</div>
</section><!-- #content end -->