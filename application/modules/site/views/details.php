<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="pageContent">
	<div class="page-title title-minimal pattern-4">
		<div class="container">
			<h1><?=$meta_title?></h1>
			<!-- <h3>This is sub heading text to describe the page functionality</h3> -->
			<div class="breadcrumbs style3">
				<a href="<?=base_url();?>" class="main-color">Home</a><i class="fa fa-angle-double-right main-color"></i>
				<a href="<?=base_url().'all-course';?>" class="main-color">Course</a><i class="fa fa-angle-double-right main-color"></i>
				<span><?=$meta_title?></span>
			</div>
		</div>
	</div>
					
	<div class="md-padding">
		<div class="container">
			<div class="row row-eq-height">
				<div class="col-md-8">
					<div class="heading style2">
						<h3 class="uppercase"><i class="fa fa-desktop"></i><span class="main-color"><?=$meta_title?></span></h3>
					</div>


					<?php
						if($info->image_file != NULL){
                        	$src = base_url()."course_img/".$info->image_file;
                        	echo '<img src="'.$src.'" alt="'.$meta_title.'">';
                    	}
                    	// else{
                    	// 	$src= base_url()."course_img/default.jpg";
                    	// }
					?>
					

					<?=$info->description?>

					<?php /* <p>
					In this PHP course you will learn Advanced level PHP with CodeIgniter framework, and how to execute scripts on your server. You will also learn about MySQL, html, css, JavaScript,. We will teach you advanced level CSS. Here Database Normalization & Relation of Database will be discussed. After finished this course you can develop project using php framework CodeIgniter with mysql. 
					</p>
					

					<div class="col-md-12">
    					<div class="heading main sm">
							<h3 class="uppercase lg-title"><span class="main-color">How participant will benefit after the course </span></h3>	
							<ul style="list-style-type:square">
								<li>PHP is the most popular widely used web scripting language, so you can find PHP jobs easily.</li>
								<li>PHP frameworks help in reusing the developed code, intuitive to work with and of course stable. </li>
								<li>After finished this course participant can develop professional dynamic website using PHP framework CodeIgniter. </li>
								<li>Participate can design database with proper documentation. </li>
								<li>They will also know & develop Online Payment Method.</li>
							</ul>
						</div>
    				</div>

    				<div class="col-md-12">
    					<div class="heading main sm">
							<h3 class="uppercase lg-title"><span class="main-color">How participant will benefit after the course </span></h3>	
							<ul style="list-style-type:square">
								<li>Complete package on web development </li>
								<li>PHP framework along with documentation process  </li>
								<li>SSL & Email  </li>
								<li>Online Payment Method </li>
								<li>Individual / Group PHP framework CodeIgniter Project</li>
							</ul>
						</div>
    				</div>

    				<div class="col-md-12">
    					
						<h3 class="uppercase lg-title"><span class="main-color">Contents of Training</span></h3>
					
    					<h4><span class="main-color">Lesson: 01</span> (HTML & CSS)</h4>
    					<p>Basic: Introduction, Elements, Attributes, Table, List, Forms, Formatting, Styles, Image, Hyperlinks. Advanced: Head, Meta, Scripts, Layout, Fonts, URL- encode and Html Web server. CSS Introduction.</p>

    					<h4><span class="main-color">Lesson: 02</span> (Basic CSS) </h4>
    					<p>CSS Syntax, Padding, Border, Margin, Text, Font, Text, List, color, background</p>

    					<h4><span class="main-color">Lesson: 03</span> (Advanced CSS & JavaScript Basic)</h4>
    					<p>Advanced CSS: Classification, Positioning, Dimension, Media Types, Pseudo-class, Pseudo-elements. JavaScript Basic: Basic JavaScript: Introduction, Comments, Variable, Operator, Statement, Loops, and Functions. Note: Static Project using HTML & CSS.</p>

    					<h4><span class="main-color">Lesson: 04</span> (PHP Framework) </h4>
    					<ul style="list-style-type:square">
							<li>Advantage of using Framework </li>
							<li>Introducing PHP Framework (CodeIgniter) </li>
							<li>Lecture on PHP Framework with Example. </li>										
						</ul>

						<h4><span class="main-color">Lesson: 05 </span>(PHP Basic) </h4>
    					<ul>
							<li>About PHP  </li>
							<li>About MySQL</li>
							<li>Advantage of using PHP for web development  </li>
							<li>PHP Installation </li>
							<li>PHP Syntax & PHP Variable</li>
						</ul>

						<h4><span class="main-color">Lesson: 06 </span>(PHP Statement & Loop) </h4>
    					<ul>
							<li> PHP Operators </li>
							<li> Conditional Statements  
								<ul>
									<li>if (...else) statement </li>
									<li>Switch statements </li>
								</ul>
							</li>
							<li> Loop 
								<ul>
									<li>For statement</li>
									<li>Foreach statement </li>
									<li>While statement </li>
									<li>Do While statement</li>
								</ul>
							</li>
						</ul>

						<h4><span class="main-color">Lesson: 07 </span>(Array, Functions, Get & Post Variable) </h4>
    					<ul>
							<li> Arrays </li>
							<li> PHP Functions </li>
							<li> Get & Post Variable </li>
							<li> Difference between PHP 4 & PHP 5</li>
						</ul>

						<h4><span class="main-color">Lesson: 08</span> (Advanced Database with Session) </h4>
    					<ul>
							<li>Active Record Class (Selecting Data, Method Chaining) </li>
							<li> Session </li>
							<li> Email system</li>
						</ul>

						<h4><span class="main-color">Lesson: 09</span> (DB Normalization & Query) </h4>
    					<ul>
							<li> Active Record Class (Deleting Data, Updating Data)</li>
							<li> Database Normalization</li>
							<li> Database relationship  </li>
							<li> Database Model Description</li>
						</ul>

						<h4><span class="main-color">Lesson: 10</span> (Advanced PHP Framework) </h4>
    					<ul>
							<li> Basic database design concept</li>
							<li> Methods & Classes </li>
							<li> Cooke</li>
						</ul>

						<h4><span class="main-color">Lesson: 11 </span> (Advanced JavaScript & Ajax) </h4>
    					<ul>
							<li>Advanced: Data, Array, RegExp, Cookies, Validation, Image Maps, Create Object, Timing.  </li>
							<li> Ajax basic: Introduction, Ajax request, Ajax Example, Ajax browser, Ajax XMLHttpRequest, Ajax suggest, Ajax database, Ajax XML file. </li>
							<li>Note: Test on Database, JavaScript & Ajax. </li>
						</ul>

						<h4><span class="main-color">Lesson: 12 </span> (SSL, Email Manager) </h4>
    					<ul>
							<li> Lecture on secure path SSL  </li>
							<li> Email Manager</li>			
						</ul>

						<h4><span class="main-color">Lesson: 13 </span>(File Export & Searching) </h4>
    					<ul>
							<li> File export </li>
							<li> Advanced PHP Searching</li>
						</ul>

						<h4><span class="main-color">Lesson: 14 </span>(File Upload & Online Payment Method) </h4>
    					<ul>
							<li> Include file & file upload </li>
							<li> PayPal Standard </li>
							<li> Authorize.net</li>
						</ul>

    				</div> */ ?>

				</div>

				<div class="col-md-4">
					<div class="p-a-3 gry-border">
						<h4 class="uppercase"><span class="main-color">Course </span>Info</h4>
					
						<ul class="list lg-v-pad">
							<li><i class="fa fa-tag"></i> <span class="bold main-color">Date:</span> <?=$info->course_date?></li>
							<li> <i class="fa fa-user"></i> <span class="bold main-color">No of Classes:</span> <?=$info->class_no?> </li>
							<li><i class="fa fa-check"></i> <span class="bold main-color">Total Hours:</span> <?=$info->total_hours?></li>
							<li><i class="fa fa-check"></i> <span class="bold main-color">Shift:</span> <?=$info->shift?></li>
							<li><i class="fa fa-check"></i> <span class="bold main-color">Time:</span> <?=$info->class_time?></li>
							<li>
								<i class="fa fa-calendar"></i> <span class="bold main-color">Days:</span> <?=$info->days_week?>
							</li>
							<li class="social-list m-b-0">
								<span class="f-left m-r-1" style="margin-top: 5px"><i class="fa fa-share-alt"></i> <span class="bold main-color">Share:</span> </span>
									<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook ic-facebook sm-icon no-border"></i></a>
									<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter ic-twitter sm-icon no-border"></i></a>
									<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i class="fa fa-linkedin ic-linkedin sm-icon no-border"></i></a>
									<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Dribbble"><i class="fa fa-dribbble ic-dribbble sm-icon no-border"></i></a>
									<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus ic-gplus sm-icon no-border"></i></a>

							</li>
						</ul>

						<a class="btn btn-round main-bg btn-block "  href="#"><i class="fa fa-cloud"></i>Course Fee <?=$info->course_fee?> TK</a>
						<a class="btn btn-3d btn-juicy_pink btn-block "  href="<?=base_url('registration-now/'.$info->id)?>"><i class="fa fa-link"></i>Registration Now </a>
						<br>
						<div class="divider centered short" style="width: 100%;"><i class="fa fa-sun-o"></i></div>
						<br>

						<?php if($info->who_can_attnd != NULL){ ?>
						<h4 class="uppercase"><span class="main-color">WHO CAN </span>ATTEND</h4>
						<p><?=$info->who_can_attnd?></p>						
						<br>
						<div class="divider centered short" style="width: 100%;"><i class="fa fa-sun-o"></i></div>
						<br>
						<?php } ?>

						<?php if($info->methodology != NULL){ ?>
						<h4 class="uppercase"><span class="main-color">METHODOLOGY</span> of the Course</h4>
						<?php $exp = explode(',', $info->methodology); ?>
						<ul style="list-style-type: square;">
						<?php
							foreach ($exp as $item) {
								echo '<li>'.$item.'</li>';
							}
						?>
						</ul>
						<br>
						<div class="divider centered short" style="width: 100%;"><i class="fa fa-sun-o"></i></div>
						<br>
						<?php } ?>


						<?php if($info->pre_requisite != NULL){ ?>
						<h4 class="uppercase"><span class="main-color">Prerequisite </span> Course</h4>
						<?php $exp = explode(',', $info->pre_requisite); ?>
						<ul style="list-style-type: square;">
						<?php
							foreach ($exp as $item) {
								echo '<li>'.$item.'</li>';
							}
						?>
						</ul>
						<br>
						<div class="divider centered short" style="width: 100%;"><i class="fa fa-sun-o"></i></div>
						<br>
						<?php } ?>


						<?php if($info->coordinator != NULL){ ?>
						<h4 class="uppercase"><span class="main-color">Course </span> Coordinator</h4>
						<ul style="list-style-type: none">
							<?php $exp = explode(',', $info->coordinator); ?>
							<li><i class="fa fa-tag"></i> <span class="bold main-color">Phone:</span> <?=$exp[0]?></li>
							<li><i class="fa fa-tag"></i> <span class="bold main-color">Email:</span> <?=$exp[1]?></li>
						</ul>
						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</div>

	
	<div class="md-padding">
		<div class="container">
			<div class="heading style2">
				<h3 class="uppercase"><i class="fa fa-desktop"></i><span class="main-color">Others </span>Course</h3>
			</div>
			
			<div class="row">
			<?php foreach ($related_item as $row) { 
					if($row->image_file != NULL){
                    	$src = base_url()."course_img/".$row->image_file;
                	}else{
                		$src= base_url()."course_img/default.jpg";
                	}
			?>
				<div class="col-md-3">
					<div class="icon-box-bg main-bg">
						<div class="icon-desc t-center">
							<a href="<?=base_url('course/'.$row->slug)?>"><img src="<?=$src?>"></a>
							<h4 class="heavy white"><?=$row->title?></h4>
						</div>
						<hr>
						<div class="box-number heavy font-30 t-center"><span class="count-title"><span class="odometer" data-value="<?=$row->course_fee?>" data-timer="200"></span></span></div>
					</div>
				</div>
			<?php } ?>
				
			</div>

		</div>
	</div>


</div>			    
<!-- Content start -->