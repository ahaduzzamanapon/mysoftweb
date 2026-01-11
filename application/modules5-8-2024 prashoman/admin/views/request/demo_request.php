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
          <h3 class="box-title"><?=$meta_title; ?> </h3>
        </div>        

          <div class="box-body">
            <div id="infoMessage"><?php //echo $message;?></div>            
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');?>
                </div>
            <?php endif; ?>
            <table id="example1" class="table table-bordered table-striped table-responsive">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Company Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Customer Say</th>
                  <th>Created</th>
                  <th>Generate Token</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                foreach ($demo_request as $drow):
              ?>
              <tr>
                <td><?=$drow->id; ?></td>
                <td><?php echo htmlspecialchars($drow->name,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($drow->company,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($drow->email,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($drow->phone,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($drow->customer_say,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo date('d-m-Y H:i:s', strtotime($drow->created_at));?></td>
                <td><a class="btn btn-primary btn-sm" href="<?= $drow->demo_url ?>">Generate</a></td>              
              </tr>
              <?php endforeach;?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">  </div>
      </div> <!-- /.box -->
    </div>
  </div> <!-- /.row -->

</section> <!-- /.content -->
