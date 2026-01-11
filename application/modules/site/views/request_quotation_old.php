<section id="page-title">
	<div class="container clearfix">
		<h1><?=$meta_title?></h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_url()?>">Home</a></li>
			<li class="active"><?=$meta_title?></li>
		</ol>
	</div>
</section><!-- #page-title end -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row clearfix">
                <div id="infoMessage"><?php //echo $message;?></div>            
                <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');?>
                </div>
                <?php endif; ?>
                <div class="col-sm-9">
                    <div class="row">

                        <?php echo form_open_multipart("site/request_quotation");?>
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

                </div>

                <div class="line visible-xs-block"></div>

                <div class="col-sm-3 clearfix">

                    <div class="fancy-title title-border">
                        <h4>Other Products</h4>
                    </div>

                    <?php foreach ($limit_products as $item) { ?>
                        <a href="<?=base_url().'product/'.$item->slug;?>">
                            <?php 
                                 $img_path = base_url().'product_img/';
                                 if($item->image_file != NULL){
                                    $src= $img_path.$item->image_file;
                                    // echo "<img src='$src'>";
                                    echo "<img src='$src' alt='$item->name' >";
                                 }
                            ?>
                        </a>
                        <h4> <a href="<?=base_url().'product/'.$item->slug;?>"><?=$item->name;?> </a></h4>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</section><!-- #content end -->
