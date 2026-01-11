<style>
	.limited-lines {
		display: -webkit-box;
		-webkit-line-clamp: 2;
		/* Limits text to 2 lines */
		-webkit-box-orient: vertical;
		overflow: hidden;
		text-overflow: ellipsis;
		/* Adds "..." if text overflows */
		max-height: 3em;
		/* Adjust this based on your font size */
		line-height: 1.5em;
		/* Ensures proper line spacing */
		white-space: normal;
		word-break: break-word;
	}
	.google-captcha{
		margin-top: 28px !important;
	}

	@media screen and (min-width: 360px) and (max-width: 430px) {
	   .google-captcha{
		   margin-top: 10px !important;
	   }

    }
</style>

<div role="main" class="main">
	<section class="page-top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h1><?= $meta_title ?></h1>
				</div>
				<div class="col-md-5 text-right">
					<ul class="breadcrumb">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li class="active"><?= $meta_title ?></li>
					</ul>
				</div>
			</div>
		</div>
	</section>



	<div class="container">
		<hr class="tall_slim">

		<div class="row">


			<div class="col-md-9">
				<h2>Product: <strong><?= $info->name ?></strong> </h2>
				<div class="row">
					<div class="col-md-12">
						<?php
						if ($this->session->flashdata('msg')):
							$formData = $this->session->flashdata('formData');
							$product_id = htmlspecialchars($formData['product_id']);
							$name = htmlspecialchars($formData['name']);
							$company = htmlspecialchars($formData['company']);
							$email = htmlspecialchars($formData['email']);
							$phone = htmlspecialchars($formData['phone']);
							$customer_say = htmlspecialchars($formData['customer_say']);
							$created_at = htmlspecialchars($formData['created_at']);
						?>
							<script>
								$(document).ready(function() {
									dataLayer.push({
										'event': 'Lead',
										'pagePath': '<?php echo current_url(); ?>',
										'pageTitle': '<?= $meta_title ?> | <?= $domain_title ?>',
										'visitorType': '<?= $this->session->userdata('user_id') == '' ? 'customer' : 'registered' ?>',
										'location_id': '<?php echo $_SERVER['REMOTE_ADDR']; ?>',
										'leadType': 'Demo Request Form',
										'leadValue': 'high',
										'leadSource': '<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'direct' ?>',
										// start
										'product_id': '<?= isset($product_id) ? $product_id : 'unknown' ?>',
										'name': '<?= isset($name) ? $name : 'Anonymous' ?>',
										'company': '<?= isset($company) ? $company : 'N/A' ?>',
										'email': '<?= isset($email) ? $email : 'N/A' ?>',
										'phone': '<?= isset($phone) ? $phone : 'N/A' ?>',
										'customer_say': '<?= isset($customer_say) ? $customer_say : 'N/A' ?>',
										'created_at': '<?= isset($created_at) ? $created_at : date("Y-m-d H:i:s") ?>',
										'submissionDate': '<?= isset($created_at) ? $created_at : date("Y-m-d H:i:s") ?>',

										'hash_product_id': '<?= isset($product_id) ?  hash('sha256', $product_id) : 'unknown' ?>',
										'hash_name': '<?= isset($name) ?  hash('sha256', $name) : 'unknown' ?>',
										'hash_company': '<?= isset($company) ?  hash('sha256', $company) : 'unknown' ?>',
										'hash_email': '<?= isset($email) ?  hash('sha256', $email) : 'unknown' ?>',
										'hash_phone': '<?= isset($phone) ?  hash('sha256', $phone) : 'unknown' ?>',
										'hash_customer_say': '<?= isset($customer_say) ?  hash('sha256', $customer_say) : 'unknown' ?>',
										'hash_created_at': '<?= isset($created_at) ?  hash('sha256', $created_at) : 'unknown' ?>',
										// end

										'gclid': '<?= isset($_GET['gclid']) ? $_GET['gclid'] : 'N/A' ?>',
										'fbclid': '<?= isset($_GET['fbclid']) ? $_GET['fbclid'] : 'N/A' ?>',
										'timeOnPage': 120,
										'landing_page': '<?php echo current_url(); ?>',
										'traffic_source': '<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'direct' ?>',
										'utm_source': '<?= isset($_GET['utm_source']) ? $_GET['utm_source'] : 'organic' ?>',
										'utm_medium': '<?= isset($_GET['utm_medium']) ? $_GET['utm_medium'] : 'N/A' ?>',
										'utm_campaign': '<?= isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : 'N/A' ?>',
										'utm_content': '<?= isset($_GET['utm_content']) ? $_GET['utm_content'] : 'N/A' ?>',
										'utm_term': '<?= isset($_GET['utm_term']) ? $_GET['utm_term'] : 'N/A' ?>'
									});
								});
							</script>
						<?php
						if (isset($_SESSION['msg'])) {
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						};
						endif;
						?>
						<div class="tabs">
							<ul class="nav nav-tabs">
								<li><a href="#product_overview" data-toggle="tab"><i class="fa fa-dot-circle-o"></i> Product Overview</a></li>
								<li><a href="#modules" data-toggle="tab"> <i class="fa fa-th"></i> Modules</a></li>
								<li><a href="#features" data-toggle="tab"> <i class="fa fa-list"></i> Features</a></li>
								<li><a href="#technology" data-toggle="tab"> <i class="fa fa-laptop"></i> Technology</a></li>
								<li class="active"><a href="#demo_request" data-toggle="tab"> <i class="fa fa-location-arrow"></i> Demo Request</a></li>
							</ul>
							<div class="tab-content">
								<div id="product_overview" class="tab-pane">
									<?php
									$img_path = base_url() . 'product_img/';
									if ($info->image_file != NULL) {
										$src = $img_path . $info->image_file;
										echo "<img src='$src' alt='$info->name' class='pull-right' style='margin:0 0 20px 20px;'>";
									}
									?>
									<?= $info->overview ?>
								</div>
								<div id="modules" class="tab-pane">
									<?= $info->modules ?>
								</div>
								<div id="features" class="tab-pane">
									<?= $info->features ?>
								</div>
								<div id="technology" class="tab-pane">
									<?= $info->technology ?>
								</div>
								<div id="demo_request" class="tab-pane active">

									<?php

									if ($info->slug == 'salesman') { ?>
										<img class="img-responsive" src="<?= base_url('product_img/sal_im.jpeg') ?>" alt="">
										<br>
										<h2><strong>আপনার দোকান/শোরুম বা সুপারশপের জন্য সফটওয়্যারটি নিতে এখনই ফর্মটি সাবমিট করুন</strong></h2>
									<?php
									}

									?>


									<form method="post" action="<?php echo base_url('site/demo_request'); ?>">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Name: </label>
													<input type="text" name="demo_req_name" id="demo_req_name" class="form-control" required>
													<input type="hidden" name="product_url" id="product_url" value="<?= $info->slug; ?>">
													<input type="hidden" name="product_id" id="product_id" value="<?= $info->id; ?>">
													<div><?php echo form_error('demo_req_name'); ?></div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Company Name: </label>
													<input type="text" name="demo_req_com_name" id="demo_req_com_name" class="form-control">
													<div><?php echo form_error('demo_req_com_name'); ?></div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Email: </label>
													<input type="email" name="demo_req_email" id="demo_req_email" class="form-control">
													<div><?php echo form_error('demo_req_email'); ?></div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Phone: </label>
													<input type="text" name="demo_req_phone" id="demo_req_phone" class="form-control" required>
													<div><?php echo form_error('demo_req_phone'); ?></div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Message: </label>
													<!-- <input type="text" name="demo_req_cus_say" id="demo_req_cus_say" class="form-control"> -->
													<textarea name="demo_req_cus_say" id="demo_req_cus_say" class="form-control" cols="30" rows="5"></textarea>
													<div><?php echo form_error('demo_req_cus_say'); ?></div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group google-captcha">
													<div class="g-recaptcha" data-sitekey="6LfA8-YqAAAAAEV49YCfo6yahebn22LotdY9Jqby"></div>
													<div><?php echo form_error('g-recaptcha-response'); ?></div>
												</div>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-offset-5 col-md-8">
												<div class="form-group">
													<label>&nbsp;</label>
													<button class="btn btn-primary">Submit</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<aside class="sidebar">
					<h4>Our Products</h4>
					<div class="row">
						<ul class="portfolio-list sort-destination" style="display: flex;flex-wrap: wrap;gap: 0px; justify-content: center;">
							<?php foreach ($products as $item) { ?>
								<li class="col-md-6 col-sm-2 col-xs-6">
									<div class="img-thumbnail">
										<a href="<?= base_url() . 'product/' . $item->slug; ?>" class="thumb-info">
											<?php
											$img_path = base_url() . 'product_img/';
											if ($item->image_file != NULL) {
												$src = $img_path . $item->image_file;
												echo "<img src='$src' alt='$item->name' class='img-responsive'>";
											}
											?>
										</a>
									</div>
									<h6 class="limited-lines"><?= $item->name ?></h6>
								</li>
							<?php } ?>
						</ul>
					</div>
				</aside>
			</div>

		</div>

		<hr class="tall">
	</div>
</div>