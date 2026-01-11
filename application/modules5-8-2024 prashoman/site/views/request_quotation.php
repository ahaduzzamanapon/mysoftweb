<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-7"><h1><?=$meta_title?></h1></div>
                <div class="col-md-5 text-right">
                    <ul class="breadcrumb">
                        <li><a href="<?=base_url()?>">Home</a></li>
                        <li class="active"><?=$meta_title?></li>
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

                <?php if($this->session->flashdata('success')):?>
                    <div class="alert alert-success">
                        <a class="close" data-dismiss="alert">&times;</a>
                        <?php echo $this->session->flashdata('success');?>
                    </div>
                <?php endif; ?>

                <h4 class="push-top">Request  <strong>Quotation </strong>Form</h4>
                <?php echo form_open_multipart("request-quotation");?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <div><?php echo form_error('name'); ?></div>
                        <input type="text" name="name" class="form-control"  placeholder="Name">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone/Mobile</label>
                        <div><?php echo form_error('phone'); ?></div>
                        <input type="text" name="phone"  class="form-control"  placeholder="Phone/Mobile" >
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <div><?php echo form_error('email'); ?></div>
                        <input type="email" name="email" class="form-control"  placeholder="Email">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Office Address</label>
                        <div><?php echo form_error('office_address'); ?></div>
                        <input type="text" name="office_address"  class="form-control"  placeholder="Office Address">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product</label>
                        <div><?php echo form_error('product'); ?></div>
                        <select name="product"  class="form-control" >
                            <option value="">-- Select Product --</option>
                            <?php foreach ($products as $item) { ?>
                            <option value="<?= $item->id; ?>"><?= $item->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Services</label>
                        <div><?php echo form_error('services'); ?></div>
                        <select name="services"  class="form-control" >
                            <option value="">-- Select Services --</option>
                            <?php foreach ($services as $item) { ?>
                            <option value="<?= $item->id; ?>"><?= $item->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Describe your Requirement</label>
                        <div><?php echo form_error('details'); ?></div>
                        <textarea class="form-control" rows="8" name="details"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php echo form_submit('submit', 'Submit', "class='btn btn-primary'"); ?>
                </div>
                <?php echo form_close();?>
            </div>

            <div class="col-md-4">
                <h4>Our <strong>Products</strong></h4>
                <div class="row">
                    <ul class="portfolio-list sort-destination">
                        <?php foreach ($products as $item) { ?>
                        <li class="col-md-6 col-sm-2 col-xs-3">
                            <div class="img-thumbnail">
                                <a href="<?=base_url().'product/'.$item->slug;?>" class="thumb-info">
                                    <?php 
                                    $img_path = base_url().'product_img/';
                                    if($item->image_file != NULL){
                                        $src= $img_path.$item->image_file;
                                        echo "<img src='$src' alt='$item->name' class='img-responsive'>";
                                    }
                                    ?>
                                </a>
                            </div>
                            <h6><?=$item->name?></h6>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

        </div>
        
        <hr class="tall">
    </div>
</div>