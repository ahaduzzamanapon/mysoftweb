<style>
.social-share {
    display: flex;
    flex-direction: column;
    position: absolute;
    margin-top: 28px;
}


 .toggle-box-one{
    padding: 1px 11px;
    width: fit-content !important;
    border-radius: 7px;
    box-shadow: 0px 0px 7px 1px #c8c8c8;
}

.social {
    box-shadow: 4px 3px 9px 1px rgba(0, 0, 0, 0.2);
    position: absolute;
    top: -78px;
    display: none;
    justify-content: space-between;
    background-color: white;
    padding: 8px 24px;
    border-radius: 16px;
}
.socialh {
  animation: fadeIn 1s;
  display: flex;
}




.social a {
  margin: 0 15px;
  font-size: 32px;
  color: #999;
  cursor: pointer;
}
.fa-twitter:hover {
  color: rgb(29, 161, 242);
}
.fa-instagram-square:hover {
  background: -webkit-linear-gradient(
    #405de6,
    #5851db,
    #833ab4,
    #c13584,
    #e1306c,
    #fd1d1d,
    #f56040,
    #f77737,
    #fcaf45,
    #ffdc80
  );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
/* .fa-vk:hover {
  color: #4c75a3;
} */

/* .fa-behance-square:hover {
  color: black;
} */


@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
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
	<?php
	// exit();
	?>

	<div class="container">
		<hr class="tall_slim">

		<div class="row">
			<div class="col-md-9">
				<div class="blog-posts single-post">

					<article class="post post-large blog-single-post">
					<?php if($info->image_file != NULL){ ?>
						<div class="post-image">
							<div>
								<div class="img-thumbnail">
									<img class="img-responsive" src="<?=base_url('blog_img/'.$info->image_file);?>" alt="<?=$info->title?>">
								</div>								
							</div>
						</div>
					<?php } ?>

						<div class="post-date">
							<span class="day"><?=date('d', strtotime($info->post_date))?></span>
							<span class="month"><?=date('M', strtotime($info->post_date))?></span>
							<!-- <span class="year">2017</span> -->
						</div>

						<div class="post-content">

							<h2><?=$info->title?></h2>

							<div class="post-meta">
								<span><i class="fa fa-user"></i> By <strong>Admin</strong> </span>
							</div>

							<?=$info->description?>
							<div class="social-share">
									<div onclick='ssbtn()' style="box-shadow: 0px 0px 8px 4px #d8d8d8;padding: 10px 23px;cursor: pointer;border-radius: 7px;">
										<span style="color: #0071b6;font-size: 18px;" > Share
											<i class="fa fa-solid fa-share" style="color: #0071b6;font-size: 16px;"></i>
										</span>
									</div>
									<div class="social">
											<a id="facebookShare" onclick='facebookbtn()'>
											<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="50px" height="50px"><path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"/><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"/></svg>							
											</a>
											<a id="whatsappShare" onclick='whatsappbtn()'>
												<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="50px" height="50px" clip-rule="evenodd"><path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"/><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"/><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"/><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"/><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"/></svg>											
											</a> 
									</div>
							</div>
						</div>
					</article>

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
												<a href="<?=base_url('blog-article-details/'.$item->slug)?>">
													<img class="img-responsive" src="<?=$src?>" alt="<?=$item->title?>">
												</a>
											</div>
										</div>
										<div class="post-info">
											<a href="<?=base_url('blog-article-details/'.$item->slug)?>"><?=$item->title?></a>
											<div class="post-meta"> <?=date('d F, y', strtotime($item->post_date));?> </div>
										</div>
									</li>
									<?php } ?>
								</ul>
							</div>
							
						</div>
					</div>

				</aside>
			</div>
		</div>
		
		<hr class="tall">
	</div>

</div>
<script>
			var x = document.querySelector('.social');
			x.style.display = "none";

	function ssbtn(){
		var x = document.querySelector('.social');
		if (x.style.display === "none") {
			x.style.display = "flex";
			x.classList.add('socialh');
		} else {
			x.style.display = "none";
			x.classList.remove('socialh');
		}
	};	
</script>

<script>


	function facebookbtn(){

      window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(window.location.href),'facebook-share-dialog','width=626,height=436');
    }

    function whatsappbtn(){

		window.open('https://web.whatsapp.com/send?text='+encodeURIComponent(window.location.href));
	}

  </script>