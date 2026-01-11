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
				<h2>Our Notable <strong>Products</strong></h2>
				<div class="row featured-boxes notable">
				<?php
					foreach($notable_data as $item){ ?>
						
						<div class="col-md-3 col-sm-6">
							<div class="notable-box">

								<a href="<?= $item->website_link ?>" target="_blank">
									<img src="<?= base_url('notable_img/').$item->notable_logo?>" class="img-circle animatinTrans" alt="">
								</a>


								<h4 class="notable-title"><?=$item->notable_title?></h4>
								<a href="<?= base_url() . 'notable_details/'.$item->id ?>">Read More</a>


							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<hr class="tall">
	</div>
</div>