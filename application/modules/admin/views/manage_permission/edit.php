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
          <a href="<?=base_url('admin/manage_permission/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Permission</a>

          <a href="<?=base_url('admin/manage_permission/add')?>" class="btn btn-info btn-xs pull-right"> Add Permission</a> 
        </div>        
        <?php echo form_open_multipart("admin/manage_permission/edit/".$info->id);?>
          <div class="box-body">            
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');;?>
                </div>
            <?php endif; ?>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label> Name</label>
                  <div><?php echo form_error('name'); ?></div>
                  <input type="text" class="form-control" name="name" 
                  value="<?=set_value('name', $info->name)?>">
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
