<body class="hold-transition register-page">
<div class="row col-md-8 col-md-offset-2">
  <div class="">
    <div class="register-logo"> <a href="<?php echo base_url();?>"><b>Registration </b>Now</a> </div>
    <p style="text-align:center;">some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text some text</p>
    <br>
  </div>
  <div class="row">
    <div class="col-lg-5 col-md-5 pull-left hidden-sm hidden-xs">
      <h4>Instructions</h4>
      <ul>
        <li>some text some text some text some text some text</li>
        <li>some text some text some text some text some text</li>
        <li>some text some text some text some text some text</li>
        <li>some text some text some text some text some text</li>
        <li>some text some text some text some text some text</li>
        <li>some text some text some text some text some text</li>
        <li>some text some text some text some text some text</li>
        <li>some text some text some text some text some text</li>
      </ul>
    </div>
    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 pull-right">
      <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <div id="infoMessage"><?php echo $message;?></div>
        <?php echo form_open("registration");?>
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <div class="form-group has-feedback"> <?php echo form_input($first_name);?> <span class="glyphicon glyphicon-shopping-cart form-control-feedback"></span> </div>
            <div class="form-group has-feedback"> <?php echo form_input($last_name);?> <span class="glyphicon glyphicon-globe form-control-feedback"></span> </div>            
            <?php
              if($identity_column!=='email') {
                  echo '<div class="form-group has-feedback">';
                  echo form_error('identity');
                  echo form_input($identity);
                  echo '<span class="glyphicon glyphicon-globe form-control-feedback"></span> </div>';
              }
            ?>
            <div class="form-group has-feedback"> <?php echo form_input($company);?> <span class="glyphicon glyphicon-record form-control-feedback"></span> </div>            
            <div class="form-group has-feedback"> <?php echo form_input($email);?> <span class="glyphicon glyphicon-map-marker form-control-feedback"></span> </div>
          </div>

          <div class="col-xs-12 col-md-6">
            <div class="form-group has-feedback"> <?php echo form_input($phone);?> <span class="glyphicon glyphicon-envelope form-control-feedback"></span> </div>
            <div class="form-group has-feedback"> <?php echo form_input($password);?> <span class="glyphicon glyphicon-lock form-control-feedback"></span> </div>
            <div class="form-group has-feedback"> <?php echo form_input($password_confirm);?> <span class="glyphicon glyphicon-lock form-control-feedback"></span> </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox">
                I agree to the <a href="#">terms</a> </label>
            </div>
          </div>
          <div class="col-xs-4"> <?php echo form_submit('submit', 'Registration', "class='btn btn-primary btn-block btn-flat'"); ?> </div>
        </div>
        <?php echo form_close();?> 
        <a href="<?php echo base_url('login');?>" class="text-center">I already have a membership</a> </div>
    </div>
  </div>
</div>