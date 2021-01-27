<html>
<head>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link href="<?= base_url();?>assets/css/popup.css" rel="stylesheet">

</head>
<body>
    <div class="popup">
    <?php echo form_open('user/login','id="form" style="margin-top:5%;margin-bottom:15%;"');?>
        <div class="popup__content">
        <div class="modal-header">
    <button type="submit" class="close" data-dismiss="popup__content">&times;</button>
</div>
        <!-- <?php //if($error=$this->session->flashdata('passwordchanged')):?>
            <h1 class="popup__success">
             this is success
                <?php //echo $error ; ?>
            </h1>
        <?php //else: ?>
            <h1 class="popup__failed">
                <?php //echo $error ; ?>
                this is failed
            </h1>
                    <?php //endif; ?> -->
        <?php if($error=$this->session->flashdata('popup_msg')): ?>
      <div class="row">
      <div class="masssege"style="">
    
        <h3 class="popup__success1"><?php echo $error ?></h3>

      </div>
      </div>
<?php endif;?>

            
        </div>
    </div>
</body>
<!-- <script>
    $(document).ready(function () {
        $(document).on('click', '.close', function(){
  

 $(".popup").css({"visibility":"hidden"});
 
  
  
 });

});
</script> -->
</html>
