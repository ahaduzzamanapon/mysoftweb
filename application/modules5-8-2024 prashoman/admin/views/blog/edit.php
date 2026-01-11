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
          <h3 class="box-title"><?=$meta_title?></h3>
          <a href="<?=base_url('admin/blog/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Event</a>
          <a href="<?=base_url('admin/blog/details/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Details Event</a>
          <a href="<?=base_url('admin/blog/add')?>" class="btn btn-info btn-xs pull-right"> Add Event</a> 
        </div>        
        <?php echo form_open_multipart("admin/blog/edit/".$info->id);?>
        <div class="box-body">            
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
                <input type="text" class="form-control" name="title" value="<?=set_value('title', $info->title)?>">
              </div>     

              <div class="form-group">
                <label>Event URL</label>
                <div><?php echo form_error('title_slug'); ?></div>
                <input type="text" class="form-control" name="title_slug" value="<?=set_value('title_slug', $info->slug)?>">
              </div>              

              <div class="form-group">
                <label>Details Description</label>
                <div><?php echo form_error('description'); ?></div>
                <textarea id="editor1" name="description" rows="10" cols="80"><?=set_value('description', $info->description)?></textarea>
              </div>
            </div>

            <div class="col-md-5">
            
            <div class="form-group">
                <label>Sort Order</label>
                <div><?php echo form_error('sort_order'); ?></div>
                <input type="text" class="form-control"  name="sort_order" value="<?=set_value('sort_order', $info->sort_order)?>" style="width: 105px;">
              </div>
              <div class="form-group">
                <label>Post Date</label>
                <div><?php echo form_error('post_date'); ?></div>
                <input type="text" class="form-control" id="datepicker" name="post_date" value="<?=set_value('post_date', $info->post_date)?>" placeholder="YYYY-MM-DD">
              </div>

              <div class="form-group">
                <label>Meta Keywords</label>
                <textarea class="form-control" rows="3" name="meta_keys" placeholder="tag1, tag2, tag3, tag4, tag5"><?=set_value('meta_keys', $info->meta_keys)?></textarea>
              </div>       

              <div class="form-group">
                <label>Meta Description</label>
                <div><?php echo form_error('short_desc'); ?></div>
                <textarea class="form-control" rows="3" name="short_desc" placeholder="Meta Description Maximum 255 character"><?=set_value('short_desc', $info->short_desc)?></textarea>
              </div>         

              <div class="form-group">
                <label class="form-label required">Status</label> <br>
                <input type="radio" name="status" value="1" <?=set_value('status', $info->status)=='1'?'checked':'';?>> Yes 
                <input type="radio" name="status" value="0" <?=set_value('status', $info->status)=='0'?'checked':'';?>> No
              </div>

              <div class="form-group">
                <label class="form-label required">Popular</label> <br>
                <input type="radio" name="popular" value="1" <?=set_value('popular', $info->popular)=='1'?'checked':'';?>> Yes 
                <input type="radio" name="popular" value="0" <?=set_value('popular', $info->popular)=='0'?'checked':'';?>> No
              </div>

              <div class="form-group">
                <label>Image Upload</label>
                <div><?php echo form_error('userfile'); ?></div>
                <input type="file" name="userfile">                  
                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.<br>Image size: Min Width: 750px Height:350px</p>
                <?php 
                $img_path = base_url().'blog_img/';
                if($info->image_file != NULL){
                  $src= $img_path.$info->image_file;
                  echo "<img src='$src' width='200'>";
                }
                ?>

              </div>

            </div>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">    
          <?php //echo form_input($user_id);?>        
          <?php echo form_submit('submit', 'Save Update', "class='btn btn-primary pull-right'"); ?>
        </div>
        <?php echo form_close();?>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
