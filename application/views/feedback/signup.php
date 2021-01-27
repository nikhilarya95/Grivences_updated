<?php include ('header.php');?>
<html>
<head>

        <link href="<?= base_url();?>assets/css/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url();?>assets/css/bootstrap-3.3.6/js/bootstrap.min.js" rel="stylesheet">
      
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
        <link href="<?= base_url();?>assets/css/signup.css" rel="stylesheet" type="text/css">
<!--<script >
var ck_name = /^[A-Za-z ]{3,20}$/;
var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
var ck_password = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
var ck_mobile= /^[0]?[789]\d{9}$/;
var name =form1.username.value;
var email =form1.email1.value;

var pass2word=form1.password2.value;


function mobb()
{

var mob=form1.mobile1.value;
if(!ck_mobile.test(mob)) 

{ 
    document.getElementById("mob_1").style.visibility="visible";
    document.getElementById("bor_2").style.boxShadow="red 1px 1px 11px 1px";
  
 }
else
{
    document.getElementById("mob_2").style.visibility="visible";
  document.getElementById("bor_2").style.boxShadow="green 1px 1px 11px 1px";
}
}


function fact()
{
var name =form1.username.value;
if(!ck_name.test(name)) 
{
 document.getElementById('fac_1').style.visibility="visible";
document.getElementById("bor_1").style.boxShadow="red 1px 1px 11px 1px";
  
 }
else
{document.getElementById('fac_2').style.visibility="visible";
  document.getElementById("bor_1").style.boxShadow="green 1px 1px 11px 1px";

 }
 }

function ema(){
    var email =form1.email1.value;
    if(!ck_email.test(email))
    {
 document.getElementById('email_1').style.visibility="visible";
document.getElementById("bor_3").style.boxShadow="red 1px 1px 11px 1px";
  
 }
else{document.getElementById('email_2').style.visibility="visible";
  document.getElementById('bor_3').style.boxShadow="green 1px 1px 11px 1px";

 }
 }
 
 
 
function pas()
{
    var pass1word=form1.password1.value;

 if (!ck_password.test(pass1word)) 
{
  document.getElementById("pas_1").innerHTML= "You must enter a valid Password ";
  document.getElementById("pdw").style.boxShadow="red 1px 1px 11px 1px";
 }
 else{
       document.getElementById('pdw').style.boxShadow="green 1px 1px 11px 1px";
        document.getElementById("pas_1").innerHTML= "";
 }
}


 function pass()
 {
     var pass1word=form1.password1.value;
var pass2word=form1.password2.value;
if(!ck_password.test(pass2word))
{document.getElementById("pass_1").style.visibility="visible";
document.getElementById("bor_4").style.boxShadow="red 1px 1px 11px 1px";
  
}
 else if(pass1word!=pass2word)
 {
 document.getElementById("pass_1").style.visibility="visible";
document.getElementById("bor_4").style.boxShadow="red 1px 1px 11px 1px";
  
 }
else
{
    document.getElementById("pass_2").style.visibility="visible";
  document.getElementById("bor_4").style.boxShadow="green 1px 1px 11px 1px";

 }
 }

function cl()
{
     document.getElementById("fac_1").style.visibility="hidden";
 document.getElementById("fac_2").style.visibility="hidden";
 document.getElementById("email_1").style.visibility="hidden";
 document.getElementById("email_2").style.visibility="hidden";
document.getElementById("mob_1").style.visibility="hidden";
 document.getElementById("mob_2").style.visibility="hidden";
 document.getElementById("pass_1").style.visibility="hidden";
 document.getElementById("pass_2").style.visibility="hidden";
 
}
function cl1()
 {
     document.getElementById("fac_1").style.visibility="hidden";
 document.getElementById("fac_2").style.visibility="hidden";
 
 }


function cl2()
{
 document.getElementById("mob_1").style.visibility="hidden";
 document.getElementById("mob_2").style.visibility="hidden";
   }


function cl3(){
     document.getElementById("email_1").style.visibility="hidden";
 document.getElementById("email_2").style.visibility="hidden";
 
}
function cl4()
{
    document.getElementById("pass_1").style.visibility="hidden";
 document.getElementById("pass_2").style.visibility="hidden";
}



