<style>
    @media screen and (min-width: 360px) and (max-width: 430px) {
		.featured-box {
			min-height: 200px !important;
			/* padding: 15px !important; */
		}

		.featured-box .box-content {
			min-height: 200px !important;
		}
    }
</style>

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
			<div class="col-md-12">
				<h2>Our <strong>Products</strong></h2>
				<div class="row featured-boxes">
					<?php foreach ($products as $item) { ?>
					<div class="col-md-3 col-sm-6">
						<div class="featured-box featured-box-secundary">
							<div class="box-content">
								<a href="<?=base_url().'product/'.$item->slug;?>" >
									<?php 
									$img_path = base_url().'product_img/';
									if($item->image_file != NULL){
										$src= $img_path.$item->image_file;
										echo "<img src='$src' alt='$item->name' class='img-circle'>";
									}
									?>
								</a>
								<div class="title">
									<!-- <h4><?=substr($item->name, 0, 40) .'...';?></h4> -->
									<h4><?=$item->name?></h4>
								</div>
								
									<!-- Donec id elit non mi porta gravida at eget metus. Fusce dapibus. -->
									<a href="<?=base_url().'product/'.$item->slug;?>" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
								</div>
							</div>
						</div>
					<?php } ?>	
				</div>

			</div>
		</div>

		<hr class="tall">
	</div>
</div>