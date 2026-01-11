<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $meta_title; ?> (<?php echo $product->name; ?>)</h3>
                <div class="panel-options">
                    <a href="<?php echo base_url('admin/product_new/all'); ?>" class="btn btn-sm btn-default">Back to List</a>
                </div>
            </div>
            <div class="panel-body">
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $this->session->flashdata('success'); ?></div>
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
                    <li><a href="#tab-pricing" data-toggle="tab">Pricing</a></li>
                    <li><a href="#tab-faqs" data-toggle="tab">FAQs</a></li>
                    <li><a href="#tab-clients" data-toggle="tab">Clients</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="tab-main">
                        <br>
                        <h4>Main Product Details</h4>
                        <p>This section is for the main product details. You can add the form fields here.</p>
                        <!-- Main product form would go here -->
                    </div>
                    <div class="tab-pane" id="tab-metrics"><br><h4>Metrics</h4><p>Manage the key metrics for this product.</p><a href="<?php echo base_url('admin/product_new/manage_metrics/' . $product->id); ?>" class="btn btn-info">Manage Metrics</a></div>
                    <div class="tab-pane" id="tab-app_links"><br><h4>App Links</h4><p>Manage the app store links for this product.</p><a href="<?php echo base_url('admin/product_new/manage_app_links/' . $product->id); ?>" class="btn btn-info">Manage App Links</a></div>
                    <div class="tab-pane" id="tab-modules"><br><h4>Modules</h4><p>Manage the modules for this product.</p><a href="<?php echo base_url('admin/product_new/manage_modules/' . $product->id); ?>" class="btn btn-info">Manage Modules</a></div>
                    <div class="tab-pane" id="tab-features"><br><h4>Features</h4><p>Manage the key features for this product.</p><a href="<?php echo base_url('admin/product_new/manage_features/' . $product->id); ?>" class="btn btn-info">Manage Features</a></div>
                    <div class="tab-pane" id="tab-audiences"><br><h4>Audiences</h4><p>Manage the target audiences for this product.</p><a href="<?php echo base_url('admin/product_new/manage_audiences/' . $product->id); ?>" class="btn btn-info">Manage Audiences</a></div>
                    <div class="tab-pane" id="tab-industries"><br><h4>Industries</h4><p>Manage the industries served by this product.</p><a href="<?php echo base_url('admin/product_new/manage_industries/' . $product->id); ?>" class="btn btn-info">Manage Industries</a></div>
                    <div class="tab-pane" id="tab-technologies"><br><h4>Technologies</h4><p>Manage the technologies used for this product.</p><a href="<?php echo base_url('admin/product_new/manage_technologies/' . $product->id); ?>" class="btn btn-info">Manage Technologies</a></div>
                    <div class="tab-pane" id="tab-pricing"><br><h4>Pricing</h4><p>Manage the pricing plans for this product.</p><a href="<?php echo base_url('admin/product_new/manage_pricing_plans/' . $product->id); ?>" class="btn btn-info">Manage Pricing Plans</a></div>
                    <div class="tab-pane" id="tab-faqs"><br><h4>FAQs</h4><p>Manage the FAQs for this product.</p><a href="<?php echo base_url('admin/product_new/manage_faqs/' . $product->id); ?>" class="btn btn-info">Manage FAQs</a></div>
                    <div class="tab-pane" id="tab-clients"><br><h4>Clients</h4><p>Manage the client logos for this product.</p><a href="<?php echo base_url('admin/product_new/manage_clients/' . $product->id); ?>" class="btn btn-info">Manage Clients</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        // Function to read query parameter
        function getQueryParam(name) {
            var urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);
        }

        var tab = getQueryParam('tab');
        if (tab) {
            $('.nav-tabs a[href="#tab-' + tab + '"]').tab('show');
        }
    });
</script>