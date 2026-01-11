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
          <h3 class="box-title">Details Request</h3>
          <!-- <a href="<?=base_url('admin/Request/edit/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Edit Service</a>           -->
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
              <div class="col-md-7">
                <dl class="dl-horizontal">
                  <dt>Client Name : </dt>
                    <dd><?=$info->name?></dd>
                  <dt>Phone : </dt>
                    <dd><?=$info->phone?></dd>                    
                  <dt>Email : </dt>
                    <dd><?=$info->email?></dd>
                  <dt>Office Address : </dt>
                    <dd><?=$info->office_address?></dd>
                  <dt>Product : </dt>
                    <dd><?=$info->product_name?></dd>
                  <dt>Services : </dt>
                    <dd><?=$info->service_name?></dd>
                </dl>                 
              </div>

              <div class="col-md-5">
                <dl class="dl-horizontal">
                  <dt>Details :</dt>
                    <dd><?=$info->details?></dd>       
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
