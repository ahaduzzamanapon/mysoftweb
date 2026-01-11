<style>
	#pages_description img {
		width: calc(100% - 2%);
		height: auto;
	}
</style>


<div role="main" class="main">
	<section class="page-top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h1><?= $meta_title ?></h1>
				</div>
				<div class="col-md-5 text-right">
					<ul class="breadcrumb">
						<li><a href="<?= base_url() ?>">Home</a></li>
						<li class="active"><?= $meta_title ?></li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	<div class="container">
		<hr class="tall_slim">
		<div class="col-md-12">
			<div style="display: flex; justify-content: start; align-items: center; flex-wrap: wrap; gap: 10px;">
				<?php
				$name_links = json_decode($info->name_link, true); // Decode JSON data
				if (!empty($name_links)) {
					foreach ($name_links as $item) {
						echo '<a href="' . htmlspecialchars($item['link']) . '" target="_blank" class="btn btn-primary">'
							. htmlspecialchars($item['name']) . '</a>';
					}
				} else {
					echo '<p>No links available.</p>';
				}
				?>
			</div>
		</div>

		<div class="col-md-12" id="pages_description">
			<?= htmlspecialchars_decode($info->description) ?>
		</div>
		<hr class="tall">
	</div>
</div>