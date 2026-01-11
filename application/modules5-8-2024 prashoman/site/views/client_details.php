<style>
	#loading-indicator-GOVT{
		text-align: center;
		padding: 10px;
	}
	#loading-indicator-private{
		text-align: center;
		padding: 10px;
	}
	#loading-indicator-rmg{
		text-align: center;
		padding: 10px;
	}
	#loading-indicator-offshore{
		text-align: center;
		padding: 10px;
	}
	#loading-indicator-edu{
		text-align: center;
		padding: 10px;
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

		<style type="text/css">
			.tg  {border-collapse:collapse;border-spacing:0; width: 100%}
			.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal; color: #1b1818;}
			.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal; color: black; border-color: #908989; font-weight: bold; text-align: center;}
			.tg .tg-5fsu{background-color:#0084FF; color: white; font-weight: bold; text-align: center;}
			.tg .tg-yw4l{vertical-align:top}
			tr:nth-child(odd) {background:#e3f1ff;}
			tr:nth-child(even) {background: white}

			

		</style>

		<?php if($this->uri->segment(2) == 'rmg-sector'){ ?>
					<table class="tg" id="data-body-rmg">
						<tr>
							<th class="tg-5fsu" width="50">SL</th>
							<th class="tg-5fsu">Project Name</th>
							<th class="tg-5fsu">Client Name</th>
							<th class="tg-5fsu">Location</th>
							<th class="tg-5fsu">Logo</th>
						</tr>
						
					</table>
					<div id="loading-indicator-rmg">
						<div class="spinner-border text-primary"></div>
					</div>
		<?php }
		elseif($this->uri->segment(2) == 'offshore-client'){ ?>

			<table class="tg" id="data-body-offshore">
				<tr>
					<th class="tg-5fsu" width="50">SL</th>
					<th class="tg-5fsu">Project Name</th>
					<th class="tg-5fsu">Client Name</th>
					<th class="tg-5fsu">Logo</th>
				</tr>
				<!-- ajjax call here -->
			</table>
			
				<div id="loading-indicator-offshore">
						<div class="spinner-border text-primary"></div>
				</div>
		<?php }
		elseif($this->uri->segment(2) == 'education-sector'){ ?>

				<table class="tg" id="data-body-edu">
					<tr>
						<th class="tg-5fsu" width="50">SL</th>
						<th class="tg-5fsu">School/College Name</th>
						<th class="tg-5fsu">Location</th>
						<th class="tg-5fsu">Logo</th>
					</tr>
					
				</table>
				<div id="loading-indicator-edu">
						<div class="spinner-border text-primary"></div>
				</div>
				<?php }
				elseif($this->uri->segment(2) == 'private-sector'){ ?>

					<table class="tg"  id="data-body-private">
							<tr>
								<th class="tg-5fsu" width="50">SL </th>
								<th class="tg-5fsu">Project Name</th>
								<th class="tg-5fsu">Client Name</th>
								<th class="tg-5fsu">Logo</th>
							</tr>
								
								<!-- here data fatch in ajax  -->

					</table>
					
					<div id="loading-indicator-private">
						<div class="spinner-border text-primary"></div>
					</div>
		<?php }else{ ?>

					<table class="tg"  id="data-body-GOVT">
						<tr>
							<th class="tg-5fsu" width="50">SL </th>
							<th class="tg-5fsu">Project Name</th>
							<th class="tg-5fsu">Client Name</th>
							<th class="tg-5fsu">Logo</th>
						</tr>
						
						<!-- here data fatch in ajax  -->


					</table>
					<div id="loading-indicator-GOVT">
						<div class="spinner-border text-primary"></div>
						
					</div>
					
					

		<?php } ?>

		

		<hr class="tall">
	</div>
</div>

<script>
	$('#loading-indicator-GOVT').show();
	$('#loading-indicator-edu').show();

    $(document).ready(function() {
        var page = 1;
        var is_loading = false;
		// console.log("GOVT");
        // Function to load data
        function load_data() {
            if (is_loading) return; // If already loading, return

            is_loading = true; // Set loading flag

            // Show loading indicator
            // $('#loading-indicator').show();

            // AJAX request to fetch data
            $('#loading-indicator-GOVT').show();

            $.ajax({
                url: "<?php echo base_url('site/govt_sector_ajax/'); ?>" + page,
                method: "GET",
                success: function(data) {
					console.log("event data :",data);
					$('#loading-indicator-GOVT').hide();

					if (data == false) {
						is_loading = true; // Reset loading flag
					}else{
						$('#data-body-GOVT').append(data).slideDown();
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
    $(document).ready(function() {
        var page = 1;
        var is_loading = false;
		// console.log("GOVT");
        // Function to load data
        function load_data() {
            if (is_loading) return; // If already loading, return

            is_loading = true; // Set loading flag

            // Show loading indicator
            // $('#loading-indicator').show();

            // AJAX request to fetch data
            $('#loading-indicator-private').show();

            $.ajax({
                url: "<?php echo base_url('site/private_sector_ajax/'); ?>" + page,
                method: "GET",
                success: function(data) {
					console.log("event data :",data);
					$('#loading-indicator-private').hide();

					if (data == false) {
						is_loading = true; // Reset loading flag
					}else{
						$('#data-body-private').append(data).slideDown();
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

	$(document).ready(function() {
        var page = 1;
        var is_loading = false;
		console.log("EDU");
        // Function to load data
        function load_data() {
            if (is_loading) return; // If already loading, return

            is_loading = true; // Set loading flag

            // Show loading indicator
            // $('#loading-indicator').show();

            // AJAX request to fetch data
            $('#loading-indicator-edu').show();

            $.ajax({
                url: "<?php echo base_url('site/edu_sector_ajax/'); ?>" + page,
                method: "GET",
                success: function(data) {
					// console.log("event data :",data);
					$('#loading-indicator-edu').hide();

					if (data == false) {
						is_loading = true; // Reset loading flag
					}else{
						$('#data-body-edu').append(data).slideDown();
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
	$(document).ready(function() {
        var page = 1;
        var is_loading = false;
		// console.log("EDU");
        // Function to load data
        function load_data() {
            if (is_loading) return; // If already loading, return

            is_loading = true; // Set loading flag

            // Show loading indicator
            // $('#loading-indicator').show();

            // AJAX request to fetch data
            $('#loading-indicator-offshore').show();

            $.ajax({
                url: "<?php echo base_url('site/offshore_sector_ajax/'); ?>" + page,
                method: "GET",
                success: function(data) {
					// console.log("event data :",data);
					$('#loading-indicator-offshore').hide();

					if (data == false) {
						is_loading = true; // Reset loading flag
					}else{
						$('#data-body-offshore').append(data).slideDown();
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
	$(document).ready(function() {
        var page = 1;
        var is_loading = false;
		// console.log("EDU");
        // Function to load data
        function load_data() {
            if (is_loading) return; // If already loading, return

            is_loading = true; // Set loading flag

            // Show loading indicator
            // $('#loading-indicator').show();

            // AJAX request to fetch data
            $('#loading-indicator-rmg').show();

            $.ajax({
                url: "<?php echo base_url('site/rmg_sector_ajax/'); ?>" + page,
                method: "GET",
                success: function(data) {
					// console.log("event data :",data);
					$('#loading-indicator-rmg').hide();

					if (data == false) {
						is_loading = true; // Reset loading flag
					}else{
						$('#data-body-rmg').append(data).slideDown();
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