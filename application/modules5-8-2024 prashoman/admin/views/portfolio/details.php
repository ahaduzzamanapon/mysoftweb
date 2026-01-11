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
          <h3 class="box-title">Details Protfolio</h3>
          <a href="<?=base_url('admin/portfolio/edit/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Edit Protfolio</a>          
        </div>        
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
              <div class="col-md-5">
                <dl class="dl-horizontal">
                  <dt>Portfolio Name</dt>
                    <dd><?=$info->name?></dd>
                  <dt>URL</dt>
                    <dd><?=$info->url?></dd>                    
                  <dt>Select Category</dt>
                    <dd><?=$info->cat_name?></dd>
                  
                </dl>                 
              </div>

              <div class="col-md-7">
                <dl class="dl-horizontal">
                  <dt>Details Description</dt>
                    <dd><?=$info->description?></dd>
                  <dt>Display Home Page</dt>
                    <dd><?php 
                      $display_home = $info->display_home==1?'<span class="pull-left badge bg-green">Yes</span>':'<span class="badge bg-yellow">No</span>';
                      echo  $display_home;?></dd>
                  <dt>Stauts</dt>
                    <dd><?php
                      $status = $info->status==1?'<span class="pull-left badge bg-green">Enable</span>':'<span class="badge bg-yellow">Disable</span>';
                      echo $status;?></dd>

                  
                    
                  <dt>Image</dt>
                    <dd>
                      <?php 
                       $img_path = base_url().'portfolio_img/';
                      // $img_path = base_url().'service_img/';
                      if($info->image_file != NULL){
                              $src= $img_path.$info->image_file;
                              echo "<img src='$src' height='100'>";
                          }
                      ?>
                    </dd>                 
                </dl>

              </div>
            </div>
          </div>
          <!-- /.box-body -->
        <?php echo form_close();?>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
