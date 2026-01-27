<style>
	/* Global Font & Reset */
	.main {
		font-family: 'Poppins', sans-serif;
		background: #fff;
	}

	/* Header Section */
	.portfolio-header {
		text-align: center;
		padding: 50px 0 30px;
	}

	.portfolio-title {
		color: #004085;
		font-weight: 700;
		font-size: 32px;
		margin-bottom: 10px;
	}

	.portfolio-title span {
		color: #000;
	}

	.portfolio-subtitle {
		color: #000;
		font-weight: 700;
		font-size: 24px;
		margin-bottom: 40px;
	}

	/* Filter Nav */
	.portfolio-filter-nav {
		list-style: none;
		/* Removed defaults */
		padding: 0;
		margin: 0 0 40px 0;
		/* Reduced margin */
		text-align: center;
		display: flex;
		justify-content: center;
		flex-wrap: wrap;
		/* Allow wrapping on small screens */
		gap: 20px;
		/* Space between items */
		border: none !important;
		/* Force remove border */
	}

	.portfolio-filter-nav li {
		display: inline-block;
		cursor: pointer;
		background: transparent !important;
		/* No background */
	}

	.portfolio-filter-nav li a {
		color: #000;
		font-weight: 700;
		/* Bolder font */
		font-size: 16px;
		text-decoration: none;
		padding-bottom: 5px;
		border-bottom: 3px solid transparent;
		/* Hidden border for transition */
		transition: all 0.3s ease;
		background: transparent !important;
	}

	.portfolio-filter-nav li.active a,
	.portfolio-filter-nav li a:hover,
	.sort-source li.active a {
		/* Handle sort-source override */
		color: #007bff;
		/* Blue text */
		border-bottom: 3px solid #007bff;
		/* Blue underline */
		background: transparent !important;
	}

	/* Override Bootstrap Nav Pills */
	.nav-pills>li.active>a,
	.nav-pills>li.active>a:focus,
	.nav-pills>li.active>a:hover {
		background-color: transparent !important;
		color: #007bff !important;
		border-bottom: 3px solid #007bff;
	}

	/* Portfolio Grid */
	.portfolio-grid {
		display: flex;
		flex-wrap: wrap;
	}

	.portfolio-item-wrapper {
		padding: 15px;
	}

	.portfolio-card {
		background: #fff;
		border-radius: 10px;
		/* Matching reference */
		box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
		/* Softer shadow */
		padding: 40px;
		/* Generous padding */
		display: flex;
		flex-direction: row;
		align-items: center;
		/* Center vertically */
		height: 500px;
		/* Fixed height for uniformity */
		border: 1px solid #f0f0f0;
		transition: transform 0.3s ease;
		position: relative;
		overflow: hidden;
	}

	.portfolio-card:hover {
		transform: translateY(-5px);
		box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
	}

	/* Left Side Content */
	.card-content {
		flex: 0 0 55%;
		/* Fixed width for content */
		max-width: 55%;
		padding-right: 30px;
		display: flex;
		flex-direction: column;
		justify-content: center;
		height: 100%;
	}

	.project-header {
		display: flex;
		align-items: center;
		margin-bottom: 20px;
	}

	.project-icon {
		width: 45px;
		height: 45px;
		display: flex;
		align-items: center;
		justify-content: center;
		border-radius: 50%;
		color: #fff;
		font-size: 20px;
		margin-right: 15px;
		flex-shrink: 0;
	}

	.project-title {
		font-size: 20px;
		font-weight: 700;
		margin: 0;
		line-height: 1.3;
		color: #007bff;
		/* Always blue title based on ref */
	}

	/* Dynamic Branding Colors - Only Icon Background Changes */
	.theme-orange .project-icon {
		background: #ffbe76;
	}

	/* Title color removed from here to keep uniform blue */

	.theme-green .project-icon {
		background: #badc58;
	}

	.theme-blue .project-icon {
		background: #7ed6df;
	}


	.project-desc {
		font-size: 14px;
		color: #555;
		line-height: 1.7;
		margin-bottom: 30px;
		/* Line Clamp */
		display: -webkit-box;
		-webkit-line-clamp: 5;
		/* More text visible */
		-webkit-box-orient: vertical;
		overflow: hidden;
		text-overflow: ellipsis;
	}

	/* Stats Grid */
	.project-stats {
		display: flex;
		gap: 40px;
		margin-bottom: 25px;
	}

	.stat-box {
		text-align: left;
	}

	.stat-label {
		font-size: 12px;
		font-weight: 600;
		color: #007bff;
		display: block;
		margin-bottom: 5px;
	}

	.stat-value {
		font-size: 14px;
		font-weight: 700;
		color: #333;
	}

	.availability-text {
		font-size: 12px;
		color: #888;
		margin-bottom: 20px;
		font-weight: 500;
	}

	/* Actions */
	.project-actions {
		display: flex;
		gap: 15px;
		flex-wrap: wrap;
	}

	.btn-store {
		background: #fff;
		color: #333;
		font-size: 13px;
		padding: 8px 15px;
		border-radius: 8px;
		text-decoration: none;
		display: inline-flex;
		align-items: center;
		gap: 8px;
		transition: 0.2s;
		border: 1px solid #ddd;
		font-weight: 600;
	}

	.btn-store:hover {
		background: #f8f9fa;
		color: #000;
		text-decoration: none;
		border-color: #ccc;
	}

	/* Web Portal Button Style */
	.btn-webportal {
		border: 1px solid #007bff;
		color: #007bff;
		background: #fff;
		padding: 8px 20px;
		border-radius: 8px;
		font-size: 13px;
		font-weight: 600;
		text-decoration: none;
		display: inline-flex;
		align-items: center;
		gap: 8px;
		transition: 0.2s;
	}

	.btn-webportal:hover {
		background: #007bff;
		color: #fff;
		text-decoration: none;
	}

	/* Right Side Visuals */
	.card-visual {
		flex: 0 0 45%;
		max-width: 45%;
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100%;
		position: relative;
	}

	/* Phone Mockup CSS */
	.mockup-phone {
		width: 180px;
		/* Larger phone */
		height: 360px;
		border: 8px solid #ddd;
		/* Light grey frame */
		border-radius: 25px;
		overflow: hidden;
		position: relative;
		background: #fff;
		box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
	}

	/* Notch */
	.mockup-phone::before {
		content: '';
		position: absolute;
		top: 0;
		left: 50%;
		transform: translateX(-50%);
		width: 40%;
		height: 18px;
		background: #ddd;
		border-radius: 0 0 10px 10px;
		z-index: 2;
	}

	/* Browser Mockup CSS */
	.mockup-browser {
		width: 100%;
		border-radius: 12px;
		overflow: hidden;
		box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
		border: 1px solid #ddd;
		background: #fff;
	}

	.browser-header {
		height: 28px;
		background: #f8f9fa;
		border-bottom: 1px solid #eee;
		display: flex;
		align-items: center;
		padding-left: 12px;
		gap: 6px;
	}

	.browser-dot {
		width: 8px;
		height: 8px;
		border-radius: 50%;
		background: #ccc;
	}

	.browser-dot.red {
		background: #ff5f57;
	}

	.browser-dot.yellow {
		background: #ffbd2e;
	}

	.browser-dot.green {
		background: #28c940;
	}

	.mockup-img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		display: block;
	}

	/* Responsive */
	@media (max-width: 991px) {
		.portfolio-card {
			flex-direction: column;
			text-align: center;
			padding: 30px;
			height: auto;
			/* Auto height on mobile */
		}

		.card-content {
			padding-right: 0;
			padding-bottom: 30px;
			width: 100%;
			flex: 0 0 100%;
			max-width: 100%;
		}

		.card-visual {
			width: 100%;
			flex: 0 0 100%;
			max-width: 100%;
		}

		.project-header {
			flex-direction: column;
			margin-bottom: 20px;
			justify-content: center;
		}

		.project-icon {
			margin: 0 0 15px 0;
		}

		.project-stats {
			justify-content: center;
		}

		.project-actions {
			justify-content: center;
		}
	}
