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
                    <h3 class="box-title">Edit Relationship Gallery Image</h3>
                    <a href="<?= base_url('admin/relationship_gallery/all') ?>" class="btn btn-info btn-xs pull-right"
                        style="margin-left: 15px;"> All Images</a>
                </div>
                <?php echo form_open_multipart("admin/relationship_gallery/edit/" . $gallery_info->id); ?>
                <div class="box-body">
                    <div id="infoMessage">
                        <?php //echo $message; ?>
                    </div>
                    <div>
                        <?php echo validation_errors(); ?>
                    </div>


                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Image Title</label>
                                <div>
                                    <?php echo form_error('title'); ?>
                                </div>
                                <input type="text" class="form-control" name="title"
                                    value="<?= set_value('title', $gallery_info->title) ?>">
                            </div>

                            <div class="form-group">
                                <label>Image Upload</label>
                                <div>
                                    <?php echo form_error('image'); ?>
                                </div>
                                <input type="file" name="image">
                                <p class="help-block">File type jpg, png, jpeg, gif. Leave empty to keep current image.
                                </p>
                                <?php if ($gallery_info->image): ?>
                                    <img src="<?= base_url('relationship_gallery_img/' . $gallery_info->image) ?>"
                                        width="100">
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1" <?= $gallery_info->display == 1 ? 'selected' : '' ?>>Active
                                    </option>
                                    <option value="0" <?= $gallery_info->display == 0 ? 'selected' : '' ?>>Inactive
                                    </option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <?php echo form_submit('submit', 'Update', "class='btn btn-primary pull-right'"); ?>
                </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->

</section>