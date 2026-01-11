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
			<div class="col-md-3">
				<aside class="sidebar">
					<h4>Our Products</h4>
					<div class="row">
						<ul class="portfolio-list sort-destination">
							<?php foreach ($products as $item) { ?>
							<li class="col-md-6 col-sm-2 col-xs-3">
								<div class="img-thumbnail">
									<a href="<?=base_url().'product/'.$item->slug;?>" class="thumb-info">
										<?php 
										$img_path = base_url().'product_img/';
										if($item->image_file != NULL){
											$src= $img_path.$item->image_file;
											echo "<img src='$src' alt='$item->name' class='img-responsive'>";
										}
										?>
									</a>
								</div>
								<h6><?=$item->name?></h6>
							</li>
							<?php } ?>
						</ul>
					</div>
				</aside>
			</div>

			<div class="col-md-9">
				<h2>Product: <strong><?=$item->name?></strong> </h2>
				<div class="row">
					<div class="col-md-12">
						<?php
						if($this->session->flashdata('msg')):
							echo $this->session->flashdata('msg');
						endif;
						?>
						<div class="tabs">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#product_overview" data-toggle="tab"><i class="fa fa-dot-circle-o"></i>  Product Overview</a></li>
								<li><a href="#modules" data-toggle="tab"> <i class="fa fa-th"></i> Modules</a></li>
								<li><a href="#features" data-toggle="tab"> <i class="fa fa-list"></i> Features</a></li>
								<li><a href="#technology" data-toggle="tab"> <i class="fa fa-laptop"></i> Technology</a></li>
								<li><a href="#demo_request" data-toggle="tab"> <i class="fa fa-location-arrow"></i> Demo Request</a></li>

							</ul>
							<div class="tab-content">
								<div id="product_overview" class="tab-pane active">
									<?php 
									$img_path = base_url().'product_img/';
									if($info->image_file != NULL){
										$src= $img_path.$info->image_file;
										echo "<img src='$src' alt='$info->name' class='pull-right' style='margin:0 0 20px 20px;'>";
									}
									?>
									<?=$info->overview?>
								</div>
								<div id="modules" class="tab-pane">
									<?=$info->modules?>
								</div>
								<div id="features" class="tab-pane">
									<?=$info->features?>
								</div>
								<div id="technology" class="tab-pane">
									<?=$info->technology?>
								</div>
								<div id="demo_request" class="tab-pane">
									<form method="post" action="<?php echo base_url('site/demo_request/'); ?>">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Name: </label>
													<input type="text" name="demo_req_name" id="demo_req_name" class="form-control" required>
													<input type="hidden" name="product_url" id="product_url" value="<?= $info->slug; ?>">
													<input type="hidden" name="product_id" id="product_id" value="<?= $info->id; ?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Company Name: </label>
													<input type="text" name="demo_req_com_name" id="demo_req_com_name" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Email: </label>
													<input type="email" name="demo_req_email" id="demo_req_email" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Phone: </label>
													<input type="text" name="demo_req_phone" id="demo_req_phone" class="form-control" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Have your say: </label>
													<input type="text" name="demo_req_cus_say" id="demo_req_cus_say" class="form-control">
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

		</div>

		<hr class="tall">
	</div>
</div>