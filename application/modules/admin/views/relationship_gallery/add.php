<section class="content-header">
    <h1>
        <?= $meta_title; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">
            <?= $meta_title; ?>
        </li>
    </ol>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Relationship Gallery Image</h3>
                    <a href="<?= base_url('admin/relationship_gallery/all') ?>" class="btn btn-info btn-xs pull-right"
                        style="margin-left: 15px;"> All Images</a>
                </div>
                <?php echo form_open_multipart("admin/relationship_gallery/add"); ?>
                <div class="box-body">
                    <div id="infoMessage">
                        <?php //echo $message; ?>
                    </div>
                    <div>
                        <?php echo validation_errors(); ?>
                    </div>
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success">
                            <a class="close" data-dismiss="alert">&times;</a>
                            <?php echo $this->session->flashdata('success');
                            ; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger">
                            <a class="close" data-dismiss="alert">&times;</a>
                            <?php echo $this->session->flashdata('error');
                            ; ?>
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Image Title</label>
                                <div>
                                    <?php echo form_error('title'); ?>
                                </div>
                                <input type="text" class="form-control" name="title" value="<?= set_value('title') ?>">
                            </div>

                            <div class="form-group">
                                <label>Image Upload</label>
                                <div>
                                    <?php echo form_error('image'); ?>
                                </div>
                                <input type="file" name="image" required>
                                <p class="help-block">File type jpg, png, jpeg, gif.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <?php echo form_submit('submit', 'Save', "class='btn btn-primary pull-right'"); ?>
                </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->

</section>