<html>
<head>



       
<link href="<?= base_url();?>assets/css/bootstrap-4.2.1/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url();?>assets/css/bootstrap-4.2.1/js/bootstrap.min.js" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="http://localhost:8080/kec_erp/Assets/js/home.js" type="text/javascript"></script>
   
</head>
 <body >
<div id="myCarousel" class="carousel slide" data-ride="carousel"style="margin-bottom:4%;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?= base_url();?>application/img/mca.jpg" alt="MCA block" style="width:100%;height:360px;">
      </div>

      <div class="item">
        <img src="<?= base_url();?>application/img/adminb.jpg" alt="Admin block" style="width:100%;height:360px;">
      </div>
    
      <div class="item">
        <img src="<?= base_url();?>application/img/itpark.jpg" alt="IT park" style="width:100%;height:360px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</body>
</html>