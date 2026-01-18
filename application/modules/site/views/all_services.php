<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>
                        <?= $meta_title ?>
                    </h1>
                </div>
                <div class="col-md-5 text-right">
                    <ul class="breadcrumb">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li class="active">
                            <?= $meta_title ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="ht-section services-bg-gradient" id="services">
        <div class="container">
            <div class="service-header-modern" data-aos="fade-right">
                <div class="service-title-block">
                    <h2 class="service-title-modern">Our <span class="text-blue">Services</span></h2>
                </div>
                <p class="service-desc-modern">
                    We provide robust, scalable, and efficient solutions to various clients around the world.
                </p>
            </div>

            <div class="row">
                <?php
                // Color cycle: icon-blue, icon-cyan, icon-orange, icon-purple
                $colors = ['icon-blue', 'icon-cyan', 'icon-orange', 'icon-purple'];
                $color_count = count($colors);
                $i = 0;
                ?>
                <?php if (!empty($services)): ?>
                    <?php foreach ($services as $service): ?>
                        <?php
                        $color_class = $colors[$i % $color_count];
                        $i++;
                        ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-card-modern" data-aos="fade-up" data-aos-delay="<?= ($i * 100) ?>">
                                <div class="service-icon-floating <?= $color_class ?>">
                                    <?php if (!empty($service->fa_icon)): ?>
                                        <i class="fa <?= $service->fa_icon ?>"></i>
                                    <?php else: ?>
                                        <i class="fa fa-cogs"></i>
                                    <?php endif; ?>
                                </div>
                                <h4 class="service-card-title">
                                    <?= $service->name ?>
                                </h4>
                                <a href="<?= base_url('service/' . $service->slug) ?>" class="btn-service-view">View Service</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No services found.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>

<style>
    /* Copied from home2.php */
    .services-bg-gradient {
        background: linear-gradient(180deg, #f3f5f8 0%, #e8ecf1 100%);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .services-bg-gradient::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.08) 0%, rgba(59, 130, 246, 0) 60%);
        z-index: 0;
        pointer-events: none;
    }

    .services-bg-gradient .container {
        position: relative;
        z-index: 1;
    }

    .service-title-block {
        border-left: 5px solid #0056b3;
        padding-left: 20px;
        margin-bottom: 15px;
    }

    .service-title-modern {
        font-weight: 700;
        font-size: 32px;
        color: #000;
        margin: 0;
    }

    .service-desc-modern {
        color: #666;
        max-width: 700px;
        line-height: 1.6;
    }

    .service-card-modern {
        background: transparent;
        box-shadow: none;
        border-radius: 20px;
        padding: 12px !important;
        position: relative;
        margin-bottom: -3px;
        transition: transform 0.3s ease;
        min-height: 149px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        margin-top: 45px;
        border: none;
        overflow: visible;
        z-index: 1;
    }

    /* The White Scoop Shape */
    .service-card-modern::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, #ffffff 0%, #edf6ff 100%);
        border-radius: 20px;
        mask-image: radial-gradient(circle at calc(100% - 50px) 0, transparent 40px, black 41px);
        -webkit-mask-image: radial-gradient(circle at calc(100% - 50px) 0, transparent 40px, black 41px);
        z-index: -1;
        filter: drop-shadow(0 5px 20px rgba(0, 0, 0, 0.05));
        transition: filter 0.3s ease;
    }

    /* Watermark - Using Mask for Color Control */
    .service-card-modern::after {
        content: '';
        position: absolute;
        bottom: 0px;
        right: 0px;
        width: 85px;
        height: 89px;
        background-color: #dbeafe;
        mask-image: url("http://127.0.0.1/mysoftweb/home2media/vector.png");
        -webkit-mask-image: url("http://127.0.0.1/mysoftweb/home2media/vector.png");
        mask-size: contain;
        -webkit-mask-size: contain;
        mask-repeat: no-repeat;
        -webkit-mask-repeat: no-repeat;
        mask-position: bottom right;
        -webkit-mask-position: bottom right;
        opacity: 1;
        pointer-events: none;
        z-index: 0;
        border-radius: 0 0 20px 0;
    }

    .service-card-modern:hover {
        transform: translateY(-5px);
    }

    .service-card-modern:hover::before {
        filter: drop-shadow(0 15px 30px rgba(0, 0, 0, 0.08));
    }

    .service-icon-floating {
        position: absolute;
        top: -30px;
        right: 20px;
        width: 60px;
        height: 60px;
        background: #fff;
        border-radius: 50%;
        border: 6px solid #eef6fc;
        box-shadow: none;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
    }

    .icon-blue i {
        color: #1a73e8;
        font-size: 24px;
    }

    .icon-cyan i {
        color: #00bcd4;
        font-size: 24px;
    }

    .icon-orange i {
        color: #ff9800;
        font-size: 24px;
    }

    .icon-purple i {
        color: #9c27b0;
        font-size: 24px;
    }

    .service-card-title {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 16px;
        margin-top: 29px;
        color: #000;
        line-height: 1.4;
        position: relative;
        z-index: 1;
        letter-spacing: -0.5px;
    }

    .btn-service-view {
        background: #fff;
        color: #1a73e8;
        border: 1px solid #eef6fc;
        border-radius: 50px;
        padding: 8px 24px;
        font-size: 14px;
        font-weight: 600;
        display: inline-block;
        transition: all 0.3s;
        text-align: center;
        width: auto;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        align-self: flex-start;
        position: relative;
        z-index: 1;
        text-decoration: none !important;
    }

    .btn-service-view:hover {
        background: #1a73e8;
        color: #fff;
        box-shadow: 0 8px 20px rgba(26, 115, 232, 0.2);
        transform: translateY(-2px);
        border-color: #1a73e8;
    }
</style>