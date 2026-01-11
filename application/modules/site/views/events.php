
<style>
#loading-indicator-event{
		text-align: center;
		padding: 10px;
	}
.blog-posts article {
    border-bottom: 1px solid #DDD;
    margin-bottom: 50px;
    box-shadow: 0px 0px 6px 1px #bab9b9;
    border-radius: 10px;
    padding: 18px;
    transform: scale(1);
    transition: transform 0.5s cubic-bezier(0.25, 0.1, 0.25, 1);
}

.blog-posts article:hover {
    box-shadow: 0px 0px 6px 1px #bab9b9;
    transform: scale(1.01);
}


.blog-posts article h2 {
    font-family: 'Arial', sans-serif; /* Use a different font */
    font-size: 22px;
    color: #333; /* Increase contrast for better readability */
    margin-bottom: 10px; /* Add space between title and content */
}

.blog-posts article p {
    color: #666; /* Increase contrast for better readability */
    font-size: 16px;
}

.blog-posts article .read-more {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s;
}

.blog-posts article .read-more:hover {
    color: #0056b3;
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
			<div class="col-md-9">
				<div class="blog-posts"  id="data-body-event">
				

					<!-- ajax call here -->

				</div>
				
				<div id="loading-indicator-event">
						<div class="spinner-border text-primary"></div>
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
												<a href="<?=base_url('event-details/'.$item->slug)?>">
													<img class="img-responsive" src="<?=$src?>" alt="<?=$item->title?>">
												</a>
											</div>
										</div>
										<div class="post-info">
											<a href="<?=base_url('event-details/'.$item->slug)?>"><?=$item->title?></a>
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


<script>
	$('#loading-indicator-event').show();

    $(document).ready(function() {
        var page = 1;
        var is_loading = false;

        // Function to load data
        function load_data() {
            if (is_loading) return; // If already loading, return

            is_loading = true; // Set loading flag

            // Show loading indicator
            // $('#loading-indicator').show();

            // AJAX request to fetch data
            $('#loading-indicator-event').show();

            $.ajax({
                url: "<?php echo base_url('site/event_article_ajax/'); ?>" + page,
                method: "GET",
                success: function(data) {
					console.log("event data :",data);
					$('#loading-indicator-event').hide();

					if (data == false) {
						is_loading = true; // Reset loading flag
					}else{
						$('#data-body-event').append(data).slideDown();
						page++;
						is_loading = false; // Reset loading flag
					}
                }
            });
        }
        load_data();
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height() - 200) {
                load_data();
            }
        });
    });
</script>