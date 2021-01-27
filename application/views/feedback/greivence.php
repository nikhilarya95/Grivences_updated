<?php include('header.php');?>
<?php 
                    // Setting up connection with database Geeks 
                    $connection = mysqli_connect('localhost', 'root',"",'kec1'); 
      
                    // Check connection 
                    if (mysqli_connect_errno()) 
                    { 
                        echo "Database connection failed."; 
                    } 
                    // $dpt=$this->input->post('ctg');
                    // $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,GpostDate FROM userverification natural join grievancesdetails where Category= 'Hostel' ;"; 
                    $query = "SELECT Uemail FROM  userotp ORDER BY UOTPdate desc limit 1 ;"; 
                    //   $query = "SELECT Usid,User,Gid,Grievance,Category,Scategory,GpostDate FROM userverification natural join grievancesdetails where grievancesdetails.Category= '$dpt';"; 
                    // Execute the query and store the result set 
  
                    $result = mysqli_query($connection, $query); 
                    $row=$result-> fetch_assoc();
                    $ft= $row["Uemail"];
                    $query = "SELECT Usid,User,Gid,comments,Category,Scategory,GpostDate,Gsolution FROM userverification natural join grievancesdetails where Uemail= '$ft' ;"; 
                    $result = mysqli_query($connection, $query);
   
                  ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        
<title>registraton form</title>
<link rel="stylesheet" href="<?= base_url();?>assets/css/greivence.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
    
    </style>

</head>
<body>
<div class="container-fluid ">
<div class="button">
<?php echo anchor('Admin/logout','Home','class="btn btn-info"') ;?>
</div>
    <div class="grievance_display">
         <?php 
        if($this->uri->segment(2) == "inserted")
        {
            echo '<p class="text-success">Data Inserted</p>';
        }
        ?>
        <h3 >YOUR PREVIOUS GRIEVANCES</h3>
        <div  class="table-responsive ">
            <table class="table table-striped table-bordered  " id="table_display">
                    <thead>        
                        <tr>
                            <th>User</th>
                            <th>U_id</th>
                            <th>G_id</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>G_Post_Date</th>
                            <th>Grievances</th>
                            <th>Solution</th>
                        </tr>
                    </thead>
                    <?php
                    if($result->num_rows>0)
                    {
                        
                        while($row=mysqli_fetch_array($result))
                        {
                            echo'
                            <tr >
                            <td>'.$row["User"].'</td>
                            <td>'.$row["Usid"].'</td>
                            <td>'.$row["Gid"].'</td>
                            <td>'.$row["Category"].'</td>
                            <td>'.$row["Scategory"].'</td>
                            <td>'.$row["GpostDate"].'</td>
                            <td><button type="button" name="update" id="'.$row["comments"].'" class="btn btn-info btn-xs updat">View</button>
                            </td>
                         
                            <td><button type="button" name="update" id="'.$row["Gsolution"].'" class="btn btn-info btn-xs update">View</button>
                            </td>
                            </tr>';

                    }
                                    }
                    else{
                        echo"0";

                    }?>
                </table>
            </div>
        </div>
    </div>
    <div class="grievance_form">
        <?php echo form_open('user/thanks','id="feed"');?>
            <h3>FOR NEW GRIEVANCES </h3>
        <div  class="form-group">
            <div class="type">
                <select class="form-control ff"  name="type">
                    <option value="Grievance">Grievance</option>
                    <option value="Feedback">Feedback</option>
                </select>
            </div>
            <div class="category">        
                <select class="form-control ff" id="dbType" name="ctg">
                    <option value="Category">Category</option>
                    <option value="College">College</option>
                    <option value="Department">Department</option>
                    <option value="Hostel">Hostel</option>
                    <option value="Other">Other</option>
                </select>
                <?php echo form_error('ctg') ?>
            </div>
            <div  id="ab" class="college_subCategory" >
                <select class="form-control"  id="effect1" name="sc">
                    <option value="Specific Category">Specific Category</option>
                    <option value="General">General</option>
                    <option value="P&T Cell">P&T Cell</option>
                    <option value="Physical Edu">Physical Edu</option>
                    <option value="Library">Library</option>    
                    <option value="Transport Office">Transport Office</option>
                    <option value="Dispensary">Dispensary</option>
                    <option value="Kongu CRS">Kongu CRS</option>
                    <option value="IIP Cell">IIP Cell</option>
                    <option value="Administrative office">Administrative office</option>
                    <option value="COE Office">COE Office</option>
                    <option value="Examination Section">Examination Section</option>
                    <option value="CCD(Curriculum Dev.)">CCD(Curriculum Dev.)</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        
            <div id="bc" class="department_subCategory">
                <select class="form-control "style="height:34px;font-size:15px;" id="effect2" name="sd">
                    <option value="Specific Category">Specific Category</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Mechatronics Engineering">Mechatronics Engineering</option>
                    <option value="Automobile Engineering">Automobile Engineering</option>
                    <option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
                    <option value="Electrical & Instrumentation">Electrical & Instrumentation</option>
                    <option value="Electrical Communication Engineering">Electrical Communication Engineering</option>
                    <option value="Computer Science Engineering">Computer Science Engineering</option>
                    <option value="Information Technology">Information Technology</option>
        
                    <option value="Chemical Engineering">Chemical Engineering</option>
                    <option value="Food Technology">Food Technology</option>
                    <option value="Management Studies">Management Studies</option>
                    <option value="Computer Application">Computer Application</option>
                    <option value="Computer Technology(UG)">Computer Technology(UG)</option>
                    <option value="Computer Technology(PG)">Computer Technology(PG)</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Physics">Physics</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="English">English</option>
                    <option value="other">other</option>
                </select>
            </div>
            <div id="cd" class="hostel_subCategory">
                <select class="form-control "style="height:34px;font-size:15px;" id="effect3" name="se">
                    <option value="Specific Category" >Specific Category</option>
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
                </select>
            </div>
    
            <div id="de" class="other_category">
                <?php echo form_input(['class'=>'form-control fon','placeholder'=>'Enter Name']); ?>
            </div>
        
            <div id="griev" class="greivence_button">
                <button style="font-size:15px;"type="button" class="btn btn-primary" data-toggle="modal" data-target="#grie">Grievances</button>
            </div>
        </div>
    </div>
