<?php include ('popup.php'); ?>
 <?php include ('header.php'); ?>
 
<html>
<head>



       <link rel="stylesheet" href="<?=base_url();?>assets/css/home.css">
       
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="http://localhost/kec_erp/Assets/js/home.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="container-fluid">
<!-- <div class="popup">
        <div class="popup__content">
            <h1 class="popup__text">
                
            </h1>
        </div>
    </div> -->

<div class="row"style="margin-bottom:0.5%;margin-top:2%;">
        <div class="col-lg-8">
        <?php include ('slider.php');?>
        </div>
        <div class="col-lg-4"id ="login" >
        
        <?php include ('login.php');?>
    </div>
    </div>
</div> 
<div class="footer">
  <?php include ('footer.php');?>
</div>
</body>

</html>
 
        
        
