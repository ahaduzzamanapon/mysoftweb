<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Manage Feature for Plan: <?php echo $plan->plan_name; ?></h3>
                <div class="panel-options">
                    <a href="<?php echo base_url('admin/product_new/edit/' . $plan->product_id . '?tab=pricing_plans'); ?>" class="btn btn-sm btn-info">Back to Pricing Plans</a>
                </div>
            </div>
            <div class="panel-body">
                <?php echo form_open('', ['class' => 'form-horizontal']); ?>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Feature Text</label>
                    <div class="col-sm-9">
                        <input type="text" name="feature_text" class="form-control" value="<?php echo set_value('feature_text', isset($item) ? $item->feature_text : ''); ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Order Number</label>
                    <div class="col-sm-9">
                         <input type="number" name="order_num" class="form-control" value="<?php echo set_value('order_num', isset($item) ? $item->order_num : '0'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" name="save_feature" value="1" class="btn btn-primary">Save Feature</button>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
