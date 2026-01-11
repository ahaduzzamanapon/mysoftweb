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
                  <th>Datetime</th>
                  <th>Full Name</th>
                  <th>Phone Number</th>
                  <th>Email Address</th>
                  <th>Course</th>
                  <th>Skills</th>
                  <th>Gender</th>
                  <th>Pay Status</th>
                  <th width="50">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              if($results){
                $sl=0;
                foreach ($results as $row) { 
                  $sl++;
                  $gender = $row->gender == 'Male'?'Male':'Female';
                  $payment = $row->pay_status == '1'?'<span class="badge bg-red">Unpaid</span>':'<span class="badge bg-green">Paid</span>';
              ?>
              <tr>
                <td><?=$sl;?></td>
                <td><?=date('d M, y | h:s A', strtotime($row->date_time));?></td>
                <td><?=$row->full_name;?> </td>
                <td><?=$row->phone;?></td>
                <td><?=$row->email;?></td>
                <td><?=$row->title;?></td>
                <td><?=$row->my_skills;?></td>
                <td><span class="badge bg-yellow"><?=$gender;?></span></td>
                <td><?=$payment;?></td>
                <td> 
                  <div class="btn-group">
                      <button type="button" class="btn btn-success btn-xs">Action</button>
                      <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Edit</a></li>
                        <li><a href="#">Delete</a></li>
                      </ul>
                    </div>
                </td>
              </tr>
              <?php 
                } 
              }
              ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">                
          </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
