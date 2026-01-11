<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="pageContent">
	<div class="page-title title-minimal pattern-4">
		<div class="container">
			<h1>All Course</h1>
			<h3>This is sub heading text to describe the page functionality</h3>
			<div class="breadcrumbs style3">
				<a href="#" class="main-color">Home</a><i class="fa fa-angle-double-right main-color"></i>
				<span>All Course</span>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row row-eq-height">
			<div class="col-md-12 md-padding">

				<div class="blog-posts masonry full blog-masonry">
            		<?php 
            		$img_path = base_url().'course_img/thumbs/';
            		foreach ($course_list as $row) {
            			if($row->image_file != NULL){
                        	$src= $img_path.$row->image_file;
                    	}else{
                    		$src= $img_path.'default.jpg';
                    	}
            		?>
            		<div class="post-item">
					    <article class="post-content">
					        <div class="post-image main-border bot-4-border">
								<a href="blog-single.html">
									<img src="<?=$src?>" alt="<?=$row->title;?>">
								</a>
							</div>
					        <div class="post-item-rit">
					        	<div class="post-info-container">
									<div class="post-info">
										<h4><a href="<?=base_url('course/'.$row->slug)?>"><?=$row->title?></a></h4>
										<ul class="post-meta">
											<li class="meta-user"><i class="fa fa-user"></i>Total Class: <?=$row->class_no?></li>
											<li class="meta_date"><i class="fa fa-folder-o"></i>Total Hours: <?=$row->total_hours?></li>
											<li class="meta_date"><i class="fa fa-clock-o"></i>Course Date: <?=$row->course_date?></li>
										</ul>
									</div>
								</div>
								<a class="more_btn main-color" href="<?=base_url('course/'.$row->slug)?>">Read More</a>
					        </div>
					    </article>
					</div>
					<?php } ?>

            	</div>

			</div>

		</div>
	</div>

</div>			    
<!-- Content start -->


