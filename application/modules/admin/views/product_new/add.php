<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $meta_title; ?></h3>
                <div class="panel-options">
                    <a href="<?php echo base_url('admin/product_new/all'); ?>" class="btn btn-sm btn-info">Back to List</a>
                </div>
            </div>
            <div class="panel-body">
                <?php echo form_open('', ['class' => 'form-horizontal']); ?>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Product Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>" required>
                        <?php echo form_error('name'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-primary">Create & Configure</button>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
