




<html>
<head>
<style>

 .princ{
     margin-top:2%;}
     table {
font-family: arial, sans-serif;
border-collapse: collapse;


}
table {
display:block;
height : 200px;
overflow-y : scroll;

}

td, th {
border: 1px solid #dddddd;
text-align: left;
width: 300px;
height:40px;
}

tr:nth-child(even) {
background-color: #dddddd;
} 
     </style></head><body><?php
session_start();
 $_SESSION['auth'];
    $request=$_POST['request'];
 
    $connection = mysqli_connect('localhost', 'root',"",'kec1'); 
    $query = "SELECT User,Usid,Gid,Grievance,Category,Scategory,Gsolution,GpostDate FROM userverification natural join grievancesdetails where Category= '$request';";
    $result = mysqli_query($connection,$query); 
    $quer= "SELECT  Authorisedpt from headdetalis where Authorisedpt='Principal';";
    $resul = mysqli_query($connection,$quer); 
    $ro=mysqli_fetch_assoc($resul);
$pri=$ro["Authorisedpt"];
/*if($_POST['request1'])
{
    $request1=$_POST['request1'];
    $connection = mysqli_connect('localhost', 'root',"",'kec1'); 
    $query = "SELECT User,Usid,Gid,Grievance,Category,Scategory,GpostDate FROM userverification natural join grievancesdetails where Scategory= '$request1';";
    $result = mysqli_query($connection,$query); 
}*/
?>  <div class="container-fluid" >

<div class="col-sm-12" style="margin-left:%;">         
 
     <div class="form-row">
        <div class="col-sm-12">
           <div class="table-responsive" id="record1" style="margin-left:">
              <table class="col-sm-12" class="table table-striped ">
                  <thead>        
                      <tr>
                         <th>User</th>
                         <th>U_id</th>
                         <th>G_id</th>
                         <th>Grievances</th>
                         <th>Category</th>
                         <th>Sub Category</th>
                         <th>G_Post_Date</th>
                         <th>Solution</th>
                     </tr>
                 </thead> <?php 
while($row=mysqli_fetch_assoc($result))
    {
        
        if($row["Category"]=='College')
        {
        echo"<form method='post' action='reply_sol'><tr ><td>".$row["User"]."</td><td>".$row["Usid"]."</td><td>".$row["Gid"]."</td><td>".$row["Grievance"]."</td><td>".$row["Category"]."</td><td>".$row["Scategory"]."</td><td>".$row["GpostDate"]."</td><td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#".$row["Gid"]."'>
   
    Accept</button>
        </div>
        </div> <input type='hidden' name='sol_val' value='".$row["Gid"]."'>
          
        <div class='container'>

      

        <div class='modal fade col-sm-12' id='".$row["Gid"]."'>
          <div class='modal-dialog'>
            <div class='modal-content'>
            
           
              <div class='modal-header'>
                <h4 class='modal-title'></h4>
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
              </div>
             
              
              <div class='modal-body'>
             
          <textarea name='sol'style='width:100%;height:300px;font-size:15px;' placeholder='".$row["Gid"]."'></textarea>
              </div>
              
              
              <div class='modal-footer'>
              <input type='submit' name='sub'class='btn btn-info'value='submit'>
                <button styele='float:left;'type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
              </div>
             
            </div>
          </div>
        </div>
        
      </div></td></tr>";
        }
        else
        {
            echo"<form method='post' action='reply_sol'><tr ><td>".$row["User"]."</td><td>".$row["Usid"]."</td><td>".$row["Gid"]."</td><td>".$row["Grievance"]."</td><td>".$row["Category"]."</td><td>".$row["Scategory"]."</td><td>".$row["GpostDate"]."</td><td>".$row["Gsolution"]."</td></tr>";
        }
    }
    echo "</table>";

?></body></html>