function show()
{
    var pd=document.getElementById('pdw');
    var eye=document.getElementById('eye');

   if (pd.type=="password"){
       

    pd.type="text";}
    else{
    pd.type="Password";}
}
function signup()
{
if(!form1.terms.checked)
{
    document.getElementById("sign_up").style.visibility="hidden";
}
else{
    document.getElementById("sign_up").style.visibility="visible";
}
}
function sign()
{
    document.getElementById("sign_up").style.visibility="hidden";
}

function validate()
{
    var mob=form1.mobile1.value;
var name =form1.username.value;
var email =form1.email1.value;
var pass1word=form1.password1.value;
var pass2word=form1.password2.value;
var errors = [];
if (!ck_name.test(name)) 
{
  errors[errors.length] = "You must enter valid Name .";
 }
if(!ck_mobile.test(mob)) {
    errors[errors.length]="you must enter vald no";
}
 if (!ck_email.test(email))
 {
  errors[errors.length] = "You must enter a valid email address.";
 }

 if (!ck_pass1word.test(pass2word)) 
{
  errors[errors.length] = "You must enter a valid Password ";
 }
 if(pass1word!=pass2word)
 {
    
errors[errors.length] = "Password not match";

 }


    var securityQuestionElement = document.getElementById('securityQuestion');
    if(!securityQuestionElement.value) {  
        errors[errors.length]="You must select a Security Question";  
        securityQuestionElement.value = 'm'
        
    }
    
   

 if (errors.length > 0) 
{

  Errors(errors);
  return false;
 }
return true;
}

function Errors(errors)
{
 var msg = "Please Enter Valide Data...\n";
 for (var i = 0; i<errors.length; i++) 
{
 var numError = i + 1;
  msg += "\n" + numError + ". " + errors[i];
}
 alert(msg);
}

</script>--><script>

</script>
<style>
    
