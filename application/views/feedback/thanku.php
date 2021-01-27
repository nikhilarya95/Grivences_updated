
<html>
    <head>
    <link href="<?= base_url();?>assets/css/popup.css" rel="stylesheet">
</head>

<body>


<div class="popup">
    <?php echo form_open('user/grievence','id="form" style="margin-top:5%;margin-bottom:15%;"');?>
        <div class=" thank">
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
                    <?php 
 $connection = mysqli_connect('localhost', 'root',"",'kec1'); 
    // Setting up connection with database Geeks 
    $query = "SELECT s_id FROM  grievancesdetails where s_id=(select max(s_id) from  grievancesdetails);"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($connection, $query); 

  
     if($result->num_rows>0)
      {

          $row=$result-> fetch_assoc();
          $id=$row["s_id"];
          
              echo"<div Style='text-align:center;'><h1 >Thank You For Grievances</h1><h3 Style='color:green;'>Your Grievances ID is Gid_00".$row["s_id"]."</h3>";

         
      }
      else{
          echo"0";

      }
      ?>
            
        </div>
    </div>






      
    

</body>
</html>
