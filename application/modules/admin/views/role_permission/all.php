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
          <a href="<?=base_url('admin/Role_Permission/add')?>" class="btn btn-info btn-xs pull-right"> Add Role</a>          
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
                  <th>Description</th>
                  <th>Permission</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if($results): ?>
                  <?php $i = 1; foreach($results as $data): ?>
                    <tr>
                      <td><?=$i++;?></td>
                      <td><?=$data->name;?></td>
                      <td><?=$data->description;?></td>
                      
                      <td>
                        
                          <?php
                          $permission_data = json_decode($data->permission);
                          if (is_array($permission_data) && count($permission_data) > 0) {
                            foreach ($permission_data as $p_data) {
                              echo '<span class="badge badge-dark"  style=" margin: 4px;">' . $p_data->name . '</span>';
                            }
                          } else {
                            echo 'No permission found';
                          }
                          ?>
                        
                      </td>
                     
                      
                     <td>
                     <div class="btn-group">
                      <button type="button" class="btn btn-success btn-xs">Action</button>
                      <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                        <ul class="dropdown-menu" role="menu">
                          
                          <li><a href="<?=base_url('admin/Role_Permission/edit/'.$data->id)?>">Edit</a></li>
                          <li><a href="<?=base_url('admin/Role_Permission/delete/'.$data->id)?>" onclick="return confirm('Are you sure you want to delete this service?');">Delete</a></li>
                        </ul>
                    </div>
                     </td>
                    </tr>
                  <?php endforeach; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="9" class="text-danger text-center">No data found</td>
                  </tr>
                <?php endif; ?>
              
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
