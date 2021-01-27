<?php include("header.php");?>
<html>
<head>
   <link rel="stylesheet" href="<?= base_url();?>assets/css/fotp.css">
   
</head>
<body>
<div   class="container-fluid ">
   
   <div class="otp_form">
      <p >OTP send to your Email, please verify in the registered Email-Id</p>
      <?php echo form_open('user/fcngpass','id="form2"');?>
      <div id="ottp" class="form-group"  >
         <div class="otp_label">
            <h4 style="text-align:center;">Please Enter Your OTP</h4>
         </div>
         
         <div  class="otp_input">
            <?php echo form_input(['class'=>'form-control fon','name'=>'otp','placeholder'=>'Enter OTP']); ?>
            <?php echo form_error('otp') ?>
         </div>
          
         <div class="otp_button">
            <!-- <input  class=" btn btn-info" type=submit value="Resend" onClick="" name='Resend_otp'>
          --><?php echo anchor('admin/resend/','Resend',['class'=>"resend_btn"]) ?>
            <input  class=" btn btn-info" type=submit onClick="" name='submit_otp'>
         </div>
      </div>
   </div>
</div>
</body>
</html>