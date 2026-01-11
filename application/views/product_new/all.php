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
                    <div class="alert alert-success">
                        <i class="fa fa-check-circle"></i> <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <table class="table table-bordered table-striped datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($results)) : ?>
                            <?php foreach ($results as $product) : ?>
                                <tr>
                                    <td><?php echo $product->id; ?></td>
                                    <td><?php echo $product->name; ?></td>
                                    <td><?php echo $product->slug; ?></td>
                                    <td><?php echo $product->status == 'active' ? '<span class="label label-success">Active</span>' : '<span class="label label-danger">Inactive</span>'; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('admin/product_new/edit/' . $product->id); ?>" class="btn btn-info btn-xs">Edit</a>
                                        <a href="<?php echo base_url('admin/product_new/delete/' . $product->id); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
