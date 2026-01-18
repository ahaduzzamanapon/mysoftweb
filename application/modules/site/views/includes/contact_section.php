<style>
    /* Contact / Get in Touch Section */
    .contact-card {
        background: #fff;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
        margin-top: -80px;
        position: relative;
        z-index: 10;
        border: none;
    }

    .contact-info-side {
        background: #002b49;
        padding: 60px 40px !important;
        color: #fff;
    }

    .contact-form-side {
        background: #fff;
        padding: 60px 40px;
    }

    .contact-item {
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }

    .icon-circle {
        width: 40px;
        height: 40px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .icon-circle i {
        color: #002b49;
        font-size: 16px;
    }

    .contact-text strong {
        display: block;
        font-size: 15px;
        margin-bottom: 5px;
        font-weight: 600;
        color: #fff;
        /* Ensure strong text in info side is white */
    }

    .contact-text span {
        font-size: 14px;
        opacity: 0.9;
        display: block;
        line-height: 1.5;
        color: #fff;
        /* Ensure span text in info side is white */
    }

    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 60px;
    }

    .social-btn {
        width: 40px;
        height: 40px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #002b49;
        font-size: 18px;
        transition: 0.3s;
    }

    .social-btn:hover {
        background: #0088cc;
        color: #fff;
    }

    .form-control-custom {
        height: 50px;
        border-radius: 8px;
        border: 1px solid #e1e1e1;
        font-size: 14px;
        background: #fff;
        padding: 0 15px;
        width: 100%;
        display: block;
        transition: 0.3s;
    }

    .form-control-custom:focus {
        border-color: #002b49;
        outline: none;
        box-shadow: 0 0 0 3px rgba(0, 43, 73, 0.1);
    }

    textarea.form-control-custom {
        height: auto;
        padding: 15px;
    }

    .btn-submit {
        background: #002b49;
        color: #fff;
        height: 55px;
        border-radius: 8px;
        font-weight: 700;
        font-size: 16px;
        margin-top: 10px;
        width: 100%;
        border: none;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-submit:hover {
        background: #004d80;
    }

    .mb-20 {
        margin-bottom: 20px;
    }

    .mb-30 {
        margin-bottom: 30px;
    }

    .mb-40 {
        margin-bottom: 40px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .contact-card {
            margin-top: 0;
            border-radius: 0;
        }

        .contact-info-side,
        .contact-form-side {
            padding: 40px 20px !important;
        }
    }
</style>
<section class="ht-section contact-section-wrapper" style="height: auto; padding: 60px 0 100px 0; background: #fff;">
    <div class="container">
        <div class="contact-card hover-lift" data-aos="fade-up">
            <div class="row no-gutters">
                <!-- Left Info Column -->
                <div class="col-md-5 col-sm-12 contact-info-side">
                    <h3 class="text-white mb-20 " style="font-weight: 700;">Ready to Transform Your Team?</h3>
                    <p class="text-white mb-40" style="opacity: 0.9; font-size: 14px; line-height: 1.6;">
                        Schedule a discovery call with our experts to explore how we can help you build
                        high-performing remote teams.
                    </p>

                    <div class="contact-item mb-20">
                        <div class="icon-circle"><i class="fa fa-envelope"></i></div>
                        <div class="contact-text">
                            <strong>Message Us</strong>
                            <span>info@mysoftheaven.com</span>
                        </div>
                    </div>

                    <div class="contact-item mb-20">
                        <div class="icon-circle"><i class="fa fa-phone"></i></div>
                        <div class="contact-text">
                            <strong>Call Us</strong>
                            <span>+880 1958-633202</span>
                        </div>
                    </div>

                    <div class="contact-item mb-20">
                        <div class="icon-circle"><i class="fa fa-map-marker"></i></div>
                        <div class="contact-text">
                            <strong>Visit Us Head Office</strong>
                            <span>P.R.Tower, 924/1, Level 8, Begum Rokeya Sarani, Shewrapara, Mirpur,
                                Dhaka-1216.</span>
                        </div>
                    </div>

                    <div class="contact-item mb-40">
                        <div class="icon-circle"><i class="fa fa-map-marker"></i></div>
                        <div class="contact-text">
                            <strong>Visit Us Corporate Office</strong>
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
                    <h3 class="mb-20" style="font-weight: 700; color: #000;">Get in Touch</h3>
                    <p class="mb-30" style="font-size: 13px; color: #666; line-height: 1.6;">
                        About 4.2 crore Holding data, 11+ crore holdingowner data stored in the system. Citizen
                        paying their LD Tax through the system and every day a good amount of revenue automatically
                        received by Bangladesh bank.
                    </p>

                    <?php if ($this->session->flashdata('success_message')): ?>
                        <div class="alert alert-success">
                            <?php echo $this->session->flashdata('success_message'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('error_message')): ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('error_message'); ?>
                        </div>
                    <?php endif; ?>

                    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

                    <form action="<?= base_url('site/contact_add') ?>" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 form-group">
                                <label>Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control form-control-custom" placeholder=""
                                    required>
                            </div>
                            <div class="col-md-6 col-sm-12 form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control form-control-custom" placeholder=""
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 form-group">
                                <label>Phone Number <span class="text-danger">*</span></label>
                                <input type="text" name="phone" class="form-control form-control-custom" placeholder=""
                                    required>
                            </div>
                            <div class="col-md-6 col-sm-12 form-group">
                                <label>Company Name <span class="text-danger">*</span></label>
                                <input type="text" name="company" class="form-control form-control-custom"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 form-group">
                                <label>Select Industry <span class="text-danger">*</span></label>
                                <select name="industry" class="form-control form-control-custom">
                                    <option value="">Select an Industry</option>
                                    <option value="IT">IT</option>
                                    <option value="Healthcare">Healthcare</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Education">Education</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-12 form-group">
                                <label>Select Service <span class="text-danger">*</span></label>
                                <select name="service" class="form-control form-control-custom">
                                    <option value="">Select a service</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="App Development">App Development</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-12 form-group">
                                <label>Select Budget Range <span class="text-danger">*</span></label>
                                <select name="budget" class="form-control form-control-custom">
                                    <option value="">Select a budget range</option>
                                    <option value="check">Check</option>
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