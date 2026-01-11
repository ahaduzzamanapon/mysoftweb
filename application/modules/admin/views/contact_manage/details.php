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
          <h3 class="box-title">Details Contact</h3>
          <a href="<?=base_url('admin/manage_contact/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Back</a>          
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
              <div class="col-md-12">
                <dl class="dl-horizontal">
                  <dt>Name</dt>
                    <dd><?=$info->name?></dd>
                  <dt>Email</dt>
                    <dd><?=$info->email?></dd>                    
                  <dt>Subject</dt>
                    <dd><?=$info->subject?></dd>
                  <dt>Details Message</dt>
                    <dd><?=$info->message?></dd>
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
