
<style>
    .per_div {
      padding: 6px 10px;
      box-shadow: 0px 0px 4px 2px #bebebe;
      border-radius: 8px;
      display: flex;
      align-items: center;
      flex-direction: row;
      gap: 7px;
    }
    .per_div label {
        margin: 0;
    }
    .per_div input {
        margin: 0;
    }
    .per_div input[type="checkbox"] {
        width: 20px;
        height: 20px;
        cursor: pointer;

    }
    .per_div:hover {
        background-color: #f9f9f9;
        transition: 0.3s;
        transform: scale(1.02);
    }
</style>


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
          <!-- <a href="<?=base_url('admin/manage_permission/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Add Role</a>           -->
          <a href="<?=base_url('admin/Role_Permission/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Role</a>          
        </div>        
        <?php echo form_open_multipart("admin/Role_Permission/edit/". $info->id);?>
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
                  <div class="form-group">
                    <label>Role Name</label>
                    <div><?php echo form_error('name'); ?></div>
                    <input type="text" class="form-control" name="name" value="<?=set_value('name', $info->name)?>">
                  </div>
                  <div class="form-group">
                    <label>Role Description</label>
                    <div><?php echo form_error('name'); ?></div>
                    <input type="text" class="form-control" name="description" value="<?=set_value('description', $info->description)?>"">
                  </div>
                  <div class="form-group" style="display: flex;flex-direction: column;">
                  
                    <label>Permission</label>
                    <div><?php echo form_error('name'); ?></div>
                    <div style="display: flex;align-items: center;border: 1px solid #d2d6de;border-radius: 8px;padding: 14px;flex-direction: row;flex-wrap: wrap;gap: 13px;">
                      <?php if($permission): ?>
                        <?php foreach($permission as $data): ?>
                          <div class="per_div">

                          
                          <label for="" ><?= $data['name']?> : </label>
                          
                          <input  type="checkbox" name="permission[]"  value="<?= $data['id'] ?>"
                          <?php 
                          $permission_data = json_decode($info->permission);
                          if (is_array($permission_data) && count($permission_data) > 0) {
                            foreach ($permission_data as $p_data) {
                              if($p_data->id == $data['id']){
                                echo 'checked';
                              }
                            }
                          }
                          
                          ?>
                          >
                          </div>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </div>
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


