<style>
	.swiper {
		padding-top: 3px;
		width: 98%;
		height: 98%;
		overflow: hidden;
		border-radius: 100%;
	}


	.swiper-slide img {
		display: block;
		width: 100%;
	}

	.swiper-main-valuable {
		width: 100% !important;
		height: 100% !important;
		overflow: hidden !important;
		border-radius: 0% !important;
	}

	.swiper-mainimage-gallery {
		width: 100% !important;
		height: 100% !important;
		overflow: hidden !important;
		border-radius: 0% !important;
	}

	.swiper-main-client {
		width: 100% !important;
		height: 100% !important;
		overflow: hidden !important;
		border-radius: 0% !important;
	}

	@media screen and (min-width: 360px) and (max-width: 430px) {

		.mobile-center {
			text-align: center !important;
			margin-bottom: 15px !important;
		}

		.service-box {
			min-height: 150px !important;
			padding: 15px !important;
		}

		.counter {
			padding-bottom: 0px !important;
		}

		.featured-box {
			min-height: 200px !important;
			/* padding: 15px !important; */
		}

		.featured-box .box-content {
			min-height: 200px !important;
		}

		.product-icon {
			width: 110px !important;
			height: 110px !important;
		}

		.client-carousel {
			display: none !important;
		}

		.lead {
			font-size: 20px !important;
			font-weight: 600 !important;
		}

		section.featured {
			padding-top: 15px !important;
		}

	}
</style>

