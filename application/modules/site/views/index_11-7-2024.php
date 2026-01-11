<div role="main" class="main">
	<div class="home-concept" style="margin-top: 25px;">
		<div class="container">
			<div class="row center">
				<span class="sun"></span>
				<span class="cloud"></span>
				<div class="col-md-2 col-md-offset-1">
					<div class="process-image" data-appear-animation="bounceIn">
						<img src="<?= base_url(); ?>fwedget/img/home-concept-item-2022.png" alt="" />
						<strong>Strategy</strong>
					</div>
				</div>
				<div class="col-md-2">
					<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="200">
						<img src="<?= base_url(); ?>fwedget/img/home-concept-item-222.png" alt="" />
						<strong>Planning</strong>
					</div>
				</div>
				<div class="col-md-2">
					<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="400">
						<img src="<?= base_url(); ?>fwedget/img/development.png" alt="" />
						<strong>Development</strong>
					</div>
				</div>
				<div class="col-md-4 col-md-offset-1">
					<div class="project-image">
						<div id="fcSlideshow" class="fc-slideshow">
							<ul class="fc-slides">
								<?php foreach ($slider as $row) {
									$img_path = base_url() . 'slider_img/';
									// if($row->image_file != NULL){
									$src = $img_path . $row->image_file;
									//}
								?>
									<li><a href="#"><img class="img-responsive" src="<?= $src ?>" /></a></li>
								<?php } ?>
							</ul>
						</div>
						<strong class="our-work">Our Work</strong>
					</div>
				</div>
				
			</div>

		</div>
	</div>
	<hr class="tall" />
	
	<div class="container counter">
		<div class="row counter-section">
			<div class="col-lg-3 col-md-6 counter-box">
				<div class="count">
					<img src="<?= base_url('fwedget/images/icon_img/1.png'); ?>" alt="">
					<div>
						<h4 class="mb-1 counter_value"> <?= $years_of_experience?>+</h4>
						<h5 class="mt-2 count-title">Years of Experience</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 counter-box">
				<div class=" count">
					<img src="<?= base_url('fwedget/images/icon_img/2.png'); ?>" alt="">
					<div>
						<h4 class="mb-1 counter_value"><?= $number_of_clients?> +</h4>
						<h5 class="mt-2 count-title">Number of Clients</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 counter-box">
				<div class=" count">
					<img src="<?= base_url('fwedget/images/icon_img/3.png'); ?>" alt="">
					<div>
						<h4 class="mb-1 counter_value"><?= $successful_projects?>+</h4>
						<h5 class="mt-2 count-title">Successful Projects</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 counter-box">
				<div class=" count">
					<img src="<?= base_url('fwedget/images/icon_img/4.png'); ?>" alt="">
					<div>
						<h4 class="mb-1 counter_value"><?= $running_services?> +</h4>
						<h5 class="mt-2 count-title">Running Services</h5>
					</div>
				</div>
			</div>



		</div>
	</div>
	<hr class="tall" />
	

	<div class="container">


		<div class="row">
			<div class="col-md-12">
				<h2>Our <strong>Services</strong></h2>

				<div class="row">

					<div class="col-md-3">
						<a href="<?= base_url('service/enterprise-resource-planning-erp') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img src="<?= base_url('fwedget/img/slices/Custom-Software.png'); ?>" class='animatinTrans'>
								<!-- <i class="fa fa-cogs"></i> -->

								<div class="service-name">Custom Software Development</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?= base_url('service/web-application-development') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img src="<?= base_url('fwedget/img/slices/Web-Application.png'); ?>" class='animatinTrans'>
								<!-- <i class="fa fa-globe"></i> -->
								<div class="service-name">Web Application Development </div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?= base_url('service/android-apps-development') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img src="<?= base_url('fwedget/img/slices/Mobile-Apps-&-Games.png'); ?>" class='animatinTrans'>

								<!-- <i class="fa fa-gamepad"></i> -->
								<div class="service-name">Mobile Apps & Game Development</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?= base_url('service/ict-consultancy') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img src="<?= base_url('fwedget/img/slices/ICT-Consultancy.png'); ?>" class='animatinTrans'>
								<!-- <i class="fa fa-users"></i> -->
								<div class="service-name">ICT Consultancy</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?= base_url('service/ict-training') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img src="<?= base_url('fwedget/img/slices/ICT-Training.png'); ?>" class='animatinTrans'>
								<!-- <i class="fa fa-graduation-cap"></i> -->
								<div class="service-name">ICT Training</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?= base_url('service/outsource-project-development') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img src="<?= base_url('fwedget/img/slices/Outsource-Project.png'); ?>" class='animatinTrans'>
								<!-- <i class="fa fa-magic"></i> -->
								<div class="service-name">Outsource Project Development</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?= base_url('service/blockchain-technology') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img src="<?= base_url('fwedget/img/slices/Blockchain-Technology.png'); ?>" class='animatinTrans'>
								<!-- <i class="fa fa-btc"></i> -->
								<div class="service-name">Blockchain Technology</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?= base_url('service/natural-language-processing-nlp') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img src="<?= base_url('fwedget/img/slices/Natural-Language.png'); ?>" class='animatinTrans'>
								<!-- <i class="fa fa-leaf"></i> -->
								<div class="service-name">Natural Language Processing (NLP)</div>
							</div>
						</a>
					</div>

				</div>
			</div>

		</div>

		<hr class="tall" />

		<div class="row">
			<div class="col-md-12">
				<h2>Our <strong>Products</strong></h2>
				<div class="row featured-boxes">
					<?php foreach ($homepage_product as $item) { ?>
						<div class="col-md-3 col-sm-6">
							<div class="featured-box featured-box-secundary">
								<div class="box-content">
									<a href="<?= base_url() . 'product/' . $item->slug; ?>">
										<?php
										$img_path = base_url() . 'product_img/';
										if ($item->image_file != NULL) {
											$src = $img_path . $item->image_file;
											echo "<img src='$src' alt='$item->name' class='img-circle animatinTrans'>";
										}
										?>
									</a>
									<div class="title">
										<h4><?= $item->name ?></h4>
									</div>
									<p>
										<!-- Donec id elit non mi porta gravida at eget metus. Fusce dapibus. -->
										<a href="<?= base_url() . 'product/' . $item->slug; ?>" class="read-more">read more <i class="fa fa-angle-right"></i></a>
									</p>
								</div>
							</div>
						</div>
					<?php } ?>
					
				</div>
			</div>
			<div class="product-btn">
				<a href="<?= base_url() . 'products' ?>">See More</a>
			</div>
		</div>

		<!-- <hr class="tall" />

		<div class="row">
			<div class="col-md-12">
				<h2>Our Notable <strong>Projects</strong></h2>
				<div class="row featured-boxes notable">

				<?php
					foreach($notable_data as $item){ ?>
						
						<div class="col-md-3 col-sm-6">
							<div class="notable-box">

								<a href="<?= $item->website_link ?>" target="_blank">
									<img src="<?= base_url('notable_img/').$item->notable_logo?>" class="img-circle animatinTrans" alt="">
								</a>


								<h4 class="notable-title" title=" <?=$item->notable_title?>"><?=$item->notable_title?></h4>
								<a href="<?= base_url() . 'notable_details/'.$item->id ?>">Read More</a>


							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="product-btn">
				<a href="<?= base_url() . 'notable_products' ?>">See More</a>
			</div>
		</div> -->

		<!-- <hr class="tall" />

		<div class="row center">
			<div class="col-md-12">
				<h4 class="lead tall">Using Technology for Work</h4>
			</div>
		</div>
		<div class="row center">
			<div class="owl-carousel" data-plugin-options='{"items": 12, "autoplay": true, "autoplayTimeout": 10000}'>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/html.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/css.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/js.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/jquery.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/angular.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/mysql.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/php.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/ci.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/cake.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/laravel.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/yii.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/bootstrap.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/android.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/apple.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/windows.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/wordpress.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/joomla.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/magento.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/node.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/react.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/vue.png'); ?>" alt="" style="width:100%;">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/technology/mean.png'); ?>" alt="" style="width:100%;">
				</div>
			</div>
		</div> -->

		<hr class="tall" />

		<div class="row center">
			<div class="col-md-12">
				<h4 class="lead tall">Our Valuable Clients</h4>
			</div>
		</div>
		<div class="row center">
			<div class="owl-carousel" data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/bangladesh_govt.png'); ?>" alt="">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/a2i.png'); ?>" alt="">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/ict-divition.png'); ?>" alt="">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/bangladesh_parliament.png'); ?>" alt="">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/bangladesh_scouts.png'); ?>" alt="">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/bangladesh_statistics.png'); ?>" alt="">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/caritas.png'); ?>" alt="">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/nilg.png'); ?>" alt="">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/zila-parishad-nator.png'); ?>" alt="">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/impress-group.png'); ?>" alt="">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/ddlg.png'); ?>" alt="">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/undp.png'); ?>" alt="">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/jica.png'); ?>" alt="">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/badc.png'); ?>" alt="">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/family-planning.png'); ?>" alt="">
				</div>
				<div>
					<img class="img-responsive" src="<?= base_url('fwedget/img/clients/crp-savar.png'); ?>" alt="">
				</div>
			</div>
		</div>

	</div>

	<section class="featured footer map">
		<div class="container">
			<div class="row">

				<div class="col-md-6">
					<div class="recent-posts push-bottom">
						<h2>Image <strong>Gallery</strong></h2>
						<!-- <h2>Latest <strong>Blog</strong> Posts</h2> -->
						<div class="row">
							<div class="owl-carousel" data-plugin-options='{"items": 1, "autoplay": true, "autoplayTimeout": 3000}'>
								<?php
									foreach($gallery_images as $item)
									{
									?>

								<div>
									<img class="img-responsive" src="<?= base_url('gallery_img/').$item->image; ?>" alt="" style="border: 1px solid #ccc; padding: 3px; height: 365px !important; width: 100%;">
								</div>
								<?php
									}

								?>
								
								
								
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<h2><strong>Video</strong> Gallery</h2>
					<iframe width="100%" height="365" src="https://www.youtube.com/embed/X3a0IFr5Erw?si=DECKX26X4fqW3O9k&amp;start=8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					<!-- <iframe width="100%" height="365" src="https://www.youtube.com/watch?v=X3a0IFr5Erw&t=5s" frameborder="0" allow=" autoplay; encrypted-media" allowfullscreen></iframe> -->
					<!-- <iframe width="100%" height="350" src="https://www.youtube.com/embed/4d-nTXTMDTo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
				</div>

			</div>
		</div>
	</section>
