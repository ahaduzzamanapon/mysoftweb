<section class="content-header">
  <h1> <?=$meta_title; ?> </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><?=$meta_title; ?></li>
  </ol>
</section>

<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add Services</h3>
          <a href="<?=base_url('admin/services/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Services</a>          
        </div>        
        <?php echo form_open_multipart("admin/services/add");?>
          <div class="box-body">
            <div id="infoMessage"><?php //echo $message;?></div>
            <div><?php //echo validation_errors(); ?></div>
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');?>
                </div>
            <?php endif; ?>

            <div class="row">
              <div class="col-md-7">
                  <div class="form-group">
                    <label>Service Name</label>
                    <div><?php echo form_error('name'); ?></div>
                    <input type="text" class="form-control" name="name" value="<?=set_value('name')?>">
                  </div>

                  <div class="form-group">
                    <label>Slug URL</label>
                    <div><?php echo form_error('slug'); ?></div>
                    <input type="text" class="form-control" name="slug" value="<?=set_value('slug')?>">
                  </div>

                  <div class="form-group">
                    <label>Short Description</label>
                    <div><?php echo form_error('short_desc'); ?></div>
                    <textarea class="form-control" rows="3" name="short_desc" placeholder="Short Description Maximum 255 character"><?=set_value('short_desc')?></textarea>
                  </div>

                  <div class="form-group">
                    <label>Details Description</label>
                    <div><?php echo form_error('description'); ?></div>
                    <textarea id="serviceAdd" name="description" rows="10" cols="80"><?=set_value('description')?></textarea>
                  </div>
              </div>

              <div class="col-md-5">
                <div class="form-group">
                  <label>Select Main Service</label>
                  <div><?php echo form_error('main_service_id'); ?></div>
                  <?php 
                    $more_attr = 'class="form-control"';
                    echo form_dropdown('main_service_id', $category, set_value('main_service_id'), $more_attr);
                  ?>
                </div>
                <div class="form-group">
                    <label>Fontawesome Icon</label>
                    <div><?php echo form_error('fa_icon'); ?></div>
                    <input type="text" class="form-control" name="fa_icon" value="<?=set_value('fa_icon', 'fa-tag')?>" placeholder="e.g. fa-camera-retro">
                </div>

                <div class="form-group">
                      <label class="form-label required">Display Home</label> <br>
                      <input type="radio" name="display_home" value="1" <?=set_value('display_home')=='1'?'checked':'checked';?>> Yes 
                      <input type="radio" name="display_home" value="0" <?=set_value('display_home')=='0'?'checked':'';?>> No
                  </div>

                <div class="form-group">
                  <label class="form-label required">Status</label> <br>
                  <input type="radio" name="status" value="1" <?=set_value('status')=='1'?'checked':'checked';?>> Yes 
                  <input type="radio" name="status" value="0" <?=set_value('status')=='0'?'checked':'';?>> No
                </div>

                <div class="form-group">
                  <label>Image Upload</label>
                  <div><?php echo form_error('userfile'); ?></div>
                  <input type="file" name="userfile">
                  <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                </div>

                <div class="form-group">
                  <label>Meta Keywords</label>
                  <textarea class="form-control" rows="3" name="meta_keys" placeholder="tag1, tag2, tag3, tag4, tag5"><?=set_value('meta_keys')?></textarea>
                </div>
                <br><br><br>
              </div>
              <br><br><br>

              <div class="col-md-6">
                     <!-- First Section -->
                    <div class="form-group">
                    <label>First Section Title</label>
                    <div><?php echo form_error('first_section_title'); ?></div>
                    <input type="text" class="form-control" name="first_section_title" value="<?=set_value('first_section_title')?>">
                  </div>
                   <div class="form-group">
                    <label>First Section Para</label>
                    <div><?php echo form_error('first_section_para'); ?></div>
                    <input type="text" class="form-control" name="first_section_para" value="<?=set_value('first_section_para')?>">
                  </div>

                  <div class="form-group">
                  <label> First Section Image Upload</label>
                  <div><?php echo form_error('first_section_img'); ?></div>
                  <input type="file" name="first_section_img">
                  <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                </div>
                   <br>
                   <br>

                  <!-- Second Section -->
                  <div class="form-group">
                  <label>Second Section Title</label>
                  <div><?php echo form_error('second_section_title'); ?></div>
                  <input type="text" class="form-control" name="second_section_title" value="<?=set_value('second_section_title')?>">
                </div>
                <div class="form-group">
                  <label>Second Section Heading_1</label>
                  <div><?php echo form_error('second_section_heading_one'); ?></div>
                  <input type="text" class="form-control" name="second_section_heading_one" value="<?=set_value('second_section_heading_one')?>">
                </div>

                <div class="form-group">
                  <label>Second Section Heading_2</label>
                  <div><?php echo form_error('second_section_heading_two'); ?></div>
                  <input type="text" class="form-control" name="second_section_heading_two" value="<?=set_value('second_section_heading_two')?>">
                </div>

                <div class="form-group">
                  <label>Second Section Para_1</label>
                  <div><?php echo form_error('second_section_para_one'); ?></div>
                  <input type="text" class="form-control" name="second_section_para_one" value="<?=set_value('second_section_para_one')?>">
                </div>

                <div class="form-group">
                  <label>Second Section Para_2</label>
                  <div><?php echo form_error('second_section_para_two'); ?></div>
                  <input type="text" class="form-control" name="second_section_para_two" value="<?=set_value('second_section_para_two')?>">
                </div>

                <div class="form-group">
                <label> Second Section Image_1 Upload</label>
                <div><?php echo form_error('second_section_img_one'); ?></div>
                <input type="file" name="second_section_img_one">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                <label> Second Section Image_2 Upload</label>
                <div><?php echo form_error('second_section_img_two'); ?></div>
                <input type="file" name="second_section_img_two">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
              <br><br>
              <!-- Five Section -->
                <div class="form-group">
                  <label>Five Section Title</label>
                  <div><?php echo form_error('five_section_title'); ?></div>
                  <input type="text" class="form-control" name="five_section_title" value="<?=set_value('five_section_title')?>">
                </div>
                <div class="form-group">
                <label> Five Section Image_1 Upload</label>
                <div><?php echo form_error('five_section_img_one'); ?></div>
                <input type="file" name="five_section_img_one">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                <label> Five Section Image_2 Upload</label>
                <div><?php echo form_error('five_section_img_two'); ?></div>
                <input type="file" name="five_section_img_two">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                <label> Five Section Image_3 Upload</label>
                <div><?php echo form_error('five_section_img_three'); ?></div>
                <input type="file" name="five_section_img_three">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
              <div class="form-group">
                <label> Five Section Image_4 Upload</label>
                <div><?php echo form_error('five_section_img_four'); ?></div>
                <input type="file" name="five_section_img_four">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                <label> Five Section Image_5 Upload</label>
                <div><?php echo form_error('five_section_img_five'); ?></div>
                <input type="file" name="five_section_img_five">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>

              <br><br>
              <!-- Six Section -->
              <div class="form-group">
                <label>Six Section Title</label>
                <div><?php echo form_error('six_section_title'); ?></div>
                <input type="text" class="form-control" name="six_section_title" value="<?=set_value('six_section_title')?>">
              </div>

              <div class="form-group">
                <label>Six Section Para_1</label>
                <div><?php echo form_error('six_section_para_one'); ?></div>
                <input type="text" class="form-control" name="six_section_para_one" value="<?=set_value('six_section_para_one')?>">
              </div>
                  <div class="form-group">
                    <label>Six Section List</label>
                    <br><span>Add List</span>
                    <button onclick="addItem(event,'six_section_list')">
                      <i class="fa fa-solid fa-plus" style="color: green; cursor:pointer;"></i>
                    </button>
                    <div id="six_section_list_container">
                      <input type="text" class="form-control" name="six_section_list[]" id="six_section_list_1">
                    </div>
                  </div>
                  <div class="form-group">
                <label> Six Section Image Upload</label>
                <div><?php echo form_error('six_section_img'); ?></div>
                <input type="file" name="six_section_img">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                  <label>Six Section Para_2</label>
                  <div><?php echo form_error('six_section_para_two'); ?></div>
                  <input type="text" class="form-control" name="six_section_para_two" value="<?=set_value('six_section_para_two')?>">
                </div>
                <!-- Seven Section -->

                <div class="form-group">
                <label>Seven Section Title</label>
                <div><?php echo form_error('seven_section_title'); ?></div>
                <input type="text" class="form-control" name="seven_section_title" value="<?=set_value('seven_section_title')?>">
              </div>

              <div class="form-group">
                <label>Seven Section Para_1</label>
                <div><?php echo form_error('seven_section_para_one'); ?></div>
                <input type="text" class="form-control" name="seven_section_para_one" value="<?=set_value('seven_section_para_one')?>">
              </div>
                  <div class="form-group">
                    <label>Seven Section List</label>
                    <br><span>Add List</span>
                    <button onclick="addItem(event,'seven_section_list')">
                      <i class="fa fa-solid fa-plus" style="color: green; cursor:pointer;"></i>
                    </button>
                    <div id="seven_section_list_container">
                      <input type="text" class="form-control" name="seven_section_list[]" id="seven_section_list_1">
                    </div>
                  </div>
                  <div class="form-group">
                <label> Seven Section Image Upload</label>
                <div><?php echo form_error('seven_section_img'); ?></div>
                <input type="file" name="seven_section_img">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                  <label>Seven Section Para_2</label>
                  <div><?php echo form_error('seven_section_para_two'); ?></div>
                  <input type="text" class="form-control" name="seven_section_para_two" value="<?=set_value('seven_section_para_two')?>">
                </div>
                <br><br>
              <!-- Eight Section -->
              <div class="form-group">
                <label>Eight Section Title</label>
                <div><?php echo form_error('eight_section_title'); ?></div>
                <input type="text" class="form-control" name="eight_section_title" value="<?=set_value('eight_section_title')?>">
              </div>

                 <div class="form-group">
                    <label>Eight Section Icon_1</label>
                    <div><?php echo form_error('eight_section_icon_one'); ?></div>
                    <input type="text" class="form-control" name="eight_section_icon_one" value="<?=set_value('eight_section_icon_one')?>" placeholder="Give your icon">
                </div>
                   <div class="form-group">
                    <label>Eight Section Icon_2</label>
                    <div><?php echo form_error('eight_section_icon_two'); ?></div>
                    <input type="text" class="form-control" name="eight_section_icon_two" value="<?=set_value('eight_section_icon_two')?>" placeholder="Give your icon">
                </div>
                    <div class="form-group">
                    <label>Eight Section Icon_3</label>
                    <div><?php echo form_error('eight_section_icon_three'); ?></div>
                    <input type="text" class="form-control" name="eight_section_icon_three" value="<?=set_value('eight_section_icon_three')?>" placeholder="Give your icon">
                </div>
                   <div class="form-group">
                    <label>Eight Section Icon_4</label>
                    <div><?php echo form_error('eight_section_icon_four'); ?></div>
                    <input type="text" class="form-control" name="eight_section_icon_four" value="<?=set_value('eight_section_icon_four')?>" placeholder="Give your icon">
                </div>
                  <div class="form-group">
                    <label>Eight Section Icon_5</label>
                    <div><?php echo form_error('eight_section_icon_five'); ?></div>
                    <input type="text" class="form-control" name="eight_section_icon_five" value="<?=set_value('eight_section_icon_five')?>" placeholder="Give your icon">
                </div>
                  <div class="form-group">
                    <label>Eight Section Icon_6</label>
                    <div><?php echo form_error('eight_section_icon_six'); ?></div>
                    <input type="text" class="form-control" name="eight_section_icon_six" value="<?=set_value('eight_section_icon_six')?>" placeholder="Give your icon">
                </div>
                <div class="form-group">
                  <label>Eight Section Heading_1</label>
                  <div><?php echo form_error('eight_section_heading_one'); ?></div>
                  <input type="text" class="form-control" name="eight_section_heading_one" value="<?=set_value('eight_section_heading_one')?>">
                </div>
                  <div class="form-group">
                  <label>Eight Section Para_1</label>
                  <div><?php echo form_error('eight_section_para_one'); ?></div>
                  <input type="text" class="form-control" name="eight_section_para_one" value="<?=set_value('eight_section_para_one')?>">
                </div>
                  <div class="form-group">
                  <label>Eight Section Heading_2</label>
                  <div><?php echo form_error('eight_section_heading_two'); ?></div>
                  <input type="text" class="form-control" name="eight_section_heading_two" value="<?=set_value('eight_section_heading_two')?>">
                </div>
                  <div class="form-group">
                  <label>Eight Section Para_2</label>
                  <div><?php echo form_error('eight_section_para_two'); ?></div>
                  <input type="text" class="form-control" name="eight_section_para_two" value="<?=set_value('eight_section_para_two')?>">
                </div>
                <div class="form-group">
                  <label>Eight Section Heading_3</label>
                  <div><?php echo form_error('eight_section_heading_three'); ?></div>
                  <input type="text" class="form-control" name="eight_section_heading_three" value="<?=set_value('eight_section_heading_three')?>">
                </div>
                  <div class="form-group">
                  <label>Eight Section Para_3</label>
                  <div><?php echo form_error('eight_section_para_three'); ?></div>
                  <input type="text" class="form-control" name="eight_section_para_three" value="<?=set_value('eight_section_para_three')?>">
                </div>
                  <div class="form-group">
                  <label>Eight Section Heading_4</label>
                  <div><?php echo form_error('eight_section_heading_four'); ?></div>
                  <input type="text" class="form-control" name="eight_section_heading_four" value="<?=set_value('eight_section_heading_four')?>">
                </div>
                  <div class="form-group">
                  <label>Eight Section Para_4</label>
                  <div><?php echo form_error('eight_section_para_four'); ?></div>
                  <input type="text" class="form-control" name="eight_section_para_four" value="<?=set_value('eight_section_para_four')?>">
                </div>
                <div class="form-group">
                  <label>Eight Section Heading_5</label>
                  <div><?php echo form_error('eight_section_heading_five'); ?></div>
                  <input type="text" class="form-control" name="eight_section_heading_five" value="<?=set_value('eight_section_heading_five')?>">
                </div>
                  <div class="form-group">
                  <label>Eight Section Para_5</label>
                  <div><?php echo form_error('eight_section_para_five'); ?></div>
                  <input type="text" class="form-control" name="eight_section_para_five" value="<?=set_value('eight_section_para_five')?>">
                </div>
                <div class="form-group">
                  <label>Eight Section Heading_6</label>
                  <div><?php echo form_error('eight_section_heading_six'); ?></div>
                  <input type="text" class="form-control" name="eight_section_heading_six" value="<?=set_value('eight_section_heading_six')?>">
                </div>
                  <div class="form-group">
                  <label>Eight Section Para_6</label>
                  <div><?php echo form_error('eight_section_para_six'); ?></div>
                  <input type="text" class="form-control" name="eight_section_para_six" value="<?=set_value('eight_section_para_six')?>">
                </div>
                <br><br>
                <!-- Nine Section -->
              <div class="form-group">
                <label>Nine Section Title</label>
                <div><?php echo form_error('nine_section_title'); ?></div>
                <input type="text" class="form-control" name="nine_section_title" value="<?=set_value('nine_section_title')?>">
              </div>
              <div class="form-group">
                  <label>Nine Section Main Para</label>
                  <div><?php echo form_error('nine_section_main_para'); ?></div>
                  <input type="text" class="form-control" name="nine_section_main_para" value="<?=set_value('nine_section_main_para')?>">
                </div>
              <div class="form-group">
                <label> Nine Section Image Upload_1</label>
                <div><?php echo form_error('nine_section_img_one'); ?></div>
                <input type="file" name="nine_section_img_one">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                  <label>Nine Section Heading_1</label>
                  <div><?php echo form_error('nine_section_heading_one'); ?></div>
                  <input type="text" class="form-control" name="nine_section_heading_one" value="<?=set_value('nine_section_heading_one')?>">
                </div>
                  <div class="form-group">
                  <label>Nine Section Para_1</label>
                  <div><?php echo form_error('nine_section_para_one'); ?></div>
                  <input type="text" class="form-control" name="nine_section_para_one" value="<?=set_value('nine_section_para_one')?>">
                </div>
                  <div class="form-group">
                <label> Nine Section Image Upload_2</label>
                <div><?php echo form_error('nine_section_img_two'); ?></div>
                <input type="file" name="nine_section_img_two">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                  <div class="form-group">
                  <label>Nine Section Heading_2</label>
                  <div><?php echo form_error('nine_section_heading_two'); ?></div>
                  <input type="text" class="form-control" name="nine_section_heading_two" value="<?=set_value('nine_section_heading_two')?>">
                </div>
                  <div class="form-group">
                  <label>Nine Section Para_2</label>
                  <div><?php echo form_error('nine_section_para_two'); ?></div>
                  <input type="text" class="form-control" name="nine_section_para_two" value="<?=set_value('nine_section_para_two')?>">
                </div>
                  <div class="form-group">
                <label> Nine Section Image Upload_3</label>
                <div><?php echo form_error('nine_section_img_three'); ?></div>
                <input type="file" name="nine_section_img_three">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                  <label>Nine Section Heading_3</label>
                  <div><?php echo form_error('nine_section_heading_three'); ?></div>
                  <input type="text" class="form-control" name="nine_section_heading_three" value="<?=set_value('nine_section_heading_three')?>">
                </div>
                  <div class="form-group">
                  <label>Nine Section Para_3</label>
                  <div><?php echo form_error('nine_section_para_three'); ?></div>
                  <input type="text" class="form-control" name="nine_section_para_three" value="<?=set_value('nine_section_para_three')?>">
                </div>
                  <div class="form-group">
                <label> Nine Section Image Upload_4</label>
                <div><?php echo form_error('nine_section_img_four'); ?></div>
                <input type="file" name="nine_section_img_four">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                  <div class="form-group">
                  <label>Nine Section Heading_4</label>
                  <div><?php echo form_error('nine_section_heading_four'); ?></div>
                  <input type="text" class="form-control" name="nine_section_heading_four" value="<?=set_value('nine_section_heading_four')?>">
                </div>
                  <div class="form-group">
                  <label>Nine Section Para_4</label>
                  <div><?php echo form_error('nine_section_para_four'); ?></div>
                  <input type="text" class="form-control" name="nine_section_para_four" value="<?=set_value('nine_section_para_four')?>">
                </div>
                  <!-- Ten Section -->
                 <div class="form-group">
                  <label>Ten Section Title</label>
                  <div><?php echo form_error('ten_section_title'); ?></div>
                  <input type="text" class="form-control" name="ten_section_title" value="<?=set_value('ten_section_title')?>">
                </div>
                <div class="form-group">
                  <label>Ten Section Para</label>
                  <div><?php echo form_error('ten_section_para_one'); ?></div>
                  <input type="text" class="form-control" name="ten_section_para_one" value="<?=set_value('ten_section_para_one')?>">
                </div>
                <div class="form-group">
                <label> Ten Section Image_1 Upload</label>
                <div><?php echo form_error('ten_section_img_one'); ?></div>
                <input type="file" name="ten_section_img_one">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
               <div class="form-group">
                  <label>Ten Section Tag_1</label>
                  <div><?php echo form_error('ten_section_tag_one'); ?></div>
                  <input type="text" class="form-control" name="ten_section_tag_one" value="<?=set_value('ten_section_tag_one')?>">
                </div>

              <div class="form-group">
                <label> Ten Section Image_2 Upload</label>
                <div><?php echo form_error('ten_section_img_two'); ?></div>
                <input type="file" name="ten_section_img_two">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                  <label>Ten Section Tag_2</label>
                  <div><?php echo form_error('ten_section_tag_two'); ?></div>
                  <input type="text" class="form-control" name="ten_section_tag_two" value="<?=set_value('ten_section_tag_two')?>">
                </div>

              <div class="form-group">
                <label> Ten Section Image_3 Upload</label>
                <div><?php echo form_error('ten_section_img_three'); ?></div>
                <input type="file" name="ten_section_img_three">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
              <div class="form-group">
                  <label>Ten Section Tag_3</label>
                  <div><?php echo form_error('ten_section_tag_three'); ?></div>
                  <input type="text" class="form-control" name="ten_section_tag_three" value="<?=set_value('ten_section_tag_three')?>">
                </div>

              <div class="form-group">
                <label> Ten Section Image_4 Upload</label>
                <div><?php echo form_error('ten_section_img_four'); ?></div>
                <input type="file" name="ten_section_img_four">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                  <label>Ten Section Tag_4</label>
                  <div><?php echo form_error('ten_section_tag_four'); ?></div>
                  <input type="text" class="form-control" name="ten_section_tag_four" value="<?=set_value('ten_section_tag_four')?>">
                </div>
              <div class="form-group">
                <label> Ten Section Image_5 Upload</label>
                <div><?php echo form_error('ten_section_img_five'); ?></div>
                <input type="file" name="ten_section_img_five">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                  <label>Ten Section Tag_5</label>
                  <div><?php echo form_error('ten_section_tag_five'); ?></div>
                  <input type="text" class="form-control" name="ten_section_tag_five" value="<?=set_value('ten_section_tag_five')?>">
                </div>

              <div class="form-group">
                <label> Ten Section Image_6 Upload</label>
                <div><?php echo form_error('ten_section_img_six'); ?></div>
                <input type="file" name="ten_section_img_six">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
               <div class="form-group">
                  <label>Ten Section Tag_6</label>
                  <div><?php echo form_error('ten_section_tag_six'); ?></div>
                  <input type="text" class="form-control" name="ten_section_tag_six" value="<?=set_value('ten_section_tag_six')?>">
                </div>

              <div class="form-group">
                <label> Ten Section Image_7 Upload</label>
                <div><?php echo form_error('ten_section_img_seven'); ?></div>
                <input type="file" name="ten_section_img_seven">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                  <label>Ten Section Tag_7</label>
                  <div><?php echo form_error('ten_section_tag_seven'); ?></div>
                  <input type="text" class="form-control" name="ten_section_tag_seven" value="<?=set_value('ten_section_tag_seven')?>">
                </div>

              <div class="form-group">
                <label> Ten Section Image_8 Upload</label>
                <div><?php echo form_error('ten_section_img_eight'); ?></div>
                <input type="file" name="ten_section_img_eight">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
              <div class="form-group">
                  <label>Ten Section Tag_8</label>
                  <div><?php echo form_error('ten_section_tag_eight'); ?></div>
                  <input type="text" class="form-control" name="ten_section_tag_eight" value="<?=set_value('ten_section_tag_eight')?>">
                </div>  
              <div class="form-group">
                <label> Ten Section Image_9 Upload</label>
                <div><?php echo form_error('ten_section_img_nine'); ?></div>
                <input type="file" name="ten_section_img_nine">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
               <div class="form-group">
                  <label>Ten Section Tag_9</label>
                  <div><?php echo form_error('ten_section_tag_nine'); ?></div>
                  <input type="text" class="form-control" name="ten_section_tag_nine" value="<?=set_value('ten_section_tag_nine')?>">
                </div>

              <div class="form-group">
                <label> Ten Section Image_10 Upload</label>
                <div><?php echo form_error('ten_section_img_ten'); ?></div>
                <input type="file" name="ten_section_img_ten">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
              <div class="form-group">
                  <label>Ten Section Tag_10</label>
                  <div><?php echo form_error('ten_section_tag_ten'); ?></div>
                  <input type="text" class="form-control" name="ten_section_tag_ten" value="<?=set_value('ten_section_tag_ten')?>">
                </div>

              <div class="form-group">
                <label> Ten Section Image_11 Upload</label>
                <div><?php echo form_error('ten_section_img_eleven'); ?></div>
                <input type="file" name="ten_section_img_eleven">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
               <div class="form-group">
                  <label>Ten Section Tag_11</label>
                  <div><?php echo form_error('ten_section_tag_eleven'); ?></div>
                  <input type="text" class="form-control" name="ten_section_tag_eleven" value="<?=set_value('ten_section_tag_eleven')?>">
                </div>

              <div class="form-group">
                <label> Ten Section Image_12 Upload</label>
                <div><?php echo form_error('ten_section_img_twelve'); ?></div>
                <input type="file" name="ten_section_img_twelve">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
              <div class="form-group">
                  <label>Ten Section Tag_12</label>
                  <div><?php echo form_error('ten_section_tag_twelve'); ?></div>
                  <input type="text" class="form-control" name="ten_section_tag_twelve" value="<?=set_value('ten_section_tag_twelve')?>">
                </div>
                <br>
                <!-- Nineteen Section -->
                <div class="form-group">
                <label>Nineteen Section Title</label>
                <div><?php echo form_error('nineteen_section_title'); ?></div>
                <input type="text" class="form-control" name="nineteen_section_title" value="<?=set_value('nineteen_section_title')?>">
            </div>
            <div class="form-group">
              <label> Nineteen Section Image_1 Upload</label>
              <div><?php echo form_error('nineteen_section_img_one'); ?></div>
              <input type="file" name="nineteen_section_img_one">
              <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
            </div>

            <div class="form-group">
              <label> Nineteen Section Image_2 Upload</label>
              <div><?php echo form_error('nineteen_section_img_two'); ?></div>
              <input type="file" name="nineteen_section_img_two">
              <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
            </div>

            <div class="form-group">
              <label> Nineteen Section Image_3 Upload</label>
              <div><?php echo form_error('nineteen_section_img_three'); ?></div>
              <input type="file" name="nineteen_section_img_three">
              <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
            </div>

            <div class="form-group">
              <label> Nineteen Section Image_4 Upload</label>
              <div><?php echo form_error('nineteen_section_img_four'); ?></div>
              <input type="file" name="nineteen_section_img_four">
              <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
            </div>

            <div class="form-group">
              <label> Nineteen Section Image_5 Upload</label>
              <div><?php echo form_error('nineteen_section_img_five'); ?></div>
              <input type="file" name="nineteen_section_img_five">
              <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
            </div>

            <div class="form-group">
              <label> Nineteen Section Image_6 Upload</label>
              <div><?php echo form_error('nineteen_section_img_six'); ?></div>
              <input type="file" name="nineteen_section_img_six">
              <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
            </div>

            <div class="form-group">
              <label> Nineteen Section Image_7 Upload</label>
              <div><?php echo form_error('nineteen_section_img_seven'); ?></div>
              <input type="file" name="nineteen_section_img_seven">
              <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
            </div>

            <div class="form-group">
              <label> Nineteen Section Image_8 Upload</label>
              <div><?php echo form_error('nineteen_section_img_eight'); ?></div>
              <input type="file" name="nineteen_section_img_eight">
              <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
            </div>

            <div class="form-group">
              <label> Nineteen Section Image_9 Upload</label>
              <div><?php echo form_error('nineteen_section_img_nine'); ?></div>
              <input type="file" name="nineteen_section_img_nine">
              <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
            </div>

            <div class="form-group">
              <label> Nineteen Section Image_10 Upload</label>
              <div><?php echo form_error('nineteen_section_img_ten'); ?></div>
              <input type="file" name="nineteen_section_img_ten">
              <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
            </div>

              </div>
              <div class="col-md-6">
                <!-- Third Section -->
                <div class="form-group">
                  <label>Third Section Title</label>
                  <div><?php echo form_error('third_section_title'); ?></div>
                  <input type="text" class="form-control" name="third_section_title" value="<?=set_value('third_section_title')?>">
                </div>

                <div class="form-group">
                <label> Third Section Image_1 Upload</label>
                <div><?php echo form_error('third_section_img_one'); ?></div>
                <input type="file" name="third_section_img_one">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>

              <div class="form-group">
                <label> Third Section Image_2 Upload</label>
                <div><?php echo form_error('third_section_img_two'); ?></div>
                <input type="file" name="third_section_img_two">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>

              <div class="form-group">
                <label> Third Section Image_3 Upload</label>
                <div><?php echo form_error('third_section_img_three'); ?></div>
                <input type="file" name="third_section_img_three">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>

              <div class="form-group">
                <label> Third Section Image_4 Upload</label>
                <div><?php echo form_error('third_section_img_four'); ?></div>
                <input type="file" name="third_section_img_four">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>

                  <div class="form-group">
                  <label>Third Section Para_1</label>
                  <div><?php echo form_error('third_section_para_one'); ?></div>
                  <input type="text" class="form-control" name="third_section_para_one" value="<?=set_value('third_section_para_one')?>">
                </div>

                <div class="form-group">
                  <label>Third Section Para_2</label>
                  <div><?php echo form_error('third_section_para_two'); ?></div>
                  <input type="text" class="form-control" name="third_section_para_two" value="<?=set_value('third_section_para_two')?>">
                </div>
                <div class="form-group">
                  <label>Third Section Para_3</label>
                  <div><?php echo form_error('third_section_para_three'); ?></div>
                  <input type="text" class="form-control" name="third_section_para_three" value="<?=set_value('third_section_para_three')?>">
                </div>

                <div class="form-group">
                  <label>Third Section Para_4</label>
                  <div><?php echo form_error('third_section_para_four'); ?></div>
                  <input type="text" class="form-control" name="third_section_para_four" value="<?=set_value('third_section_para_four')?>">
                </div>
                <br><br><br><br>
              </div>
            <div class="col-md-6">
                 <div class="form-group">
                  <label>Fourth Section Title</label>
                  <div><?php echo form_error('fourth_section_title'); ?></div>
                  <input type="text" class="form-control" name="fourth_section_title" value="<?=set_value('fourth_section_title')?>">
                </div>
                <div class="form-group">
                <label> Fourth Section Image Upload</label>
                <div><?php echo form_error('fourth_section_img'); ?></div>
                <input type="file" name="fourth_section_img">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                  <label>Fourth Section Para_1</label>
                  <div><?php echo form_error('fourth_section_para_one'); ?></div>
                  <input type="text" class="form-control" name="fourth_section_para_one" value="<?=set_value('fourth_section_para_one')?>">
                </div>

                <div class="form-group">
                  <label>Fourth Section Para_2</label>
                  <div><?php echo form_error('fourth_section_para_two'); ?></div>
                  <input type="text" class="form-control" name="fourth_section_para_two" value="<?=set_value('fourth_section_para_two')?>">
                </div>
                 <br><br>
                <!-- Eleven Section -->
                  <div class="form-group">
                  <label>Eleven Section Title</label>
                  <div><?php echo form_error('eleven_section_title'); ?></div>
                  <input type="text" class="form-control" name="eleven_section_title" value="<?=set_value('eleven_section_title')?>">
                </div>
                <div class="form-group">
                  <label>Eleven Section Para</label>
                  <div><?php echo form_error('eleven_section_para'); ?></div>
                  <input type="text" class="form-control" name="eleven_section_para" value="<?=set_value('eleven_section_para')?>">
                </div>
                <br><br>
                <!-- Twelve section -->
                 <div class="form-group">
                  <label>Twelve Section Title</label>
                  <div><?php echo form_error('twelve_section_title'); ?></div>
                  <input type="text" class="form-control" name="twelve_section_title" value="<?=set_value('twelve_section_title')?>">
                </div>

                <div class="form-group">
                  <label>Twelve Section List_1</label>
                  <br><span>Add List</span>
                  <button onclick="addItem(event,'twelve_section_list_container_1')">
                    <i class="fa fa-solid fa-plus" style="color: green; cursor:pointer;"></i>
                  </button>
                  <div id="twelve_section_list_container_1">
                    <input type="text" class="form-control" name="twelve_section_list_one[]" id="twelve_section_list_1">
                  </div>
                </div>

                <div class="form-group">
                  <label>Twelve Section List_2</label>
                  <br><span>Add List</span>
                  <button onclick="addItem(event,'twelve_section_list_container_2')">
                    <i class="fa fa-solid fa-plus" style="color: green; cursor:pointer;"></i>
                  </button>
                  <div id="twelve_section_list_container_2">
                    <input type="text" class="form-control" name="twelve_section_list_two[]" id="twelve_section_list_2">
                  </div>
                </div>
                   <br><br>

                   <div class="form-group">
                  <label>Thirteen Section Title</label>
                  <div><?php echo form_error('thirteen_section_title'); ?></div>
                  <input type="text" class="form-control" name="thirteen_section_title" value="<?=set_value('thirteen_section_title')?>">
                </div>

                <div class="form-group">
                <label> Thirteen Section Image_1 Upload</label>
                <div><?php echo form_error('thirteen_section_img_one'); ?></div>
                <input type="file" name="thirteen_section_img_one">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
               <div class="form-group">
                  <label>Thirteen Section Tag_1</label>
                  <div><?php echo form_error('thirteen_section_tag_one'); ?></div>
                  <input type="text" class="form-control" name="thirteen_section_tag_one" value="<?=set_value('thirteen_section_tag_one')?>">
                </div>

              <div class="form-group">
                <label> Thirteen Section Image_2 Upload</label>
                <div><?php echo form_error('thirteen_section_img_two'); ?></div>
                <input type="file" name="thirteen_section_img_two">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                  <label>Thirteen Section Tag_2</label>
                  <div><?php echo form_error('thirteen_section_tag_two'); ?></div>
                  <input type="text" class="form-control" name="thirteen_section_tag_two" value="<?=set_value('thirteen_section_tag_two')?>">
                </div>

              <div class="form-group">
                <label> Thirteen Section Image_3 Upload</label>
                <div><?php echo form_error('thirteen_section_img_three'); ?></div>
                <input type="file" name="thirteen_section_img_three">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
              <div class="form-group">
                  <label>Thirteen Section Tag_3</label>
                  <div><?php echo form_error('thirteen_section_tag_three'); ?></div>
                  <input type="text" class="form-control" name="thirteen_section_tag_three" value="<?=set_value('thirteen_section_tag_three')?>">
                </div>

              <div class="form-group">
                <label> Thirteen Section Image_4 Upload</label>
                <div><?php echo form_error('thirteen_section_img_four'); ?></div>
                <input type="file" name="thirteen_section_img_four">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                  <label>Thirteen Section Tag_4</label>
                  <div><?php echo form_error('thirteen_section_tag_four'); ?></div>
                  <input type="text" class="form-control" name="thirteen_section_tag_four" value="<?=set_value('thirteen_section_tag_four')?>">
                </div>
              <div class="form-group">
                <label> Thirteen Section Image_5 Upload</label>
                <div><?php echo form_error('thirteen_section_img_five'); ?></div>
                <input type="file" name="thirteen_section_img_five">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                  <label>Thirteen Section Tag_5</label>
                  <div><?php echo form_error('thirteen_section_tag_five'); ?></div>
                  <input type="text" class="form-control" name="thirteen_section_tag_five" value="<?=set_value('thirteen_section_tag_five')?>">
                </div>

              <div class="form-group">
                <label> Thirteen Section Image_6 Upload</label>
                <div><?php echo form_error('thirteen_section_img_six'); ?></div>
                <input type="file" name="thirteen_section_img_six">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
               <div class="form-group">
                  <label>Thirteen Section Tag_6</label>
                  <div><?php echo form_error('thirteen_section_tag_six'); ?></div>
                  <input type="text" class="form-control" name="thirteen_section_tag_six" value="<?=set_value('thirteen_section_tag_six')?>">
                </div>

              <div class="form-group">
                <label> Thirteen Section Image_7 Upload</label>
                <div><?php echo form_error('thirteen_section_img_seven'); ?></div>
                <input type="file" name="thirteen_section_img_seven">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                  <label>Thirteen Section Tag_7</label>
                  <div><?php echo form_error('thirteen_section_tag_seven'); ?></div>
                  <input type="text" class="form-control" name="thirteen_section_tag_seven" value="<?=set_value('thirteen_section_tag_seven')?>">
                </div>

              <div class="form-group">
                <label> Thirteen Section Image_8 Upload</label>
                <div><?php echo form_error('thirteen_section_img_eight'); ?></div>
                <input type="file" name="thirteen_section_img_eight">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
              <div class="form-group">
                  <label>Thirteen Section Tag_8</label>
                  <div><?php echo form_error('thirteen_section_tag_eight'); ?></div>
                  <input type="text" class="form-control" name="thirteen_section_tag_eight" value="<?=set_value('thirteen_section_tag_eight')?>">
                </div>  
              <div class="form-group">
                <label> Thirteen Section Image_9 Upload</label>
                <div><?php echo form_error('thirteen_section_img_nine'); ?></div>
                <input type="file" name="thirteen_section_img_nine">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
               <div class="form-group">
                  <label>Thirteen Section Tag_9</label>
                  <div><?php echo form_error('thirteen_section_tag_nine'); ?></div>
                  <input type="text" class="form-control" name="thirteen_section_tag_nine" value="<?=set_value('thirteen_section_tag_nine')?>">
                </div>

              <div class="form-group">
                <label> Thirteen Section Image_10 Upload</label>
                <div><?php echo form_error('thirteen_section_img_ten'); ?></div>
                <input type="file" name="thirteen_section_img_ten">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
              <div class="form-group">
                  <label>Thirteen Section Tag_10</label>
                  <div><?php echo form_error('thirteen_section_tag_ten'); ?></div>
                  <input type="text" class="form-control" name="thirteen_section_tag_ten" value="<?=set_value('thirteen_section_tag_ten')?>">
                </div>

              <div class="form-group">
                <label> Thirteen Section Image_11 Upload</label>
                <div><?php echo form_error('thirteen_section_img_eleven'); ?></div>
                <input type="file" name="thirteen_section_img_eleven">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
               <div class="form-group">
                  <label>Thirteen Section Tag_11</label>
                  <div><?php echo form_error('thirteen_section_tag_eleven'); ?></div>
                  <input type="text" class="form-control" name="thirteen_section_tag_eleven" value="<?=set_value('thirteen_section_tag_eleven')?>">
                </div>

              <div class="form-group">
                <label> Thirteen Section Image_12 Upload</label>
                <div><?php echo form_error('thirteen_section_img_twelve'); ?></div>
                <input type="file" name="thirteen_section_img_twelve">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
              <div class="form-group">
                  <label>Thirteen Section Tag_12</label>
                  <div><?php echo form_error('thirteen_section_tag_twelve'); ?></div>
                  <input type="text" class="form-control" name="thirteen_section_tag_twelve" value="<?=set_value('thirteen_section_tag_twelve')?>">
                </div>
                 <br><br>
                 <!-- Fourteen section -->
                <div class="form-group">
                  <label>Fourteen Section Title</label>
                  <div><?php echo form_error('fourteen_section_title'); ?></div>
                  <input type="text" class="form-control" name="fourteen_section_title" value="<?=set_value('fourteen_section_title')?>">
                </div>

                <div class="form-group">
                <label> Fourteen Section Image Upload_1</label>
                <div><?php echo form_error('fourteen_section_img_one'); ?></div>
                <input type="file" name="fourteen_section_img_one">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                  <label>Fourteen Section Heading_1</label>
                  <div><?php echo form_error('fourteen_section_heading_one'); ?></div>
                  <input type="text" class="form-control" name="fourteen_section_heading_one" value="<?=set_value('fourteen_section_heading_one')?>">
                </div>
                  <div class="form-group">
                  <label>Fourteen Section Para_1</label>
                  <div><?php echo form_error('fourteen_section_para_one'); ?></div>
                  <input type="text" class="form-control" name="fourteen_section_para_one" value="<?=set_value('fourteen_section_para_one')?>">
                </div>
                  <div class="form-group">
                <label> Fourteen Section Image Upload</label>
                <div><?php echo form_error('fourteen_section_img_two'); ?></div>
                <input type="file" name="fourteen_section_img_two">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                  <div class="form-group">
                  <label>Fourteen Section Heading_2</label>
                  <div><?php echo form_error('fourteen_section_heading_two'); ?></div>
                  <input type="text" class="form-control" name="fourteen_section_heading_two" value="<?=set_value('fourteen_section_heading_two')?>">
                </div>
                  <div class="form-group">
                  <label>Fourteen Section Para_2</label>
                  <div><?php echo form_error('fourteen_section_para_two'); ?></div>
                  <input type="text" class="form-control" name="fourteen_section_para_two" value="<?=set_value('fourteen_section_para_two')?>">
                </div>
                  <div class="form-group">
                <label> Fourteen Section Image Upload_3</label>
                <div><?php echo form_error('fourteen_section_img_three'); ?></div>
                <input type="file" name="fourteen_section_img_three">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                <div class="form-group">
                  <label>Fourteen Section Heading_3</label>
                  <div><?php echo form_error('fourteen_section_heading_three'); ?></div>
                  <input type="text" class="form-control" name="fourteen_section_heading_three" value="<?=set_value('fourteen_section_heading_three')?>">
                </div>
                  <div class="form-group">
                  <label>Fourteen Section Para_3</label>
                  <div><?php echo form_error('fourteen_section_para_three'); ?></div>
                  <input type="text" class="form-control" name="fourteen_section_para_three" value="<?=set_value('fourteen_section_para_three')?>">
                </div>
                  <div class="form-group">
                <label> Fourteen Section Image Upload_4</label>
                <div><?php echo form_error('fourteen_section_img_four'); ?></div>
                <input type="file" name="fourteen_section_img_four">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
              </div>
                  <div class="form-group">
                  <label>Fourteen Section Heading_4</label>
                  <div><?php echo form_error('fourteen_section_heading_four'); ?></div>
                  <input type="text" class="form-control" name="fourteen_section_heading_four" value="<?=set_value('fourteen_section_heading_four')?>">
                </div>
                  <div class="form-group">
                  <label>Fourteen Section Para_4</label>
                  <div><?php echo form_error('fourteen_section_para_four'); ?></div>
                  <input type="text" class="form-control" name="fourteen_section_para_four" value="<?=set_value('fourteen_section_para_four')?>">
                </div>
                
                <br><br>
                <!-- Fifteen Section -->
                <div class="form-group">
                  <label>Fifteen Section Title</label>
                  <div><?php echo form_error('fifteen_section_title'); ?></div>
                  <input type="text" class="form-control" name="fifteen_section_title" value="<?=set_value('fifteen_section_title')?>">
                </div>

                <div class="form-group">
                <label> Fifteen Section Image_1 Upload</label>
                <div><?php echo form_error('fifteen_section_img_one'); ?></div>
                <input type="file" name="fifteen_section_img_one">
                <p class="help-block">File type jpg, png, jpeg, gif and maximum file size 1 MB.</p>
            </div>

            <div class="form-group">
                <label> Fifteen Section Image_2 Upload</label>
                <div><?php echo form_error('fifteen_section_img_two'); ?></div>
                <input type="file" name="fifteen_section_img_two">
                <p class="help-block">File type jpg, png, jpeg, gif and maximum file size 1 MB.</p>
            </div>

            <div class="form-group">
                <label> Fifteen Section Image_3 Upload</label>
                <div><?php echo form_error('fifteen_section_img_three'); ?></div>
                <input type="file" name="fifteen_section_img_three">
                <p class="help-block">File type jpg, png, jpeg, gif and maximum file size 1 MB.</p>
            </div>
              <br>
            <!-- Sixteen Section -->
               <div class="form-group">
                <label>Sixteen Section Title</label>
                <div><?php echo form_error('sixteen_section_title'); ?></div>
                <input type="text" class="form-control" name="sixteen_section_title" value="<?=set_value('sixteen_section_title')?>">
            </div>

            <div class="form-group">
                <label> Sixteen Section Image_1 Upload</label>
                <div><?php echo form_error('sixteen_section_img_one'); ?></div>
                <input type="file" name="sixteen_section_img_one">
                <p class="help-block">File type jpg, png, jpeg, gif and maximum file size 1 MB.</p>
            </div>

            <div class="form-group">
                <label> Sixteen Section Image_2 Upload</label>
                <div><?php echo form_error('sixteen_section_img_two'); ?></div>
                <input type="file" name="sixteen_section_img_two">
                <p class="help-block">File type jpg, png, jpeg, gif and maximum file size 1 MB.</p>
            </div>

            <div class="form-group">
                <label> Sixteen Section Image_3 Upload</label>
                <div><?php echo form_error('sixteen_section_img_three'); ?></div>
                <input type="file" name="sixteen_section_img_three">
                <p class="help-block">File type jpg, png, jpeg, gif and maximum file size 1 MB.</p>
            </div>
            <div class="form-group">
              <label>Sixteen Section Heading_1</label>
              <div><?php echo form_error('sixteen_section_heading_one'); ?></div>
              <input type="text" class="form-control" name="sixteen_section_heading_one" value="<?=set_value('sixteen_section_heading_one')?>">
            </div>

            <div class="form-group">
              <label>Sixteen Section Para_1</label>
              <div><?php echo form_error('sixteen_section_para_one'); ?></div>
              <input type="text" class="form-control" name="sixteen_section_para_one" value="<?=set_value('sixteen_section_para_one')?>">
            </div>

            <div class="form-group">
              <label>Sixteen Section Heading_2</label>
              <div><?php echo form_error('sixteen_section_heading_two'); ?></div>
              <input type="text" class="form-control" name="sixteen_section_heading_two" value="<?=set_value('sixteen_section_heading_two')?>">
            </div>

            <div class="form-group">
              <label>Sixteen Section Para_2</label>
              <div><?php echo form_error('sixteen_section_para_two'); ?></div>
              <input type="text" class="form-control" name="sixteen_section_para_two" value="<?=set_value('sixteen_section_para_two')?>">
            </div>

            <div class="form-group">
              <label>Sixteen Section Heading_3</label>
              <div><?php echo form_error('sixteen_section_heading_three'); ?></div>
              <input type="text" class="form-control" name="sixteen_section_heading_three" value="<?=set_value('sixteen_section_heading_three')?>">
            </div>

            <div class="form-group">
              <label>Sixteen Section Para_3</label>
              <div><?php echo form_error('sixteen_section_para_three'); ?></div>
              <input type="text" class="form-control" name="sixteen_section_para_three" value="<?=set_value('sixteen_section_para_three')?>">
            </div>
            <div class="form-group">
              <label>Sixteen Section Role_1</label>
              <div><?php echo form_error('sixteen_section_role_one'); ?></div>
              <input type="text" class="form-control" name="sixteen_section_role_one" value="<?=set_value('sixteen_section_role_one')?>">
            </div>
             <div class="form-group">
              <label>Sixteen Section Role_2</label>
              <div><?php echo form_error('sixteen_section_role_two'); ?></div>
              <input type="text" class="form-control" name="sixteen_section_role_two" value="<?=set_value('sixteen_section_role_two')?>">
            </div>
            <div class="form-group">
              <label>Sixteen Section Role_3</label>
              <div><?php echo form_error('sixteen_section_role_three'); ?></div>
              <input type="text" class="form-control" name="sixteen_section_role_three" value="<?=set_value('sixteen_section_role_three')?>">
            </div>
