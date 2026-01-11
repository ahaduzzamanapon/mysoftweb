

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1><?= $notable_data->notable_title?></h1>
                </div>
                <div class="col-md-5 text-right">
                    <ul class="breadcrumb">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li class="active"><?= $notable_data->notable_title?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <hr class="tall_slim">

        <div class="row">
            <div class="col-12">
                <h4 class="details-title"><?= $notable_data->notable_title?></h4>
            </div>
        </div>
        <div class="row notable-details">
            <div class="col-lg-2 col-12 logo">
                <a href="<?= $notable_data->website_link ?>">
                    <img src="<?= base_url('notable_img/').$notable_data->notable_logo?>" class="img-circle animatinTrans" alt="">
                </a>
            </div>
            <div class="col-lg-10 col-12">
                <p>
                    <?= $notable_data->short_description?>
                </p>
            </div>
        </div>

        <div class="d-flex flex-column-reverse flex-lg-row gap-3">
            <div class="col-md-6">
                <div class="notable-related-details">
                    <div class="notable-intoClient">
                        <h3 class="related-title">CLIENT NAME</h3>
                            <?php
                            $notable_Client = json_decode($notable_data->client_info);
                            if (!empty($notable_Client)) {
                                foreach ($notable_Client as $client) {
                            ?>
                                    <div class="d-flex align-item-center gap-2">
                                        <img src="<?= base_url('notable_img/').$client->image ?>" class="img-circle animatinTrans" alt="">
                                        <h4 class="platform-title"><?= $client->name; ?></h4>
                                    </div>
                            <?php
                                }
                            } 
                            ?>
                    </div>
                    <div class="notable-platform-available">
                        <h3 class="related-title"> AVAILABLE PLATFORMS</h3>
                        <?php
                        $notable_available_platform = json_decode($notable_data->available_platfrom_info);

                            if(!empty($notable_available_platform)){
                                foreach($notable_available_platform as $platform){
                                    ?>
                                        <div class="d-flex align-item-center gap-2">
                                            <img src="<?= base_url('notable_img/').$platform->image ?>" alt="">
                                            <a href="<?= $platform->name ?>" target="_blank" class="platform-title"><?= $platform->name ?></a>
                                        </div>
                                    <?php
                                }}
                                ?>
                    </div>

                </div>
                <?php
                    if (!empty($notable_data->aword_info)) {
                    ?>
                        <div class="notable-under-details">
                            <h3>PURPOSE OF THE SYSTEM</h3>
                            <p>
                                <?= $notable_data->details_description ?>
                            </p>
                        </div>
                    <?php
                    }
                    ?>


                <?php
                    $award_info = json_decode($notable_data->aword_info);
                    if (!empty($award_info)) {
                    ?>
                        <div class="award-info">
                    <h3>AWARD & RECOGNITION</h3>
                    <div class="award-details">
                        <?php
                        foreach ($award_info as $award) {
                        ?>
                            
                        <div class="award-items">
                        <img src="<?= base_url('notable_img/').$award->image ?>" alt="">
                        <p><?= $award->name?></p>
                        </div>

                        <?php
                        }
                        ?>
                    </div>
                    </div>

                    <?php
                    }
                    ?>
                    


                
            </div>

            <div class="col-md-6 notable-main-img">
                <img src="<?= base_url('notable_img/').$notable_data->image ?>" alt="">
            </div>

        </div>

        <hr class="tall">
    </div>
</div>