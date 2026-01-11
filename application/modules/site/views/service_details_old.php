<section id="page-title">
	<div class="container clearfix">
		<h1><?=$meta_title?></h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_url()?>">Home</a></li>
			<li class="active"><?=$meta_title?></li>
		</ol>
	</div>
</section><!-- #page-title end -->

<section id="content">
	<div class="content-wrap" style="padding-top: 45px;">
		<div class="container clearfix">
			<div id="side-navigation">
				<div class="col_one_third nobottommargin">
					<ul class="sidenav">

						<?php foreach ($services as $item): ?>
							<li class="<?=$this->uri->segment(2)==$item->slug?'ui-tabs-active':'';?>">
								<a href="<?=$item->slug;?>"><i class="fa <?=$item->fa_icon?>"></i><?=$item->name?><i class="icon-chevron-right"></i></a>
							</li>		
						<?php endforeach ?>
					</ul>
				</div>

				<div class="col_two_third col_last nobottommargin">

					<div id="snav-content1">
						<div class="heading-block">
							<h3><?php echo $info->name; ?></h3>
						</div>
						<?php 
                     $img_path = base_url().'service_img/';
                     if($info->image_file != NULL){
                        $src= $img_path.$info->image_file;
                        // echo "<img src='$src'>";
                        echo "<img src='$src' alt='$info->name' class='alignleft' style='max-width: 320px;'>";
                     }
                  ?>
						
						<?=$info->description?>
					</div>

				</div>
			</div>

		</div>
	</div>
</section><!-- #content end -->