<?php include('header.php');?>


<?php 
    // Setting up connection with database Geeks 
    $connection = mysqli_connect('localhost', 'root',"",'kec1'); 
      
    // Check connection 
    if (mysqli_connect_errno()) 
    { 
        echo "Database connection failed."; 
    } 
      

    // query to fetch Username and Password from 
    // the table geek 
   $query = "SELECT Gid FROM grievancesdetails"; 
    $que1="SELECT	Gsolution FROM grievancesdetails where Gsolution =''";
   $que2="SELECT	Gsolution FROM grievancesdetails where Gsolution !=''";
   $stu1 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Student' AND Gsolution=''"; 
   $stu2 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Student'"; 
   $stu3 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Student' AND Gsolution!=''"; 
   $fac1 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Faculty' AND Gsolution=''"; 
   $fac2 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Faculty'"; 
   $fac3 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Faculty' AND Gsolution!=''"; 
   
   $par1 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Parents' AND Gsolution=''"; 
   $par2 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Parents'"; 
   $par3 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Parents' AND Gsolution!=''"; 
   $staf1 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Staff' AND Gsolution=''"; 
   $staf2 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Staff'"; 
   $staf3 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Staff' AND Gsolution!=''"; 
   $alum1 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Alumni' AND Gsolution=''"; 
   $alum2 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Alumni'"; 
   $alum3 = "SELECT User FROM userverification inner join grievancesdetails on userverification.Uemail=grievancesdetails.Uemail where User='Alumni' AND Gsolution!=''"; 
   
   
   
   $result = mysqli_query($connection, $query); 
    $result1 = mysqli_query($connection, $que1); 
    $result2 = mysqli_query($connection, $que2); 
    $resstu1 = mysqli_query($connection, $stu1); 
    $resstu2 = mysqli_query($connection, $stu2);
    $resstu3 = mysqli_query($connection, $stu3); 
    $resfac1 = mysqli_query($connection, $fac1); 
    $resfac2 = mysqli_query($connection, $fac2);
    $resfac3 = mysqli_query($connection, $fac3); 
    $respar1 = mysqli_query($connection, $par1); 
    $respar2 = mysqli_query($connection, $par2); 
    $respar3 = mysqli_query($connection, $par3); 
    $resstaf1 = mysqli_query($connection, $staf1); 
    $resstaf2 = mysqli_query($connection, $staf2); 
    $resstaf3 = mysqli_query($connection, $staf3); 
    $resalum1 = mysqli_query($connection, $alum1); 
    $resalum2 = mysqli_query($connection, $alum2); 
    $resalum3 = mysqli_query($connection, $alum3); 
    if ( $result1||$result||$result2|| $resstu1|| $resstu2|| $resstu3||$respar1||$respar2||$respar3||$resfac1||$resfac2||$resfac3 || $resstaf1 ||$resstaf2||$resstaf3||$resalum1||$resalum2||$resalum3) 
    { 
       $row = mysqli_num_rows($result); 
        $row1 = mysqli_num_rows($result1);
        $row2 = mysqli_num_rows($result2);
        $row3 = mysqli_num_rows($resstu1);
        $row4 = mysqli_num_rows($resstu2);
        $row5 = mysqli_num_rows($resstu3);
        $row6 = mysqli_num_rows($resfac1);
        $row7 = mysqli_num_rows($resfac2);
        $row8 = mysqli_num_rows($resfac3);

        $row9 = mysqli_num_rows( $resstaf1 );
        $row10 = mysqli_num_rows( $resstaf2 );
        $row11 = mysqli_num_rows( $resstaf3 );

        $row12 = mysqli_num_rows($respar1);
        $row13 = mysqli_num_rows($respar2);
        $row14 = mysqli_num_rows($respar3);
        $row15 = mysqli_num_rows($resalum1);
        $row16 = mysqli_num_rows($resalum2);
        $row17 = mysqli_num_rows($resalum3);
        mysqli_free_result($result); 
        mysqli_free_result($result1);
        mysqli_free_result($result2);  
        mysqli_free_result($resfac1);  
        mysqli_free_result($resfac2); 
        mysqli_free_result($resfac3); 
        mysqli_free_result($respar1);  
        mysqli_free_result($respar2); 
        mysqli_free_result($respar3); 
        mysqli_free_result($resstu1);  
        mysqli_free_result($resstu2); 
        mysqli_free_result($resstu3); 
        mysqli_free_result($resstaf1);  
        mysqli_free_result($resstaf2); 
        mysqli_free_result($resstaf3); 
        mysqli_free_result($resalum1);  
        mysqli_free_result($resalum2); 
        mysqli_free_result($resalum3); 
    } 
  
 
    mysqli_close($connection); 
