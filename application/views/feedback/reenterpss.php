<?php include('header.php');?>
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>
 #form{
     box-shadow: 5px 10px 18px #888888;
     width:30%;
  padding: 6px;
  margin-left:30%;
    margin-top: 5%;
}

</style>
</head>
<body>
<?php echo form_open('User/changedpassword','id="form"');?>
        <div class="modal-body">
        <i onclick="show1();" class="fa fa-eye f" id="eye1"></i>
    <input name="Npass1" type="password" class="form-control" id="pass1" placeholder="Enter New Password"><br>
    <i onclick="show2();" class="fa fa-eye f" id="eye1"></i>
    <input name="Npass2" type="password"class="form-control" id="pass2" placeholder="Confirm Password">
        </div>
        
        
        <div class="modal-footer">
        <?php echo form_button(['class'=>"btn btn-info",'type'=>"submit",'content'=>"Submit",'id'=>"popup"]);?>
        
          <!--<button styele="float:left;"type="button" class="btn btn-danger" name="repss_submit" data-dismiss="modal">Close</button>-->
        </div>
        </form>
</body>
<script>
 function show1()
{
    
    var eye=document.getElementById('pass1');

   if (eye.type=="password"){
    eye.type="text";}
    else{
    eye.type="Password";}
}
function show2()
{
    
    var eye=document.getElementById('pass2');

   if (eye.type=="password"){
    eye.type="text";}
    else{
    eye.type="Password";}
}
</script>
</html>