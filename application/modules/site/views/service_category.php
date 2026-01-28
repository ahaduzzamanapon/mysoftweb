<div class="container" style="padding-top: 50px; padding-bottom: 50px;">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center" style="margin-bottom: 30px;">
                <?= $category_info->main_service_name ?>
            </h2>
        </div>
    </div>
    <div class="row">
        <?php if (!empty($services)) {
            foreach ($services as $item) {
                ?>
                <div class="col-md-4 col-sm-6">
                    <div class="service-card-modern">
                        <div class="card-icon-wrapper">
                            <div class="card-icon">
                                <i class="<?= $item->fa_icon ?>"></i>
                            </div>
                        </div>
                        <h3 class="service-title">
                            <?= $item->name ?>
                        </h3>
                        <!-- <p class="service-description">
                            <?= substr(strip_tags($item->short_desc), 0, 100) ?>...
                        </p> -->
                        <a href="<?= base_url('service/' . $item->slug) ?>" class="btn-service-view">
                            View Details <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            <?php }
        } else { ?>
            <div class="col-md-12 text-center">
                <p>No services found in this category.</p>
            </div>
        <?php } ?>
    </div>
</div>

<style>
    /* Reusing styles from home2.php for consistency */
    .service-card-modern {
        background: #fff;
        border-radius: 15px;
        padding: 30px 20px;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        /* Reduced shadow */
        transition: all 0.3s ease;
        text-align: center;
        position: relative;
        overflow: hidden;
        height: 100%;
        border: 1px solid #f0f0f0;
        display: flex;
        /* Flexbox for layout */
        flex-direction: column;
        /* Stack children vertically */
        justify-content: space-between;
        /* Space out content, button at bottom */
        min-height: 320px;
        /* Increased min-height */
    }

    .service-card-modern:hover {
        transform: translateY(-5px);
        /* Reduced lift */
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        /* Softer hover shadow */
    }

    /* Card Icon Wrapper */
    .card-icon-wrapper {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
        /* Soft Blue Gradient */
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        transition: all 0.5s ease;
        position: relative;
        z-index: 1;
    }

    .service-card-modern:hover .card-icon-wrapper {
        background: linear-gradient(135deg, #2196f3 0%, #1976d2 100%);
        /* Darker Blue on Hover */
        transform: scale(1.1) rotate(5deg);
    }

    /* Card Icon */
    .card-icon i {
        font-size: 32px;
        color: #1976d2;
        /* Primary Blue */
        transition: all 0.3s ease;
    }

    .service-card-modern:hover .card-icon i {
        color: #fff;
    }

    /* Service Title */
    .service-title {
        font-size: 20px;
        /* Slightly larger title */
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
        font-family: 'Poppins', sans-serif;
        /* Modern Font */
    }

    /* Service Description */
    .service-description {
        font-size: 14px;
        color: #666;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    /* View Details Button */
    .btn-service-view {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 25px;
        background-color: transparent;
        color: #1976d2;
        border: 2px solid #1976d2;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        margin-top: auto;
        /* Push to bottom */
    }

    .btn-service-view:hover {
        background-color: #1976d2;
        color: #fff;
        box-shadow: 0 5px 15px rgba(33, 150, 243, 0.3);
    }

    .btn-service-view i {
        margin-left: 8px;
        transition: transform 0.3s ease;
    }

    .btn-service-view:hover i {
        transform: translateX(5px);
    }
</style>