?> 

<html>
<head>

<link href="<?= base_url();?>assets/css/bootstrap-4.2.1/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url();?>assets/css/bootstrap-4.2.1/js/bootstrap.min.js" rel="stylesheet">
<link href="<?= base_url();?>assets/css/dashboard.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body >

<div class="container-fluid ">
<div class="form-row"style="margin-top:1%;">
<div class="col-sm-12">

<!-- 
            <select class="form-control col-lg-1 col-sm-1 col-xs-1 col-md-1"style="" id="sel">
          <option> Login</option>
          <option  value="Dean" >Dean</option>
          <option value="Principal">Principal</option>
          <option value="HOD">HOD</option></select> -->
          
        
          <!-- <a class="loginLink" href="<?= base_url();?>user/login"><button class="btn btn-danger loginButton" id="h">Admin Login</button></a> -->

      </div>
      
</div>
</div>
<!-- <div id="main">
    <div class="sideBar_button" id="sideBar_button"onclick="sideBar_open()"> ☰ </div>
</div>
<div class=" bg-info tab tabList" id="sideBar">
<a href="javascript:void(0)" class="sideBar_closebutton" onclick="SideBar_close()"><h4>×</h4></a>
<button class="tablinks  tabButton" onclick="dash(event, 'Home'),SideBar_close()" id="defaultOpen">Home</button>
  <button class="tablinks  tabButton" onclick="dash(event, 'Student'),SideBar_close()" id="">Student</button>
  <button class="tablinks  tabButton" onclick="dash(event, 'Faculty'),SideBar_close()">Faculty</button>
  <button class="tablinks  tabButton" onclick="dash(event, 'Staff'),SideBar_close()">Staff</button>
  <button class="tablinks  tabButton" onclick="dash(event, 'Parent'),SideBar_close()">Parents</button>
  <button class="tablinks  tabButton" onclick="dash(event, 'Alumni'),SideBar_close()">Alumni</button>
  <button class="tablinks btn " onclick="dash(event, 'Employer')">Employer</button>
</div> -->

<div class="tabcontent" id="Home" style>
  
    <div class="tabcontent_info1">
        <h3 class="text-uppercase">Pending Grievances</h3>
        <h3 class="display-4"><?php echo $row1;?></h3>
    </div>

    <div class="tabcontent_info2">
        <h3 id ="hr" class="text-uppercase">Total Grievances</h3>
        <h3  id ="hr" class="display-4"><?php echo $row;?></h3>
    </div>

    <div class="tabcontent_info3">
        <h3 class="text-uppercase">Solved Grievances</h3>
        <h3  id ="hr" class="display-4"><?php echo $row2;?></h3>
    </div>
</div>
                            

<!-- <div id="Student" class="tabcontent">
  
    <div class="tabcontent_info1">
        <h3 class="text-uppercase">Pandding Grievances</h3>
        <h3 class="display-4"><?php echo $row3;?></h3>
    </div>

    <div class="tabcontent_info2">                            
        <h3 id ="hr" class="text-uppercase">Total Grievances</h3>
        <h3 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row4;?></h3>
    </div>                   
    <div class="tabcontent_info3">                      
        <h3 class="text-uppercase">Solved Grievances</h3>
        <h3 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row5;?></h3>
    </div>
  
</div>