<div role="main" class="main">
	<div class="home-concept" style="margin-top: 25px;">
		<div class="container">
			<div class="row">
				<span class="sun"></span>
				<span class="cloud"></span>
				<div class="col-md-2">
					<div class="process-image" data-appear-animation="bounceIn">
						<div class="flip-container">
							<div class="flipper">
								<img loading="lazy" class="front" style="height: 138px;margin: 12px 0px 0px 11px;width: 138px;border-radius: 59px;" src="<?= base_url(); ?>fwedget/img/meril.png" alt="Merilsoft Logo" />
								<img loading="lazy" class="back" style="height: 144px;margin: 9px 0px 0px 0px;width: 144px;border-radius: 10px;" src="<?= base_url(); ?>fwedget/img/us.png" alt="Mysoft Logo" />
							</div>
						</div>

						<style>
							.flip-container {
								perspective: 1000px;
								width: 150px;
								height: 150px;
								position: relative;
							}

							.flipper {
								position: absolute;
								width: 100%;
								height: 100%;
								transition: transform 1.5s;
								transform-style: preserve-3d;
								animation: flip 3s infinite;
							}

							.front,
							.back {
								position: absolute;
								backface-visibility: hidden;
							}

							.front {
								z-index: 2;
							}

							.back {
								transform: rotateY(180deg);
							}

							@keyframes flip {
								0% {
									transform: rotateY(0deg);
								}

								50% {
									transform: rotateY(180deg);
								}

								100% {
									transform: rotateY(360deg);
								}
							}
						</style>

						<strong style="margin: 37px 0px 0px 24px;font-size: 33px;">Partner</strong>
					</div>
				</div>
				<div class="col-md-2">
					<div class="process-image" data-appear-animation="bounceIn">
						<img loading="lazy" src="<?= base_url(); ?>fwedget/img/home-concept-item-2022.png" alt="" />
						<strong>Strategy</strong>
					</div>
				</div>
				<div class="col-md-2">
					<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="200">
						<img loading="lazy" src="<?= base_url(); ?>fwedget/img/home-concept-item-222.png" alt="" />
						<strong>Planning</strong>
					</div>
				</div>
				<div class="col-md-2">
					<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="400">
						<img loading="lazy" src="<?= base_url(); ?>fwedget/img/development.png" alt="" />
						<strong>Development</strong>
					</div>
				</div>
				<div class="col-md-3 col-md-offset-1">

					<div class="project-image">

						<div class="swiper mySwiper">
							<div class="swiper-wrapper">
								<?php foreach ($slider as $row) {
									$img_path = base_url() . 'slider_img/';

									$src = $img_path . $row->image_file;

								?>
									<div class="swiper-slide">
										<img src="<?= $src ?>" />
									</div>
								<?php } ?>
							</div>

						</div>
						<!-- <strong class="our-work" style="margin-top: 20px;">Our Work</strong> -->
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
					<img loading="lazy" src="<?= base_url('fwedget/images/icon_img/1.png'); ?>" alt="">
					<div>
						<h4 class="mb-1 counter_value"> <?= $years_of_experience ?>+</h4>
						<h5 class="mt-2 count-title">Years of Experience</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 counter-box">
				<div class=" count">
					<img loading="lazy" src="<?= base_url('fwedget/images/icon_img/2.png'); ?>" alt="">
					<div>
						<h4 class="mb-1 counter_value"><?= $number_of_clients ?> +</h4>
						<h5 class="mt-2 count-title">Number of Clients</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 counter-box">
				<div class=" count">
					<img loading="lazy" src="<?= base_url('fwedget/images/icon_img/3.png'); ?>" alt="">
					<div>
						<h4 class="mb-1 counter_value"><?= $successful_projects ?>+</h4>
						<h5 class="mt-2 count-title">Successful Projects</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 counter-box">
				<div class=" count">
					<img loading="lazy" src="<?= base_url('fwedget/images/icon_img/4.png'); ?>" alt="">
					<div>
						<h4 class="mb-1 counter_value"><?= $running_services ?> +</h4>
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
				<h2 class="mobile-center">Our <strong>Services</strong></h2>

				<div class="row">

					<div class="col-md-3">
						<a href="<?= base_url('service/enterprise-resource-planning-erp') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img loading="lazy" src="<?= base_url('fwedget/img/slices/Custom-Software.png'); ?>" class='animatinTrans'>

								<div class="service-name">Custom Software Development</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?= base_url('service/web-application-development') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img loading="lazy" src="<?= base_url('fwedget/img/slices/Web-Application.png'); ?>" class='animatinTrans'>
								<div class="service-name">Web Application Development </div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?= base_url('service/android-apps-development') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img loading="lazy" src="<?= base_url('fwedget/img/slices/Mobile-Apps-&-Games.png'); ?>" class='animatinTrans'>
								<div class="service-name">Mobile Apps & Game Development</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?= base_url('service/ict-consultancy') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img loading="lazy" src="<?= base_url('fwedget/img/slices/ICT-Consultancy.png'); ?>" class='animatinTrans'>
								<div class="service-name">ICT Consultancy</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?= base_url('service/ict-training') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img loading="lazy" src="<?= base_url('fwedget/img/slices/ICT-Training.png'); ?>" class='animatinTrans'>
								<div class="service-name">ICT Training</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?= base_url('service/outsource-project-development') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img loading="lazy" src="<?= base_url('fwedget/img/slices/Outsource-Project.png'); ?>" class='animatinTrans'>
								<div class="service-name">Outsource Project Development</div>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a href="<?= base_url('service/blockchain-technology') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img loading="lazy" src="<?= base_url('fwedget/img/slices/Blockchain-Technology.png'); ?>" class='animatinTrans'>
								<div class="service-name">Blockchain Technology</div>
							</div>
						</a>
					</div>

					<div class="col-md-3">
						<a href="<?= base_url('service/natural-language-processing-nlp') ?>" style="text-decoration: none;">
							<div class="service-box">
								<img loading="lazy" src="<?= base_url('fwedget/img/slices/Natural-Language.png'); ?>" class='animatinTrans'>
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
				<h2 class="mobile-center">Our <strong>Products</strong></h2>
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
											echo "<img loading='lazy' src='$src' alt='$item->name' class='img-circle animatinTrans product-icon'>";
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
		<hr class="tall" />
		<div class="row center">
			<div class="col-md-12">
				<h4 class="lead tall">Our Valuable Clients</h4>
			</div>
		</div>
		<div class="row center">

			<div class="swiper swiper-main-valuable" id="valuableClients">
				<div class="swiper-wrapper swiper-valuable">
					<div class="swiper-slide swiper-valuable-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/bangladesh_govt.png'); ?>" alt="">
					</div>
					<div class="swiper-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/a2i.png'); ?>" alt="">
					</div>
					<div class="swiper-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/ict-divition.png'); ?>" alt="">
					</div>
					<div class="swiper-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/bangladesh_parliament.png'); ?>" alt="">
					</div>
					<div class="swiper-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/bangladesh_scouts.png'); ?>" alt="">
					</div>
					<div class="swiper-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/bangladesh_statistics.png'); ?>" alt="">
					</div>
					<div class="swiper-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/caritas.png'); ?>" alt="">
					</div>
					<div class="swiper-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/nilg.png'); ?>" alt="">
					</div>
					<div class="swiper-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/zila-parishad-nator.png'); ?>" alt="">
					</div>
					<div class="swiper-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/impress-group.png'); ?>" alt="">
					</div>
					<div class="swiper-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/ddlg.png'); ?>" alt="">
					</div>
					<div class="swiper-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/undp.png'); ?>" alt="">
					</div>
					<div class="swiper-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/jica.png'); ?>" alt="">
					</div>
					<div class="swiper-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/badc.png'); ?>" alt="">
					</div>
					<div class="swiper-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/family-planning.png'); ?>" alt="">
					</div>
					<div class="swiper-slide">
						<img class="img-responsive" loading="lazy" src="<?= base_url('fwedget/img/clients/crp-savar.png'); ?>" alt="">
					</div>

				</div>

			</div>
		</div>

	</div>

	<section class="featured footer map">
		<div class="container">
			<div class="row">

				<div class="col-md-6">
					<div class="recent-posts push-bottom">
						<h2 class="mobile-center">Image <strong>Gallery</strong></h2>
						<div class="row">
							<div class="swiper swiper-mainimage-gallery" id="imageGallery">
								<div class="swiper-wrapper">
									<?php
									foreach ($gallery_images as $item) {
									?>

										<div class="swiper-slide">
											<img loading="lazy" class="img-responsive" src="<?= base_url('gallery_img/') . $item->image; ?>" alt="" style="border: 1px solid #ccc; padding: 3px; height: 365px !important; width: 100%;">
										</div>
									<?php
									}

									?>


								</div>
								<div class="swiper-pagination"></div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-md-6">
					<h2 class="mobile-center"><strong>Video</strong> Gallery</h2>
					<iframe width="100%" height="365" src="https://www.youtube.com/embed/X3a0IFr5Erw?si=DECKX26X4fqW3O9k&amp;start=8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>

			</div>
		</div>
	</section>

	<section class="client-carousel">
		<div class="container">
			<div class="row center">
				<div class="col-md-12">
					<div class="row">

					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<script type="text/javascript" src="<?= base_url(); ?>fwedget/js/swiper-bundle.min.js"></script>
