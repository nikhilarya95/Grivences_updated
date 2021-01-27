<?php include ('header.php');?>
<html>
    <head>
      <script>
        fuction back()
        {
          window.history.back();
        }
        </script>
    <link href="<?= base_url();?>assets/css/bootstrap-4.2.1/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url();?>assets/css/bootstrap-4.2.1/js/bootstrap.min.js" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url();?>assets/css/forget.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  
  
    </head>
    <body>
        <div class="rows">
          <div class="col-lg-4">
             </div>
            <div class="col-lg-4">
            

        <?php echo form_open('admin/reenterpass','id="form" style="margin-top:10%;margin-bottom:89px;"','method=>"post"');?>
  <fieldset>
 <div class="form-group">
 
      <label for="InputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"name="femail" >
      <?php echo form_error('femail') ;?><?php if($error=$this->session->flashdata('email_match')): ?>
      <div class="row">
      <div class="col-lg-12"style="margin-left:80px;">
        <p class="text-danger"><?php echo $error ?></p>
      </div>
      </div>
<?php endif;?>
    </div>
    
   
    </fieldset>
    
    <button type="submit" class="btn btn-info" >Submit</button>
    
    <?php echo anchor('Admin/logout','Back','class="btn btn-info"') ;?>
 

</div>
<div class="col-lg-4">
             </div>
</div>
<div class="container">
 

 
  <div class="modal fade col-sm-12" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
     
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
      </div>
    </div>
  </div>
  
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

<?php include('footer.php');?>
</body>
</html>