<div  id="Faculty" class="tabcontent">
  
    <div class="tabcontent_info1">
        <h3 class="text-uppercase">Pandding Grievances</h3>
        <h3 class="display-4"><?php echo $row6;?></h3>
    </div>                   
                            
    <div class="tabcontent_info2">
        <h3 id ="hr" class="text-uppercase">Total Grievances</h3>
        <h3 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row7;?></h3>
    </div>                  

    <div class="tabcontent_info3">                        
        <h3 class="text-uppercase">Solved Grievances</h3>
        <h3 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row8;?></h3>
    </div>
</div>

<div id="Staff" class="tabcontent">

    <div class="tabcontent_info1">
        <h3 class="text-uppercase">Pandding Grievances</h3>
        <h3 class="display-4"><?php echo $row9;?></h3>
    </div>
    
    <div class="tabcontent_info2">
        <h3 id ="hr" class="text-uppercase">Total Grievances</h3>
        <h3 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row10;?></h3>
    </div>

    <div class="tabcontent_info3">    
        <h3 class="text-uppercase">Solved Grievances</h3>
        <h3 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row11;?></h3>
    </div>                   
</div>

<div id="Parent" class="tabcontent">
    
    <div class="tabcontent_info1">
        <h3 class="text-uppercase">Pandding Grievances</h3>
        <h3 class="display-4"><?php echo $row12;?></h3>
    </div>

    <div class="tabcontent_info2">                    
        <h3 id ="hr" class="text-uppercase">Total Grievances</h3>
        <h3 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row13;?></h3>
    </div>
    
    <div class="tabcontent_info3">
        <h3 class="text-uppercase">Solved Grievances</h3>
        <h3 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row14;?></h3>
    </div>                
</div>

<div  id="Alumni" class="tabcontent">

    <div class="tabcontent_info1">
        <h3 class="text-uppercase">Pandding Grievances</h3>
        <h3 class="display-4"><?php echo $row15;?></h3>
    </div>   

    <div class="tabcontent_info2">
        <h3 id ="hr" class="text-uppercase">Total Grievances</h3>
        <h3 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row16;?></h3>
    </div>
    
    <div class="tabcontent_info3">
        <h3 class="text-uppercase">Solved Grievances</h3>
        <h3 style="text-size:10%;" id ="hr" class="display-4"><?php echo $row17;?></h3>
    </div>                    

</div>


    <div  style="margin-left:70px;margin-top:;border:none;"id="Employer" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright"></span>
  
  </div> -->

  
  <div class="login-form">
  <?php include ('login.php');?>
  </div>


                     

    <div class="addGrievances">
        <p class="a-text"><?php echo anchor('user/student_details','Click here for your Grievances') ?></p>

    </div>
  
</div>




<script>
// function dash(evt,Name) {
//   var i, tabcontent, tablinks;
//   tabcontent = document.getElementsByClassName("tabcontent");
//   for (i = 0; i < tabcontent.length; i++) {
//     tabcontent[i].style.display = "none";
//   }
//   tablinks = document.getElementsByClassName("tablinks");
//   for (i = 0; i < tablinks.length; i++) {
//     tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
//   alert(document.getElementById("sideBar_button").style.display)
//   if(window.matchMedia("(max-width:964px)").matches)
//   {
//     document.getElementById(Name).style.display = "block";
//   evt.currentTarget.className += " active";
//   }
//   else{
//     document.getElementById(Name).style.display = "flex";
//   evt.currentTarget.className += " active";
//   }

// }

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



</script>



<script>
$(window).load(function() {
        $(".loader").fadeOut(7000);
});

$(document).ready(function () {
    toggleFiel();
    $("#sel").change(function () {
        toggleFiel();
    });

});

function sideBar_open() {
  document.getElementById("sideBar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("sideBar_button").style.display = "none";
}
if(window.matchMedia("(max-width:964px)").matches)
  {
function SideBar_close() {
  document.getElementById("sideBar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("sideBar_button").style.display = "block";
}
}
// function toggleFiel() {
//     if ($("#sel").val() === "Dean")
//     $("#h").show();
//     else if($("#sel").val() === "Principal")
//     $("#h").show();
//     else if($("#sel").val() === "HOD")
//     $("#h").show();
//     else 
//     $("#h").hide();
    
// }
</script>
<?php include('footer.php');?>
</body>
</html> 
