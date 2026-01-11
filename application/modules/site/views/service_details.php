<link
	href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
	rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="service_details.css" />

<div class="main">
	<!-- Head part -->
	<div class="head">

		<div class="headsidebar">
			<div class="headmenu-item active">
				<div class="headimg">
					<img src="awedget/demo_service/h1.webp" alt="">
				</div>
				<div class="">

					<h4><?= $info->first_section_titel ?></h4>
				</div>
			</div>
			<div class="headmenu-item">
				<div class="headimg">
					<img src="awedget/demo_service/h2.webp" alt="">
				</div>
				<div class="headh">
					<h4>iOS App Development <br> iPhone App Service</h4>
				</div>
			</div>
			<div class="headmenu-item">
				<div class="headimg">
					<img src="awedget/demo_service/h3.webp" alt="">
				</div>
				<div class="headh">
					<h4>Windows Apps Development <br> Windows Device Solution </h4>
				</div>
			</div>
			<div class="headmenu-item">
				<div class="headimg">
					<img src="awedget/demo_service/h4.webp" alt="">
				</div>
				<div class="headh">
					<h4>Hybrid Mobile Apps<br>Next Generation Apps </h4>
				</div>
			</div>
			<div class="calldiv">

				<img src="awedget/demo_service/call.webp" alt="" class="callimg">
				<a href="tel:+8801404453008" class="call-btn">Call for free consultation</a>

			</div>
		</div>
		<div>
			<div class="check">
				<div class="headmain-content">
					<h2><?= $info->first_section_titel ?></h2>
					<p>
						<?= $info->first_section_para ?>
					</p>
					<div class="headbuttons">
						<button class="get-started">Get Started</button>
					</div>
				</div>
				<div class="screenshot">
					<img src="<?= base_url('service_img/' . $info->first_section_img) ?>" alt="Website Screenshot">
				</div>
			</div>
			<!-- Middel Part -->
			<div class="middle">
				<div>
					<h1 class="mhead newhead2"><?= $info->second_section_titel ?></h1>
				</div>
				<div class="mcard">
					<div class="maincard">
						<img src="<?= base_url('service_img/' . $info->second_section_img_one) ?>" alt="icon">
						<h2><?= $info->second_section_heading_one ?></h2>
						<p> <?= $info->second_section_para_one ?></p>

					</div>
					<div class="maincard">
						<img src="<?= base_url('service_img/' . $info->second_section_img_two) ?>" alt="icon">
						<h2><?= $info->second_section_heading_two ?></h2>
						<p> <?= $info->second_section_para_two ?></p>

					</div>
				</div>
				<!-- Service card -->
				<section>
					<h1 class="mhead2 newhead2"><?= $info->third_section_titel ?></h1>

					<div class="app">
						<div class="appcard">
							<img src="<?= base_url('service_img/' . $info->third_section_img_one) ?>" alt="Playstore">
							<h2><?= $info->third_section_para_one ?></h2>
						</div>

						<div class="appcard" style="background-color: #307dcfff;">
							<img src="<?= base_url('service_img/' . $info->third_section_img_two) ?>" alt="Playstore">
							<h2><?= $info->third_section_para_two ?></h2>
						</div>

						<div class="appcard" style="background-color: #b30054ff;">
							<img src="<?= base_url('service_img/' . $info->third_section_img_three) ?>" alt="Playstore">
							<h2><?= $info->third_section_para_three ?></h2>
						</div>

						<div class="appcard" style="background-color: #b38300ff;">
							<img src="<?= base_url('service_img/' . $info->third_section_img_four) ?>" alt="Playstore">
							<h2><?= $info->third_section_para_four ?></h2>
						</div>

					</div>
					<h1 class="apphead"><?= $info->fourth_section_titel ?></h1>
					<div class="developh"><?= $info->fourth_section_para_one ?></div>
					<img src="<?= base_url('service_img/' . $info->fourth_section_img) ?>" alt="" class="developimg">
					<p class="developheading"> <?= $info->fourth_section_para_two ?></p>
				</section>
				<!-- Process  -->

				<section>
					<h1 class="apphead apphead2">Our Working Process</h1>
					<div class="process">
						<div class="pro1">Requirement Analysis </div>
						<div class="pro2">Development </div>
						<div class="pro3">Deployment </div>
						<div class="pro4">Customer Support</div>
					</div>
					<img src="awedget/demo_service/process.webp" alt="" class="processimg">

					<div class="pro5">Product Design</div>
					<div class="pro6">Testing </div>
					<div class="pro7">Operational Testing </div>
				</section>



				<h1 class="mhead2 newhead"><?= $info->five_section_titel ?></h1>
				<div class="mobileapp-slider">
					<div><img src="<?= base_url('service_img/' . $info->five_section_img_one) ?>" alt=""
							class="mobileappimg"></div>
					<div><img src="<?= base_url('service_img/' . $info->five_section_img_two) ?>" alt=""
							class="mobileappimg"></div>
					<div><img src="<?= base_url('service_img/' . $info->five_section_img_three) ?>" alt=""
							class="mobileappimg"></div>
					<div><img src="<?= base_url('service_img/' . $info->five_section_img_four) ?>" alt=""
							class="mobileappimg"></div>
					<div><img src="<?= base_url('service_img/' . $info->five_section_img_five) ?>" alt=""
							class="mobileappimg"></div>
				</div>




				<h1 class="mhead2 newhead2 marginsize2"><?= $info->six_section_titel ?></h1>
				<p class="developheading3 developheadingmob"><?= $info->six_section_para_one ?></p>

				<section>
					<div class="android">
						<div>
							<ul class="features">
								<?php $six_section_list = json_decode($info->six_section_list);
								foreach ($six_section_list as $key => $value) {
									echo "<li>$value</li>";
								}
								?>
							</ul>
						</div>
						<div>
							<img src="<?= base_url('service_img/' . $info->six_section_img) ?>" alt=""
								class="mobileimg">
						</div>
					</div>


					<p class="developheading4">
						<?= $info->six_section_para_two ?>
					</p>
				</section>
				<section>
					<h1 class="mhead2 newhead marginsize "><?= $info->seven_section_titel ?></h1>
					<p class="developheading5">
						<?= $info->seven_section_para_one ?>
					</p>
					<div class="ios">
						<div>
							<img src="<?= base_url('service_img/' . $info->seven_section_img) ?>" alt=""
								class="mobileimg2">
						</div>
						<div>
							<ul class="features2">
								<?php $seven_section_list = json_decode($info->seven_section_list);
								foreach ($seven_section_list as $key => $value) {
									echo "<li>$value</li>";
								}
								?>
							</ul>
						</div>
				</section>
				<p class="developheading4">
					<?= $info->seven_section_para_two ?>
				</p>
				<section>
					<h1 class="mhead3 newhead2"><?= $info->Eight_section_titel ?></h1>

					<div class="coicon">
						<div class="mobileicon">
							<div class="item">
								<img src="awedget/demo_service/mobileicon1.webp" alt="">
							</div>
							<div class="icondata">
								<div class="iconhead"> <?= $info->Eight_section_heading_one ?></div>
								<div class="iconpara"> <?= $info->Eight_section_para_one ?>
								</div>
							</div>
						</div>

						<div class="mobileicon2">
							<div class="item">
								<img src="awedget/demo_service/mobileicon4.webp" alt="">
							</div>
							<div class="icondata">
								<div class="iconhead"> <?= $info->Eight_section_heading_two ?></div>
								<div class="iconpara"> <?= $info->Eight_section_para_two ?>
								</div>
							</div>
						</div>
					</div>

					<div class="coicon">
						<div class="mobileicon">
							<div class="item">
								<img src="awedget/demo_service/mobileicon2.webp" alt="">
							</div>
							<div class="icondata">
								<div class="iconhead"> <?= $info->Eight_section_heading_three ?></div>
								<div class="iconpara"> <?= $info->Eight_section_para_three ?>
								</div>
							</div>
						</div>

						<div class="mobileicon2">
							<div class="item">
								<img src="awedget/demo_service/mobileicon5.webp" alt="" class="iconimg hchange">
							</div>
							<div class="icondata">
								<div class="iconhead headmargin"> <?= $info->Eight_section_heading_four ?></div>
								<div class="iconpara"> <?= $info->Eight_section_para_four ?></div>
							</div>
						</div>
					</div>

					<div class="coicon">
						<div class="mobileicon">
							<div class="item">
								<img src="awedget/demo_service/mobileicon3.webp" alt="">
							</div>
							<div class="icondata">
								<div class="iconhead"> <?= $info->Eight_section_heading_five ?></div>
								<div class="iconpara"> <?= $info->Eight_section_para_five ?></div>
							</div>
						</div>

						<div class="mobileicon2">
							<div class="item">
								<img src="awedget/demo_service/mobileicon6.webp" alt="" class="iconimg hchange">
							</div>
							<div class="icondata">
								<div class="iconhead headmargin"> <?= $info->Eight_section_heading_six ?></div>
								<div class="iconpara"> <?= $info->Eight_section_para_six ?></div>
							</div>
						</div>
					</div>

				</section>
				<!-- Build Apps -->
				<section>
					<h1 class="mhead2 newhead2"><?= $info->nine_section_titel ?></h1>
					<p class="paraspace developheading7 developheadingnew "> <?= $info->nine_section_main_para ?></p>
					<div class="gapsector">
						<h1 class="sectorhead1"><?= $info->nine_section_heading_one ?></h1>
						<h1 class="sectorhead2"><?= $info->nine_section_heading_two ?></h1>
						<div class="sector">
							<div class="cosector1">
								<img src="<?= base_url('service_img/' . $info->nine_section_img_one) ?>" alt=""
									class="sectorimg">
								<p class="sectorpara"> <?= $info->nine_section_para_one ?></p>
							</div>
							<div class="cosector2">
								<img src="<?= base_url('service_img/' . $info->nine_section_img_two) ?>" alt=""
									class="sectorimg2">
								<p class="sectorpara"> <?= $info->nine_section_para_two ?></p>
							</div>
						</div>

						<h1 class="sectorhead1"><?= $info->nine_section_heading_three ?></h1>
						<h1 class="sectorhead2"><?= $info->nine_section_heading_four ?></h1>

						<div class="sector">
							<div class="cosector1">
								<img src="<?= base_url('service_img/' . $info->nine_section_img_three) ?>" alt=""
									class="sectorimg">
								<p class="sectorpara"> <?= $info->nine_section_para_three ?></p>
							</div>
							<div class="cosector2">
								<img src="<?= base_url('service_img/' . $info->nine_section_img_four) ?>" alt=""
									class="sectorimg2">
								<p class="sectorpara"> <?= $info->nine_section_para_four ?></p>
							</div>
						</div>

					</div>

				</section>
				<!-- Industries -->
				<section>
					<h1 class="mhead2"><?= $info->Ten_section_titel ?></h1>
					<p class="developheading7"><?= $info->Ten_section_para_one ?></p>
					<div class="industries">
						<div class="industriescard">
							<img src="<?= base_url('service_img/' . $info->Ten_section_img_one) ?>" alt=""
								class="industryimg">
							<h1 class="industrieshead"><?= $info->Ten_section_tag_one ?></h1>
						</div>

						<div class="industriescard">
							<img src="<?= base_url('service_img/' . $info->Ten_section_img_two) ?>" alt=""
								class="industryimg">
							<h1 class="industrieshead"><?= $info->Ten_section_tag_two ?></h1>
						</div>

						<div class="industriescard">
							<img src="<?= base_url('service_img/' . $info->Ten_section_img_three) ?>" alt=""
								class="industryimg">
							<h1 class="industrieshead"><?= $info->Ten_section_tag_three ?></h1>
						</div>
					</div>

					<div class="industries">
						<div class="industriescard">
							<img src="<?= base_url('service_img/' . $info->Ten_section_img_four) ?>" alt=""
								class="industryimg">
							<h1 class="industrieshead"><?= $info->Ten_section_tag_four ?></h1>
						</div>

						<div class="industriescard">
							<img src="<?= base_url('service_img/' . $info->Ten_section_img_five) ?>" alt=""
								class="industryimg">
							<h1 class="industrieshead"><?= $info->Ten_section_tag_five ?></h1>
						</div>

						<div class="industriescard">
							<img src="<?= base_url('service_img/' . $info->Ten_section_img_six) ?>" alt=""
								class="industryimg">
							<h1 class="industrieshead"><?= $info->Ten_section_tag_six ?></h1>
						</div>
					</div>

					<div class="industries">
						<div class="industriescard">
							<img src="<?= base_url('service_img/' . $info->Ten_section_img_seven) ?>" alt=""
								class="industryimg">
							<h1 class="industrieshead"><?= $info->Ten_section_tag_seven ?></h1>
						</div>

						<div class="industriescard">
							<img src="<?= base_url('service_img/' . $info->Ten_section_img_eight) ?>" alt=""
								class="industryimg">
							<h1 class="industrieshead"><?= $info->Ten_section_tag_eight ?></h1>
						</div>

						<div class="industriescard">
							<img src="<?= base_url('service_img/' . $info->Ten_section_img_nine) ?>" alt=""
								class="industryimg">
							<h1 class="industrieshead"><?= $info->Ten_section_tag_nine ?></h1>
						</div>
					</div>

					<div class="industries">
						<div class="industriescard">
							<img src="<?= base_url('service_img/' . $info->Ten_section_img_ten) ?>" alt=""
								class="industryimg">
							<h1 class="industrieshead"><?= $info->Ten_section_tag_ten ?> </h1>
						</div>

						<div class="industriescard">
							<img src="<?= base_url('service_img/' . $info->Ten_section_img_eleven) ?>" alt=""
								class="industryimg">
							<h1 class="industrieshead"><?= $info->Ten_section_tag_eleven ?></h1>
						</div>

						<div class="industriescard">
							<img src="<?= base_url('service_img/' . $info->Ten_section_img_twelve) ?>" alt=""
								class="industryimg">
							<h1 class="industrieshead"><?= $info->Ten_section_tag_twelve ?></h1>
						</div>
					</div>
				</section>
				<!-- Service List -->
				<h1 class="mhead2 newhead2"><?= $info->eleven_section_titel ?></h1>
				<p class="developheading7"><?= $info->eleven_section_para ?></p>

				<section>
					<h1 class="mhead2"><?= $info->twelve_section_titel ?></h1>
					<div class="list">
						<div class="leftlist">
							<ul class="listfeatures">
								<?php $twelve_section_list_one = json_decode($info->twelve_section_list_one);
								foreach ($twelve_section_list_one as $key => $value) {
									echo "<li>$value</li>";
								}
								?>
							</ul>
						</div>
						<div class="rightlist">
							<ul class="listfeatures">
								<?php $twelve_section_list_two = json_decode($info->twelve_section_list_two);
								foreach ($twelve_section_list_two as $key => $value) {
									echo "<li>$value</li>";
								}
								?>
							</ul>
						</div>
					</div>
				</section>

				<!-- Technologies -->
				<section>
					<h1 class="mhead5">Mobile Technologies We Work With</h1>
					<div class="tech">
						<div class="tecnologies">
							<div class="technologiescard">
								<img src="<?= base_url('service_img/' . $info->thirteen_section_img_one) ?>" alt=""
									class="techicon">
								<h1 class="technologieshead"><?= $info->thirteen_section_tag_one ?></h1>
							</div>
							<div class="technologiescard">
								<img src="<?= base_url('service_img/' . $info->thirteen_section_img_two) ?>" alt=""
									class="techicon">
								<h1 class="technologieshead"><?= $info->thirteen_section_tag_two ?></h1>
							</div>
							<div class="technologiescard">
								<img src="<?= base_url('service_img/' . $info->thirteen_section_img_three) ?>" alt=""
									class="techicon">
								<h1 class="technologieshead"><?= $info->thirteen_section_tag_three ?></h1>
							</div>
							<div class="technologiescard">
								<img src="<?= base_url('service_img/' . $info->thirteen_section_img_four) ?>" alt=""
									class="techicon">
								<h1 class="technologieshead"><?= $info->thirteen_section_tag_four ?></h1>
							</div>
							<div class="technologiescard">
								<img src="<?= base_url('service_img/' . $info->thirteen_section_img_five) ?>" alt=""
									class="techicon">
								<h1 class="technologieshead"><?= $info->thirteen_section_tag_five ?></h1>
							</div>
							<div class="technologiescard">
								<img src="<?= base_url('service_img/' . $info->thirteen_section_img_six) ?>" alt=""
									class="techicon">
								<h1 class="technologieshead"><?= $info->thirteen_section_tag_six ?></h1>
							</div>
						</div>
						<div class="tecnologies">
							<div class="technologiescard">
								<img src="<?= base_url('service_img/' . $info->thirteen_section_img_seven) ?>" alt=""
									class="techicon">
								<h1 class="technologieshead"><?= $info->thirteen_section_tag_seven ?></h1>
							</div>
							<div class="technologiescard">
								<img src="<?= base_url('service_img/' . $info->thirteen_section_img_eight) ?>" alt=""
									class="techicon">
								<h1 class="technologieshead"><?= $info->thirteen_section_tag_eight ?></h1>
							</div>
							<div class="technologiescard">
								<img src="<?= base_url('service_img/' . $info->thirteen_section_img_nine) ?>" alt=""
									class="techicon">
								<h1 class="technologieshead"><?= $info->thirteen_section_tag_nine ?></h1>
							</div>
							<div class="technologiescard">
								<img src="<?= base_url('service_img/' . $info->thirteen_section_img_ten) ?>" alt=""
									class="techicon">
								<h1 class="technologieshead"><?= $info->thirteen_section_tag_ten ?></h1>
							</div>
							<div class="technologiescard">
								<img src="<?= base_url('service_img/' . $info->thirteen_section_img_eleven) ?>" alt=""
									class="techicon">
								<h1 class="technologieshead"><?= $info->thirteen_section_tag_eleven ?></h1>
							</div>
							<div class="technologiescard">
								<img src="<?= base_url('service_img/' . $info->thirteen_section_img_twelve) ?>" alt=""
									class="techicon">
								<h1 class="technologieshead"><?= $info->thirteen_section_tag_twelve ?></h1>
							</div>
						</div>
					</div>
				</section>
				<!-- Awards & Recognition -->
				<section>
					<h1 class="mhead6"><?= $info->fourteen_section_titel ?></h1>
					<div class="award">
						<div class="awards">
							<div class="coaward1">
								<img src="<?= base_url('service_img/' . $info->fourteen_section_img_one) ?>" alt=""
									class="awardimg">
								<h1 class="awardhead"><?= $info->fourteen_section_heading_one ?></h1>
								<p class="awardpara"><?= $info->fourteen_section_para_one ?></p>
							</div>
							<div class="coaward1">
								<img src="<?= base_url('service_img/' . $info->fourteen_section_img_two) ?>" alt=""
									class="awardimg">
								<h1 class="awardhead"><?= $info->fourteen_section_heading_two ?></h1>
								<p class="awardpara"><?= $info->fourteen_section_para_two ?></p>
							</div>
							<div class="coaward1">
								<img src="<?= base_url('service_img/' . $info->fourteen_section_img_three) ?>" alt=""
									class="awardimg">
								<h1 class="awardhead"><?= $info->fourteen_section_heading_three ?></h1>
								<p class="awardpara"><?= $info->fourteen_section_para_three ?></p>
							</div>
							<div class="coaward1">
								<img src="<?= base_url('service_img/' . $info->fourteen_section_img_four) ?>" alt=""
									class="awardimg">
								<h1 class="awardhead"><?= $info->fourteen_section_heading_four ?></h1>
								<p class="awardpara"><?= $info->fourteen_section_para_four ?></p>
							</div>
						</div>
					</div>
				</section>
				<!-- Membership -->
				<section>
					<h1 class="mhead6"><?= $info->fifteen_section_titel ?></h1>
					<div class="membership">
						<img src="<?= base_url('service_img/' . $info->fifteen_section_img_one) ?>" alt=""
							class="memberimg1">
						<img src="<?= base_url('service_img/' . $info->fifteen_section_img_two) ?>" alt=""
							class="memberimg1">
						<img src="<?= base_url('service_img/' . $info->fifteen_section_img_three) ?>" alt=""
							class="memberimg1">
						<img src="<?= base_url('service_img/' . $info->fifteen_section_img_four) ?>" alt=""
							class="memberimg1">
					</div>
				</section>
				<!-- client -->
				<section>
					<h1 class="mhead5"><?= $info->sixteen_section_titel ?></h1>

					<div class="client-slider">
						<div class="card">
							<img src="<?= base_url('service_img/' . $info->sixteen_section_img_one) ?>"
								alt="Hannah Schmitt">
							<h2><?= $info->sixteen_section_heading_one ?></h2>
							<p class="title"><?= $info->sixteen_section_role_one ?></p>
							<span class="quote">“</span>
							<p class="text">
								<?= $info->sixteen_section_para_one ?>
							</p>
						</div>

						<div class="card">
							<img src="<?= base_url('service_img/' . $info->sixteen_section_img_two) ?>"
								alt="Hannah Schmitt">
							<h2><?= $info->sixteen_section_heading_two ?></h2>
							<p class="title"><?= $info->sixteen_section_role_two ?></p>
							<span class="quote">“</span>
							<p class="text">
								<?= $info->sixteen_section_para_two ?>
							</p>
						</div>

						<div class="card">
							<img src="<?= base_url('service_img/' . $info->sixteen_section_img_three) ?>"
								alt="Hannah Schmitt">
							<h2><?= $info->sixteen_section_heading_three ?></h2>
							<p class="title"><?= $info->sixteen_section_role_three ?></p>
							<span class="quote">“</span>
							<p class="text">
								<?= $info->sixteen_section_para_three ?>
							</p>
						</div>

					</div>
				</section>

				<!-- Q&A -->
				<section>
					<h1 class="mhead8"><?= $info->seventeen_section_titel ?></h1>
					<div class="question">
						<div class="faq-container">

							<div class="faq-item">
								<input type="checkbox" id="q1">
								<label class="faq-question" for="q1"><?= $info->seventeen_section_question_one ?></label>
								<div class="faq-answer">
									<p><?= $info->seventeen_section_answer_one ?></p>
								</div>
							</div>

							<div class="faq-item">
								<input type="checkbox" id="q2">
								<label class="faq-question" for="q2"><?= $info->seventeen_section_question_two ?></label>
								<div class="faq-answer">
									<p><?= $info->seventeen_section_answer_two ?></p>
								</div>
							</div>

							<div class="faq-item">
								<input type="checkbox" id="q3">
								<label class="faq-question" for="q3"><?= $info->seventeen_section_question_three ?></label>
								<div class="faq-answer">
									<p><?= $info->seventeen_section_answer_three ?></p>
								</div>
							</div>

							<div class="faq-item">
								<input type="checkbox" id="q4">
								<label class="faq-question" for="q4"><?= $info->seventeen_section_question_four ?></label>
								<div class="faq-answer">
									<p><?= $info->seventeen_section_answer_four ?></p>
								</div>
							</div>

							<div class="faq-item">
								<input type="checkbox" id="q5">
								<label class="faq-question" for="q5"><?= $info->seventeen_section_question_five ?></label>
								<div class="faq-answer">
									<p><?= $info->seventeen_section_answer_five ?></p>
								</div>
							</div>

							<div class="faq-item">
								<input type="checkbox" id="q6">
								<label class="faq-question" for="q6"><?= $info->seventeen_section_question_six ?></label>
								<div class="faq-answer">
									<p><?= $info->seventeen_section_answer_six ?></p>
								</div>
							</div>

						</div>

					</div>
				</section>
				<section>
					<h1 class="mhead6"><?= $info->eighteen_section_titel ?></h1>
					<p class="developheading9"><?= $info->eighteen_section_para ?></p>
					<button class="lastbtn">Get Started</button>

					<h2 class="mhead2"><span class="text-primary"><?= $info->nineteen_section_titel ?></span></h2>
					<div class="col-lg-7 mt-5 mt-lg-0 last">
						<div>
							<img src="<?= base_url('service_img/' . $info->ninteen_section_img_one) ?>" alt=""
								class="cimg">
							<img src="<?= base_url('service_img/' . $info->ninteen_section_img_two) ?>" alt=""
								class="cimg">
							<img src="<?= base_url('service_img/' . $info->ninteen_section_img_three) ?>" alt=""
								class="cimg">
							<img src="<?= base_url('service_img/' . $info->ninteen_section_img_four) ?>" alt=""
								class="cimg">
							<img src="<?= base_url('service_img/' . $info->ninteen_section_img_five) ?>" alt=""
								class="cimg">
							<img src="<?= base_url('service_img/' . $info->ninteen_section_img_six) ?>" alt=""
								class="cimg">
							<img src="<?= base_url('service_img/' . $info->ninteen_section_img_seven) ?>" alt=""
								class="cimg">
							<img src="<?= base_url('service_img/' . $info->ninteen_section_img_eight) ?>" alt=""
								class="cimg">
							<img src="<?= base_url('service_img/' . $info->ninteen_section_img_nine) ?>" alt=""
								class="cimg">
							<img src="<?= base_url('service_img/' . $info->ninteen_section_img_ten) ?>" alt=""
								class="cimg">
						</div>
					</div>
				</section>

			</div>

		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
	<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- Slick JS -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<script>
		$('.client-slider').slick({
			dots: true,
			arrows: false,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 2000,
			slidesToShow: 2,      // ✅ Show only 3 cards in desktop
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 1024,
					settings: { slidesToShow: 2 }
				},
				{
					breakpoint: 600,
					settings: { slidesToShow: 1 }
				}
			]
		});

		$('.mobileapp-slider').slick({
			dots: true,
			arrows: false,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 2000,
			slidesToShow: 4,   // ✅ 4 logos per row on desktop
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 1024,  // tablet
					settings: { slidesToShow: 3 }
				},
				{
					breakpoint: 768,   // mobile
					settings: { slidesToShow: 3 }
				},
				{
					breakpoint: 480,   // small mobile
					settings: { slidesToShow: 3 }
				}
			]
		});


	</script>