<section id="slider" class="slider-parallax swiper_wrapper clearfix" data-autoplay="7000" data-speed="650" data-loop="true">
	<div class="slider-parallax-inner">
		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<!-- <div class="swiper-slide dark" style="background-image: url('<?=base_url();?>fwedget/images/slider/swiper/11.jpg');"></div> -->
				
				<?php foreach ($slider as $row) { ?>

					<?php 
	                     $img_path = base_url().'slider_img/';
	                     if($row->image_file != NULL){
	                        $src= $img_path.$row->image_file;
	                     }
	                  ?>
					<div class="swiper-slide" style="background-image: url('<?=$src?>'); background-position: center top;">
						<div class="container clearfix">
							<div class="slider-caption">
								<!-- <h2 data-caption-animate="fadeInUp"><?=$row->title?></h2> -->
								<!-- <p data-caption-animate="fadeInUp" data-caption-delay="200"><?=$row->details?></p> -->
							</div>
						</div>
					</div>	
				<?php } ?>

				
			</div>
			<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
			<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
			<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
		</div>

	</div>

</section>

<section id="content">
	<div class="content-wrap">
		<div class="promo promo-light promo-full header-stick notopborder" style="padding-bottom: 0px;">
			<div class="container clearfix">
				<h3>Call us today at <span>+880255020230</span> or Email us at <span>info@mysoftheaven.com</span></h3>
				<span>We strive to provide Our Customers with Top Notch Support to make their Experience Wonderful</span>
				<a href="<?=base_url().'contact-us'; ?>" class="button button-dark button-xlarge button-rounded">Contact Us</a>
			</div>
		</div>

		<div class="section" style="padding-top: 15px; margin-bottom: 20px; padding-bottom: 0;">
			<div class="container clearfix">
				<div class="center">
					<h2>Our Services</h2>
					<!-- <span>Canvas comes with 100+ Feature oriented Shortcodes that are easy to use too.</span> -->
				</div>

				<div class="clear bottommargin-sm"></div>

				<div class="row">
					<?php foreach ($homepage_services as $item): ?>
							<div class="col-md-4">
								<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">
									<div class="fbox-icon">
										<a href="<?=base_url().'service/'.$item->slug;?>"><i class="fa <?=$item->fa_icon?> fa-3x"></i></a>
									</div>
									<h3><?=$item->name?></h3>
									<p><?=$item->short_desc?></p>
								</div>
							</div>		
						<?php endforeach ?>	
				</div>
			
			</div>
		</div>

		<div class="container clearfix">
			<div class="heading-block center">
				<h3>Some of our <span>Recent</span> Projects</h3>
				<span>We have worked on some Awesome Projects that are worth boasting of.</span>
			</div>

			<div id="oc-portfolio" class="owl-carousel portfolio-carousel portfolio-nomargin carousel-widget" data-margin="1" data-pagi="false" data-autoplay="5000" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-lg="4">
				<?php foreach ($homepage_portfolio as $item) { ?>
					
					<div class="oc-item">
						<div class="iportfolio">
							<div class="portfolio-image">
								<a href="<?=$item->url;?>">
								<?php 
				                     $img_path = base_url().'portfolio_img/';
				                     if($item->image_file != NULL){
				                        $src= $img_path.$item->image_file;
				                        // echo "<img src='$src'>";
				                        echo "<img src='$src' alt='$item->name' >";
				                     }
				                  ?>
							</a>
							<div class="portfolio-overlay">
								<a href="<?=$item->url;?>" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="<?=$item->url;?>"><?=$item->name;?></a></h3>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<section id="content">
	<div class="content-wrap" style="padding-bottom: 10px;">
		<div class="container clearfix">
			<div class="heading-block center">
				<h3>Some of our <span>Featured</span> Products</h3>
			</div>
			<div class="row"> 
				<?php foreach ($homepage_product as $item) { ?>
					
					<div class="col-md-3" style="margin-bottom:20px;">
						<!-- <h4>Education Management System</h4> -->
						<a href="<?=base_url().'product/'.$item->slug;?>" >
							<?php 
			                     $img_path = base_url().'product_img/';
			                     if($item->image_file != NULL){
			                        $src= $img_path.$item->image_file;
			                        // echo "<img src='$src'>";
			                        echo "<img src='$src' alt='$item->name' >";
			                     }
			                  ?>
						</a>
					</div>

				<?php } ?>
				
			</div>
		</div>
	</div>
</section><!-- #content end -->

<section id="content">
	<div class="content-wrap" style="padding-bottom: 0px;">
		<div class="container clearfix">
			<div class="col_half">

				<h4>Client Testimonials</h4>
				<div class="fslider testimonial" data-animation="fade" data-arrows="false">
					<div class="flexslider">
						
							<?php foreach ($testimonial as $item) { ?>
					
								<div class="slider-wrap">
									<div class="slide">
										<div class="testi-image">
											<a href="#">
											<?php 
							                     $img_path = base_url().'testimonial_img/';
							                     if($item->image_file != NULL){
							                        $src= $img_path.$item->image_file;
							                        // echo "<img src='$src'>";
							                        echo "<img src='$src' alt='$item->client_name' >";
							                     }
							                  ?>
											</a>
										</div>
										<div class="testi-content">
											<p><?=$item->details;?></p>
											<div class="testi-meta">
												<?=$item->client_name;?>
												<span><?=$item->designation;?></span>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
					</div>
				</div>
			</div>

			<div class="col_half col_last">
				<h4>How We Work</h4>
				<img src="<?=base_url();?>fwedget/images/how-we-work.png" height="170" style="vertical-align: top" class="img-responsive">
			</div>

		</div>
	</div>
</section>				

<section id="content" style="padding-top: 0px;">
	<div class="content-wrap"  style="padding-top: 0px;">
		<div class="section footer-stick" style="padding-top: 30px;">
			<h3 class="center">Our Valuable Clients</h3>
			<div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-nav="true" data-pagi="false" data-autoplay="5000" data-items-xxs="3" data-items-xs="3" data-items-sm="5" data-items-md="6" data-items-lg="7" data-loop="true">
				<?php foreach ($homepage_client as $item) { ?>
					
					<div class="oc-item">
						<!-- <h4>Education Management System</h4> -->
						<a href="">
							<?php 
			                     $img_path = base_url().'client_img/';
			                     if($item->image_file != NULL){
			                        $src= $img_path.$item->image_file;
			                        // echo "<img src='$src'>";
			                        echo "<img src='$src' alt='$item->client_name' >";
			                     }
			                  ?>
						</a>
					</div>

				<?php } ?>
			</div>
		</div>				
	</div>
</section>