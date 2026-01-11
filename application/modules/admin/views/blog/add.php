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
          <h3 class="box-title"><?=$meta_title; ?></h3>
          <a href="<?=base_url('admin/blog/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Event</a>          
        </div>        
        <?php echo form_open_multipart("admin/blog/add");?>
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
                <label>Event Title</label>
                <div><?php echo form_error('title'); ?></div>
                <input type="text" class="form-control" name="title" value="<?=set_value('title')?>">
              </div>                  

              <div class="form-group">
                <label>Details Description</label>
                <div><?php echo form_error('description'); ?></div>
                <textarea id="eventAdd" name="description" rows="10" cols="80"><?=set_value('description')?></textarea>
              </div>
            </div>

            <div class="col-md-5">
              <div class="form-group">
                    <label>Sort Order</label>
                    <div><?php echo form_error('sort_order'); ?></div>
                    <input type="text" class="form-control" name="sort_order" style="width: 105px;" value="<?=set_value('sort_order')?>">
              </div>
              <div class="form-group">
              <label>Post Date</label>
                <div><?php echo form_error('post_date'); ?></div>
                <input type="text" class="form-control" id="datepicker" name="post_date" value="<?=set_value('post_date', date('Y-m-d'))?>" placeholder="YYYY-MM-DD">
              </div>

                <!-- <div class="form-group">
                      <label class="form-label required">Display Home</label> <br>
                      <input type="radio" name="display_home" value="1" <?=set_value('display_home')=='1'?'checked':'checked';?>> Yes 
                      <input type="radio" name="display_home" value="0" <?=set_value('display_home')=='0'?'checked':'';?>> No
                    </div> -->

                    <div class="form-group">
                      <label>Image Upload</label>
                      <div><?php echo form_error('userfile'); ?></div>
                      <input type="file" name="userfile">
                      <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB. <br>Image size: Min Width: 750px Height:350px </p>
                    </div>

                    <div class="form-group">
                      <label>Meta Keywords</label>
                      <textarea class="form-control" rows="3" name="meta_keys" placeholder="keyword1, keyword2, keyword3"><?=set_value('meta_keys')?></textarea>
                    </div>

                    <div class="form-group">
                      <label>Meta Description</label>
                      <div><?php echo form_error('short_desc'); ?></div>
                      <textarea class="form-control" rows="3" name="short_desc" placeholder="Meta Description Maximum 255 character"><?=set_value('short_desc')?></textarea>
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

ClassicEditor.create(document.querySelector('#eventAdd'))
    .then(editor => {
        window.editor = editor;
    })
    .catch(error => {
        console.error(error);
    });
</script>