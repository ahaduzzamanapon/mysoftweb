<section class="content-header">
    <h1> <?= $meta_title; ?> </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><?= $meta_title; ?></li>
    </ol>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edint Gallery Image</h3>
                    <a href="<?= base_url('admin/image_gallery/all') ?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Image</a>
                </div>
                <?php echo form_open_multipart("admin/image_gallery/edit/".$gallery_info->id); ?>
                <div class="box-body">
                    <div id="infoMessage"><?php //echo $message;
                                            ?></div>
                    <div><?php //echo validation_errors(); 
                            ?></div>
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success">
                            <a class="close" data-dismiss="alert">&times;</a>
                            <?php echo $this->session->flashdata('success');; ?>
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Image Title</label>
                                <div><?php echo form_error('title'); ?></div>
                                <input type="text" class="form-control" name="title" value="<?= set_value('title'), $gallery_info->title ?>">
                            </div>
                            
                            

                            <div class="form-group">
                                <label>Image Upload</label>
                                <div><?php echo form_error('image'); ?></div>
                                <div>
                                    <img src="<?= base_url('gallery_img/') . $gallery_info->image ?>" alt="" width="100px" height="100px">
                                </div>
                                <input type="file" name="image">
                                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                            </div>
                            <div class="form-group">
                                <label>display Home</label>
                                <select name="status" class="form-control">
                                   
                                    <option value="1" <?= $gallery_info->display==1 ? 'selected':''?>>Yes</option>
                                    <option value="0" <?= $gallery_info->display==0 ? 'selected':''?>>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <?php //echo form_input($user_id);
                    ?>
                    <?php echo form_submit('submit', 'Save', "class='btn btn-primary pull-right'"); ?>
                </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->

