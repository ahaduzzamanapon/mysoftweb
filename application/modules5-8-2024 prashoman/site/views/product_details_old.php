<!--Page Title ============================================= -->
<section id="page-title">
	<div class="container clearfix">
		<h1><?=$meta_title?></h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_url()?>">Home</a></li>
			<li class="active"><?=$meta_title?></li>
		</ol>
	</div>
</section><!-- #page-title end -->

<!-- Content ============================================= -->
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">


			<div class="row clearfix">
				<div class="col-sm-9">
					<div class="row">
						<div class="col-md-9">
							<h2>Product Details Spectificaton</h2>

							<?php
								if($this->session->flashdata('msg')):
									echo $this->session->flashdata('msg');
								endif;
							?>
						</div>

						<div class="col-md-3">
							<!-- <a href="#" class="button button-rounded">Request QUOT</a> -->
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="tabs tabs-bordered clearfix" id="tabs-profile">
								<ul class="tab-nav clearfix">
									<li><a href="#tab-feeds"><i class="icon-rss2"></i> Product Overview </a></li>
									<li><a href="#tab-posts"><i class="icon-pencil2"></i> Modules</a></li>
									<li><a href="#tab-features"><i class="icon-pencil2"></i> Features</a></li>
									<li><a href="#tab-replies"><i class="icon-reply"></i> Technology</a></li>
									<li><a href="#tab-connections"><i class="icon-users"></i> User Client</a></li>
									<li><a href="#demo-request"><i class="icon-users"></i> Demo Request</a></li>
								</ul>

								<div class="tab-container">

									<div class="tab-content clearfix" id="tab-feeds">
											<div class="row">
												<div class="col-md-6"><?=$info->overview?></div>
												<div class="col-md-6">
													<div id="p-carousel" class="widget clearfix" style="margin-bottom: 30px;">	
														<div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

															<div class="oc-item">
																<div class="iportfolio">
																	<div class="portfolio-image">
																		<a href="#">
																			<?php 
															                     $img_path = base_url().'product_img/';
															                     if($info->image_file != NULL){
															                        $src= $img_path.$info->image_file;
															                        // echo "<img src='$src'>";
															                        echo "<img src='$src' alt='$info->name' >";
															                     }
															                ?>
																		</a>
																	</div>
																</div>
															</div>
															
														</div>
													</div>
												</div>
											</div>	
									</div>
									<div class="tab-content clearfix" id="tab-posts">
										<?=$info->modules?>

									</div>
									<div class="tab-content clearfix" id="tab-features">
										<?=$info->features?>

									</div>

									<div class="tab-content clearfix" id="tab-replies">

										<?=$info->technology?>

									</div>
									<div class="tab-content clearfix" id="tab-connections">

										<table class="table table-striped table-bordered" id="">
											<thead>
											  <tr>
												<th>Sl</th>
												<th>Client Name</th>
												<th>Project Name</th>
												<th>Client Logo</th>
											  </tr>
											</thead>
											<tbody>
												<?php  $i=0; ?>
													<?php foreach ($client_name as $item): 
														if(isset($item->client_name) AND isset($item->project_name)){
													?>
													<tr>
														<?php $i++; ?>
														<td><?= $i; ?></td>
														<td><?=$item->client_name?></td>
														<td><?=$item->project_name?></td>
														<td>
															<?php 
										                     $img_path = base_url().'client_img/';
										                     if($item->image_file != NULL){
										                        $src= $img_path.$item->image_file;
										                        // echo "<img src='$src'>
										                        echo "<img src='$src' alt='$item->client_name' class='aligncenter' style='max-width: 100px;'>";
										                     }
										                  	?>
														</td>
													</tr>	
													<?php 
														}
													endforeach ?>
											</tbody>
									    </table>

									</div>
									<div class="tab-content clearfix" id="demo-request">
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

				<div class="line visible-xs-block"></div>

				<div class="col-sm-3 clearfix">

					<div class="fancy-title title-border">
						<h4>Other Products</h4>
					</div>

					<?php foreach ($limit_products as $item) { ?>
						<a href="<?=base_url().'product/'.$item->slug;?>">
                            <?php 
                                 $img_path = base_url().'product_img/';
                                 if($item->image_file != NULL){
                                    $src= $img_path.$item->image_file;
                                    // echo "<img src='$src'>";
                                    echo "<img src='$src' alt='$item->name' >";
                                 }
                            ?>
                        </a>
                        <h4> <a href="<?=base_url().'product/'.$item->slug;?>"><?=$item->name;?> </a></h4>
					<?php } ?>
				</div>

			</div>
		</div>
	</div>
</section><!-- #content end