<style>
    .google-map iframe {
        width: 650px;
        height: 450px;
    }

    @media screen and (min-width: 360px) and (max-width: 430px) {
        .google-map iframe {
            width: 100% !important;
            height: 350px !important;
        }

        hr.tall {
            margin: 0px !important;
        }

        .send_message {
            width: 100% !important;
            margin-bottom: 10px !important;
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
    <?php //dd($contact)
    ?>
    <div class="container">
        <hr class="tall_slim">

        <div class="row">
            <div class="col-md-6">
                <?= validation_errors(); ?>
                <?php if (isset($_SESSION['success_message'])) :
                    $formData = $this->session->flashdata('form_data');
                    $name = htmlspecialchars($formData['name']);
                    $email = htmlspecialchars($formData['email']);
                    $subject = htmlspecialchars($formData['subject']);
                    $message = htmlspecialchars($formData['message']);
                    $created_at = htmlspecialchars($formData['created_at']);

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
                                'subject': '<?= isset($subject) ? $subject : 'unknown' ?>',
                                'message': '<?= isset($message) ? $message : 'unknown' ?>',
                                'created_at': '<?= isset($created_at) ? $created_at : 'unknown' ?>',

                                'hash_name': '<?= isset($name) ?  hash('sha256', $name) : 'unknown' ?>',
                                'hash_email': '<?= isset($email) ?  hash('sha256', $email) : 'unknown' ?>',
                                'hash_subject': '<?= isset($subject) ?  hash('sha256', $subject) : 'unknown' ?>',
                                'hash_message': '<?= isset($message) ?  hash('sha256', $message) : 'unknown' ?>',
                                'hash_created_at': '<?= isset($created_at) ?  hash('sha256', $created_at) : 'unknown' ?>',

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

                    <div class="alert alert-primary" role="alert">
                        <strong><?= $_SESSION['success_message'] ?></strong>
                    </div>
                    <?php unset($_SESSION['success_message']); ?>
                <?php endif; ?>

                <?php if (isset($_SESSION['error_message'])) :
                ?>
                    <div class="alert alert-danger" role="alert">
                        <strong><?= $_SESSION['error_message'] ?></strong>
                    </div>
                    <?php unset($_SESSION['error_message']); ?>
                <?php endif; ?>

                <h4 class="push-top">Contact <strong>Form</strong></h4>
                <form action="<?= base_url('site/contact_add') ?>" method="POST">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Your name *</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-md-6">
                                <label>Your email address *</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Subject</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Message *</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                            <div class="g-recaptcha" data-sitekey="6LfA8-YqAAAAAEV49YCfo6yahebn22LotdY9Jqby"></div>
                            <div><?php echo form_error('g-recaptcha-response'); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-lg send_message" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">

                <h4>The <strong>Office</strong></h4>
                <ul class="list-unstyled">
                    <li><i class="fa fa-map-marker"></i> <strong>Head Office:</strong>
                        Shapla House 363/H/2, North Pirerbag, Raisa & Shikdhar Tower, Level-5, 3/8, Kamal Soroni Rd,
                        Dhaka-1207.
                    </li>
                    <li><i class="fa fa-map-marker"></i> <strong>Corporate Office:</strong>
                        8813 NW 23 Street. Miami, FL 33172, USA.
                    </li>
                    <li><i class="fa fa-phone"></i> <strong>Phone:</strong> <a href="tel:+8801958633202">+880 1958-633202</a>, <a href="tel:+8801970776605">+880 1970-776605</a>, <a href="tel:+8801404453001">+8801404453001</a></li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:info@mysoftheaven.com">info@mysoftheaven.com</a></li>
                </ul>

                <hr />

                <h4>Google <strong>Maps</strong></h4>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7029673607103!2d90.36247637439307!3d23.793589387118708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a103ea6a8d%3A0x679516e132e65f7a!2sMysoft%20Heaven%20(BD)%20Ltd.!5e0!3m2!1sen!2sbd!4v1714031551691!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>

        <hr class="tall">
    </div>
</div>