<br>
            <!-- Seventeen Section -->
             <div class="form-group">
                <label>Seventeen Section Title</label>
                <div><?php echo form_error('seventeen_section_title'); ?></div>
                <input type="text" class="form-control" name="seventeen_section_title" value="<?=set_value('seventeen_section_title')?>">
            </div>
            <div class="form-group">
              <label>Seventeen Section Question_1</label>
              <div><?php echo form_error('seventeen_section_question_one'); ?></div>
              <input type="text" class="form-control" name="seventeen_section_question_one" value="<?=set_value('seventeen_section_question_one')?>">
            </div>
            <div class="form-group">
              <label>Seventeen Section Question_2</label>
              <div><?php echo form_error('seventeen_section_question_two'); ?></div>
              <input type="text" class="form-control" name="seventeen_section_question_two" value="<?=set_value('seventeen_section_question_two')?>">
            </div>

            <div class="form-group">
              <label>Seventeen Section Question_3</label>
              <div><?php echo form_error('seventeen_section_question_three'); ?></div>
              <input type="text" class="form-control" name="seventeen_section_question_three" value="<?=set_value('seventeen_section_question_three')?>">
            </div>
            <div class="form-group">
              <label>Seventeen Section Question_4</label>
              <div><?php echo form_error('seventeen_section_question_four'); ?></div>
              <input type="text" class="form-control" name="seventeen_section_question_four" value="<?=set_value('seventeen_section_question_four')?>">
            </div>
            <div class="form-group">
              <label>Seventeen Section Question_5</label>
              <div><?php echo form_error('seventeen_section_question_five'); ?></div>
              <input type="text" class="form-control" name="seventeen_section_question_five" value="<?=set_value('seventeen_section_question_five')?>">
            </div>
            <div class="form-group">
              <label>Seventeen Section Question_6</label>
              <div><?php echo form_error('seventeen_section_question_six'); ?></div>
              <input type="text" class="form-control" name="seventeen_section_question_six" value="<?=set_value('seventeen_section_question_six')?>">
            </div>
              <div class="form-group">
                <label>Seventeen Section Answer_1</label>
                <div><?php echo form_error('seventeen_section_answer_one'); ?></div>
                <input type="text" class="form-control" name="seventeen_section_answer_one" value="<?=set_value('seventeen_section_answer_one')?>">
              </div>
              <div class="form-group">
                <label>Seventeen Section Answer_2</label>
                <div><?php echo form_error('seventeen_section_answer_two'); ?></div>
                <input type="text" class="form-control" name="seventeen_section_answer_two" value="<?=set_value('seventeen_section_answer_two')?>">
              </div>

              <div class="form-group">
                <label>Seventeen Section Answer_3</label>
                <div><?php echo form_error('seventeen_section_answer_three'); ?></div>
                <input type="text" class="form-control" name="seventeen_section_answer_three" value="<?=set_value('seventeen_section_answer_three')?>">
              </div>
              <div class="form-group">
                <label>Seventeen Section Answer_4</label>
                <div><?php echo form_error('seventeen_section_answer_four'); ?></div>
                <input type="text" class="form-control" name="seventeen_section_answer_four" value="<?=set_value('seventeen_section_answer_four')?>">
              </div>
              <div class="form-group">
                <label>Seventeen Section Answer_5</label>
                <div><?php echo form_error('seventeen_section_answer_five'); ?></div>
                <input type="text" class="form-control" name="seventeen_section_answer_five" value="<?=set_value('seventeen_section_answer_five')?>">
              </div>
              <div class="form-group">
                <label>Seventeen Section Answer_6</label>
                <div><?php echo form_error('seventeen_section_answer_six'); ?></div>
                <input type="text" class="form-control" name="seventeen_section_answer_six" value="<?=set_value('seventeen_section_answer_six')?>">
              </div>