</style>
</head>
<body onload="paswh();">
<div class="signup_form" >
    <div class="signup_form_content">
        <?php echo form_open('user/signupmail','id="form"','name="form1"');?>
		
        <div class="form-header">
			<p style="font-size:259%;">Sign Up</p>
        </div>
            <div class="form-body">  

            <div class="rows" >    
                <div class="formAuthorise" >
                    <select class="form-control" name="tle" >
                        <option>Authorise</option>
                        <optgroup label="SBMS">
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="Mechatronics Engineering">Mechatronics Engineering</option>
                            <option value="Automobile Engineering">Automobile Engineering</option>
                        </optgroup>
                        <optgroup label="SES">
                            <option value="EEE">EEE</option>
                            <option value="E and I">E and I</option>
                        </optgroup>
            
                        <optgroup label="SCCS">
                            <option value="ECE">ECE</option>
                            <option value="CSE">CSE</option>
                            <option value="IT">IT</option>
                        </optgroup>
                        
                        <optgroup label="SCFS">
                            <option value="Chemical Engineering">Chemical Engineering</option>
                            <option value="Food Technology">Food Technology</option>
                        </optgroup >
                        
                        <optgroup label="SMS">
                            <option value="Management Studies">Management Studies</option>
                        </optgroup>
                        
                        <optgroup label="SCTA">
                            <option value="Computer Application">Computer Application</option>
                            <option value="Computer Technology(UG)">Computer Technology(UG)</option>
                            <option value="Computer Technology(PG)">Computer Technology(PG)</option>
                        </optgroup>
                        
                        <optgroup label="SSH">
                            <option value="Mathematics">Mathematics</option>
                            <option value="Physics">Physics</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="English">English</option>
                        </optgroup>
                        
                        <optgroup label="">
                            <option value="DSBMS">DEAN(SBMS)</option>
                            <option value="DSES">DEAN(SES)</option>
                            <option value="DSCCS">DEAN(SCCS)</option>
                            <option value="DSCFS">DEAN(SCFS)</option>
                            <option value="DSSH">DEAN(SSH)</option>
                            <option value="Principal">Principal</option>
                            <option value="Libarian">Libarian</option>
                            <option value="Transport Officer<">Transport Officer</option>
                        </optgroup>

                        <optgroup label="Hostel warden">
                            <option value="Dheeran">Dheeran</option>
                            <option value="Ilango">Ilango</option>
                            <option value="Bharathi">Bharathi</option>
                            <option value="Valluvar">Valluvar</option>
                            <option value="Kamban">Kamban</option>
                            <option value="Ponnar">Ponnar</option>
                            <option value="Sankar">Sankar</option>
                            <option value="Vaigai">Vaigai</option>
                            <option value="Bhavani">Bhavani</option>
                            <option value="Kaveri">Kaveri</option>
                            <option value="Amaravathi">Amaravathi</option>
                            <option value="other">other</option>
                        </optgroup>
                    </select>
                    <?php echo form_error('tle') ?>
                </div>
            
                <div class="formFaculty_id">
                    <?php echo  form_input(['class'=>"form-control ",'type'=>"text",'id'=>"",'name'=>'Faculty_id','placeholder'=>"Faculty_id"])?>
                    <?php echo form_error('Faculty_id') ?>
                </div>
            </div>
            <?php echo form_label('Faculty Name')?>
            <div class="rows" >
                
            
                
                <div class="formFucaltyName_title">
                
                    <select  name="tle1" >
                        <option >Mr</option>
                        <option >Dr</option>
                        <option >Miss</option>
                    </select> 
                </div>
            
                <div class="formFucalty_firstName">
                <!--<i class="fa fa-times fac_a "id="fac_1"></i>
                <i class="fa fa-check fac_b"id="fac_2"></i>-->
                    <?php echo  form_input(['class'=>"form-control ",'type'=>"text",'id'=>"bor_1",'placeholder'=>"Enter First Name",'value'=>set_value('firstname'),'onblur'=>"fact();",'onfocus'=>"cl1();",' name'=>"firstname"]);?>
                    <?php echo form_error('firstname') ?>
                </div>
            
                <div class="formFucalty_lastName" >
                    <?php echo  form_input(['class'=>"form-control ",'type'=>"text",'id'=>"bor_1",'placeholder'=>"Enter Last Name",'onblur'=>"fact();",'value'=>set_value('lastname'),'onfocus'=>"cl1();",' name'=>"lastname"]);?>
                    <?php echo form_error('lastname') ?>
                </div>
            </div>

            <div class="rows" >
                <div class="formFucalty_mobile" >	
                    <?php echo form_label('Mobile Number');?>
                    <!-- <i class="fa fa-times mo_a"id="mob_1"></i>
                    <i class="fa fa-check mo_b"id="mob_2"></i>-->
                    <?php echo  form_input(['class'=>"form-control",'type'=>"text",'id'=>"bor_2",'value'=>set_value('mobile1'),'placeholder'=>"Enter 10 digit mobile",'onblur'=>"mobb();",'onfocus'=>"cl2();",' name'=>"mobile1"]);?>
                    <?php echo form_error('mobile1') ?>
                </div>
            
                <div class="formFucalty_email">
    
                    <?php echo form_label('Email ID');?>
                    <!-- <i class="fa fa-times emai_a"id="email_1"></i>
                    <i class="fa fa-check emai_b"id="email_2"></i>-->
    
                    <?php echo  form_input(['class'=>"form-control",'type'=>"email",'value'=>set_value('email1'),'id'=>"bor_3",'placeholder'=>"eg:-xyz@kongu.edu",'onblur'=>"ema();",'onfocus'=>"cl3();",' name'=>"email1"]);?>
                    <?php echo form_error('email1') ?>
                </div>
            </div>

            <div class="rows">
                <div class="formFucalty_button">
                    <button  type='submit' href="b" class='btn btn-primary formVerify_button' value="sign_submit" data-toggle='modal' data-target='#myModal'>
                    Verify</button>

                    <!--<button Style="color:white;margin-left:75%;"class="btn btn-info" id="h"><a Style="color:white; font-size:15px;text-decoration:none;" href="http://localhost/kec1/index.php/user/home">Verify</a>
                    </button>-->
                </div>
            </div>

            <div class="rows" >
                <div id="new" class="text-center small">Already have an account?
                    <a href="<?= base_url();?>user/login">Login here</a>
                </div>
            </div>       
</div>
    </form>

    </div>
</div>
    
    
    <!--<div class="container">
 

 
 <div class="modal fade col-sm-12" id="myModal">
   <div class="modal-dialog">
     <div class="modal-content">
     
    
       <div class="modal-header">
         <h4 class="modal-title"></h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       
       <form method="post">
       <div class="modal-body">
       
   <textarea name="sol"style="width:100%;height:300px;font-size:15px;" placeholder="Solution"></textarea>
       </div>
       
       
       <div class="modal-footer">
       <input type="submit" name="sub"class="btn btn-info"value="submit">
         <button styele="float:left;"type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       </div>
       </form>
     </div>
   </div>
 </div>
 
</div>-->
    
    
</body>
<?php include ('footer.php');?>
</html>
