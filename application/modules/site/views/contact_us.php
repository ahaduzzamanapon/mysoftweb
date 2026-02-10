<style>
 .google-map iframe {
    width: 100%;
    height: 100%;
}

    @media screen and (min-width: 360px) and (max-width: 430px) {
       .google-map iframe {
    width: 100%;
    height: 100%;
}
.google-map {
    background: #E5E3DF;
    height: 305px;
    width: 88%;
    overflow: hidden;
    place-self: center;
    margin-left: 4px;
    border-radius: 11px;
}

        hr.tall {
            margin: 0px !important;
        }

        .send_message {
            width: 100% !important;
            margin-bottom: 10px !important;
        }

    }
.google-map {
    background: #E5E3DF;
    height: 305px;
    width: 100%;
    overflow: hidden;
    place-self: center;
    margin-left: 34px;
    border-radius: 11px;
}
</style>

<link rel="stylesheet" href="<?= base_url('assets/css/home2.css') ?>">


<div role="main" class="main">

    <div class="container">
        <h1 style="margin: 21px 4px 8px 21px;font-family: 'Nourd-Bold', 'Poppins', sans-serif;"><?= $meta_title ?></h1>
         <!-- Get in Touch Section -->
    <section class="ht-section contact-section-wrapper" style="height: auto;padding: 96px 0 100px 0;background: #fff;">
        <div class="container">
            <div class="contact-card hover-lift" data-aos="fade-up">
                <div class="row no-gutters">
                    <!-- Left Info Column -->
                    <div class="col-md-5 col-sm-12 contact-info-side">
                        <h3 class="text-white mb-20 " style="font-weight: 700;">Let’s Talk About Your Business</h3>
                        <p class="text-white mb-40" style="opacity: 0.9; font-size: 14px; line-height: 1.6;">
                            Schedule a discovery call to explore how we can support your
                            business goals.
                        </p>

                        <div class="contact-item mb-30">
                            <div class="icon-circle"><i class="fa fa-phone"></i></div>
                            <div class="contact-text">
                                <strong>Call Us</strong>
                                <span>+880 1958-633202</span>
                            </div>
                        </div>

                        <div class="contact-item mb-30">
                            <div class="icon-circle"><i class="fa fa-envelope"></i></div>
                            <div class="contact-text">
                                <strong>Email Us</strong>
                                <span>info@mysoftheaven.com</span>
                            </div>
                        </div>

                        <div class="contact-item mb-30">
                            <div class="icon-circle"><i class="fa fa-map-marker"></i></div>
                            <div class="contact-text">
                                <strong>Visit Head Office</strong>
                                <span>P.R.Tower, 924/1, Level 8, Begum Rokeya Sarani, Shewrapara, Mirpur,
                                    Dhaka-1216.</span>
                            </div>
                        </div>

                        <div class="contact-item mb-40">
                            <div class="icon-circle"><i class="fa fa-map-marker"></i></div>
                            <div class="contact-text">
                                <strong>Visit Corporate Office</strong>
                                <span>8813 NW 23 Street, Miami, FL 33172, USA.</span>
                            </div>
                        </div>

                        <div class="social-links">
                            <a href="#" class="social-btn"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="social-btn"><i class="fa fa-linkedin"></i></a>
                            <a href="#" class="social-btn"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Right Form Column -->
                    <div class="col-md-7 col-sm-12 contact-form-side">
                        <h3 class="mb-20" style="font-weight: 700; color: #000;">GET IN TOUCH</h3>
                        <p class="mb-30" style="font-size: 13px; color: #666; line-height: 1.6;">
                            Have a project in mind or need the right tech
                            team? Reach out to us and our experts will get back to you
                            shortly.
                        </p>

                        <form action="<?= base_url('submit-contact') ?>" method="post" id="contact-form-home2">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 form-group">
                                    <label>Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control form-control-custom"
                                        placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control form-control-custom"
                                        placeholder="" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 form-group">
                                    <label>Phone Number <span class="text-danger">*</span></label>
                                    <input type="text" name="phone" class="form-control form-control-custom"
                                        placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <label>Company Name <span class="text-danger">*</span></label>
                                    <input type="text" name="company" class="form-control form-control-custom"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 form-group">
                                    <label>Select Industry <span class="text-danger">*</span></label>
                                    <select class="form-control form-control-custom" name="industry">
                                        <option value="">Select an Industry</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Healthcare">Healthcare</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Manufacturing">Manufacturing</option>
                                        <option value="Education">Education</option>
                                        <option value="Real Estate">Real Estate</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-12 form-group">
                                    <label>Select Service <span class="text-danger"></span></label>
                                    <select class="form-control form-control-custom" name="service">
                                        <option value="">Select a service</option>
                                        <?php if (!empty($all_services)): ?>
                                            <?php foreach ($all_services as $service): ?>
<option value="<?= $service->id ?>">
    <?= ucwords(str_replace('-', ' ', $service->slug)) ?>
</option>                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-12 form-group">
                                    <label>Select Product <span class="text-danger"></span></label>
                                    <select class="form-control form-control-custom" name="product">
                                        <option value="">Select a Product</option>
                                        <?php if (!empty($all_products)): ?>
                                            <?php foreach ($all_products as $product): ?>
                                                <option value="<?= $product->id ?>"><?= $product->name ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Project details <span class="text-danger">*</span></label>
                                <textarea name="project_details" class="form-control form-control-custom" rows="4"
                                    placeholder="Tell us about your project or talent needs..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-block btn-submit">Send Inquiry <i
                                    class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <div class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7029673607103!2d90.36247637439307!3d23.793589387118708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a103ea6a8d%3A0x679516e132e65f7a!2sMysoft%20Heaven%20(BD)%20Ltd.!5e0!3m2!1sen!2sbd!4v1714031551691!5m2!1sen!2sbd"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>