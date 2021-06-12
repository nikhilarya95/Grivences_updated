
<head>
<link href="<?= base_url();?>assets/css/bootstrap-4.2.1/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url();?>assets/css/bootstrap-4.2.1/js/bootstrap.min.js" rel="stylesheet">
<link href="<?= base_url();?>assets/css/login.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>
   
  </style>
</head>
<body>

<?php echo form_open('Admin','id="form"');?>
<h1 class="form_title">Institute Login</h1>
  <fieldset>
  
 <div class="form-group">
      <?php if($error=$this->session->flashdata('Login_failed')): ?>
      <div class="row">
      <div class="col-lg-12"style="margin-left:80px;">
        <p class="text-danger"><?php echo $error ?></p>
      </div>
      </div>
<?php endif;?>
        
      <?php echo form_label('Email ID','InputEmail');?>
      <?php echo  form_input(['class'=>"form-control",'type'=>"email",'id'=>"email_1",'placeholder'=>"Enter email",'value'=>set_value('emil'),'name'=>"emil"])?>
     <?php echo form_error('emil') ?>
    </div>
    <div class="form-group">
      
      <?php echo form_label('Password','password');?>
       <i onclick="show();" class="fa fa-eye f" id="eye"></i> 
      <?php echo  form_password(['class'=>"form-control",'id'=>"pass_1",'placeholder'=>"Enter Password",'value'=>set_value('pass'),'name'=>"pass"]);?>
      <?php echo form_error('pass') ?>
    </div>
   
    
    
    
    <?php echo form_button(['class'=>"btn btn-info",'type'=>"submit",'content'=>"Login",'onclick'=>""]);?>
 
 
     <br>
      <!-- <p>New user? <?php// echo anchor('User/signup','Click here');?></p> -->
     <p class="forget-color"><?php echo anchor('user/forget/','Forget password') ?></p>            
     
    
    <?php form_close()?>

    <script>
      function show()
{
    var pd=document.getElementById('pdw');
    var eye=document.getElementById('pass_1');

   if (eye.type=="password"){
    eye.type="text";}
    else{
    eye.type="Password";}
}





    </script>
</body>