<!-- <style>
	.owl-carousel .owl-controls {
		visibility: hidden;
	}
</style> -->
</style>
	<section class="client-carousel" >
		<div class="container">
			<div class="row center">
				<div class="col-md-12">
					<div class="row">
						<div class="owl-carousel" data-plugin-options='{"items": 1, "autoplay": true, "autoplayTimeout": 10000}' style="margin-top:0; padding-top: 0;">
							<div>
								<blockquote style="padding: 0;" class="main-carousel">
									<img src="<?= base_url('fwedget/img/testimonials/mark.jpg') ?>"  class="img-circle">
									<p ><i class="fa fa-quote-left"></i> We are very happy with Mysoftheaven (BD) Ltd; very serious and consistent in their work. Nazmul sakib and his team of programmers have always been there for us all the time. This is a company I can recommend to anyone to perform any work.</p>
									<span >- <strong>MARK ZEENS</strong> Coordinator, itrueque.com</span>
								</blockquote>
							</div>
							<div>
								<blockquote style="padding: 0;" class="main-carousel">
									<img src="<?= base_url('fwedget/img/testimonials/nila.jpg') ?>"  class="img-circle">
									<p ><i class="fa fa-quote-left"></i> When our own skills did not manage to get where we wanted, Mysoftheaven (BD) Ltd. took care of the rest. The expertise, customer service and "follow up" we experienced from Mysoftheaven (BD) Ltd. were simply flawless.</p>
									<span >- <strong>NILA MEHETA</strong> Coordinator, Real Estate Builders & Construction Company, Norway.</span>
								</blockquote>
							</div>
							<div>
								<blockquote style="padding: 0;" class="main-carousel">
									<img src="<?= base_url('fwedget/img/testimonials/robert.jpg') ?>"  class="img-circle">
									<p ><i class="fa fa-quote-left"></i> We thank Mysoftheaven (BD) Ltd. for the wonderful job in helping us develop our program. Everyone was professional, excellent and hard working. Thanks to them, we were able to achieve our goal on time, and we look forward to continue working with them in the future.</p>
									<span >- <strong>ROBERT JACKOB</strong> Managing Partner, Intelisystem inc.</span></span>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<script>
	$(document).ready(function() {
		var l=$('#fcSlideshow').find('.fc-flip').length;
		if(l > 1){
			$('#fcSlideshow').find('.fc-flip').eq(1).remove();
		};
	});

 setTimeout(() => {
	var l=$('#fcSlideshow').find('.fc-flip').length;
		if(l > 1){
			$('#fcSlideshow').find('.fc-flip').eq(1).remove();
		};
 }, 0);
 setInterval(() => {
	var l=$('#fcSlideshow').find('.fc-flip').length;
		if(l > 1){
			$('#fcSlideshow').find('.fc-flip').eq(1).remove();
		};
 }, 1000);
</script>
