<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">

			<ul class="portfolio-filter clearfix" data-container="#portfolio">
				<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
				<?php
					foreach ($category as $item) { ?>
						
				
				<li><a href="#" data-filter=".pf<?=$item->id?>"><?=$item->cat_name?></a></li>
				<?php } ?>
				<!-- <li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
				<li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
				<li><a href="#" data-filter=".pf-media">Media</a></li>
				<li><a href="#" data-filter=".pf-graphics">Graphics</a></li> -->
			</ul><!-- #portfolio-filter end -->

			<div class="clear"></div>

			<!-- Portfolio Items
			============================================= -->
			<div id="portfolio" class="portfolio grid-container clearfix">

			<?php foreach ($portfolios as $row) { ?>

				<article class="portfolio-item pf<?=$row->id?>">
					<div class="portfolio-image">
						<a href="<?=$row->url?>">
							<?php 
			                     $img_path = base_url().'portfolio_img/';
			                     if($row->image_file != NULL){
			                        $src= $img_path.$row->image_file;
			                        // echo "<img src='$src'>";
			                        //echo "<img src='$src' alt='$info->name' class='alignleft' style='max-width: 320px;'>";
			                     }
			                  ?>
							<img src="<?=$src?>" width="150" alt="Open Imagination">
						</a>
						<div class="portfolio-overlay">
							<a href="<?=$src?>" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
							<a href="<?=$row->url?>" class="right-icon"><i class="icon-line-ellipsis"></i></a>
						</div>
					</div>
					<div class="portfolio-desc">
						<h3><a href="<?=$row->url?>"><?=$row->name?></a></h3>
					</div>
				</article>

			<?php } ?>

				

			</div><!-- #portfolio end -->
		</div>
	</div>
</section><!-- #content end -->