</style>

<div role="main" class="main">
	<div class="container-fluid" style="padding-left: 50px; padding-right: 50px;">
		<!-- Header -->
		<div class="portfolio-header">
			<h1 class="portfolio-title">Mysoftheaven <span>Portfolio</span></h1>
			<h2 class="portfolio-subtitle">Change the world through ideas</h2>
		</div>

		<!-- Filter -->
		<ul class="nav nav-pills portfolio-filter-nav sort-source" data-sort-id="portfolio" data-option-key="filter">
			<li data-option-value="*" class="active"><a href="#">All</a></li>
			<?php foreach ($category as $item) { ?>
				<li data-option-value=".category-<?= $item->id ?>"><a href="#"><?= $item->cat_name ?></a></li>
			<?php } ?>
		</ul>

		<!-- Custom Filtering Script (Isotope Replacement) -->
		<script>
			document.addEventListener('DOMContentLoaded', function () {
				var checkJquery = setInterval(function () {
					if (typeof jQuery !== 'undefined') {
						clearInterval(checkJquery);
						var $ = jQuery;

						console.log('Custom Portfolio Filter Initialized');

						// Filter click handler
						$('.sort-source a').off('click').on('click', function (e) {
							e.preventDefault();
							var $this = $(this);
							var $parent = $this.parent();

							// Get filter value (e.g., ".category-5" or "*")
							var filterValue = $parent.attr('data-option-value');
							console.log('Filter clicked:', filterValue);

							// Highlight active tab
							$('.sort-source li').removeClass('active');
							$parent.addClass('active');

							// Filter Items
							if (filterValue === '*') {
								// Show all
								$('.portfolio-item-wrapper').fadeIn(300);
							} else {
								// Hide all first
								$('.portfolio-item-wrapper').hide();

								// Show matching items
								// filterValue contains a dot (e.g. .category-5), so we use it as a selector
								$(filterValue).fadeIn(300);
							}
						});
					}
				}, 100);
			});
		</script>

		<!-- Portfolio Items -->
		<div class="row">
			<ul class="portfolio-list sort-destination lightbox" data-sort-id="portfolio"
				data-plugin-options='{"delegate": "a.lightbox-active", "type": "image", "gallery": {"enabled": true}}'>
				<?php foreach ($portfolios as $row) {
					$img_path = base_url() . 'portfolio_img/';
					$src = ($row->image_file != NULL) ? $img_path . $row->image_file : $img_path . 'default.jpg';

					// Fallback description
					$description = isset($row->short_desc) && !empty($row->short_desc) ? $row->short_desc : "A modern solution designed to revolutionize the way you interact with technology. Seamless, fast, and secure.";
					// Determine Type (Mobile vs Web) based on Database Field
					$is_mobile = (isset($row->project_type) && $row->project_type == 'app');

					// Fallback to Category Name check if project_type is null (for backward compatibility)
					if (!isset($row->project_type) || empty($row->project_type)) {
						$is_mobile = (stripos($row->cat_name, 'Mobile') !== false || stripos($row->cat_name, 'Android') !== false || stripos($row->cat_name, 'iOS') !== false);
					}

					// Helper function to ensure absolute URL
					$ensure_absolute_url = function ($url) {
						if (empty($url))
							return '';
						if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
							$url = "http://" . $url;
						}
						return $url;
					};

					$app_link = isset($row->app_store_link) ? $ensure_absolute_url($row->app_store_link) : '';
					$play_link = isset($row->play_store_link) ? $ensure_absolute_url($row->play_store_link) : '';

					$web_link_val = isset($row->web_link) ? $row->web_link : '';
					$url_val = isset($row->url) ? $row->url : '';
					$web_url_raw = !empty($web_link_val) ? $web_link_val : (!empty($url_val) ? $url_val : '');

					$web_url = $ensure_absolute_url($web_url_raw);

					// Determine Theme Color and Icon based on Project Type
					if ($is_mobile) {
						$theme_class = 'theme-orange';
						$icon_class = 'fa fa-rocket';
					} else {
						$theme_class = 'theme-green';
						$icon_class = 'fa fa-gavel'; // Example icon
					}
					?>
					<li class="col-md-6 portfolio-item-wrapper isotope-item category-<?= $row->cate_id ?>">
						<div class="portfolio-card <?= $theme_class ?>">
							<!-- Content -->
							<div class="card-content">
								<div class="project-header">
									<div class="project-icon">
										<i class="<?= $icon_class ?>"></i>
									</div>
									<h3 class="project-title"><?= $row->name ?></h3>
								</div>

								<p class="project-desc">
									<?php echo $description; ?>
								</p>

								<?php if ($is_mobile) { ?>
									<div class="project-stats">
										<div class="stat-box">
											<span class="stat-label">Download</span>
											<span class="stat-value">100k+</span>
										</div>
										<div class="stat-box">
											<span class="stat-label">Platform</span>
											<span class="stat-value">Android, iOS</span>
										</div>
									</div>
									<p class="availability-text">Available on Play Store and App Store</p>
									<div class="project-actions">
										<?php if (!empty($app_link)): ?>
											<a href="<?= $app_link ?>" class="btn-store" target="_blank">
												<i class="fa fa-apple"></i> App Store
											</a>
										<?php endif; ?>
										<?php if (!empty($play_link)): ?>
											<a href="<?= $play_link ?>" class="btn-store" target="_blank">
												<i class="fa fa-android"></i> Google Play
											</a>
										<?php endif; ?>
									</div>
								<?php } else { ?>
									<!-- Web Layout Simulation -->
									<div class="project-stats">
										<!-- Add dummy stats for web if needed or leave spacing -->
										<div style="height: 40px;"></div>
									</div>
									<div class="project-actions">
										<?php if (!empty($web_url)): ?>
											<a href="<?= $web_url ?>" class="btn-webportal" target="_blank">
												Go to webportal <i class="fa fa-arrow-right"></i>
											</a>
										<?php endif; ?>
									</div>
								<?php } ?>
							</div>

							<!-- Visual -->
							<div class="card-visual">
								<?php if ($is_mobile) { ?>
									<div class="mockup-phone">
										<a href="<?= $src ?>" class="lightbox-active">
											<img src="<?= $src ?>" alt="<?= $row->name ?>" class="mockup-img">
										</a>
									</div>
								<?php } else { ?>
									<div class="mockup-browser">
										<div class="browser-header">
											<div class="browser-dot red"></div>
											<div class="browser-dot yellow"></div>
											<div class="browser-dot green"></div>
										</div>
										<a href="<?= $src ?>" class="lightbox-active">
											<img src="<?= $src ?>" alt="<?= $row->name ?>" class="mockup-img">
										</a>
									</div>
								<?php } ?>
							</div>
						</div>
					</li>
				<?php } ?>
			</ul>
		</div>

		<div style="margin-bottom: 80px;"></div>
	</div>
</div>