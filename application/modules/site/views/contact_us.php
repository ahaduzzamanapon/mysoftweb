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
        <?php $this->load->view('site/includes/contact_section'); ?>

        <hr class="tall">

        <h4>Google <strong>Maps</strong></h4>
        <div class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7029673607103!2d90.36247637439307!3d23.793589387118708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a103ea6a8d%3A0x679516e132e65f7a!2sMysoft%20Heaven%20(BD)%20Ltd.!5e0!3m2!1sen!2sbd!4v1714031551691!5m2!1sen!2sbd"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>