<?php include('header.php');?>
<html>
<head>
   <link rel="stylesheet" href="<?=base_url();?>assets/css/passchange.css">
   <link href="<?= base_url();?>assets/css/bootstrap-4.2.1/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url();?>assets/css/bootstrap-4.2.1/js/bootstrap.min.js" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="rows">
            <div class="col-lg-12">
               <?php echo form_open('user/changedpassword','id="form" style="margin-top:5%;margin-bottom:15%;"');?>
        
  <fieldset>
  <!-- <div class="form-group">
      <label for="InputEmail1">Email address</label>
      <?php //echo  form_input(['class'=>"form-control",'type'=>"email",'value'=>set_value('cemail'),'id'=>"bor_3",'placeholder'=>"eg:-xyz@kongu.edu",'onblur'=>"ema();",'onfocus'=>"cl3();",' name'=>"cemail"]);?>
     
      <?php //echo form_error('cemail') ?>
    </div> -->
 <!-- <div class="form-group">
      
      <?php //echo form_label('Current Password','InputPassword1');?>
      <?php //echo form_password(['class'=>'form-control','placeholder'=>"Enter Current Password",'id'=>"exampleInputpassword1",'name'=>"pass1"]);?>
      <?php //echo form_error('pass1') ?>
     
    </div> -->
    <div class="form-group ">
      
      <?php echo form_label('New Password','InputPassword2');?>
      <i onclick="show1();" class="fa fa-eye f" id="eye1"></i>
      <?php echo form_password(['class'=>'form-control','placeholder'=>"Enter New password",'id'=>"exampleInputpassword2",'name'=>"pass2"]);?>
      <?php echo form_error('pass2') ?>
       
       
       <?php echo form_label('Re-enter Password','InputPassword2');?>
       <i onclick="show2();" class="fa fa-eye f" id="eye1"></i>
       <?php echo form_password(['class'=>'form-control','placeholder'=>"Re-enter Password",'id'=>"exampleInputpassword3",'name'=>"pass3"]);?>
       <?php echo form_error('pass3') ?>
      
      
    </div>
    <div class="form-group button_group">
   <?php echo form_button(['class'=>"btn btn-info",'type'=>"submit",'content'=>"Submit"]);?>
    
    <?php echo anchor('user/forget','Back','class="btn btn-info"') ;?>

      </div>
    </fieldset>
   
    
 
</form>
</div>

</div>
</body>
<script>
 function show1()
{
    
    var eye=document.getElementById('exampleInputpassword2');

   if (eye.type=="password"){
    eye.type="text";}
    else{
    eye.type="Password";}
}
function show2()
{
    
    var eye=document.getElementById('exampleInputpassword3');

   if (eye.type=="password"){
    eye.type="text";}
    else{
    eye.type="Password";}
}
</script>

</html>
<?php include ('footer.php');?>