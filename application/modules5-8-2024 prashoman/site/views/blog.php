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
			<div class="col-md-9">
				
				<div class="blog-posts">
				<?php foreach ($blogs as $item) { 
					
					if(strlen($item->title) > 40 ){
						$title = substr($item->title, 0, 40).' ...';
					}else{
						$title = $item->title;
					}

					if(strlen($item->description) > 200 ){
						$description = substr($item->description, 0, 270).' ...';
					}else{
						$description = $item->description;
					}

					$img_path = base_url().'blog_img/';
					if($item->image_file != NULL){
						$src= $img_path.$item->image_file;
						// echo "<img src='$src' alt='$item->name' class='img-circle'>";
					}else{
						$src= $img_path.'blog-default.jpg';
					}
					?>
					<article class="post post-medium">
						<div class="row">
							<div class="col-md-5">
								<div class="post-image">
									<div class="img-thumbnail">
										<img class="img-responsive" src="<?=$src?>" alt="<?=$item->title?>">
									</div>
								</div>
							</div>
							<div class="col-md-7">
								<div class="post-content">
									<h2><a href="<?=base_url('blog-article/'.$item->slug)?>"><?=$title?></a></h2>
									<p><?=$description?></p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="post-meta">
									<span><i class="fa fa-calendar"></i> <?=date('d F, Y', strtotime($item->post_date));?></span>
									<span><i class="fa fa-user"></i> By <strong>Admin</strong> </span>
									<a href="<?=base_url('blog-article/'.$item->slug)?>" class="btn btn-xs btn-primary pull-right">Read more...</a>
								</div>
							</div>
						</div>
					</article>
					<?php } ?>

					<!-- <ul class="pagination pagination-sm pull-right">
						<li><a href="#">«</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">»</a></li>
					</ul> -->

				</div>
			</div>

			<div class="col-md-3">
				<aside class="sidebar">

					<div class="tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular</a></li>
							<!-- <li><a href="#recentPosts" data-toggle="tab">Recent</a></li> -->
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="popularPosts">
								<!-- Blog article not found. -->
								 <ul class="simple-post-list">
								 <?php foreach ($blog_popular as $item) { 
									$img_path = base_url().'blog_img/';
									if($item->image_file != NULL){
										$src= $img_path.$item->image_file;
										// echo "<img src='$src' alt='$item->name' class='img-circle'>";
									}else{
										$src= $img_path.'blog-default.jpg';
									}
									?>
									<li>
										<div class="post-image">
											<div class="img-thumbnail">
												<a href="<?=base_url('blog-article/'.$item->slug)?>">
													<img class="img-responsive" src="<?=$src?>" alt="<?=$item->title?>">
												</a>
											</div>
										</div>
										<div class="post-info">
											<a href="<?=base_url('blog-article/'.$item->slug)?>"><?=$item->title?></a>
											<div class="post-meta"> <?=date('d F, y', strtotime($item->post_date));?> </div>
										</div>
									</li>
									<?php } ?>
								</ul>
							</div>
							<!-- <div class="tab-pane" id="recentPosts">
								Blog article not found.
								<ul class="simple-post-list">
									<li>
										<div class="post-image">
											<div class="img-thumbnail">
												<a href="blog-post.html">
													<img src="img/blog/blog-thumb-2.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="post-info">
											<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
											<div class="post-meta">
												Jan 10, 2013
											</div>
										</div>
									</li>
									<li>
										<div class="post-image">
											<div class="img-thumbnail">
												<a href="blog-post.html">
													<img src="img/blog/blog-thumb-3.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="post-info">
											<a href="blog-post.html">Odiosters Nullam Vitae</a>
											<div class="post-meta">
												Jan 10, 2013
											</div>
										</div>
									</li>
									<li>
										<div class="post-image">
											<div class="img-thumbnail">
												<a href="blog-post.html">
													<img src="img/blog/blog-thumb-1.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="post-info">
											<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
											<div class="post-meta">
												Jan 10, 2013
											</div>
										</div>
									</li>
								</ul> 
							</div>-->
						</div>
					</div>

				</aside>
			</div>
		</div>

		<hr class="tall">
	</div>
	
</div>