<script>
	var swiper = new Swiper(".mySwiper", {
		effect: "flip",
		grabCursor: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		loop: true,
		speed: 1000,
		pagination: {
			el: ".swiper-pagination",
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});
</script>

<script>
	var swiper = new Swiper("#valuableClients", {
		slidesPerView: 5,
		spaceBetween: 30,
		autoplay: {
			delay: 1000,
			disableOnInteraction: false,
		},
		loop: true,
		speed: 1000,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});
</script>

<script>
	var swiper = new Swiper("#imageGallery", {
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
		},
		loop: true,
		speed: 500,
		pagination: {
			el: ".swiper-pagination",
			dynamicBullets: true,
		},
	});
</script>


<script>
	$(document).ready(function() {
		var l = $('#fcSlideshow').find('.fc-flip').length;
		if (l > 1) {
			$('#fcSlideshow').find('.fc-flip').eq(1).remove();
		};
	});

	setTimeout(() => {
		var l = $('#fcSlideshow').find('.fc-flip').length;
		if (l > 1) {
			$('#fcSlideshow').find('.fc-flip').eq(1).remove();
		};
	}, 0);
	setInterval(() => {
		var l = $('#fcSlideshow').find('.fc-flip').length;
		if (l > 1) {
			$('#fcSlideshow').find('.fc-flip').eq(1).remove();
		};
	}, 1000);
</script>