<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $meta_title; ?></h3>
                <div class="panel-options">
                    <a href="<?php echo base_url('admin/product_new/add'); ?>" class="btn btn-sm btn-primary">Add New Product</a>
                </div>
            </div>
            <div class="panel-body">
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $this->session->flashdata('success'); ?></div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger"><i class="fa fa-times-circle"></i> <?php echo $this->session->flashdata('error'); ?></div>
                <?php endif; ?>

                <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Heading</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($results)): ?>
                        <?php foreach ($results as $item) : ?>
                            <tr>
                                <td><?php echo $item->name; ?></td>
                                <td><?php echo $item->slug; ?></td>
                                <td><?php echo $item->hero_heading; ?></td>
                                <td>
                                    <?php if ($item->status == 'active') : ?>
                                        <span class="label label-success">Active</span>
                                    <?php else : ?>
                                        <span class="label label-danger">Inactive</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo date('d M, Y', strtotime($item->created_at)); ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/product_new/edit/' . $item->id); ?>" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                    <!-- Add delete functionality later if needed, model has it -->
                                    <!-- <a href="<?php echo base_url('admin/product_new/delete/' . $item->id); ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a> -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td colspan="6">No products found.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