</div>
<br>

<div class="modal fade" id="grie" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="text-align:center;" class="modal-title " id="exampleModalLongTitle">GRIEVANCES</h3>
       
            </div>
            <div class="modal-body">
                <textarea style="width:100%;font-size:15px; height:250px;" placeholder="Write your Grievances here" name="grie"></textarea>
            </div>
            <div class="modal-footer">
                <input class=" btn btn-info fon" type="submit" onClick="" value='POST'name="submit_gri">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

 
<div id="userModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Add User</h4>

     </div>
     <div class="modal-body">

       <textarea disabled="true" type="text" name="email" id="GSolution" class="form-control"></textarea>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>
  </div>
 </div>


      <!--  <div class="form-row">
            <div style="margin-left:25%;"  class="col-md-6 fon">
                 <div  class="form-row">
                     <div class="col-md-10">
                            <textarea style="width:100%; height:250px;" placeholder="Write your Grievances here" name="grie"></textarea>
                     </div>
                </div>
                <div class="form-row">
                    <div class="col-md-8">
                          <?php echo form_error('grie') ?> 
                    </div>
                </div>
            </div>
         </div>
            <br>
            <div class="form-row">
                <div style="margin-left:60% " class="col-sm-1">
                    <input class=" btn btn-info fon" type="submit" onClick="" value='POST'name="submit_gri">
                </div>
            </div>-->
        <!-- </div>
    </div>
</div> -->
<script>
$(document).ready(function () {
    $('#table_display').DataTable(
        {"aLengthMenu":[[5,10,15,20],[5,10,15,20]],
            "bLengthChange":false}
    );
});
    </script>

<script>
$(document).ready(function () {
    toggleFields();
    $("#dbType").change(function () {
        toggleFields();
    });
    $(document).on('click', '.update', function(){
  var id = $(this).attr("id");
  $('#userModal').modal('show');
  $('.modal-title').text('Solution Of your Grievance');
  var idd =$('#GSolution').val(id);
 });
 $(document).on('click', '.updat', function(){
  var id = $(this).attr("id");
  $('#userModal').modal('show');
  $('.modal-title').text('Your Greivance');
  var idd =$('#GSolution').val(id);
 });

});

function toggleFields() {
    
    if ($("#dbType").val() === "College")
        $("#ab").show();
    else
        $("#ab").hide();
        if ($("#dbType").val() === "Department")
        $("#bc").show();
        
     
    else
        $("#bc").hide();
        if ($("#dbType").val() === "Hostel")
        $("#cd").show();
    else
        $("#cd").hide();
        if ($("#dbType").val() === "Other")
        $("#de").show();
    else
        $("#de").hide();
        if ($("#dbType").val() === "Category"&&($()))
      
        $("#griev").hide(); 
    
}
$(document).ready(function () {
    toggles1();
    $("#effect1").change(function () {
        toggles1();
    });

});
function toggles1() {
    
    if ($("#effect1").val()!="Specific Category")
    $("#griev").show(); 
    else
    $("#griev").hide();

}
$(document).ready(function () {
    toggles2();
    $("#effect2").change(function () {
        toggles2();
    });

});
function toggles2() {
    
    if ($("#effect2").val()!="Specific Category")
    $("#griev").show();
    else
       
        $("#griev").hide();

}
$(document).ready(function () {
    toggles3();
    $("#effect3").change(function () {
        toggles3();
    });

});
function toggles3() {
    
    if ($("#effect3").val()!="Specific Category")
        
        $("#griev").show();
    else
    $("#griev").hide();

}
</script>
<script>




$(document).ready(function () {
    toggleField();
    $("#otpsub").change(function () {
        toggleField();
    });

});

function toggleField() {
    if ($("#otpsub").val() === $otp)
        $("#feed").show();
    else
        $("#feed").hide();

}

</script>

</body>
</html>
