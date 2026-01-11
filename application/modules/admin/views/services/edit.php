<section class="content-header">
  <h1> <?= $meta_title; ?> </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><?= $meta_title; ?></li>
  </ol>
</section>

<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= $meta_title ?></h3>
          <a href="<?= base_url('admin/services/all') ?>" class="btn btn-info btn-xs pull-right"
            style="margin-left: 15px;"> All Service</a>
          <a href="<?= base_url('admin/services/details/' . $info->id) ?>" class="btn btn-info btn-xs pull-right"
            style="margin-left: 15px;"> Details Service</a>
          <a href="<?= base_url('admin/services/add') ?>" class="btn btn-info btn-xs pull-right"> Add
            Service</a>
        </div>
        <?php echo form_open_multipart("admin/services/edit/" . $info->id); ?>
        <div class="box-body">
          <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
              <a class="close" data-dismiss="alert">&times;</a>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php endif; ?>

          <div class="row">
            <div class="col-md-7">
              <div class="form-group">
                <label>Service Name</label>
                <div><?php echo form_error('name'); ?></div>
                <input type="text" class="form-control" name="name" value="<?= set_value('name', $info->name) ?>">
              </div>

              <div class="form-group">
                <label>Slug URL</label>
                <div><?php echo form_error('slug'); ?></div>
                <input type="text" class="form-control" name="slug" value="<?= set_value('slug', $info->slug) ?>">
              </div>

              <div class="form-group">
                <label>Short Description</label>
                <div><?php echo form_error('short_desc'); ?></div>
                <textarea class="form-control" rows="3" name="short_desc"
                  placeholder="Short Description Maximum 255 character"><?= set_value('short_desc', $info->short_desc) ?></textarea>
              </div>

              <div class="form-group">
                <label>Details Description</label>
                <div><?php echo form_error('description'); ?></div>
                <textarea id="serviceEdit" name="description" rows="10"
                  cols="80"><?= set_value('description', $info->description) ?></textarea>
              </div>
            </div>

            <div class="col-md-5">
              <div class="form-group">
                <label>Select Main Service</label>
                <div><?php echo form_error('main_service_id'); ?></div>
                <?php
                $more_attr = 'class="form-control"';
                echo form_dropdown('main_service_id', $category, set_value('main_service_id', $info->main_service_id), $more_attr);
                ?>
              </div>

              <div class="form-group">
                <label>Fontawesome Icon</label>
                <div><?php echo form_error('fa_icon'); ?></div>
                <input type="text" class="form-control" name="fa_icon"
                  value="<?= set_value('fa_icon', $info->fa_icon) ?>" placeholder="e.g. fa-camera-retro">
              </div>

              <div class="form-group">
                <label>Meta Keywords</label>
                <textarea class="form-control" rows="3" name="meta_keys"
                  placeholder="tag1, tag2, tag3, tag4, tag5"><?= set_value('meta_keys', $info->meta_keys) ?></textarea>
              </div>

              <div class="form-group">
                <label class="form-label required">Display Home</label> <br>
                <input type="radio" name="display_home" value="1" <?= set_value('display_home', $info->display_home) == '1' ? 'checked' : ''; ?>> Yes
                <input type="radio" name="display_home" value="0" <?= set_value('display_home', $info->display_home) == '0' ? 'checked' : ''; ?>> No
              </div>

              <div class="form-group">
                <label class="form-label required">Status</label> <br>
                <input type="radio" name="status" value="1" <?= set_value('status', $info->status) == '1' ? 'checked' : ''; ?>>
                Yes
                <input type="radio" name="status" value="0" <?= set_value('status', $info->status) == '0' ? 'checked' : ''; ?>>
                No
              </div>

              <div class="form-group">
                <label>Image Upload</label>
                <div><?php echo form_error('userfile'); ?></div>
                <input type="file" name="userfile">
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                <?php
                $img_path = base_url() . 'service_img/';
                if ($info->image_file != NULL) {
                  $src = $img_path . $info->image_file;
                  echo "<img src='$src' width='100'>";
                }
                ?>

              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-md-12">

              <!-- First Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-align-left"></i> First Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>First Section Title</label>
                    <div><?php echo form_error('first_section_titel'); ?></div>
                    <input type="text" class="form-control" name="first_section_titel"
                      value="<?= set_value('first_section_titel', $info->first_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label>First Section Para</label>
                    <div><?php echo form_error('first_section_para'); ?></div>
                    <input type="text" class="form-control" name="first_section_para"
                      value="<?= set_value('first_section_para', $info->first_section_para) ?>">
                  </div>
                  <div class="form-group">
                    <label> First Section Image Upload</label>
                    <div><?php echo form_error('first_section_img'); ?></div>
                    <input type="file" name="first_section_img">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->first_section_img != NULL) {
                      $src = $img_path . $info->first_section_img;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                </div>
              </div>

              <!-- Second Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-list-alt"></i> Second Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Second Section Title</label>
                    <div><?php echo form_error('second_section_titel'); ?></div>
                    <input type="text" class="form-control" name="second_section_titel"
                      value="<?= set_value('second_section_titel', $info->second_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label>Second Section Heading_1</label>
                    <div><?php echo form_error('second_section_heading_one'); ?></div>
                    <input type="text" class="form-control" name="second_section_heading_one"
                      value="<?= set_value('second_section_heading_one', $info->second_section_heading_one) ?>">
                  </div>
                  <div class="form-group">
                    <label>Second Section Heading_2</label>
                    <div><?php echo form_error('second_section_heading_two'); ?></div>
                    <input type="text" class="form-control" name="second_section_heading_two"
                      value="<?= set_value('second_section_heading_two', $info->second_section_heading_two) ?>">
                  </div>
                  <div class="form-group">
                    <label>Second Section Para_1</label>
                    <div><?php echo form_error('second_section_para_one'); ?></div>
                    <input type="text" class="form-control" name="second_section_para_one"
                      value="<?= set_value('second_section_para_one', $info->second_section_para_one) ?>">
                  </div>
                  <div class="form-group">
                    <label>Second Section Para_2</label>
                    <div><?php echo form_error('second_section_para_two'); ?></div>
                    <input type="text" class="form-control" name="second_section_para_two"
                      value="<?= set_value('second_section_para_two', $info->second_section_para_two) ?>">
                  </div>
                  <div class="form-group">
                    <label> Second Section Image_1 Upload</label>
                    <div><?php echo form_error('second_section_img_one'); ?></div>
                    <input type="file" name="second_section_img_one">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->second_section_img_one != NULL) {
                      $src = $img_path . $info->second_section_img_one;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Second Section Image_2 Upload</label>
                    <div><?php echo form_error('second_section_img_two'); ?></div>
                    <input type="file" name="second_section_img_two">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->second_section_img_two != NULL) {
                      $src = $img_path . $info->second_section_img_two;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <!-- Third Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-image"></i> Third Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Third Section Title</label>
                    <div><?php echo form_error('third_section_titel'); ?></div>
                    <input type="text" class="form-control" name="third_section_titel"
                      value="<?= set_value('third_section_titel', $info->third_section_titel) ?>">
                  </div>
                    <div class="form-group">
                    <label>Third Section Para_1</label>
                    <div><?php echo form_error('third_section_para_one'); ?></div>
                    <input type="text" class="form-control" name="third_section_para_one"
                      value="<?= set_value('third_section_para_one', $info->third_section_para_one) ?>">
                  </div>

                  <div class="form-group">
                    <label> Third Section Image_1 Upload</label>
                    <div><?php echo form_error('third_section_img_one'); ?></div>
                    <input type="file" name="third_section_img_one">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->third_section_img_one != NULL) {
                      $src = $img_path . $info->third_section_img_one;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>

                  






                  <div class="form-group">
                    <label> Third Section Image_2 Upload</label>
                    <div><?php echo form_error('third_section_img_two'); ?></div>
                    <input type="file" name="third_section_img_two">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->third_section_img_two != NULL) {
                      $src = $img_path . $info->third_section_img_two;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Third Section Image_3 Upload</label>
                    <div><?php echo form_error('third_section_img_three'); ?></div>
                    <input type="file" name="third_section_img_three">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->third_section_img_three != NULL) {
                      $src = $img_path . $info->third_section_img_three;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Third Section Image_4 Upload</label>
                    <div><?php echo form_error('third_section_img_four'); ?></div>
                    <input type="file" name="third_section_img_four">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->third_section_img_four != NULL) {
                      $src = $img_path . $info->third_section_img_four;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                
                  <div class="form-group">
                    <label>Third Section Para_2</label>
                    <div><?php echo form_error('third_section_para_two'); ?></div>
                    <input type="text" class="form-control" name="third_section_para_two"
                      value="<?= set_value('third_section_para_two', $info->third_section_para_two) ?>">
                  </div>
                  <div class="form-group">
                    <label>Third Section Para_3</label>
                    <div><?php echo form_error('third_section_para_three'); ?></div>
                    <input type="text" class="form-control" name="third_section_para_three"
                      value="<?= set_value('third_section_para_three', $info->third_section_para_three) ?>">
                  </div>
                  <div class="form-group">
                    <label>Third Section Para_4</label>
                    <div><?php echo form_error('third_section_para_four'); ?></div>
                    <input type="text" class="form-control" name="third_section_para_four"
                      value="<?= set_value('third_section_para_four', $info->third_section_para_four) ?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- Fourth Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-file-text-o"></i> Fourth Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Fourth Section Title</label>
                    <div><?php echo form_error('fourth_section_titel'); ?></div>
                    <input type="text" class="form-control" name="fourth_section_titel"
                      value="<?= set_value('fourth_section_titel', $info->fourth_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label> Fourth Section Image Upload</label>
                    <div><?php echo form_error('fourth_section_img'); ?></div>
                    <input type="file" name="fourth_section_img">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->fourth_section_img != NULL) {
                      $src = $img_path . $info->fourth_section_img;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Fourth Section Para_1</label>
                    <div><?php echo form_error('fourth_section_para_one'); ?></div>
                    <input type="text" class="form-control" name="fourth_section_para_one"
                      value="<?= set_value('fourth_section_para_one', $info->fourth_section_para_one) ?>">
                  </div>
                  <div class="form-group">
                    <label>Fourth Section Para_2</label>
                    <div><?php echo form_error('fourth_section_para_two'); ?></div>
                    <input type="text" class="form-control" name="fourth_section_para_two"
                      value="<?= set_value('fourth_section_para_two', $info->fourth_section_para_two) ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <!-- Five Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-picture-o"></i> Five Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Five Section Title</label>
                    <div><?php echo form_error('five_section_titel'); ?></div>
                    <input type="text" class="form-control" name="five_section_titel"
                      value="<?= set_value('five_section_titel', $info->five_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label> Five Section Image_1 Upload</label>
                    <div><?php echo form_error('five_section_img_one'); ?></div>
                    <input type="file" name="five_section_img_one">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->five_section_img_one != NULL) {
                      $src = $img_path . $info->five_section_img_one;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Five Section Image_2 Upload</label>
                    <div><?php echo form_error('five_section_img_two'); ?></div>
                    <input type="file" name="five_section_img_two">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->five_section_img_two != NULL) {
                      $src = $img_path . $info->five_section_img_two;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Five Section Image_3 Upload</label>
                    <div><?php echo form_error('five_section_img_three'); ?></div>
                    <input type="file" name="five_section_img_three">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->five_section_img_three != NULL) {
                      $src = $img_path . $info->five_section_img_three;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Five Section Image_4 Upload</label>
                    <div><?php echo form_error('five_section_img_four'); ?></div>
                    <input type="file" name="five_section_img_four">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->five_section_img_four != NULL) {
                      $src = $img_path . $info->five_section_img_four;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Five Section Image_5 Upload</label>
                    <div><?php echo form_error('five_section_img_five'); ?></div>
                    <input type="file" name="five_section_img_five">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->five_section_img_five != NULL) {
                      $src = $img_path . $info->five_section_img_five;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                </div>
              </div>

              <!-- Six Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-list-ul"></i> Six Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Six Section Title</label>
                    <div><?php echo form_error('six_section_titel'); ?></div>
                    <input type="text" class="form-control" name="six_section_titel"
                      value="<?= set_value('six_section_titel', $info->six_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label>Six Section Para_1</label>
                    <div><?php echo form_error('six_section_para_one'); ?></div>
                    <input type="text" class="form-control" name="six_section_para_one"
                      value="<?= set_value('six_section_para_one', $info->six_section_para_one) ?>">
                  </div>
                  <div class="form-group">
                    <label>Six Section List</label>
                    <br><span>Add List</span>
                    <button onclick="addListItem(event, 'six_section_list_container', 'six_section_list')" class="btn btn-success btn-xs">
                      <i class="fa fa-plus"></i>
                    </button>
                    <div id="six_section_list_container">
                      <?php
                      $six_section_list = is_string($info->six_section_list) ? json_decode($info->six_section_list) : $info->six_section_list;
                      if (!empty($six_section_list)) {
                        foreach ($six_section_list as $item) {
                          echo '<div class="input-group mt-2"><input type="text" class="form-control" name="six_section_list[]" value="' . set_value('six_section_list[]', $item) . '"><span class="input-group-btn"><button class="btn btn-danger btn-flat" type="button" onclick="removeListItem(event)"><i class="fa fa-minus"></i></button></span></div>';
                        }
                      }
                      ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label> Six Section Image Upload</label>
                    <div><?php echo form_error('six_section_img'); ?></div>
                    <input type="file" name="six_section_img">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->six_section_img != NULL) {
                      $src = $img_path . $info->six_section_img;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Six Section Para_2</label>
                    <div><?php echo form_error('six_section_para_two'); ?></div>
                    <input type="text" class="form-control" name="six_section_para_two"
                      value="<?= set_value('six_section_para_two', $info->six_section_para_two) ?>">
                  </div>
                </div>
              </div>

              <!-- Seven Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-list-ol"></i> Seven Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Seven Section Title</label>
                    <div><?php echo form_error('seven_section_titel'); ?></div>
                    <input type="text" class="form-control" name="seven_section_titel"
                      value="<?= set_value('seven_section_titel', $info->seven_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label>Seven Section Para_1</label>
                    <div><?php echo form_error('seven_section_para_one'); ?></div>
                    <input type="text" class="form-control" name="seven_section_para_one"
                      value="<?= set_value('seven_section_para_one', $info->seven_section_para_one) ?>">
                  </div>
                  <div class="form-group">
                    <label>Seven Section List</label>
                    <br><span>Add List</span>
                    <button onclick="addListItem(event, 'seven_section_list_container', 'seven_section_list')" class="btn btn-success btn-xs">
                      <i class="fa fa-plus"></i>
                    </button>
                    <div id="seven_section_list_container">
                      <?php
                      $seven_section_list = is_string($info->seven_section_list) ? json_decode($info->seven_section_list) : $info->seven_section_list;
                      if (!empty($seven_section_list)) {
                        foreach ($seven_section_list as $item) {
                          echo '<div class="input-group mt-2"><input type="text" class="form-control" name="seven_section_list[]" value="' . set_value('seven_section_list[]', $item) . '"><span class="input-group-btn"><button class="btn btn-danger btn-flat" type="button" onclick="removeListItem(event)"><i class="fa fa-minus"></i></button></span></div>';
                        }
                      }
                      ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label> Seven Section Image Upload</label>
                    <div><?php echo form_error('seven_section_img'); ?></div>
                    <input type="file" name="seven_section_img">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->seven_section_img != NULL) {
                      $src = $img_path . $info->seven_section_img;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Seven Section Para_2</label>
                    <div><?php echo form_error('seven_section_para_two'); ?></div>
                    <input type="text" class="form-control" name="seven_section_para_two"
                      value="<?= set_value('seven_section_para_two', $info->seven_section_para_two) ?>">
                  </div>
                </div>
              </div>

              <!-- Eight Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-cogs"></i> Eight Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Eight Section Title</label>
                    <div><?php echo form_error('Eight_section_titel'); ?></div>
                    <input type="text" class="form-control" name="Eight_section_titel"
                      value="<?= set_value('Eight_section_titel', $info->Eight_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Icon_1</label>
                    <div><?php echo form_error('eight_section_icon_one'); ?></div>
                    <input type="text" class="form-control" name="eight_section_icon_one"
                      value="<?= set_value('eight_section_icon_one', $info->eight_section_icon_one) ?>"
                      placeholder="Give your icon">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Icon_2</label>
                    <div><?php echo form_error('eight_section_icon_two'); ?></div>
                    <input type="text" class="form-control" name="eight_section_icon_two"
                      value="<?= set_value('eight_section_icon_two', $info->eight_section_icon_two) ?>"
                      placeholder="Give your icon">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Icon_3</label>
                    <div><?php echo form_error('eight_section_icon_three'); ?></div>
                    <input type="text" class="form-control" name="eight_section_icon_three"
                      value="<?= set_value('eight_section_icon_three', $info->eight_section_icon_three) ?>"
                      placeholder="Give your icon">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Icon_4</label>
                    <div><?php echo form_error('eight_section_icon_four'); ?></div>
                    <input type="text" class="form-control" name="eight_section_icon_four"
                      value="<?= set_value('eight_section_icon_four', $info->eight_section_icon_four) ?>"
                      placeholder="Give your icon">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Icon_5</label>
                    <div><?php echo form_error('eight_section_icon_five'); ?></div>
                    <input type="text" class="form-control" name="eight_section_icon_five"
                      value="<?= set_value('eight_section_icon_five', $info->eight_section_icon_five) ?>"
                      placeholder="Give your icon">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Icon_6</label>
                    <div><?php echo form_error('eight_section_icon_six'); ?></div>
                    <input type="text" class="form-control" name="eight_section_icon_six"
                      value="<?= set_value('eight_section_icon_six', $info->eight_section_icon_six) ?>"
                      placeholder="Give your icon">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Heading_1</label>
                    <div><?php echo form_error('Eight_section_heading_one'); ?></div>
                    <input type="text" class="form-control" name="Eight_section_heading_one"
                      value="<?= set_value('Eight_section_heading_one', $info->Eight_section_heading_one) ?>">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Para_1</label>
                    <div><?php echo form_error('eight_section_para_one'); ?></div>
                    <input type="text" class="form-control" name="eight_section_para_one"
                      value="<?= set_value('eight_section_para_one', $info->Eight_section_para_one) ?>">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Heading_2</label>
                    <div><?php echo form_error('eight_section_heading_two'); ?></div>
                    <input type="text" class="form-control" name="eight_section_heading_two"
                      value="<?= set_value('eight_section_heading_two', $info->Eight_section_heading_two) ?>">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Para_2</label>
                    <div><?php echo form_error('Eight_section_para_two'); ?></div>
                    <input type="text" class="form-control" name="Eight_section_para_two"
                      value="<?= set_value('Eight_section_para_two', $info->Eight_section_para_two) ?>">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Heading_3</label>
                    <div><?php echo form_error('Eight_section_heading_three'); ?></div>
                    <input type="text" class="form-control" name="Eight_section_heading_three"
                      value="<?= set_value('Eight_section_heading_three', $info->Eight_section_heading_three) ?>">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Para_3</label>
                    <div><?php echo form_error('Eight_section_para_three'); ?></div>
                    <input type="text" class="form-control" name="Eight_section_para_three"
                      value="<?= set_value('Eight_section_para_three', $info->Eight_section_para_three) ?>">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Heading_4</label>
                    <div><?php echo form_error('Eight_section_heading_four'); ?></div>
                    <input type="text" class="form-control" name="Eight_section_heading_four"
                      value="<?= set_value('Eight_section_heading_four', $info->Eight_section_heading_four) ?>">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Para_4</label>
                    <div><?php echo form_error('eight_section_para_four'); ?></div>
                    <input type="text" class="form-control" name="eight_section_para_four"
                      value="<?= set_value('eight_section_para_four', $info->Eight_section_para_four) ?>">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Heading_5</label>
                    <div><?php echo form_error('eight_section_heading_five'); ?></div>
                    <input type="text" class="form-control" name="eight_section_heading_five"
                      value="<?= set_value('eight_section_heading_five', $info->Eight_section_heading_five) ?>">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Para_5</label>
                    <div><?php echo form_error('eight_section_para_five'); ?></div>
                    <input type="text" class="form-control" name="eight_section_para_five"
                      value="<?= set_value('eight_section_para_five', $info->Eight_section_para_five) ?>">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Heading_6</label>
                    <div><?php echo form_error('eight_section_heading_six'); ?></div>
                    <input type="text" class="form-control" name="eight_section_heading_six"
                      value="<?= set_value('eight_section_heading_six', $info->Eight_section_heading_six) ?>">
                  </div>
                  <div class="form-group">
                    <label>Eight Section Para_6</label>
                    <div><?php echo form_error('eight_section_para_six'); ?></div>
                    <input type="text" class="form-control" name="eight_section_para_six"
                      value="<?= set_value('eight_section_para_six', $info->Eight_section_para_six) ?>">
                  </div>
                </div>
              </div>

              <!-- Nine Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th-large"></i> Nine Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Nine Section Title</label>
                    <div><?php echo form_error('nine_section_titel'); ?></div>
                    <input type="text" class="form-control" name="nine_section_titel"
                      value="<?= set_value('nine_section_titel', $info->nine_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label>Nine Section Main Para</label>
                    <div><?php echo form_error('nine_section_main_para'); ?></div>
                    <input type="text" class="form-control" name="nine_section_main_para"
                      value="<?= set_value('nine_section_main_para', $info->nine_section_main_para) ?>">
                  </div>
                  <div class="form-group">
                    <label> Nine Section Image Upload_1</label>
                    <div><?php echo form_error('nine_section_img_one'); ?></div>
                    <input type="file" name="nine_section_img_one">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->nine_section_img_one != NULL) {
                      $src = $img_path . $info->nine_section_img_one;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Nine Section Heading_1</label>
                    <div><?php echo form_error('nine_section_heading_one'); ?></div>
                    <input type="text" class="form-control" name="nine_section_heading_one"
                      value="<?= set_value('nine_section_heading_one', $info->nine_section_heading_one) ?>">
                  </div>
                  <div class="form-group">
                    <label>Nine Section Para_1</label>
                    <div><?php echo form_error('nine_section_para_one'); ?></div>
                    <input type="text" class="form-control" name="nine_section_para_one"
                      value="<?= set_value('nine_section_para_one', $info->nine_section_para_one) ?>">
                  </div>
                  <div class="form-group">
                    <label> Nine Section Image Upload_2</label>
                    <div><?php echo form_error('nine_section_img_two'); ?></div>
                    <input type="file" name="nine_section_img_two">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->nine_section_img_two != NULL) {
                      $src = $img_path . $info->nine_section_img_two;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Nine Section Heading_2</label>
                    <div><?php echo form_error('nine_section_heading_two'); ?></div>
                    <input type="text" class="form-control" name="nine_section_heading_two"
                      value="<?= set_value('nine_section_heading_two', $info->nine_section_heading_two) ?>">
                  </div>
                  <div class="form-group">
                    <label>Nine Section Para_2</label>
                    <div><?php echo form_error('nine_section_para_two'); ?></div>
                    <input type="text" class="form-control" name="nine_section_para_two"
                      value="<?= set_value('nine_section_para_two', $info->nine_section_para_two) ?>">
                  </div>
                  <div class="form-group">
                    <label> Nine Section Image Upload_3</label>
                    <div><?php echo form_error('nine_section_img_three'); ?></div>
                    <input type="file" name="nine_section_img_three">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->nine_section_img_three != NULL) {
                      $src = $img_path . $info->nine_section_img_three;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Nine Section Heading_3</label>
                    <div><?php echo form_error('nine_section_heading_three'); ?></div>
                    <input type="text" class="form-control" name="nine_section_heading_three"
                      value="<?= set_value('nine_section_heading_three', $info->nine_section_heading_three) ?>">
                  </div>
                  <div class="form-group">
                    <label>Nine Section Para_3</label>
                    <div><?php echo form_error('nine_section_para_three'); ?></div>
                    <input type="text" class="form-control" name="nine_section_para_three"
                      value="<?= set_value('nine_section_para_three', $info->nine_section_para_three) ?>">
                  </div>
                  <div class="form-group">
                    <label> Nine Section Image Upload_4</label>
                    <div><?php echo form_error('nine_section_img_four'); ?></div>
                    <input type="file" name="nine_section_img_four">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->nine_section_img_four != NULL) {
                      $src = $img_path . $info->nine_section_img_four;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Nine Section Heading_4</label>
                    <div><?php echo form_error('nine_section_heading_four'); ?></div>
                    <input type="text" class="form-control" name="nine_section_heading_four"
                      value="<?= set_value('nine_section_heading_four', $info->nine_section_heading_four) ?>">
                  </div>
                  <div class="form-group">
                    <label>Nine Section Para_4</label>
                    <div><?php echo form_error('nine_section_para_four'); ?></div>
                    <input type="text" class="form-control" name="nine_section_para_four"
                      value="<?= set_value('nine_section_para_four', $info->nine_section_para_four) ?>">
                  </div>
                </div>
              </div>

              <!-- Ten Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-tags"></i> Ten Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Ten Section Title</label>
                    <div><?php echo form_error('Ten_section_titel'); ?></div>
                    <input type="text" class="form-control" name="Ten_section_titel"
                      value="<?= set_value('Ten_section_titel', $info->Ten_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label>Ten Section Para</label>
                    <div><?php echo form_error('Ten_section_para_one'); ?></div>
                    <input type="text" class="form-control" name="Ten_section_para_one"
                      value="<?= set_value('Ten_section_para_one', $info->Ten_section_para_one) ?>">
                  </div>
                  <div class="form-group">
                    <label> Ten Section Image_1 Upload</label>
                    <div><?php echo form_error('Ten_section_img_one'); ?></div>
                    <input type="file" name="Ten_section_img_one">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->Ten_section_img_one != NULL) {
                      $src = $img_path . $info->Ten_section_img_one;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Ten Section Tag_1</label>
                    <div><?php echo form_error('Ten_section_tag_one'); ?></div>
                    <input type="text" class="form-control" name="Ten_section_tag_one"
                      value="<?= set_value('Ten_section_tag_one', $info->Ten_section_tag_one) ?>">
                  </div>
                  <div class="form-group">
                    <label> Ten Section Image_2 Upload</label>
                    <div><?php echo form_error('Ten_section_img_two'); ?></div>
                    <input type="file" name="Ten_section_img_two">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->Ten_section_img_two != NULL) {
                      $src = $img_path . $info->Ten_section_img_two;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Ten Section Tag_2</label>
                    <div><?php echo form_error('Ten_section_tag_two'); ?></div>
                    <input type="text" class="form-control" name="Ten_section_tag_two"
                      value="<?= set_value('Ten_section_tag_two', $info->Ten_section_tag_two) ?>">
                  </div>
                  <div class="form-group">
                    <label> Ten Section Image_3 Upload</label>
                    <div><?php echo form_error('Ten_section_img_three'); ?></div>
                    <input type="file" name="Ten_section_img_three">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->Ten_section_img_three != NULL) {
                      $src = $img_path . $info->Ten_section_img_three;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Ten Section Tag_3</label>
                    <div><?php echo form_error('Ten_section_tag_three'); ?></div>
                    <input type="text" class="form-control" name="Ten_section_tag_three"
                      value="<?= set_value('Ten_section_tag_three', $info->Ten_section_tag_three) ?>">
                  </div>
                  <div class="form-group">
                    <label> Ten Section Image_4 Upload</label>
                    <div><?php echo form_error('Ten_section_img_four'); ?></div>
                    <input type="file" name="Ten_section_img_four">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->Ten_section_img_four != NULL) {
                      $src = $img_path . $info->Ten_section_img_four;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Ten Section Tag_4</label>
                    <div><?php echo form_error('Ten_section_tag_four'); ?></div>
                    <input type="text" class="form-control" name="Ten_section_tag_four"
                      value="<?= set_value('Ten_section_tag_four', $info->Ten_section_tag_four) ?>">
                  </div>
                  <div class="form-group">
                    <label> Ten Section Image_5 Upload</label>
                    <div><?php echo form_error('Ten_section_img_five'); ?></div>
                    <input type="file" name="Ten_section_img_five">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->Ten_section_img_five != NULL) {
                      $src = $img_path . $info->Ten_section_img_five;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Ten Section Tag_5</label>
                    <div><?php echo form_error('Ten_section_tag_five'); ?></div>
                    <input type="text" class="form-control" name="Ten_section_tag_five"
                      value="<?= set_value('Ten_section_tag_five', $info->Ten_section_tag_five) ?>">
                  </div>
                  <div class="form-group">
                    <label> Ten Section Image_6 Upload</label>
                    <div><?php echo form_error('Ten_section_img_six'); ?></div>
                    <input type="file" name="Ten_section_img_six">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->Ten_section_img_six != NULL) {
                      $src = $img_path . $info->Ten_section_img_six;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Ten Section Tag_6</label>
                    <div><?php echo form_error('Ten_section_tag_six'); ?></div>
                    <input type="text" class="form-control" name="Ten_section_tag_six"
                      value="<?= set_value('Ten_section_tag_six', $info->Ten_section_tag_six) ?>">
                  </div>
                  <div class="form-group">
                    <label> Ten Section Image_7 Upload</label>
                    <div><?php echo form_error('Ten_section_img_seven'); ?></div>
                    <input type="file" name="Ten_section_img_seven">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->Ten_section_img_seven != NULL) {
                      $src = $img_path . $info->Ten_section_img_seven;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Ten Section Tag_7</label>
                    <div><?php echo form_error('Ten_section_tag_seven'); ?></div>
                    <input type="text" class="form-control" name="Ten_section_tag_seven"
                      value="<?= set_value('Ten_section_tag_seven', $info->Ten_section_tag_seven) ?>">
                  </div>
                  <div class="form-group">
                    <label> Ten Section Image_8 Upload</label>
                    <div><?php echo form_error('Ten_section_img_eight'); ?></div>
                    <input type="file" name="Ten_section_img_eight">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->Ten_section_img_eight != NULL) {
                      $src = $img_path . $info->Ten_section_img_eight;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Ten Section Tag_8</label>
                    <div><?php echo form_error('Ten_section_tag_eight'); ?></div>
                    <input type="text" class="form-control" name="Ten_section_tag_eight"
                      value="<?= set_value('Ten_section_tag_eight', $info->Ten_section_tag_eight) ?>">
                  </div>
                  <div class="form-group">
                    <label> Ten Section Image_9 Upload</label>
                    <div><?php echo form_error('Ten_section_img_nine'); ?></div>
                    <input type="file" name="Ten_section_img_nine">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->Ten_section_img_nine != NULL) {
                      $src = $img_path . $info->Ten_section_img_nine;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Ten Section Tag_9</label>
                    <div><?php echo form_error('Ten_section_tag_nine'); ?></div>
                    <input type="text" class="form-control" name="Ten_section_tag_nine"
                      value="<?= set_value('Ten_section_tag_nine', $info->Ten_section_tag_nine) ?>">
                  </div>
                  <div class="form-group">
                    <label> Ten Section Image_10 Upload</label>
                    <div><?php echo form_error('Ten_section_img_ten'); ?></div>
                    <input type="file" name="Ten_section_img_ten">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->Ten_section_img_ten != NULL) {
                      $src = $img_path . $info->Ten_section_img_ten;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Ten Section Tag_10</label>
                    <div><?php echo form_error('Ten_section_tag_ten'); ?></div>
                    <input type="text" class="form-control" name="Ten_section_tag_ten"
                      value="<?= set_value('Ten_section_tag_ten', $info->Ten_section_tag_ten) ?>">
                  </div>
                  <div class="form-group">
                    <label> Ten Section Image_11 Upload</label>
                    <div><?php echo form_error('Ten_section_img_eleven'); ?></div>
                    <input type="file" name="Ten_section_img_eleven">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->Ten_section_img_eleven != NULL) {
                      $src = $img_path . $info->Ten_section_img_eleven;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Ten Section Tag_11</label>
                    <div><?php echo form_error('Ten_section_tag_eleven'); ?></div>
                    <input type="text" class="form-control" name="Ten_section_tag_eleven"
                      value="<?= set_value('Ten_section_tag_eleven', $info->Ten_section_tag_eleven) ?>">
                  </div>
                  <div class="form-group">
                    <label> Ten Section Image_12 Upload</label>
                    <div><?php echo form_error('Ten_section_img_twelve'); ?></div>
                    <input type="file" name="Ten_section_img_twelve">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->Ten_section_img_twelve != NULL) {
                      $src = $img_path . $info->Ten_section_img_twelve;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Ten Section Tag_12</label>
                    <div><?php echo form_error('Ten_section_tag_twelve'); ?></div>
                    <input type="text" class="form-control" name="Ten_section_tag_twelve"
                      value="<?= set_value('Ten_section_tag_twelve', $info->Ten_section_tag_twelve) ?>">
                  </div>
                </div>
              </div>

              <!-- Eleven Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-commenting-o"></i> Eleven Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Eleven Section Title</label>
                    <div><?php echo form_error('eleven_section_titel'); ?></div>
                    <input type="text" class="form-control" name="eleven_section_titel"
                      value="<?= set_value('eleven_section_titel', $info->eleven_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label>Eleven Section Para</label>
                    <div><?php echo form_error('eleven_section_para'); ?></div>
                    <input type="text" class="form-control" name="eleven_section_para"
                      value="<?= set_value('eleven_section_para', $info->eleven_section_para) ?>">
                  </div>
                </div>
              </div>

              <!-- Twelve section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-check-square-o"></i> Twelve section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Twelve Section Title</label>
                    <div><?php echo form_error('twelve_section_titel'); ?></div>
                    <input type="text" class="form-control" name="twelve_section_titel"
                      value="<?= set_value('twelve_section_titel', $info->twelve_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label>Twelve Section List_1</label>
                    <br><span>Add List</span>
                    <button onclick="addListItem(event, 'twelve_section_list_container_1', 'twelve_section_list_one')" class="btn btn-success btn-xs">
                      <i class="fa fa-plus"></i>
                    </button>
                    <div id="twelve_section_list_container_1">
                      <?php
                      $twelve_section_list_one = is_string($info->twelve_section_list_one) ? json_decode($info->twelve_section_list_one) : $info->twelve_section_list_one;
                      if (!empty($twelve_section_list_one)) {
                        foreach ($twelve_section_list_one as $item) {
                          echo '<div class="input-group mt-2"><input type="text" class="form-control" name="twelve_section_list_one[]" value="' . set_value('twelve_section_list_one[]', $item) . '"><span class="input-group-btn"><button class="btn btn-danger btn-flat" type="button" onclick="removeListItem(event)"><i class="fa fa-minus"></i></button></span></div>';
                        }
                      }
                      ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Twelve Section List_2</label>
                    <br><span>Add List</span>
                    <button onclick="addListItem(event, 'twelve_section_list_container_2', 'twelve_section_list_two')" class="btn btn-success btn-xs">
                      <i class="fa fa-plus"></i>
                    </button>
                    <div id="twelve_section_list_container_2">
                      <?php
                      $twelve_section_list_two = is_string($info->twelve_section_list_two) ? json_decode($info->twelve_section_list_two) : $info->twelve_section_list_two;
                      if (!empty($twelve_section_list_two)) {
                        foreach ($twelve_section_list_two as $item) {
                          echo '<div class="input-group mt-2"><input type="text" class="form-control" name="twelve_section_list_two[]" value="' . set_value('twelve_section_list_two[]', $item) . '"><span class="input-group-btn"><button class="btn btn-danger btn-flat" type="button" onclick="removeListItem(event)"><i class="fa fa-minus"></i></button></span></div>';
                        }
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Thirteen Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-camera-retro"></i> Thirteen Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Thirteen Section Title</label>
                    <div><?php echo form_error('thirteen_section_titel'); ?></div>
                    <input type="text" class="form-control" name="thirteen_section_titel"
                      value="<?= set_value('thirteen_section_titel', $info->thirteen_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label> Thirteen Section Image_1 Upload</label>
                    <div><?php echo form_error('thirteen_section_img_one'); ?></div>
                    <input type="file" name="thirteen_section_img_one">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->thirteen_section_img_one != NULL) {
                      $src = $img_path . $info->thirteen_section_img_one;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Thirteen Section Tag_1</label>
                    <div><?php echo form_error('thirteen_section_tag_one'); ?></div>
                    <input type="text" class="form-control" name="thirteen_section_tag_one"
                      value="<?= set_value('thirteen_section_tag_one', $info->thirteen_section_tag_one) ?>">
                  </div>
                  <div class="form-group">
                    <label> Thirteen Section Image_2 Upload</label>
                    <div><?php echo form_error('thirteen_section_img_two'); ?></div>
                    <input type="file" name="thirteen_section_img_two">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->thirteen_section_img_two != NULL) {
                      $src = $img_path . $info->thirteen_section_img_two;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Thirteen Section Tag_2</label>
                    <div><?php echo form_error('thirteen_section_tag_two'); ?></div>
                    <input type="text" class="form-control" name="thirteen_section_tag_two"
                      value="<?= set_value('thirteen_section_tag_two', $info->thirteen_section_tag_two) ?>">
                  </div>
                  <div class="form-group">
                    <label> Thirteen Section Image_3 Upload</label>
                    <div><?php echo form_error('thirteen_section_img_three'); ?></div>
                    <input type="file" name="thirteen_section_img_three">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->thirteen_section_img_three != NULL) {
                      $src = $img_path . $info->thirteen_section_img_three;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Thirteen Section Tag_3</label>
                    <div><?php echo form_error('thirteen_section_tag_three'); ?></div>
                    <input type="text" class="form-control" name="thirteen_section_tag_three"
                      value="<?= set_value('thirteen_section_tag_three', $info->thirteen_section_tag_three) ?>">
                  </div>
                  <div class="form-group">
                    <label> Thirteen Section Image_4 Upload</label>
                    <div><?php echo form_error('thirteen_section_img_four'); ?></div>
                    <input type="file" name="thirteen_section_img_four">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->thirteen_section_img_four != NULL) {
                      $src = $img_path . $info->thirteen_section_img_four;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Thirteen Section Tag_4</label>
                    <div><?php echo form_error('thirteen_section_tag_four'); ?></div>
                    <input type="text" class="form-control" name="thirteen_section_tag_four"
                      value="<?= set_value('thirteen_section_tag_four', $info->thirteen_section_tag_four) ?>">
                  </div>
                  <div class="form-group">
                    <label> Thirteen Section Image_5 Upload</label>
                    <div><?php echo form_error('thirteen_section_img_five'); ?></div>
                    <input type="file" name="thirteen_section_img_five">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->thirteen_section_img_five != NULL) {
                      $src = $img_path . $info->thirteen_section_img_five;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Thirteen Section Tag_5</label>
                    <div><?php echo form_error('thirteen_section_tag_five'); ?></div>
                    <input type="text" class="form-control" name="thirteen_section_tag_five"
                      value="<?= set_value('thirteen_section_tag_five', $info->thirteen_section_tag_five) ?>">
                  </div>
                  <div class="form-group">
                    <label> Thirteen Section Image_6 Upload</label>
                    <div><?php echo form_error('thirteen_section_img_six'); ?></div>
                    <input type="file" name="thirteen_section_img_six">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->thirteen_section_img_six != NULL) {
                      $src = $img_path . $info->thirteen_section_img_six;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Thirteen Section Tag_6</label>
                    <div><?php echo form_error('thirteen_section_tag_six'); ?></div>
                    <input type="text" class="form-control" name="thirteen_section_tag_six"
                      value="<?= set_value('thirteen_section_tag_six', $info->thirteen_section_tag_six) ?>">
                  </div>
                  <div class="form-group">
                    <label> Thirteen Section Image_7 Upload</label>
                    <div><?php echo form_error('thirteen_section_img_seven'); ?></div>
                    <input type="file" name="thirteen_section_img_seven">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->thirteen_section_img_seven != NULL) {
                      $src = $img_path . $info->thirteen_section_img_seven;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Thirteen Section Tag_7</label>
                    <div><?php echo form_error('thirteen_section_tag_seven'); ?></div>
                    <input type="text" class="form-control" name="thirteen_section_tag_seven"
                      value="<?= set_value('thirteen_section_tag_seven', $info->thirteen_section_tag_seven) ?>">
                  </div>
                  <div class="form-group">
                    <label> Thirteen Section Image_8 Upload</label>
                    <div><?php echo form_error('thirteen_section_img_eight'); ?></div>
                    <input type="file" name="thirteen_section_img_eight">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->thirteen_section_img_eight != NULL) {
                      $src = $img_path . $info->thirteen_section_img_eight;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Thirteen Section Tag_8</label>
                    <div><?php echo form_error('thirteen_section_tag_eight'); ?></div>
                    <input type="text" class="form-control" name="thirteen_section_tag_eight"
                      value="<?= set_value('thirteen_section_tag_eight', $info->thirteen_section_tag_eight) ?>">
                  </div>
                  <div class="form-group">
                    <label> Thirteen Section Image_9 Upload</label>
                    <div><?php echo form_error('thirteen_section_img_nine'); ?></div>
                    <input type="file" name="thirteen_section_img_nine">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->thirteen_section_img_nine != NULL) {
                      $src = $img_path . $info->thirteen_section_img_nine;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Thirteen Section Tag_9</label>
                    <div><?php echo form_error('thirteen_section_tag_nine'); ?></div>
                    <input type="text" class="form-control" name="thirteen_section_tag_nine"
                      value="<?= set_value('thirteen_section_tag_nine', $info->thirteen_section_tag_nine) ?>">
                  </div>
                  <div class="form-group">
                    <label> Thirteen Section Image_10 Upload</label>
                    <div><?php echo form_error('thirteen_section_img_ten'); ?></div>
                    <input type="file" name="thirteen_section_img_ten">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->thirteen_section_img_ten != NULL) {
                      $src = $img_path . $info->thirteen_section_img_ten;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Thirteen Section Tag_10</label>
                    <div><?php echo form_error('thirteen_section_tag_ten'); ?></div>
                    <input type="text" class="form-control" name="thirteen_section_tag_ten"
                      value="<?= set_value('thirteen_section_tag_ten', $info->thirteen_section_tag_ten) ?>">
                  </div>
                  <div class="form-group">
                    <label> Thirteen Section Image_11 Upload</label>
                    <div><?php echo form_error('thirteen_section_img_eleven'); ?></div>
                    <input type="file" name="thirteen_section_img_eleven">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->thirteen_section_img_eleven != NULL) {
                      $src = $img_path . $info->thirteen_section_img_eleven;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Thirteen Section Tag_11</label>
                    <div><?php echo form_error('thirteen_section_tag_eleven'); ?></div>
                    <input type="text" class="form-control" name="thirteen_section_tag_eleven"
                      value="<?= set_value('thirteen_section_tag_eleven', $info->thirteen_section_tag_eleven) ?>">
                  </div>
                  <div class="form-group">
                    <label> Thirteen Section Image_12 Upload</label>
                    <div><?php echo form_error('thirteen_section_img_twelve'); ?></div>
                    <input type="file" name="thirteen_section_img_twelve">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->thirteen_section_img_twelve != NULL) {
                      $src = $img_path . $info->thirteen_section_img_twelve;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Thirteen Section Tag_12</label>
                    <div><?php echo form_error('thirteen_section_tag_twelve'); ?></div>
                    <input type="text" class="form-control" name="thirteen_section_tag_twelve"
                      value="<?= set_value('thirteen_section_tag_twelve', $info->thirteen_section_tag_twelve) ?>">
                  </div>
                </div>
              </div>

              <!-- Fourteen section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-window-maximize"></i> Fourteen section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Fourteen Section Title</label>
                    <div><?php echo form_error('fourteen_section_titel'); ?></div>
                    <input type="text" class="form-control" name="fourteen_section_titel"
                      value="<?= set_value('fourteen_section_titel', $info->fourteen_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label> Fourteen Section Image Upload_1</label>
                    <div><?php echo form_error('fourteen_section_img_one'); ?></div>
                    <input type="file" name="fourteen_section_img_one">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->fourteen_section_img_one != NULL) {
                      $src = $img_path . $info->fourteen_section_img_one;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Fourteen Section Heading_1</label>
                    <div><?php echo form_error('fourteen_section_heading_one'); ?></div>
                    <input type="text" class="form-control" name="fourteen_section_heading_one"
                      value="<?= set_value('fourteen_section_heading_one', $info->fourteen_section_heading_one) ?>">
                  </div>
                  <div class="form-group">
                    <label>Fourteen Section Para_1</label>
                    <div><?php echo form_error('fourteen_section_para_one'); ?></div>
                    <input type="text" class="form-control" name="fourteen_section_para_one"
                      value="<?= set_value('fourteen_section_para_one', $info->fourteen_section_para_one) ?>">
                  </div>
                  <div class="form-group">
                    <label> Fourteen Section Image Upload</label>
                    <div><?php echo form_error('fourteen_section_img_two'); ?></div>
                    <input type="file" name="fourteen_section_img_two">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->fourteen_section_img_two != NULL) {
                      $src = $img_path . $info->fourteen_section_img_two;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Fourteen Section Heading_2</label>
                    <div><?php echo form_error('fourteen_section_heading_two'); ?></div>
                    <input type="text" class="form-control" name="fourteen_section_heading_two"
                      value="<?= set_value('fourteen_section_heading_two', $info->fourteen_section_heading_two) ?>">
                  </div>
                  <div class="form-group">
                    <label>Fourteen Section Para_2</label>
                    <div><?php echo form_error('fourteen_section_para_two'); ?></div>
                    <input type="text" class="form-control" name="fourteen_section_para_two"
                      value="<?= set_value('fourteen_section_para_two', $info->fourteen_section_para_two) ?>">
                  </div>
                  <div class="form-group">
                    <label> Fourteen Section Image Upload_3</label>
                    <div><?php echo form_error('fourteen_section_img_three'); ?></div>
                    <input type="file" name="fourteen_section_img_three">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->fourteen_section_img_three != NULL) {
                      $src = $img_path . $info->fourteen_section_img_three;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Fourteen Section Heading_3</label>
                    <div><?php echo form_error('fourteen_section_heading_three'); ?></div>
                    <input type="text" class="form-control" name="fourteen_section_heading_three"
                      value="<?= set_value('fourteen_section_heading_three', $info->fourteen_section_heading_three) ?>">
                  </div>
                  <div class="form-group">
                    <label>Fourteen Section Para_3</label>
                    <div><?php echo form_error('fourteen_section_para_three'); ?></div>
                    <input type="text" class="form-control" name="fourteen_section_para_three"
                      value="<?= set_value('fourteen_section_para_three', $info->fourteen_section_para_three) ?>">
                  </div>
                  <div class="form-group">
                    <label> Fourteen Section Image Upload_4</label>
                    <div><?php echo form_error('fourteen_section_img_four'); ?></div>
                    <input type="file" name="fourteen_section_img_four">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->fourteen_section_img_four != NULL) {
                      $src = $img_path . $info->fourteen_section_img_four;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Fourteen Section Heading_4</label>
                    <div><?php echo form_error('fourteen_section_heading_four'); ?></div>
                    <input type="text" class="form-control" name="fourteen_section_heading_four"
                      value="<?= set_value('fourteen_section_heading_four', $info->fourteen_section_heading_four) ?>">
                  </div>
                  <div class="form-group">
                    <label>Fourteen Section Para_4</label>
                    <div><?php echo form_error('fourteen_section_para_four'); ?></div>
                    <input type="text" class="form-control" name="fourteen_section_para_four"
                      value="<?= set_value('fourteen_section_para_four', $info->fourteen_section_para_four) ?>">
                  </div>
                </div>
              </div>

              <!-- Fifteen Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-photo"></i> Fifteen Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Fifteen Section Title</label>
                    <div><?php echo form_error('fifteen_section_titel'); ?></div>
                    <input type="text" class="form-control" name="fifteen_section_titel"
                      value="<?= set_value('fifteen_section_titel', $info->fifteen_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label> Fifteen Section Image_1 Upload</label>
                    <div><?php echo form_error('fifteen_section_img_one'); ?></div>
                    <input type="file" name="fifteen_section_img_one">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximum file size 1 MB.</p>
                    <?php
                    if ($info->fifteen_section_img_one != NULL) {
                      $src = $img_path . $info->fifteen_section_img_one;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Fifteen Section Image_2 Upload</label>
                    <div><?php echo form_error('fifteen_section_img_two'); ?></div>
                    <input type="file" name="fifteen_section_img_two">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximum file size 1 MB.</p>
                    <?php
                    if ($info->fifteen_section_img_two != NULL) {
                      $src = $img_path . $info->fifteen_section_img_two;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Fifteen Section Image_3 Upload</label>
                    <div><?php echo form_error('fifteen_section_img_three'); ?></div>
                    <input type="file" name="fifteen_section_img_three">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximum file size 1 MB.</p>
                    <?php
                    if ($info->fifteen_section_img_three != NULL) {
                      $src = $img_path . $info->fifteen_section_img_three;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                </div>
              </div>

              <!-- Sixteen Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-users"></i> Sixteen Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Sixteen Section Title</label>
                    <div><?php echo form_error('sixteen_section_titel'); ?></div>
                    <input type="text" class="form-control" name="sixteen_section_titel"
                      value="<?= set_value('sixteen_section_titel', $info->sixteen_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label> Sixteen Section Image_1 Upload</label>
                    <div><?php echo form_error('sixteen_section_img_one'); ?></div>
                    <input type="file" name="sixteen_section_img_one">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximum file size 1 MB.</p>
                    <?php
                    if ($info->sixteen_section_img_one != NULL) {
                      $src = $img_path . $info->sixteen_section_img_one;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Sixteen Section Image_2 Upload</label>
                    <div><?php echo form_error('sixteen_section_img_two'); ?></div>
                    <input type="file" name="sixteen_section_img_two">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximum file size 1 MB.</p>
                    <?php
                    if ($info->sixteen_section_img_two != NULL) {
                      $src = $img_path . $info->sixteen_section_img_two;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Sixteen Section Image_3 Upload</label>
                    <div><?php echo form_error('sixteen_section_img_three'); ?></div>
                    <input type="file" name="sixteen_section_img_three">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximum file size 1 MB.</p>
                    <?php
                    if ($info->sixteen_section_img_three != NULL) {
                      $src = $img_path . $info->sixteen_section_img_three;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label>Sixteen Section Heading_1</label>
                    <div><?php echo form_error('sixteen_section_heading_one'); ?></div>
                    <input type="text" class="form-control" name="sixteen_section_heading_one"
                      value="<?= set_value('sixteen_section_heading_one', $info->sixteen_section_heading_one) ?>">
                  </div>
                  <div class="form-group">
                    <label>Sixteen Section Para_1</label>
                    <div><?php echo form_error('sixteen_section_para_one'); ?></div>
                    <input type="text" class="form-control" name="sixteen_section_para_one"
                      value="<?= set_value('sixteen_section_para_one', $info->sixteen_section_para_one) ?>">
                  </div>
                  <div class="form-group">
                    <label>Sixteen Section Heading_2</label>
                    <div><?php echo form_error('sixteen_section_heading_two'); ?></div>
                    <input type="text" class="form-control" name="sixteen_section_heading_two"
                      value="<?= set_value('sixteen_section_heading_two', $info->sixteen_section_heading_two) ?>">
                  </div>
                  <div class="form-group">
                    <label>Sixteen Section Para_2</label>
                    <div><?php echo form_error('sixteen_section_para_two'); ?></div>
                    <input type="text" class="form-control" name="sixteen_section_para_two"
                      value="<?= set_value('sixteen_section_para_two', $info->sixteen_section_para_two) ?>">
                  </div>
                  <div class="form-group">
                    <label>Sixteen Section Heading_3</label>
                    <div><?php echo form_error('sixteen_section_heading_three'); ?></div>
                    <input type="text" class="form-control" name="sixteen_section_heading_three"
                      value="<?= set_value('sixteen_section_heading_three', $info->sixteen_section_heading_three) ?>">
                  </div>
                  <div class="form-group">
                    <label>Sixteen Section Para_3</label>
                    <div><?php echo form_error('sixteen_section_para_three'); ?></div>
                    <input type="text" class="form-control" name="sixteen_section_para_three"
                      value="<?= set_value('sixteen_section_para_three', $info->sixteen_section_para_three) ?>">
                  </div>
                  <div class="form-group">
                    <label>Sixteen Section Role_1</label>
                    <div><?php echo form_error('sixteen_section_role_one'); ?></div>
                    <input type="text" class="form-control" name="sixteen_section_role_one"
                      value="<?= set_value('sixteen_section_role_one', $info->sixteen_section_role_one) ?>">
                  </div>
                  <div class="form-group">
                    <label>Sixteen Section Role_2</label>
                    <div><?php echo form_error('sixteen_section_role_two'); ?></div>
                    <input type="text" class="form-control" name="sixteen_section_role_two"
                      value="<?= set_value('sixteen_section_role_two', $info->sixteen_section_role_two) ?>">
                  </div>
                  <div class="form-group">
                    <label>Sixteen Section Role_3</label>
                    <div><?php echo form_error('sixteen_section_role_three'); ?></div>
                    <input type="text" class="form-control" name="sixteen_section_role_three"
                      value="<?= set_value('sixteen_section_role_three', $info->sixteen_section_role_three) ?>">
                  </div>
                </div>
              </div>

              <!-- Seventeen Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-question-circle"></i> Seventeen Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Seventeen Section Title</label>
                    <div><?php echo form_error('seventeen_section_titel'); ?></div>
                    <input type="text" class="form-control" name="seventeen_section_titel"
                      value="<?= set_value('seventeen_section_titel', $info->seventeen_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label>Seventeen Section Question_1</label>
                    <div><?php echo form_error('seventeen_section_question_one'); ?></div>
                    <input type="text" class="form-control" name="seventeen_section_question_one"
                      value="<?= set_value('seventeen_section_question_one', $info->seventeen_section_question_one) ?>">
                  </div>
                  <div class="form-group">
                    <label>Seventeen Section Question_2</label>
                    <div><?php echo form_error('seventeen_section_question_two'); ?></div>
                    <input type="text" class="form-control" name="seventeen_section_question_two"
                      value="<?= set_value('seventeen_section_question_two', $info->seventeen_section_question_two) ?>">
                  </div>
                  <div class="form-group">
                    <label>Seventeen Section Question_3</label>
                    <div><?php echo form_error('seventeen_section_question_three'); ?></div>
                    <input type="text" class="form-control" name="seventeen_section_question_three"
                      value="<?= set_value('seventeen_section_question_three', $info->seventeen_section_question_three) ?>">
                  </div>
                  <div class="form-group">
                    <label>Seventeen Section Question_4</label>
                    <div><?php echo form_error('seventeen_section_question_four'); ?></div>
                    <input type="text" class="form-control" name="seventeen_section_question_four"
                      value="<?= set_value('seventeen_section_question_four', $info->seventeen_section_question_four) ?>">
                  </div>
                  <div class="form-group">
                    <label>Seventeen Section Question_5</label>
                    <div><?php echo form_error('seventeen_section_question_five'); ?></div>
                    <input type="text" class="form-control" name="seventeen_section_question_five"
                      value="<?= set_value('seventeen_section_question_five', $info->seventeen_section_question_five) ?>">
                  </div>
                  <div class="form-group">
                    <label>Seventeen Section Question_6</label>
                    <div><?php echo form_error('seventeen_section_question_six'); ?></div>
                    <input type="text" class="form-control" name="seventeen_section_question_six"
                      value="<?= set_value('seventeen_section_question_six', $info->seventeen_section_question_six) ?>">
                  </div>
                  <div class="form-group">
                    <label>Seventeen Section Answer_1</label>
                    <div><?php echo form_error('seventeen_section_answer_one'); ?></div>
                    <input type="text" class="form-control" name="seventeen_section_answer_one"
                      value="<?= set_value('seventeen_section_answer_one', $info->seventeen_section_answer_one) ?>">
                  </div>
                  <div class="form-group">
                    <label>Seventeen Section Answer_2</label>
                    <div><?php echo form_error('seventeen_section_answer_two'); ?></div>
                    <input type="text" class="form-control" name="seventeen_section_answer_two"
                      value="<?= set_value('seventeen_section_answer_two', $info->seventeen_section_answer_two) ?>">
                  </div>
                  <div class="form-group">
                    <label>Seventeen Section Answer_3</label>
                    <div><?php echo form_error('seventeen_section_answer_three'); ?></div>
                    <input type="text" class="form-control" name="seventeen_section_answer_three"
                      value="<?= set_value('seventeen_section_answer_three', $info->seventeen_section_answer_three) ?>">
                  </div>
                  <div class="form-group">
                    <label>Seventeen Section Answer_4</label>
                    <div><?php echo form_error('seventeen_section_answer_four'); ?></div>
                    <input type="text" class="form-control" name="seventeen_section_answer_four"
                      value="<?= set_value('seventeen_section_answer_four', $info->seventeen_section_answer_four) ?>">
                  </div>
                  <div class="form-group">
                    <label>Seventeen Section Answer_5</label>
                    <div><?php echo form_error('seventeen_section_answer_five'); ?></div>
                    <input type="text" class="form-control" name="seventeen_section_answer_five"
                      value="<?= set_value('seventeen_section_answer_five', $info->seventeen_section_answer_five) ?>">
                  </div>
                  <div class="form-group">
                    <label>Seventeen Section Answer_6</label>
                    <div><?php echo form_error('seventeen_section_answer_six'); ?></div>
                    <input type="text" class="form-control" name="seventeen_section_answer_six"
                      value="<?= set_value('seventeen_section_answer_six', $info->seventeen_section_answer_six) ?>">
                  </div>
                </div>
              </div>

              <!-- Eighteen Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-info-circle"></i> Eighteen Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Eighteen Section Title</label>
                    <div><?php echo form_error('eighteen_section_titel'); ?></div>
                    <input type="text" class="form-control" name="eighteen_section_titel"
                      value="<?= set_value('eighteen_section_titel', $info->eighteen_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label>Eighteen Section Para</label>
                    <div><?php echo form_error('eighteen_section_para'); ?></div>
                    <input type="text" class="form-control" name="eighteen_section_para"
                      value="<?= set_value('eighteen_section_para', $info->eighteen_section_para) ?>">
                  </div>
                </div>
              </div>

              <!-- Nineteen Section -->
              <div class="box box-info solid collapsed-box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-cubes"></i> Nineteen Section</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label>Nineteen Section Title</label>
                    <div><?php echo form_error('nineteen_section_titel'); ?></div>
                    <input type="text" class="form-control" name="nineteen_section_titel"
                      value="<?= set_value('nineteen_section_titel', $info->nineteen_section_titel) ?>">
                  </div>
                  <div class="form-group">
                    <label> Nineteen Section Image_1 Upload</label>
                    <div><?php echo form_error('ninteen_section_img_one'); ?></div>
                    <input type="file" name="ninteen_section_img_one">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->ninteen_section_img_one != NULL) {
                      $src = $img_path . $info->ninteen_section_img_one;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Nineteen Section Image_2 Upload</label>
                    <div><?php echo form_error('ninteen_section_img_two'); ?></div>
                    <input type="file" name="ninteen_section_img_two">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->ninteen_section_img_two != NULL) {
                      $src = $img_path . $info->ninteen_section_img_two;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Nineteen Section Image_3 Upload</label>
                    <div><?php echo form_error('ninteen_section_img_three'); ?></div>
                    <input type="file" name="ninteen_section_img_three">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->ninteen_section_img_three != NULL) {
                      $src = $img_path . $info->ninteen_section_img_three;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Nineteen Section Image_4 Upload</label>
                    <div><?php echo form_error('ninteen_section_img_four'); ?></div>
                    <input type="file" name="ninteen_section_img_four">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->ninteen_section_img_four != NULL) {
                      $src = $img_path . $info->ninteen_section_img_four;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Nineteen Section Image_5 Upload</label>
                    <div><?php echo form_error('ninteen_section_img_five'); ?></div>
                    <input type="file" name="ninteen_section_img_five">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->ninteen_section_img_five != NULL) {
                      $src = $img_path . $info->ninteen_section_img_five;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Nineteen Section Image_6 Upload</label>
                    <div><?php echo form_error('ninteen_section_img_six'); ?></div>
                    <input type="file" name="ninteen_section_img_six">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->ninteen_section_img_six != NULL) {
                      $src = $img_path . $info->ninteen_section_img_six;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Nineteen Section Image_7 Upload</label>
                    <div><?php echo form_error('ninteen_section_img_seven'); ?></div>
                    <input type="file" name="ninteen_section_img_seven">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->ninteen_section_img_seven != NULL) {
                      $src = $img_path . $info->ninteen_section_img_seven;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Nineteen Section Image_8 Upload</label>
                    <div><?php echo form_error('ninteen_section_img_eight'); ?></div>
                    <input type="file" name="ninteen_section_img_eight">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->ninteen_section_img_eight != NULL) {
                      $src = $img_path . $info->ninteen_section_img_eight;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Nineteen Section Image_9 Upload</label>
                    <div><?php echo form_error('ninteen_section_img_nine'); ?></div>
                    <input type="file" name="ninteen_section_img_nine">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->ninteen_section_img_nine != NULL) {
                      $src = $img_path . $info->ninteen_section_img_nine;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                  <div class="form-group">
                    <label> Nineteen Section Image_10 Upload</label>
                    <div><?php echo form_error('ninteen_section_img_ten'); ?></div>
                    <input type="file" name="ninteen_section_img_ten">
                    <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                    <?php
                    if ($info->ninteen_section_img_ten != NULL) {
                      $src = $img_path . $info->ninteen_section_img_ten;
                      echo "<img src='$src' width='100'>";
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <?php //echo form_input($user_id); ?>
          <?php echo form_submit('submit', 'Save Update', "class='btn btn-primary pull-right'"); ?>
        </div>
        <?php echo form_close(); ?>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->

<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor.create(document.querySelector('#serviceEdit'))
    .then(editor => {
      window.editor = editor;
    })
    .catch(error => {
      console.error(error);
    });
</script>
<script>
  function removeListItem(event) {
    event.preventDefault();
    // Find the closest parent .input-group and remove it
    event.target.closest('.input-group').remove();
  }

  function addListItem(event, containerId, inputName) {
    event.preventDefault();
    const container = document.getElementById(containerId);
    if (container) {
      const newDiv = document.createElement('div');
      newDiv.className = 'input-group mt-2';
      newDiv.innerHTML = `
        <input type="text" class="form-control" name="${inputName}[]">
        <span class="input-group-btn">
          <button class="btn btn-danger btn-flat" type="button" onclick="removeListItem(event)"><i class="fa fa-minus"></i></button>
        </span>
      `;
      container.appendChild(newDiv);
    }
  }
</script>