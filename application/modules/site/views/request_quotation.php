<style>
    .limited-lines {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* Limits text to 2 lines */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        /* Adds "..." if text overflows */
        max-height: 3em;
        /* Adjust this based on your font size */
        line-height: 1.5em;
        /* Ensures proper line spacing */
        white-space: normal;
        word-break: break-word;
    }

    .portfolio-list {
        display: flex;
        flex-wrap: wrap ! important;
        justify-content: center ! important;
    }

    @media screen and (min-width: 360px) and (max-width: 430px) {
        .sort-destination .col-xs-6 {
            width: 48% !important;
        }


    }
</style>

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1><?= $meta_title ?></h1>
                </div>
                <div class="col-md-5 text-right">
                    <ul class="breadcrumb">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li class="active"><?= $meta_title ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <hr class="tall_slim">

        <div class="row">
            <div class="col-md-8">

                <div class="alert alert-success hidden" id="contactSuccess">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>

                <div class="alert alert-danger hidden" id="contactError">
                    <strong>Error!</strong> There was an error sending your message.
                </div>

                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success">
                        <a class="close" data-dismiss="alert">&times;</a>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>

                    <?php
                    $formData = $this->session->flashdata('form_data');

                    $name = htmlspecialchars($formData['name']);
                    $email = htmlspecialchars($formData['email']);
                    $phone = htmlspecialchars($formData['phone']);
                    $office_address = htmlspecialchars($formData['office_address']);
                    $product = htmlspecialchars($formData['product']);
                    $services = htmlspecialchars($formData['services']);
                    $details = htmlspecialchars($formData['details']);
                    $date_time = htmlspecialchars($formData['date_time']);
                    ?>

                    <script>
                        $(document).ready(function() {
                            dataLayer.push({
                                'event': 'Lead',
                                'pagePath': '<?php echo current_url(); ?>',
                                'pageTitle': '<?= $meta_title ?> | <?= $domain_title ?>',
                                'visitorType': '<?= $this->session->userdata('user_id') == '' ? 'customer' : 'registered' ?>',
                                'location_id': '<?php echo $_SERVER['REMOTE_ADDR']; ?>',
                                'leadType': 'Contact Us',
                                'leadValue': 'high',
                                'leadSource': '<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'direct' ?>',
                                // start
                                'name': '<?= isset($name) ? $name : 'unknown' ?>',
                                'email': '<?= isset($email) ? $email : 'unknown' ?>',
                                'phone': '<?= isset($phone) ? $phone : 'unknown' ?>',
                                'office_address': '<?= isset($office_address) ? $office_address : 'unknown' ?>',
                                'product': '<?= isset($product) ? $product : 'unknown' ?>',
                                'services': '<?= isset($services) ? $services : 'unknown' ?>',
                                'details': '<?= isset($details) ? $details : 'unknown' ?>',
                                'date_time': '<?= isset($date_time) ? $date_time : 'unknown' ?>',


                                'hash_name': '<?= isset($name) ?  hash('sha256', $name) : 'unknown' ?>',
                                'hash_email': '<?= isset($email) ?  hash('sha256', $email) : 'unknown' ?>',
                                'hash_phone': '<?= isset($phone) ?  hash('sha256', $phone) : 'unknown' ?>',
                                'hash_office_address': '<?= isset($office_address) ?  hash('sha256', $office_address) : 'unknown' ?>',
                                'hash_product': '<?= isset($product) ?  hash('sha256', $product) : 'unknown' ?>',
                                'hash_services': '<?= isset($services) ?  hash('sha256', $services) : 'unknown' ?>',
                                'hash_details': '<?= isset($details) ?  hash('sha256', $details) : 'unknown' ?>',
                                'hash_date_time': '<?= isset($date_time) ?  hash('sha256', $date_time) : 'unknown' ?>',


                                // end

                                'gclid': '<?= isset($_GET['gclid']) ? $_GET['gclid'] : 'N/A' ?>',
                                'fbclid': '<?= isset($_GET['fbclid']) ? $_GET['fbclid'] : 'N/A' ?>',
                                'timeOnPage': 120,
                                'landing_page': '<?php echo current_url(); ?>',
                                'traffic_source': '<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'direct' ?>',
                                'utm_source': '<?= isset($_GET['utm_source']) ? $_GET['utm_source'] : 'organic' ?>',
                                'utm_medium': '<?= isset($_GET['utm_medium']) ? $_GET['utm_medium'] : 'N/A' ?>',
                                'utm_campaign': '<?= isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : 'N/A' ?>',
                                'utm_content': '<?= isset($_GET['utm_content']) ? $_GET['utm_content'] : 'N/A' ?>',
                                'utm_term': '<?= isset($_GET['utm_term']) ? $_GET['utm_term'] : 'N/A' ?>'
                            });
                        });
                    </script>

                <?php else: ?>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            dataLayer.push({
                                'event': 'Request Quotation',
                                'pagePath': '<?php echo current_url(); ?>',
                                'pageTitle': 'Request quotation',
                                'visitorType': '<?= $this->session->userdata('user_id') == '' ? 'customer' : 'registered' ?>',
                                'location_id': '<?php echo $_SERVER['REMOTE_ADDR']; ?>',
                            });
                        });
                    </script>

                <?php endif; ?>

                <h4 class="push-top">Request <strong>Quotation </strong>Form</h4>
                <?php echo form_open_multipart("request-quotation"); ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <div><?php echo form_error('name'); ?></div>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone/Mobile</label>
                        <div><?php echo form_error('phone'); ?></div>
                        <input type="text" name="phone" class="form-control" placeholder="Phone/Mobile">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <div><?php echo form_error('email'); ?></div>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Office Address</label>
                        <div><?php echo form_error('office_address'); ?></div>
                        <input type="text" name="office_address" class="form-control" placeholder="Office Address">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product</label>
                        <div><?php echo form_error('product'); ?></div>
                        <select name="product" class="form-control">
                            <option value="">-- Select Product --</option>
                            <?php foreach ($products as $item) { ?>
                                <option value="<?= $item->id; ?>"><?= $item->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>


                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Services</label>
                        <div><?php echo form_error('services'); ?></div>
                        <select name="services" class="form-control">
                            <option value="">-- Select Services --</option>
                            <?php foreach ($services as $item) { ?>
                                <option value="<?= $item->id; ?>"><?= $item->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div> -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Describe your Requirement</label>
                        <div><?php echo form_error('details'); ?></div>
                        <textarea class="form-control" rows="8" name="details"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="g-recaptcha" data-sitekey="6LfA8-YqAAAAAEV49YCfo6yahebn22LotdY9Jqby"></div>
                    <div><?php echo form_error('g-recaptcha-response'); ?></div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
                    <?php echo form_submit('submit', 'Submit', "class='btn btn-primary'"); ?>
                </div>
                <?php echo form_close(); ?>
            </div>

            <div class="col-md-4">
                <h4 class="mt-3">Our <strong>Products</strong></h4>
                <div class="row">
                    <ul class="portfolio-list sort-destination">
                        <?php foreach ($products as $item) { ?>
                            <li class="col-md-6 col-sm-2 col-xs-6">
                                <div class="img-thumbnail">
                                    <a href="<?= base_url() . 'product/' . $item->slug; ?>" class="thumb-info">
                                        <?php
                                        $img_path = base_url() . 'product_img/';
                                        if ($item->image_file != NULL) {
                                            $src = $img_path . $item->image_file;
                                            echo "<img src='$src' alt='$item->name' class='img-responsive'>";
                                        }
                                        ?>
                                    </a>
                                </div>
                                <h6 class="limited-lines"><?= $item->name ?></h6>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

        </div>

        <hr class="tall">
    </div>
</div>