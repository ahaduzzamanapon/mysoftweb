<div role="main" class="main">
<div class="home-concept" style="margin-top: 25px;">
	<div class="container">
		<div class="row center">
			<span class="sun"></span>
			<span class="cloud"></span>
			<div class="col-md-2 col-md-offset-1">
				<div class="process-image" data-appear-animation="bounceIn">
					<img src="<?=base_url();?>fwedget/img/home-concept-item-111.png" alt="" />
					<strong>Strategy</strong>
				</div>
			</div>
			<div class="col-md-2">
				<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="200">
					<img src="<?=base_url();?>fwedget/img/home-concept-item-222.png" alt="" />
					<strong>Planning</strong>
				</div>
			</div>
			<div class="col-md-2">
				<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="400">
					<img src="<?=base_url();?>fwedget/img/development.png" alt="" />
					<strong>Development</strong>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-1">
				<div class="project-image">
					<div id="fcSlideshow" class="fc-slideshow">
						<ul class="fc-slides">
							<?php foreach ($slider as $row) { 
								$img_path = base_url().'slider_img/';
	                    // if($row->image_file != NULL){
								$src= $img_path.$row->image_file;
	                     //}
								?>
								<li><a href="#"><img class="img-responsive" src="<?=$src?>" /></a></li>
								<?php } ?>
							</ul>
						</div>
						<strong class="our-work">Our Work</strong>
					</div>
				</div>
			</div>

		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Our <strong>Services</strong></h2>

				<div class="row">

					<div class="col-md-3">
						<a href="<?=base_url('service/enterprise-resource-planning-erp')?>" style="text-decoration: none;">
							<div class="service-box box-green">
								<i class="fa fa-cogs"></i>
								<div class="service-name">Custom Software Development</div>							
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?=base_url('service/web-application-development')?>" style="text-decoration: none;">
							<div class="service-box box-cyen">
								<i class="fa fa-globe"></i>
								 <div class="service-name">Web Application Development	</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?=base_url('service/android-apps-development')?>" style="text-decoration: none;">
							<div class="service-box box-violate">
								<i class="fa fa-gamepad"></i>
								 <div class="service-name">Mobile Apps & Game Development</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?=base_url('service/ict-consultancy')?>" style="text-decoration: none;">
							<div class="service-box box-orange">
								<i class="fa fa-users"></i>
								<div class="service-name">ICT Consultancy</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?=base_url('service/ict-training')?>" style="text-decoration: none;">
							<div class="service-box box-orange">
								<i class="fa fa-graduation-cap"></i>
								 <div class="service-name">ICT Training</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?=base_url('service/outsource-project-development')?>" style="text-decoration: none;">
							<div class="service-box box-green">
								<i class="fa fa-magic"></i>
								<div class="service-name">Outsource Project Development</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?=base_url('service/blockchain-technology')?>" style="text-decoration: none;">
							<div class="service-box box-cyen">
								<i class="fa fa-btc"></i>
								<div class="service-name">Blockchain  Technology</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?=base_url('service/natural-language-processing-nlp')?>" style="text-decoration: none;">
							<div class="service-box box-violate">
								<i class="fa fa-leaf"></i>
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
								<a href="<?=base_url().'product/'.$item->slug;?>" >
									<?php 
									$img_path = base_url().'product_img/';
									if($item->image_file != NULL){
										$src= $img_path.$item->image_file;
										echo "<img src='$src' alt='$item->name' class='img-circle animatinTrans'>";
									}
									?>
								</a>
								<div class="title"><h4><?=$item->name?></h4></div>
								<p><?=substr($item->short_desc, 0, 50);?>
									<!-- Donec id elit non mi porta gravida at eget metus. Fusce dapibus. -->
									<a href="<?=base_url().'product/'.$item->slug;?>" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
								</div>
							</div>
						</div>
						<?php } ?>									
					</div>
				</div>
			</div>

			<hr class="tall" />

			<div class="row center">
				<div class="col-md-12">							
					<h4 class="lead tall">Using Technology for Work</h4>
				</div>
			</div>
			
			<div class="row center">
				<div class="owl-carousel" data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/html.png');?>" alt="">
					</div>
					

					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/css.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/js.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/jquery.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/angular.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/mysql.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/php.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/ci.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/cake.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/laravel.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/yii.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/bootstrap.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/android.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/apple.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/windows.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/wordpress.png');?>" alt="">
					</div>

					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/joomla.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/magento.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/node.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/react.png');?>" alt="">
					</div>	
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/vue.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/technology/mean.png');?>" alt="">
					</div>								
				</div>
			</div>

			<hr class="tall" />

			<div class="row center">
				<div class="col-md-12">							
					<h4 class="lead tall">Our Valuable Clients</h4>
				</div>
			</div>
			<div class="row center">
				<div class="owl-carousel" data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/bangladesh_govt.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/a2i.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/ict-divition.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/bangladesh_parliament.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/bangladesh_scouts.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/bangladesh_statistics.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/caritas.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/nilg.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/zila-parishad-nator.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/impress-group.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/ddlg.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/undp.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/jica.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/badc.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/family-planning.png');?>" alt="">
					</div>
					<div>
						<img class="img-responsive" src="<?=base_url('fwedget/img/clients/crp-savar.png');?>" alt="">
					</div>								
				</div>
			</div>

			<hr class="tall" />
			<div class="row center">
				<div class="col-md-12">							
					<h4 class="lead tall">Our Partner Company</h4>
				</div>
			</div>
			<!-- <div class="row"> -->
			<div class="col-md-12">
				<div class="row center">

					<div class="col-md-4 col-sm-4 col-xs-4">
						<a href="#"><img style="width:60%;" class="partner_image" src="<?=base_url('fwedget/img/partner/ITSupportGuy.png');?>" alt=""></a>
						
					</div>

					<div class="col-md-4 col-sm-4 col-xs-4">
						<a href="http://pannoseba.com" target="_blank"><img style="width:60%;" class="partner_image" src="<?=base_url('fwedget/img/partner/Pannoseba-Logo.png');?>" alt=""></a>
						
					</div>

					<div class="col-md-4 col-sm-4 col-xs-4">
						<a href="#"><img style="width:60%;" class="partner_image" src="<?=base_url('fwedget/img/partner/fashion-heaven.png');?>" alt=""></a>
						
					</div>
				</div>					
			</div>

		<!-- </div> -->
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
									<div>
										<img class="img-responsive" src="<?=base_url('image_gallery/Image-01.jpg')?>" alt="" style="border: 1px solid #ccc; padding: 3px; width: 550px;">
									</div>
									<div>
										<img class="img-responsive" src="<?=base_url('image_gallery/Image-02.jpg')?>" alt="" style="border: 1px solid #ccc; padding: 3px; width: 550px;">
									</div>
									<div>
										<img class="img-responsive" src="<?=base_url('image_gallery/Image-05.jpg')?>" alt="" style="border: 1px solid #ccc; padding: 3px; width: 550px;">
									</div>
									<div>
										<img class="img-responsive" src="<?=base_url('image_gallery/Image-09.jpg')?>" alt="" style="border: 1px solid #ccc; padding: 3px; width: 550px;">
									</div>
									<div>
										<img class="img-responsive" src="<?=base_url('image_gallery/Image-08.jpg')?>" alt="" style="border: 1px solid #ccc; padding: 3px; width: 550px;">
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="col-md-6">
						<!-- <div class="recent-posts push-bottom"> -->

						<h2><strong>Video</strong> Gallery</h2>
						<iframe width="100%" height="350px" src="https://www.youtube.com/embed/4d-nTXTMDTo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						<!-- </div> -->
					</div>

				</div>
			</div>
		</section>	

		<section class="hidden-xs testimonials" style="margin:0; padding: 0; background-color: #eaf7fd;">
			<div class="container">
				<div class="col-md-12">
					<div class="row center">
						<div class="owl-carousel" data-plugin-options='{"items": 1, "autoplay": true, "autoplayTimeout": 10000}' style="margin-top:0; padding-top: 0;">
								<div>
									<blockquote style="padding: 0;">
									<img src="<?=base_url('fwedget/img/testimonials/mark.jpg')?>" style="width: 150px;position: relative;top: 25px;" class="testimonial img-circle">
										<p style="position: absolute;top: 35px;left: 190px;width: 80%;font-size: 16px;line-height: 26px;"><i class="fa fa-quote-left"></i> We are very happy with Mysoftheaven (BD) Ltd; very serious and consistent in their work. Nazmul sakib and his team of programmers have always been there for us all the time. This is a company I can recommend to anyone to perform any work.</p>
										<span style="position: relative; top: 5px;">- <strong>MARK ZEENS</strong> Coordinator, itrueque.com</span>
									</blockquote>
								</div>
								<div>
									<blockquote  style="padding: 0;">
										<img src="<?=base_url('fwedget/img/testimonials/nila.jpg')?>" style="width: 150px;position: relative;top: 25px;" class="testimonial img-circle">
										<p style="position: absolute;top: 35px;left: 190px;width: 80%;font-size: 16px;line-height: 26px;"><i class="fa fa-quote-left"></i> When our own skills did not manage to get where we wanted, Mysoftheaven (BD) Ltd. took care of the rest. The expertise, customer service and "follow up" we experienced from Mysoftheaven (BD) Ltd. were simply flawless.</p>
										<span style="position: relative; top: 5px;">- <strong>NILA MEHETA</strong> Coordinator, Real Estate Builders & Construction Company, Norway.</span>
									</blockquote>
								</div>

								<div>
									<blockquote  style="padding: 0;">
										<img src="<?=base_url('fwedget/img/testimonials/robert.jpg')?>" style="width: 150px;position: relative;top: 25px;" class="testimonial img-circle">
										<p style="position: absolute;top: 35px;left: 190px;width: 80%;font-size: 16px;line-height: 26px;"><i class="fa fa-quote-left"></i> We thank Mysoftheaven (BD) Ltd. for the wonderful job in helping us develop our program. Everyone was professional, excellent and hard working. Thanks to them, we were able to achieve our goal on time, and we look forward to continue working with them in the future.</p>
										<span style="position: relative; top: 5px;">- <strong>ROBERT JACKOB</strong> Managing Partner, Intelisystem inc.</span>
									</blockquote>
								</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="hidden-lg hidden-md hidden-sm smalltestimonials" style="background-color: #eaf7fd; margin-top: 20px;">
			<div class="container">
				<div class="col-md-12">
					<div class="row center">
						<div class="owl-carousel" data-plugin-options='{"items": 1, "autoplay": true, "autoplayTimeout": 10000}' style="margin-top:0; padding-top: 0;">
							<div>	
								<p>
									<i class="fa fa-quote-left"></i>We are very happy with Mysoftheaven (BD) Ltd; very serious and consistent in their work. Nazmul sakib and his team of programmers have always been there for us all the time. This is a company I can recommend to anyone to perform any work.
								</p>
								<span style="position: relative; top: 5px;">- <strong>MARK ZEENS</strong> Coordinator, itrueque.com</span>
							</div>
							<div>
								<p>
									<i class="fa fa-quote-left"></i>When our own skills did not manage to get where we wanted, Mysoftheaven (BD) Ltd. took care of the rest. The expertise, customer service and "follow up" we experienced from Mysoftheaven (BD) Ltd. were simply flawless.
								</p>
								<span style="position: relative; top: 5px;">- <strong>NILA MEHETA</strong> Coordinator, Real Estate Builders & Construction Company, Norway.</span>
							</div>

							<div>
								<p>
									<i class="fa fa-quote-left"></i>We thank Mysoftheaven (BD) Ltd. for the wonderful job in helping us develop our program. Everyone was professional, excellent and hard working. Thanks to them, we were able to achieve our goal on time, and we look forward to continue working with them in the future.
								</p>
								<span style="position: relative; top: 5px;">- <strong>ROBERT JACKOB</strong> Managing Partner, Intelisystem inc.</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
</div>


