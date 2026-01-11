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
<?php //dd($contact)?>
    <div class="container">
        <hr class="tall_slim">

        <div class="row">
            <div class="col-md-6">
              <?=validation_errors();?>
                <?php if (isset($_SESSION['success_message'])) : ?>
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
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
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
                    <li><i class="fa fa-phone"></i> <strong>Phone:</strong> +88 02 41001094, +88 01707776608, +88 02
                        58054029</li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:info@mysoftheaven.com">info@mysoftheaven.com</a></li>
                </ul>

                <hr />

                <h4>Google <strong>Maps</strong></h4>
                <div  class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7029673607103!2d90.36247637439307!3d23.793589387118708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a103ea6a8d%3A0x679516e132e65f7a!2sMysoft%20Heaven%20(BD)%20Ltd.!5e0!3m2!1sen!2sbd!4v1714031551691!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>

        <hr class="tall">
    </div>
</div>