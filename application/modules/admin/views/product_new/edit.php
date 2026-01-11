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
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $this->session->flashdata('success'); ?></div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger"><i class="fa fa-times-circle"></i> <?php echo $this->session->flashdata('error'); ?></div>
                <?php endif; ?>
                <?php if(validation_errors()): ?>
                    <div class="alert alert-danger"><i class="fa fa-warning"></i> <?php echo validation_errors(); ?></div>
                <?php endif; ?>

                <ul class="nav nav-tabs" id="myTabs">
                    <li class="active"><a href="#tab-main" data-toggle="tab">Main Details</a></li>
                    <li><a href="#tab-metrics" data-toggle="tab">Metrics</a></li>
                    <li><a href="#tab-app_links" data-toggle="tab">App Links</a></li>
                    <li><a href="#tab-modules" data-toggle="tab">Modules</a></li>
                    <li><a href="#tab-features" data-toggle="tab">Features</a></li>
                    <li><a href="#tab-audiences" data-toggle="tab">Audiences</a></li>
                    <li><a href="#tab-industries" data-toggle="tab">Industries</a></li>
                    <li><a href="#tab-technologies" data-toggle="tab">Technologies</a></li>
                    <li><a href="#tab-pricing_plans" data-toggle="tab">Pricing</a></li>
                    <li><a href="#tab-faqs" data-toggle="tab">FAQs</a></li>
                    <li><a href="#tab-clients" data-toggle="tab">Clients</a></li>
                </ul>

                <div class="tab-content" style="padding-top: 20px;">
                    
                    <!-- Main Product Form -->
                    <div class="tab-pane active" id="tab-main">
                        <?php echo form_open_multipart('', ['class' => 'form-horizontal']); ?>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Product Name</label>
                            <div class="col-sm-10"><input type="text" name="name" class="form-control" value="<?php echo set_value('name', $product->name); ?>" required></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Slug</label>
                            <div class="col-sm-10"><input type="text" name="slug" class="form-control" value="<?php echo set_value('slug', $product->slug); ?>" required></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                                <select name="status" class="form-control">
                                    <option value="active" <?php echo ($product->status == 'active') ? 'selected' : ''; ?>>Active</option>
                                    <option value="inactive" <?php echo ($product->status == 'inactive') ? 'selected' : ''; ?>>Inactive</option>
                                </select>
                            </div>
                        </div>

                        <hr><h4>SEO Settings</h4>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Meta Title</label>
                            <div class="col-sm-10"><input type="text" name="meta_title" class="form-control" value="<?php echo set_value('meta_title', $product->meta_title); ?>"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Meta Description</label>
                            <div class="col-sm-10"><textarea name="meta_description" class="form-control" rows="3"><?php echo set_value('meta_description', $product->meta_description); ?></textarea></div>
                        </div>

                        <hr><h4>Hero Section</h4>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hero Heading</label>
                            <div class="col-sm-10"><input type="text" name="hero_heading" class="form-control" value="<?php echo set_value('hero_heading', $product->hero_heading); ?>"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hero Subheading</label>
                            <div class="col-sm-10"><input type="text" name="hero_subheading" class="form-control" value="<?php echo set_value('hero_subheading', $product->hero_subheading); ?>"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hero Description</label>
                            <div class="col-sm-10"><textarea name="hero_description" class="form-control" rows="3"><?php echo set_value('hero_description', $product->hero_description); ?></textarea></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Button Text</label>
                            <div class="col-sm-4"><input type="text" name="hero_button_text" class="form-control" value="<?php echo set_value('hero_button_text', $product->hero_button_text); ?>"></div>
                            <label class="col-sm-2 control-label">Button Link</label>
                            <div class="col-sm-4"><input type="text" name="hero_button_link" class="form-control" value="<?php echo set_value('hero_button_link', $product->hero_button_link); ?>"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hero Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="hero_image" class="form-control">
                                <?php if($product->hero_image): ?>
                                    <br><img src="<?php echo base_url('product_img/'.$product->hero_image); ?>" width="100">
                                <?php endif; ?>
                            </div>
                        </div>

                        <hr><h4>Section Headings</h4>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Why Us Heading</label>
                            <div class="col-sm-10"><input type="text" name="why_heading" class="form-control" value="<?php echo set_value('why_heading', $product->why_heading); ?>"></div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Summary Heading</label>
                            <div class="col-sm-10"><input type="text" name="summary_heading" class="form-control" value="<?php echo set_value('summary_heading', $product->summary_heading); ?>"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Modules Heading</label>
                            <div class="col-sm-10"><input type="text" name="modules_heading" class="form-control" value="<?php echo set_value('modules_heading', $product->modules_heading); ?>"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Features Heading</label>
                            <div class="col-sm-10"><input type="text" name="features_heading" class="form-control" value="<?php echo set_value('features_heading', $product->features_heading); ?>"></div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Features Subheading</label>
                            <div class="col-sm-10"><input type="text" name="features_subheading" class="form-control" value="<?php echo set_value('features_subheading', $product->features_subheading); ?>"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Audiences Heading</label>
                            <div class="col-sm-10"><input type="text" name="audiences_heading" class="form-control" value="<?php echo set_value('audiences_heading', $product->audiences_heading); ?>"></div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Industries Heading</label>
                            <div class="col-sm-10"><input type="text" name="industries_heading" class="form-control" value="<?php echo set_value('industries_heading', $product->industries_heading); ?>"></div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Technology Heading</label>
                            <div class="col-sm-10"><input type="text" name="technology_heading" class="form-control" value="<?php echo set_value('technology_heading', $product->technology_heading); ?>"></div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Pricing Heading</label>
                            <div class="col-sm-10"><input type="text" name="pricing_heading" class="form-control" value="<?php echo set_value('pricing_heading', $product->pricing_heading); ?>"></div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Pricing Subheading</label>
                            <div class="col-sm-10"><textarea name="pricing_subheading" class="form-control"><?php echo set_value('pricing_subheading', $product->pricing_subheading); ?></textarea></div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">FAQ Heading</label>
                            <div class="col-sm-10"><input type="text" name="faq_heading" class="form-control" value="<?php echo set_value('faq_heading', $product->faq_heading); ?>"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Clients Heading</label>
                            <div class="col-sm-10"><input type="text" name="clients_heading" class="form-control" value="<?php echo set_value('clients_heading', $product->clients_heading); ?>"></div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Demo CTA Heading</label>
                            <div class="col-sm-10"><input type="text" name="demo_call_to_action_heading" class="form-control" value="<?php echo set_value('demo_call_to_action_heading', $product->demo_call_to_action_heading); ?>"></div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Demo CTA Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="demo_call_to_action_image" class="form-control">
                                <?php if($product->demo_call_to_action_image): ?>
                                    <br><img src="<?php echo base_url('product_img/'.$product->demo_call_to_action_image); ?>" width="100">
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="update_main_product" value="1" class="btn btn-primary">Update Main Details</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    
                    
                    <!-- Generic Child Tab Loader -->
                    <?php 
                    $tabs = [
                        'metrics' => ['title' => 'Metrics', 'cols' => ['Value' => 'value', 'Label' => 'label']],
                        'app_links' => ['title' => 'App Links', 'cols' => ['Text' => 'count_text', 'Description' => 'description']],
                        'modules' => ['title' => 'Modules', 'cols' => ['Title' => 'title', 'Icon' => 'icon']],
                        'features' => ['title' => 'Features', 'cols' => ['Title' => 'title', 'Desc' => 'description']],
                        'audiences' => ['title' => 'Audiences', 'cols' => ['Title' => 'title']],
                        'industries' => ['title' => 'Industries', 'cols' => ['Title' => 'title']],
                        'technologies' => ['title' => 'Technologies', 'cols' => ['Title' => 'title']],
                        'faqs' => ['title' => 'FAQs', 'cols' => ['Question' => 'question']],
                        'clients' => ['title' => 'Clients', 'cols' => ['Name' => 'client_name']]
                    ];
                    ?>
                    
                    <?php foreach($tabs as $key => $tab): ?>
                    <div class="tab-pane" id="tab-<?php echo $key; ?>">
                        <a href="<?php echo base_url('admin/product_new/manage_child/'.$key.'/'.$product->id); ?>" class="btn btn-primary btn-sm" style="margin-bottom: 10px;">Add New <?php echo $tab['title']; ?></a>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <?php foreach($tab['cols'] as $label => $col) echo "<th>$label</th>"; ?>
                                    <th>Order</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($$key)): foreach($$key as $item): ?>
                                <tr>
                                    <?php foreach($tab['cols'] as $label => $col): ?>
                                        <td><?php echo (strlen($item->$col) > 50) ? substr($item->$col, 0, 50).'...' : $item->$col; ?></td>
                                    <?php endforeach; ?>
                                    <td><?php echo $item->order_num; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('admin/product_new/manage_child/'.$key.'/'.$product->id.'/'.$item->id); ?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                        <a href="<?php echo base_url('admin/product_new/delete_child/'.$product->id.'/'.$key.'/'.$item->id); ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php endforeach; ?>
                    
                    <!-- Pricing Plans Tab (Special case due to nested features) -->
                     <div class="tab-pane" id="tab-pricing_plans">
                        <a href="<?php echo base_url('admin/product_new/manage_child/pricing_plans/'.$product->id); ?>" class="btn btn-primary btn-sm" style="margin-bottom: 10px;">Add New Plan</a>
                        <?php if(isset($pricing_plans)): foreach($pricing_plans as $plan): ?>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <?php echo $plan->plan_name; ?> (<?php echo $plan->price; ?>)
                                    <div class="pull-right">
                                         <a href="<?php echo base_url('admin/product_new/manage_child/pricing_plans/'.$product->id.'/'.$plan->id); ?>" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i> Edit Plan</a>
                                         <a href="<?php echo base_url('admin/product_new/delete_child/'.$product->id.'/pricing_plans/'.$plan->id); ?>" class="btn btn-xs btn-danger" onclick="return confirm('Delete Plan?')"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <strong>Features:</strong>
                                    <table class="table table-condensed">
                                        <thead><tr><th>Text</th><th>Order</th><th>Action</th></tr></thead>
                                        <tbody>
                                            <?php if(isset($plan->features)): foreach($plan->features as $feature): ?>
                                            <tr>
                                                <td><?php echo $feature->feature_text; ?></td>
                                                <td><?php echo $feature->order_num; ?></td>
                                                <td>
                                                     <a href="<?php echo base_url('admin/product_new/manage_pricing_feature/'.$plan->id.'/'.$feature->id); ?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                                     <a href="<?php echo base_url('admin/product_new/delete_pricing_feature/'.$plan->id.'/'.$feature->id); ?>" class="btn btn-xs btn-danger" onclick="return confirm('Delete Feature?')"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; endif; ?>
                                        </tbody>
                                    </table>
                                    <a href="<?php echo base_url('admin/product_new/manage_pricing_feature/'.$plan->id); ?>" class="btn btn-xs btn-success"><i class="fa fa-plus"></i> Add Feature</a>
                                </div>
                            </div>
                        <?php endforeach; endif; ?>
                     </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        var hash = window.location.hash;
        if (hash) {
            $('.nav-tabs a[href="' + hash + '"]').tab('show');
        }
        // If query string hash exists
        var url = window.location.href;
        if(url.indexOf("?tab=") != -1){
             var tab = url.substring(url.indexOf("?tab=") + 5);
             $('.nav-tabs a[href="#tab-' + tab + '"]').tab('show');
        }

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            // Update URL hash
            // window.location.hash = e.target.hash;
        });
    });
</script>