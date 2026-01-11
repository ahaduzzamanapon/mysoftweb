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
					<h5><?=$main_service_info[0]->main_service_name?></h5>
					<div class="list-group">		
						<?php foreach ($services as $item): ?>				        	
							<a href="<?=$item->slug;?>" class="list-group-item <?=$this->uri->segment(2)==$item->slug?'active':'';?>">
								<i class="fa <?=$item->fa_icon?>"></i> <?=$item->name?>
							</a>
						<?php endforeach ?>
					</div> 

					<hr />
				</aside>
			</div>

			<div class="col-md-9">
				<h2 class="services_details_custom_style"><strong><?php echo $info->name; ?> </strong> Service</h2>
				<div class="row">
					<div class="col-md-12">
						<?php 
                     $img_path = base_url().'service_img/';
                     if($info->image_file != NULL){
                        $src= $img_path.$info->image_file;
                        echo "<img src='$src' alt='$info->name' class='pull-left' style='max-width: 300px; margin:0 20px 20px 0;border:1px solid #ccc; padding:3px;'>";
                     }
                  ?>			
                  <?=$info->description?>			
						
					</div>
				</div>
			</div>

		</div>

		<hr class="tall">
	</div>
</div>