<!-- Page Title ============================================= -->
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

					<div id="portfolio" class="portfolio grid-container clearfix">
						<?php foreach ($products as $item) { ?>
							<article class="portfolio-item pf-media pf-icons">
								<div class="portfolio-image">
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
									<div class="portfolio-overlay">
										<a href="<?=base_url().'product/'.$item->slug;?>" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="<?=base_url().'product/'.$item->slug;?>"><?=$item->name;?></a></h3>
								</div>
							</article>
						<?php } ?>

					</div><!-- #portfolio end -->

				</div>

			</div>

		</section><!-- #content end -->