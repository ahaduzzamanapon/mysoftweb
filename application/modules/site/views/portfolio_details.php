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


		<hr />

        <div class="row">
            <div class="col-lg-6">
                <div >
                    <div>
                        
                        <span class="img-thumbnail">
                            <?php
                                $img_path = base_url().'portfolio_img/';
                                if($info->image_file != NULL){
                                    $src= $img_path.$info->image_file;
                                }else{
                                    $src= $img_path.'default.jpg';
                                }
                            ?>
                            <img alt="" class="img-responsive" src="<?= $src; ?>">

                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 style="line-height: 33px;"><?=$info->name?></h3>
                
                <ul class="list list-icons list-primary">
                    <li><i class="fa fa-caret-right"></i> <strong>Category:</strong> <?=$info->cat_name?></li>
                    <li><i class="fa fa-caret-right"></i> <strong>URL:</strong> <?=$info->url?></li>
                    
                </ul>
                <p><?=$info->description?></p>
                
        </div>



		<div class="row">	
            <h3 style="padding:15px;">Related Category</h3>
				<ul class="portfolio-list sort-destination lightbox" data-sort-id="portfolio" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>

				
					<?php foreach ($category as $row) { 
						$img_path = base_url().'portfolio_img/';
						if($row->image_file != NULL){
							$src= $img_path.$row->image_file;
						}else{
							$src= $img_path.'default.jpg';
						}
						?>
						<li class="col-lg-3 col-md-4 col-sm-6 col-xs-12 isotope-item <?=$row->id?>" style="margin: bottom 20px;">
							<!-- <div class="card " >
								<img class="card-img-top" src="<?=$src;?>" alt="Card image cap">
								<div class="card-body">
									<h5 title="<?=$row->name?>" class="card-title">
									<?php
										$name = $row->name;
										echo substr($name, 0, 20); 
										if (strlen($name) > 20) {
											echo "...";
										}
									?>
										</h5>
									
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div> -->
							<div class="portfolio-item img-thumbnail">
								<a class="thumb-info">
									<img alt="" class="img-responsive" src="<?=$src;?>">
									<span class="thumb-info-title">
										
										<span class="thumb-info-type"><?=$row->cat_name?></span>
									</span>							
								</a>

								<h5 class="portfolio-title" title="<?=$row->name?>">
									<?php
										$name = $row->name;
										echo substr($name, 0, 23); 
										if (strlen($name) > 23) {
											echo "...";
										}
									?>
										</h5>
									

									
								<a href="<?=base_url('site/portfolio_details/').$row->id?>" class="portfolio-details-btn btn btn-sm">Details</a>
							</div>
						</li>
					<?php } ?>
				</ul>
			</div>

			<hr class="tall">
		</div>
	</div>
