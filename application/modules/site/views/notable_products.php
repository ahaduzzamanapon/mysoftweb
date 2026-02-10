<div role="main" class="main">
	

	<div class="container">
		        <h1 style="margin: 21px 4px 8px 21px;font-family: 'Nourd-Bold', 'Poppins', sans-serif;"><?= $meta_title ?></h1>

		<hr class="tall_slim">

		<div class="row">
			<div class="col-md-12">
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