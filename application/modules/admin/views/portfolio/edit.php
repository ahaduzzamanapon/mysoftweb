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
          <a href="<?= base_url('admin/portfolio/all') ?>" class="btn btn-info btn-xs pull-right"
            style="margin-left: 15px;"> All Portfolio</a>
          <a href="<?= base_url('admin/portfolio/details/' . $info->id) ?>" class="btn btn-info btn-xs pull-right"
            style="margin-left: 15px;"> Details Portfolio</a>
          <a href="<?= base_url('admin/portfolio/add') ?>" class="btn btn-info btn-xs pull-right"> Add Portfolio</a>
        </div>
        <?php echo form_open_multipart("admin/portfolio/edit/" . $info->id); ?>
        <div class="box-body">
          <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
              <a class="close" data-dismiss="alert">&times;</a>
              <?php echo $this->session->flashdata('success');
              ; ?>
            </div>
          <?php endif; ?>

          <div class="row">
            <div class="col-md-7">
              <div class="form-group">
                <label>Portfolio Name</label>
                <div><?php echo form_error('name'); ?></div>
                <input type="text" class="form-control" name="name" value="<?= set_value('name', $info->name) ?>">
              </div>

              <div class="form-group">
                <label>URL</label>
                <div><?php echo form_error('url'); ?></div>
                <input type="text" class="form-control" name="url" value="<?= set_value('url', $info->url) ?>">
              </div>

              <div class="form-group">
                <label>Select Category</label>
                <div><?php echo form_error('category_id'); ?></div>
                <?php
                $more_attr = 'class="form-control"';
                echo form_dropdown('category_id', $category, set_value('category_id', $info->category_id), $more_attr);
                ?>
              </div>

              <div class="form-group">
                <label>Details Description</label>
                <div><?php echo form_error('description'); ?></div>
                <textarea id="portfolioEdit" class="form-control" name="description" rows="10"
                  cols="80"><?= set_value('description', $info->description) ?></textarea>
              </div>

              <div class="form-group">
                <label class="form-label required">Display Home</label> <br>
                <input type="radio" name="display_home" value="1" <?= set_value('display_home', $info->display_home) == '1' ? 'checked' : ''; ?>> Yes
                <input type="radio" name="display_home" value="0" <?= set_value('display_home', $info->display_home) == '0' ? 'checked' : ''; ?>> No
              </div>

              <div class="form-group">
                <label class="form-label required">Project Type</label> <br>
                <?php $p_type = isset($info->project_type) ? $info->project_type : 'web'; // Default to web ?>
                <input type="radio" name="project_type" value="web" <?= set_value('project_type', $p_type) == 'web' ? 'checked' : ''; ?> onclick="toggleType('web')"> Web
                <input type="radio" name="project_type" value="app" <?= set_value('project_type', $p_type) == 'app' ? 'checked' : ''; ?> onclick="toggleType('app')"> App
              </div>

              <div id="web_fields" style="display: <?= ($p_type == 'web') ? 'block' : 'none'; ?>;">
                <div class="form-group">
                  <label>Website Link</label>
                  <input type="text" class="form-control" name="web_link"
                    value="<?= set_value('web_link', isset($info->web_link) ? $info->web_link : '') ?>">
                </div>
              </div>

              <div id="app_fields" style="display: <?= ($p_type == 'app') ? 'block' : 'none'; ?>;">
                <div class="form-group">
                  <label>App Store Link (iOS)</label>
                  <input type="text" class="form-control" name="app_store_link"
                    value="<?= set_value('app_store_link', isset($info->app_store_link) ? $info->app_store_link : '') ?>">
                </div>
                <div class="form-group">
                  <label>Play Store Link (Android)</label>
                  <input type="text" class="form-control" name="play_store_link"
                    value="<?= set_value('play_store_link', isset($info->play_store_link) ? $info->play_store_link : '') ?>">
                </div>
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
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB..Image Size width = 600px
                  and height = 400px.</p>
                <?php
                $img_path = base_url() . 'portfolio_img/';
                if ($info->image_file != NULL) {
                  $src = $img_path . $info->image_file;
                  echo "<img src='$src' height='150'>";
                }
                ?>

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

  ClassicEditor.create(document.querySelector('#portfolioEdit'))
    .then(editor => {
      window.editor = editor;
    })
    .catch(error => {
      console.error(error);
    });
</script>
<script>
  function toggleType(type) {
    if (type == 'web') {
      document.getElementById('web_fields').style.display = 'block';
      document.getElementById('app_fields').style.display = 'none';
    } else {
      document.getElementById('web_fields').style.display = 'none';
      document.getElementById('app_fields').style.display = 'block';
    }
  }
</script>