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
          <h3 class="box-title">Add Client</h3>
          <a href="<?=base_url('admin/client/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Client</a>          
        </div>        
        <?php echo form_open_multipart("admin/client/add");?>
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
                    <label>Client Name</label>
                    <div><?php echo form_error('client_name'); ?></div>
                    <input type="text" class="form-control" name="client_name" value="<?=set_value('client_name')?>">
                  </div>

                  <div class="form-group">
                    <label>Project Name</label>
                    <div><?php echo form_error('project_name'); ?></div>
                    <input type="text" class="form-control" name="project_name" value="<?=set_value('project_name')?>">
                  </div>

                  <div class="form-group">
                    <label>Sort Order</label>
                    <div><?php echo form_error('sort_order'); ?></div>
                    <input type="text" class="form-control" name="sort_order" style="width: 105px;" value="<?=set_value('sort_order')?>">
                  </div>

                  <div class="form-group">
                    <label>Location</label>
                    <div><?php echo form_error('location'); ?></div>
                    <input type="text" class="form-control" name="location" value="<?=set_value('location')?>">
                  </div>
              </div>

              <div class="col-md-5">
                <div class="form-group">
                    <label>Client Type</label>
                    <div><?php echo form_error('client_type'); ?></div>
                    <?php
                      $more_attr = 'class="form-control"';
                      echo form_dropdown('client_type', $types, set_value('client_type'), $more_attr);
                    ?>
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
                  <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.Image width=132px and height=60px</p>
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