<br>
                <!-- Eighteen Section -->
                 <div class="form-group">
                <label>Eighteen Section Title</label>
                <div><?php echo form_error('eighteen_section_title'); ?></div>
                <input type="text" class="form-control" name="eighteen_section_title" value="<?=set_value('eighteen_section_title')?>">
            </div>
            <div class="form-group">
                <label>Eighteen Section Para</label>
                <div><?php echo form_error('eighteen_section_para'); ?></div>
                <input type="text" class="form-control" name="eighteen_section_para" value="<?=set_value('eighteen_section_para')?>">
            </div>
                  
                </div>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">    
            <?php //echo form_input($user_id);?>        
            <?php echo form_submit('submit', 'Save', "class='btn btn-primary pull-right'"); ?>
          </div>
        <?php echo form_close();?>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->

<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
<script>

ClassicEditor.create(document.querySelector('#serviceAdd'))
    .then(editor => {
        window.editor = editor;
    })
    .catch(error => {
        console.error(error);
    });
</script>
<script>
   

    function removeItem(event, element){
        event.preventDefault();
         console.log("remove item");
        var row = element.parentNode.parentNode;
        row.parentNode.removeChild(row);

    }

    function addItem(event, eleId, firstInputName, secondInputName){
        event.preventDefault();
        console.log("event",event.target);
        var table = document.getElementById(eleId);
        var row = table.insertRow(2);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = `<input type="file" name=${firstInputName}[]>`;
        cell2.innerHTML = `<input type="text" class="form-control" name=${secondInputName}[]>`;
        cell3.innerHTML = '<button onclick="removeItem(event,this)" ><i class="fa fa-solid fa-minus" style="color: red; cursor:pointer;"></i></button>';
    }
</script>

<script>
function addItem(e, fieldName) {
    e.preventDefault(); // stop form from submitting

    let container = document.getElementById(fieldName + "_container");

    let input = document.createElement("input");
    input.type = "text";
    input.className = "form-control mt-2"; // add margin-top for spacing
    input.name = fieldName + "[]"; // keeps array structure

    container.appendChild(input); // add under existing inputs
}
</script>
<script>
  function addItem(event, containerId) {
  event.preventDefault();
  let container = document.getElementById(containerId);
  let input = document.createElement("input");
  input.type = "text";
  input.className = "form-control";
  input.name = containerId.includes("1") 
               ? "twelve_section_list_one[]" 
               : "twelve_section_list_two[]";
  container.appendChild(input);
}

</script>