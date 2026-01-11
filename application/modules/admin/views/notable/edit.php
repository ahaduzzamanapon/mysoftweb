<section class="content-header">
    <h1> <?= $meta_title; ?> </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><?= $meta_title; ?></li>
    </ol>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Notable</h3>
                    <a href="<?= base_url('admin/notable/all') ?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Notable</a>
                </div>
                <?php echo form_open_multipart("admin/notable/edit/".$info->id); ?>
                <div class="box-body">
                    <div id="infoMessage"><?php //echo $message;
                                            ?></div>
                    <div><?php //echo validation_errors(); 
                            ?></div>
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success">
                            <a class="close" data-dismiss="alert">&times;</a>
                            <?php echo $this->session->flashdata('success');; ?>
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Notable Title</label>
                                <div><?php echo form_error('name'); ?></div>
                                <input type="text" class="form-control" name="name" value="<?= set_value('name', $info->notable_title) ?>">
                            </div>
                            <div class="form-group">
                                <label>Notable logo</label>
                                <div><?php echo form_error('notable_logo'); ?></div>
                                <div>
                                <img id="notableLogo" width="50px" height="50px" src="<?= base_url('notable_img/').$info->notable_logo?>" alt="">
                                </div>
                                <input onchange="handleImage(this,'notableLogo')" type="file" name="notable_logo">
                                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                            </div>
                            <div class="form-group">
                                <label>website Link</label>
                                <div><?php echo form_error('website_link'); ?></div>
                                <input type="text" class="form-control" name="website_link" value="<?= set_value('website_link', $info->website_link) ?>">
                                
                            </div>

                            <div class="form-group">
                                <label>Image Upload</label>
                                <div><?php echo form_error('notable_image'); ?></div>
                                <div>
                                <img id="uploadImage" width="50px" height="50px" src="<?= base_url('notable_img/').$info->image?>" alt="">
                                </div>
                                <input onchange="handleImage(this,'uploadImage')" type="file" name="notable_image">
                                <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                            </div>

                            <div class="form-group">
                                <label>Short Description</label>
                                <div><?php echo form_error('short_desc'); ?></div>
                                <textarea class="form-control" rows="3" name="short_desc" placeholder="Short Description Maximum 255 character"><?= set_value('short_desc', $info->short_description) ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Details Description</label>
                                <div><?php echo form_error('description'); ?></div>
                                <textarea id="editor1" class="form-control" name="description" rows="10" cols="80"><?= set_value('description', $info->details_description) ?></textarea>
                            </div>


                        </div>

                        <div class="col-md-5">

                            <div class="form-group">
                                <label>client Info: </label>
                                <table class="table" id="clientInfo">

                                    <?php
                                    $client_data= json_decode($info->client_info);
                                        ?>
                                        <tr>
                                            <th>
                                                <span>Logo</span>
                                            </th>
                                            <th>
                                                <span>Name/ Tittle</span>
                                            </th>
                                            <th>
                                                <button onclick="addItem(event,'clientInfo','client_logo','client_name')"><i class="fa fa-solid fa-plus" style="color: green; cursor:pointer;"></i></button>
                                            </th>
                                        </tr>
                                    <?php
                                    foreach($client_data as $key=> $client){
                                    ?>
                                    <tr style="border-bottom:1px solid blue;">
                                        <td>
                                            <img width="50px" height="50px" src="<?= base_url('notable_img/').$client->image?>" alt="">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" value="<?= set_value('client_name', $client->name) ?>" disabled>
                                            
                                            <input type="hidden" name="client_logo_not_delete[]" value="<?=$key?>">
                                        </td>
                                        <td>
                                            <button onclick="removeItem(event,this)" ><i class="fa fa-solid fa-minus" style="color: red; cursor:pointer;"></i></button>                                        
                                        </td>
                                    </tr>

                                    <?php }
                                    ?>
                                    <tr style="border-bottom:1px solid blue;">
                                        <td>
                                            <input type="file" name="client_logo[]">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="client_name[]" value="<?= set_value('client_name') ?>">
                                        </td>
                                    </tr>
                                    
                                </table>

                            </div>

                            <div class="form-group">
                                <label>Available Platfrom Info: </label>
                                <table class="table" id="availablePlatfromInfo">

                                    <?php
                                    $platfrom_info= json_decode($info->available_platfrom_info);
                                    ?>
                                    <tr>
                                        <th>
                                            <span>Logo</span>
                                        </th>
                                        <th>
                                            <span>Link</span>
                                        </th>
                                        <th>
                                            <button onclick="addItem(event,'availablePlatfromInfo','platfrom_logo','platfrom_link')" id="addClientItem"><i class="fa fa-solid fa-plus" style="color: green; cursor:pointer;"></i></button>
                                        </th>
                                    </tr>
                                    <?php
                                        
                                    foreach($platfrom_info as $key=> $avilabe_platfrom){
                                    ?>
                                    
                                    <tr style="border-bottom:1px solid blue;">
                                        <td>
                                        <img width="50px" height="50px" src="<?= base_url('notable_img/').$avilabe_platfrom->image?>" alt="">
                                        
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" value="<?= set_value('platfrom_link', $avilabe_platfrom->name) ?>" disabled>
                                            <input type="hidden" name="platfrom_not_delete[]" value="<?=$key?>">
                                        </td>
                                        <td>
                                            <button onclick="removeItem(event,this)" ><i class="fa fa-solid fa-minus" style="color: red; cursor:pointer;"></i></button>                                        
                                        </td>
                                    </tr>
                                    <?php } 
                                    ?>
                                    <tr style="border-bottom:1px solid blue;">
                                        <td>
                                            <input type="file" name="platfrom_logo[]">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="platfrom_link[]" value="<?= set_value('platfrom_link') ?>">
                                        </td>
                                    </tr>
                                    
                                </table>

                            </div>

                            <div class="form-group">
                                <label>Aword & Recogntion Info: </label>
                                <table class="table" id="AwordInfo">

                                <?php
                                    $aword_info= json_decode($info->aword_info);
                                    ?>
                                    <tr>
                                        <th>
                                            <span>Logo</span>
                                        </th>
                                        <th>
                                            <span>Name/Title</span>
                                        </th>
                                        <th>
                                            <button onclick="addItem(event,'AwordInfo','aword_logo','aword_name')" ><i class="fa fa-solid fa-plus" style="color: green; cursor:pointer;"></i></button>
                                        </th>
                                    </tr>
                                    <?php

                                    foreach($aword_info as $key=> $aword_info){
                                    ?>                                   
                                    <tr style="border-bottom:1px solid blue;">
                                        <td>
                                        <img width="50px" height="50px" src="<?= base_url('notable_img/').$aword_info->image?>" alt="">
                                            
                                        </td>
                                        <td>
                                        <!-- <input type="text" class="form-control" name="aword_name[]"> -->
                                            <input type="text" class="form-control"  value="<?= set_value('aword_link', $aword_info->name) ?>" disabled>
                                            <input type="hidden" name="aword_logo_not_delete[]" value="<?=$key?>">
                                        </td>
                                        <td>
                                            <button onclick="removeItem(event,this)" ><i class="fa fa-solid fa-minus" style="color: red; cursor:pointer;"></i></button>                                        
                                        </td>
                                    </tr>                                    
                                    <?php }
                                   
                                    ?>
                                    <tr style="border-bottom:1px solid blue;">
                                        <td>
                                        
                                            <input type="file" name="aword_logo[]">
                                        </td>
                                        <td>
                                        <input type="text" class="form-control" name="aword_name[]" value="<?= set_value('aword_name')?>">
                                           
                                        </td>
                                    </tr>
                                    
                                </table>

                            </div>

                            <div class="form-group">
                                <label class="form-label required">Display Home</label> <br>
                                <input type="radio" name="display_home" value="1" <?= set_value('display_home',$info->display_home) == '1' ? 'checked' : ''; ?>> Yes
                                <input type="radio" name="display_home" value="0" <?= set_value('display_home',$info->display_home) == '0' ? 'checked' : ''; ?>> No
                            </div>

 
                        </div>

                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <?php //echo form_input($user_id);
                    ?>
                    <?php echo form_submit('submit', 'Save', "class='btn btn-primary pull-right'"); ?>
                </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->

<script>
   

    function removeItem(event, element){
        event.preventDefault();
         console.log("remove item");
        var row = element.parentNode.parentNode;
        row.parentNode.removeChild(row);

    }

    function addItem(event, eleId, firstInputName, secondInputName){
        event.preventDefault();
        console.log("event",event.target);
        var table = document.getElementById(eleId);
        var row = table.insertRow(2);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = `<input type="file" name=${firstInputName}[]>`;
        cell2.innerHTML = `<input type="text" class="form-control" name=${secondInputName}[]>`;
        cell3.innerHTML = '<button onclick="removeItem(event,this)" ><i class="fa fa-solid fa-minus" style="color: red; cursor:pointer;"></i></button>';
    }


    // document.getElementById('notableInput').addEventListener('change', function() {
    //     var notableLogo = document.getElementById('notableLogo');
    //     notableLogo.src = URL.createObjectURL(this.files[0]);

    // });

    function handleImage(input, id) {
        var notableLogo = document.getElementById(id);
        notableLogo.src = URL.createObjectURL(input.files[0]);
    }
</script>