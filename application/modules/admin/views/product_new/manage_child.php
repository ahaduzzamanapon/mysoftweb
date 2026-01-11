<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $meta_title; ?></h3>
                <div class="panel-options">
                    <a href="<?php echo base_url('admin/product_new/edit/' . $product_id . '?tab=' . $section); ?>" class="btn btn-sm btn-info">Back to List</a>
                </div>
            </div>
            <div class="panel-body">
                <?php echo form_open_multipart('', ['class' => 'form-horizontal']); ?>

                <?php foreach ($config['fields'] as $field_name => $field_setup): ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo $field_setup['label']; ?></label>
                        <div class="col-sm-9">
                            <?php if ($field_setup['type'] == 'textarea'): ?>
                                <textarea name="<?php echo $field_name; ?>" class="form-control" rows="5"><?php echo set_value($field_name, isset($item) ? $item->$field_name : ''); ?></textarea>
                            <?php elseif ($field_setup['type'] == 'file'): ?>
                                <input type="file" name="<?php echo $field_name; ?>" class="form-control">
                                <?php if (isset($item) && !empty($item->$field_name)): ?>
                                    <p class="help-block">Current: <?php echo $item->$field_name; ?></p>
                                    <?php if($section == 'technologies'): ?>
                                         <img src="<?php echo base_url('assets/img/tech/' . $item->$field_name); ?>" height="50">
                                    <?php elseif($section == 'clients'): ?>
                                         <img src="<?php echo base_url('client_img/' . $item->$field_name); ?>" height="50">
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php else: ?>
                                <input type="text" name="<?php echo $field_name; ?>" class="form-control" value="<?php echo set_value($field_name, isset($item) ? $item->$field_name : ''); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Order Number</label>
                    <div class="col-sm-9">
                         <input type="number" name="order_num" class="form-control" value="<?php echo set_value('order_num', isset($item) ? $item->order_num : '0'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" name="save_child" value="1" class="btn btn-primary">Save <?php echo $config['title']; ?></button>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
