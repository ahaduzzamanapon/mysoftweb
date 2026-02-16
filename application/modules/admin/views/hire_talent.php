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
                    <h3 class="box-title">Filters</h3>
                </div>
                <div class="box-body">
                    <form action="" method="get">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="service">Service</label>
                                    <select name="service" class="form-control">
                                        <option value="">All Services</option>
                                        <?php foreach ($services as $s): ?>
                                            <option value="<?= $s ?>" <?= $this->input->get('service') == $s ? 'selected' : '' ?>><?= $s ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="budget">Budget Range</label>
                                    <select name="budget" class="form-control">
                                        <option value="">All Budgets</option>
                                        <?php foreach ($budgets as $b): ?>
                                            <option value="<?= $b ?>" <?= $this->input->get('budget') == $b ? 'selected' : '' ?>>
                                                <?= $b ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="industry">Industry</label>
                                    <select name="industry" class="form-control">
                                        <option value="">All Industries</option>
                                        <?php foreach ($industries as $i): ?>
                                            <option value="<?= $i ?>" <?= $this->input->get('industry') == $i ? 'selected' : '' ?>>
                                                <?= $i ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="search">Search</label>
                                    <input type="text" name="search" class="form-control"
                                        placeholder="Name, Email, Phone, Company"
                                        value="<?= $this->input->get('search') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Filter</button>
                                <a href="<?= base_url('admin/hire_talent') ?>" class="btn btn-default">Reset</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">List</h3>
                </div>

                <div class="box-body">
                    <div id="infoMessage">
                        <?php //echo $message; ?>
                    </div>
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success">
                            <a class="close" data-dismiss="alert">&times;</a>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger">
                            <a class="close" data-dismiss="alert">&times;</a>
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
                    <?php endif; ?>

                    <table id="example1" class="table table-bordered table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Service</th>
                                <th>Budget</th>
                                <th>Industry</th>
                                <th>Contact Info</th>
                                <th>Details</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sl = 0;
                            if (!empty($results)) {
                                foreach ($results as $row) {
                                    $sl++;
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $sl; ?>
                                        </td>
                                        <td><?= $row->name; ?></td>
                                        <td><?= $row->company; ?></td>
                                        <td><?= $row->service; ?></td>
                                        <td><?= $row->budget; ?></td>
                                        <td><?= $row->industry; ?></td>
                                        <td>
                                            <i class="fa fa-envelope"></i> <?= $row->email; ?><br>
                                            <i class="fa fa-phone"></i> <?= $row->phone; ?>
                                        </td>
                                        <td><?= word_limiter($row->details, 10); ?></td>
                                        <td>
                                            <?= date('d M Y, h:i A', strtotime($row->created_at)); ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('admin/hire_talent/delete/' . $row->id) ?>"
                                                class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')"><i
                                                    class="fa fa-trash"></i> Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo '<tr><td colspan="10" class="text-center">No results found</td></tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->