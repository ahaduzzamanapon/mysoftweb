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
          <h3 class="box-title">Add Product</h3>
          <a href="<?=base_url('admin/product/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Product</a>          
        </div>        
        <?php echo form_open_multipart("admin/product/add");?>
          <div class="box-body">
            <div id="infoMessage"><?php //echo $message;?></div>
            <div><?php //echo validation_errors(); ?></div>
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');;?>
                </div>
            <?php endif; ?>

            <div class="row">
              <div class="col-md-7">
                  <div class="form-group">
                    <label>Product Name</label>
                    <div><?php echo form_error('name'); ?></div>
                    <input type="text" class="form-control" name="name" value="<?=set_value('name')?>">
                  </div>

                  <div class="form-group">
                    <label>Overview</label>
                    <div><?php echo form_error('overview'); ?></div>
                    <textarea id="editor1" name="overview" rows="10" cols="80"><?=set_value('overview')?></textarea>
                  </div>

                  <div class="form-group">
                    <label>Modules</label>
                    <div><?php echo form_error('modules'); ?></div>
                    <textarea id="editor2" name="modules" rows="10" cols="80"><?=set_value('modules')?></textarea>
                  </div>

                  <div class="form-group">
                    <label>Features</label>
                    <div><?php echo form_error('features'); ?></div>
                    <textarea id="editor3" name="features" rows="10" cols="80"><?=set_value('features')?></textarea>
                  </div>

                  <div class="form-group">
                    <label>Technology</label>
                    <div><?php echo form_error('technology'); ?></div>
                    <textarea id="editor4" name="technology" rows="10" cols="80"><?=set_value('technology')?></textarea>
                  </div>

              </div>

              <div class="col-md-5">
                <div class="form-group">
                    <label>Fontawesome Icon</label>
                    <div><?php echo form_error('fa_icon'); ?></div>
                    <input type="text" class="form-control" name="fa_icon" value="<?=set_value('fa_icon')?>" placeholder="e.g. fa-camera-retro">
                </div>

                 <div class="form-group">
                    <label>User Client</label>
                    <div><?php echo form_error('user_client'); ?></div>
                     <select  class="form-control" name="user_client[]" multiple>
                        <option value=""> -- Select Client -- </option>
                        <?php foreach($client as $list) {
                          echo '<option value='.$list->id.'>'.$list->client_name.'</option>';
                        } ?>
                    </select>
                </div>

                <div class="form-group">
                      <label class="form-label required">Display Home</label> <br>
                      <input type="radio" name="display_home" value="1" <?=set_value('display_home')=='1'?'checked':'checked';?>> Yes 
                      <input type="radio" name="display_home" value="0" <?=set_value('display_home')=='0'?'checked':'';?>> No
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
                <div class="form-group">
                  <label>Short Description</label>
                  <div><?php echo form_error('short_desc'); ?></div>
                  <textarea class="form-control" rows="3" name="short_desc" placeholder="Short Description Maximum 255 character"><?=set_value('short_desc')?></textarea>
                </div>
                <div class="form-group">
                  <label>Demo Url</label>
                  <div><?php echo form_error('demo_url'); ?></div>
                  <textarea class="form-control" rows="3" name="demo_url" placeholder="Demo Url"><?=set_value('demo_url')?></textarea>
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
