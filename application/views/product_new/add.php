<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $meta_title; ?></h3>
            </div>
            <div class="panel-body">
                <?php echo form_open('admin/product_new/add', array('class' => 'form-horizontal')); ?>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Product Name <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-primary">Create Product</button>
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
