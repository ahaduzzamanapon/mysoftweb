<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="pageContent">
	<div class="page-title title-minimal pattern-4">
		<div class="container">
			<h1>Registration Now</h1>
			<h3>Fill in your details to have a training consultant contact you to discuss your training needs.</h3>
			<div class="breadcrumbs style3">
				<a href="#" class="main-color">Home</a><i class="fa fa-angle-double-right main-color"></i>
				<span>Registration Now</span>
			</div>
		</div>
	</div>

	<div class="md-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-7 contact-form">
    				<form action="<?=base_url('registration-now')?>" method="post" id="reg_form">    					
    					<div class="row">
	    					<div class="form-group col-md-6">
	    						<label>Full Name<span class="red">*</span></label>
	    						<div><?php echo form_error('full_name'); ?></div>
	    						<input type="text" name="full_name" class="form-control" value="<?=set_value('full_name')?>">
	    					</div>
	    					<div class="form-group col-md-6">
	    						<label>Email<span class="red">*</span></label>
	    						<div><?php echo form_error('email'); ?></div>
	    						<input type="email" name="email" class="form-control" value="<?=set_value('email')?>">
	    					</div>
    					</div>

    					<div class="row">  
    						<div class="form-group col-md-6">
	    						<label>Phone<span class="red">*</span></label>
	    						<div><?php echo form_error('phone'); ?></div>
	    						<input type="text" name="phone" class="form-control" value="<?=set_value('phone')?>">
	    					</div>	  						
	    					<div class="form-group col-md-6">
	    						<label class="block">Gender</label> <br>
	    						<label class="radio-inline">
		    						<input type="radio" name="gender" id="mradio" value="Male" /> Male
								</label>
								<label class="radio-inline">
									<input type="radio" name="gender" id="femradio" value="Female" /> Female
								</label>
	    					</div>
	    				</div>

	    				<div class="form-group">
    						<label>Select Course<span class="red">*</span></label>
    						<div><?php echo form_error('course_id'); ?></div>
    						<select name="course_id" class="form-control" >
    							<option value="">Please select a course</option>  
    							<?php foreach ($course_list as $list) {?>
								<option value="<?=$list->id?>" <?php echo $list->id==$course_id?'selected':'';?>> <?=$list->title?> </option>  
								<?php } ?>												
    						</select>
    					</div>

	    				<div class="row">
	    					<div class="form-group col-md-6">
	    						<label>Address</label>
	    						<input type="text" name="address" class="form-control" value="<?=set_value('address')?>">
	    					</div>
	    					<div class="form-group col-md-6">
	    						<label>Country<span class="red">*</span></label>
	    						<div><?php echo form_error('country_id'); ?></div>
	    						<select name="country_id" class="form-control">
	    							<option value="">Please select a country</option>  
									<option value="1">Australia</option>  
									<option value="2">Bangladesh</option>												
	    						</select>
	    					</div>
	    				</div>
    					
    					<div class="clearfix"></div>
    					<div class="form-group">
    						<label>My Skills</label>
    						<div class="form-box floated-controls checkbox-table">
								<div class="f-left m-r-1">
									<input type="checkbox" name="my_skills[]" value="1" class="labelauty" data-labelauty="Design">
								</div>
								<div class="f-left m-r-1">
									<input type="checkbox" name="my_skills[]" value="2" class="labelauty" data-labelauty="Development">
								</div>
								<div class="f-left m-r-1">
									<input type="checkbox" name="my_skills[]" value="3" class="labelauty" data-labelauty="Analysis">
								</div>
								<div class="f-left m-r-1">
									<input type="checkbox" name="my_skills[]" value="4" class="labelauty" data-labelauty="Engineering">
								</div>
								<div class="f-left m-r-1">
									<input type="checkbox" name="my_skills[]" value="5" class="labelauty" data-labelauty="SEO">
								</div>

								<div class="f-left m-r-1">
									<input type="checkbox" name="my_skills[]" value="6" class="labelauty" data-labelauty="Internet">
								</div>
								<div class="f-left m-r-1">
									<input type="checkbox" name="my_skills[]" value="7" class="labelauty" data-labelauty="HTML">
								</div>
								<div class="f-left m-r-1">
									<input type="checkbox" name="my_skills[]" value="8" class="labelauty" data-labelauty="Software">
								</div>
								<div class="f-left m-r-1">
									<input type="checkbox" name="my_skills[]" value="9" class="labelauty" data-labelauty="Other's">
								</div>
    						</div>
    					</div>
    					<div class="form-group">
    						<label>Opinion</label>
    						<textarea name="opinion" class="form-control" style="height: 80px"><?=set_value('opinion')?></textarea>
    					</div>
    					<div class="form-group">
    					<div><?php echo form_error('g-recaptcha-response'); ?></div>
    						<?php echo $widget;?>
							<?php echo $script;?>
    					</div>
    					<div class="clearfix"></div>
    					<div class="button-group">
    						<input type="submit" class="btn btn-lg main-bg" value="Submit"><input type="reset" class="btn btn-default btn-lg" value="Reset">
    					</div>
    				</form>
    			</div>
    			
	    		<div class="col-md-5">
					
					<div class="alert alert-warning p-a-3">
						<div class="heading style3 m-b-3 sm">
							<h3 class="uppercase">You need to know:</h3>
						</div>
						<p>All our classrooms are fitted with air conditioning, white boards, comfortable sitting arrangements, projectors and ample lighting that fosters for the best learning ambiance any student and lecture can wish for.</p>
					</div>								
									    			
	    			<div id="acc_0a" class="accordion shadowed no-shadow p-a-2 main-bg">
						
						<div class="panel">
							<h5 class="acc-head">
								<a href="#cc0a" data-toggle="collapse" data-parent="#acc_0a" class="white collapsed"><i class="fa fa-cloud-download"></i>How Can i register for a course?</a>
							</h5>
							<div class="acc-body collapse" id="cc0a">
								<div class="acc-content">
									some text some text some text some text some text some text some text some text some text some text
								</div>
							</div>
						</div>

						<div class="panel">
							<h5 class="acc-head">
								<a href="#cc00a" data-toggle="collapse" data-parent="#acc_0a" class="white collapsed"><i class="fa fa-shopping-bag"></i>Do i have to register in your site ?</a>
							</h5>
							<div class="acc-body collapse" id="cc00a">
								<div class="acc-content">
									Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed.
								</div>
							</div>
						</div>

						<div class="panel">
							<h5 class="acc-head">
								<a href="#cc0b" data-toggle="collapse" data-parent="#acc_0a" class="white collapsed"><i class="fa fa-gears"></i>How to make Retina Ready designs ?</a>
							</h5>
							<div class="acc-body collapse" id="cc0b">
								<div class="acc-content">
									Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed.
								</div>
							</div>
						</div>

						<div class="panel">
							<h5 class="acc-head">
								<a href="#cc00b" data-toggle="collapse" data-parent="#acc_0a" class="white collapsed"><i class="fa fa-gears"></i>What are the steps for registeration in the site ?</a>
							</h5>
							<div class="acc-body collapse" id="cc00b">
								<div class="acc-content">
									Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed.
								</div>
							</div>
						</div>

						<div class="panel">
							<h5 class="acc-head">
								<a href="#cc000b" data-toggle="collapse" data-parent="#acc_0a" class="white collapsed"><i class="fa fa-gears"></i>is there any way to buy from the site ?</a>
							</h5>
							<div class="acc-body collapse" id="cc000b">
								<div class="acc-content">
									Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed.
								</div>
							</div>
						</div>

					</div>
					
    			</div>
			
			</div>
		</div>
	</div>

</div>			    
<!-- Content start -->