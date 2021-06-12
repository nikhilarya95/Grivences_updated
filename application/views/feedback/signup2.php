<?php include ('header.php');?> 
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
  #form{
    box-shadow: 5px 10px 18px #888888;
     
    padding: 6px;
      margin-top: 5%;
      margin-left:35%;
      width:30%;
  }
   
   #from .btn{
      margin-left: 10%;
      box-shadow: 2px 2px 5px #888888;
  }
</style>
</head>
<body>
<?php echo form_open('user/signup2','id="form"')?>
<div id="new">
		<div  class="form-group">
			
<?php //echo  form_password(['class'=>"form-control pas1",'type'=>"password",'value'=>set_value('password1'),'id'=>"pwd",'placeholder'=>"Enter OTP for Verify",'onblur'=>"pas();",'onfocus'=>"cl6();",' name'=>"password1"]);?>
      

            <?php echo form_label('Password');?>
            
           <!-- <i onclick="show();" class="fa fa-eye f" id="eye"></i>-->
            
            <?php echo  form_password(['class'=>"form-control pas1",'type'=>"password",'value'=>set_value('password1'),'id'=>"pwd",'placeholder'=>"Enter Password",'onblur'=>"pas();",'onfocus'=>"cl6();",' name'=>"password1"]);?>
           <!-- <p id="pas_1"></p>--><?php echo form_error('password1') ?>
        </div>

		<div class="form-group">
			
            <?php echo form_label('Confirm Password');?>
            <!--<i class="fa fa-times pass_a "id="pass_1"></i>
             <i class="fa fa-check pass_b"id="pass_2"></i>-->
             <?php echo  form_password(['class'=>"form-control",'type'=>"password",'value'=>set_value('password2'),'id'=>"bor_4",'placeholder'=>"Enter confirm Password",'onblur'=>"pas();",'onfocus'=>"cl4();",' name'=>"password2"]);?>
            <?php echo form_error('password2') ?>
        </div>  
        
        <div class="form-group">
			
            <?php echo form_label('Security Question');?>
<select class="form-control" name="SecuQues1" id="securityQuestion"><?php echo form_error('SecurityQuestion') ?>
    <option>Select one</option>
         <option value="what is your pet name?">what is your pet name?</option>
        <option value="what is your favorate city name?">what is your favorate city name?</option>
        <option value="what is your first teacher name?">what is your first teacher name?</option>
        <option value="what is your favorate colour name?">what is your favorate colour name?</option>
        <option value="what is your favorate book name?" >what is your favorate book name?</option>
       </select> 
       <?php echo  form_input(['class'=>"form-control",'type'=>"text",'value'=>set_value('security_answer'),' name'=>"security_answer"]);?>
       
        </div>
        <?php echo form_error('security_answer') ?>
        <div class="form-group">
			
            <select class="form-control" name="SecuQues2" id="securityQuestion2">
    <option>Select One</option>
    <option value="what is your pet name?">what is your pet name?</option>
        <option value="what is your favorate city name?">what is your favorate city name?</option>
        <option value="what is your first teacher name?">what is your first teacher name?</option>
        <option value="what is your favorate colour name?">what is your favorate colour name?</option>
        <option value="what is your favorate book name?" >what is your favorate book name?</option>
       </select> <?php echo form_error('securityQuestion') ?>
       <?php echo  form_input(['class'=>"form-control",'type'=>"text",'value'=>set_value('security_answer1'),' name'=>"security_answer1"]);?>
           
        </div>
        <?php echo form_error('security_answer1') ?>
        <div class="form-group">
        
        <?php echo form_checkbox(['terms','I accept the','false']);?>
          <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
			<button  id="sign_up" type="submit" class="btn btn-primary btn-block btn-lg" data-toggle='modal' data-target='#myModal'>Sign Up</button>
		</div>
    <script>
     $(document).ready(function () {
    security_Que1();
             $("#securityQuestion").change(function () {
              security_Que1($(this).val() );
    });
    $("#securityQuestion2").change(function () {
    security_Que2($(this).val() );
    });
});

function security_Que1(p){

  $(`#securityQuestion2 option[value="${p}"]`).closest('option').hide();

  $('#securityQuestion2').find('option').each(function() {
    if($(this).val()!=p)
  {
  $(`#securityQuestion2 option[value="${$(this).val()}"]`).closest('option').show();
  }
});
};
function security_Que2(p){

$(`#securityQuestion option[value="${p}"]`).closest('option').hide();

$('#securityQuestion').find('option').each(function() {
  if($(this).val()!=p)
{
$(`#securityQuestion option[value="${$(this).val()}"]`).closest('option').show();
}
});
};


</script> 
</body>
</html>