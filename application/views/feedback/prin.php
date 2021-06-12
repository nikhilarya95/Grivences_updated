<?php
  include "header.php";

$connect = new PDO("mysql:host=localhost:3300;dbname=kec1", "root", "");


$country = '';
$query = "SELECT * FROM grievancesdetails ";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$but;
foreach($result as $row)
{
 $country .= '<option value="'.$row['Category'].'">'.$row['Category'].'</option>';
 $but=$row['Gid'];
}

?>

<html>
 <head>
  <title>Admin Dashboard</title>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
 
 
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

  
  <link rel="stylesheet" href="<?=base_url();?>assets/css/prin.css">
 </head>
 <body>
<div class="search">
<?php echo anchor('Admin/logout','logout','class="btn btn-logout"') ;?>
<?php echo anchor('admin/cngpass','Change password','class="btn btn-changepassword"') ;?>
</div>
<div class="search_filter">
<div class="Filter_box">
                    <h4>FILTER DETAILS</h4>
                  <div id="hrt" class="">
                      <select class="form-control"style="height:34px;font-size:15px;" id="fetchval" name="ctg">
                          <option value="">Category</option>
                          <option value="College">College</option>
                          <option value="Department">Department</option>
                          <option value="Hostel">Hostel</option>
                          <option value="Libary">Libary</option>
                          <option value="Transport Office">Transport Office</option>
                 
                      </select>
                      <br>
                  </div>
                  
                  <div id="ab"  class="" >
                            <select class="form-control l"style="height:34px;font-size:15px;;" id="abc" name="sc">
                                <option value="">Specific Category</option>
                                <option value="General">General</option>
                                <option value="P&T Cell">P&T Cell</option>
                                <option value="Physical Edu">Physical Edu</option>
                                <option value="Dispensary">Dispensary</option>
                                <option value="Kongu CRS">Kongu CRS</option>
                                <option value="IIP Cell">IIP Cell</option>
                                <option value="Administrative office">Administrative office</option>
                                <option value="COE Office">COE Office</option>
                                <option value="Examination Section">Examination Section</option>
                                <option value="CCD(Curriculum Dev.)">CCD(Curriculum Dev.)</option>
                               
                            </select>
                            <br>
                  </div>
                  
                  <div id="bc" class="">
                        <select class="form-control l"style="height:34px;font-size:15px;" id="bcd" name="sc">
                                <option value ="">Specific Category</option>
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
                               
                        </select>
                        <br>
                    </div>
                    
                     <div id="cd" class="">
                            <select class="form-control l"style="height:34px;font-size:15px;" id="cde" name="sc">
                                    <option value="">SpecificCategory</option>
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
                                   
                             </select>
                             <br>
                      </div>
                    
                      <div class="dt_from"> 
                       
                         <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" onmouseover="(this.type='date')" onmouseout="(this.type='text')" />  
                      </div>  
                      <br>
                      <div class="dt_to">  
                       
                         <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" onmouseover="(this.type='date')" onmouseout="(this.type='text')"/>  
                      </div>  
                      <br>
                      <div class="" align="center">
                         <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
                     </div>
                     <br>
            </div>
</div>
<div class="grivence_title">
      <h1 class="title">GRIEVANCE/FEEDBACK DETAILS</h1>
</div>

<div class="table_block">
   <div class="table-responsive">
       <table id="customer_data" class="table table-bordered table-striped">
          <thead>
             <tr>
             <th>Gid</th>
                <th>User</th>
               <th>Name</th>
                <th>Category</th>
                <th>Scategory</th>
                <th>GpostDate</th>
                <th>Grievances</th>
                <th>Solution</th>
                <th>Grievances</th>
                <th>Solution</th>
                <th>button</th>
            </tr>
        </thead>
     </table>
    <br />
    <br />
    <br />
 </div>
</div>
  <div id="userModal" class="modal fade">
   <div class="modal-dialog">
     <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">View</h4>
      </div>
      <div class="modal-body">
       <div class="form-group">
        
       <div class="form-group">
        <textarea type="text" name="Comment" id="Comment" class="form-control" ></textarea>
       </div>
      </div>
      <div class="modal-footer">
       <input type="hidden" name="id" id="id"/>
       <input type="hidden" class="n" name="crud_action" id="crud_action" value="">
       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       <button type="submit" data-dismiss="modal" class="btn btn-primary"name="action" id="action">submit</button>
       <!-- <button type="submit" data-dismiss="modal" class="btn btn-primary"name="action" id="Accept">Accept</button> -->
       
       
      </div>
     </div>
   </div>
  </div>
  <div class="toast mt-3">
  <div class="toast-body">
  hello 
  </div>
  </div>

<?php include "footer.php"; ?>
 </body>
</html>
<script type="text/javascript" language="javascript" >


 $(document).ready(function(){
  <?php
$Admin=$this->session->userdata('Authorisedpt');?>
var Admin='<?php echo $Admin;?>';

  if(Admin=='Principal')
  {
  
$("#customer_data th:last-child").remove();
fill_datatable();
  }
  else{
    $('#hrt').remove();
    fill_datatabl();
}
            function fill_datatable(category = '', sub_category = '',from_date='',to_date='')
          {
          $('#customer_data').DataTable({
                "processing" : true,
                "serverSide" : true,
                "sInfoFiltered":false,
                "order" : [],
                "columnDefs": [
            {
                "targets": [6,7],
                "visible": false,
                "searchable": false
            }],
                dom: 'lBfrtip',
   buttons: [{text: 'Report as PDF',filename: 'Grievances',
    extend:'pdf',title:'Grievances/Feedback', exportOptions: {
        columns: [0, 2, 4,5,6,7],
    }},{text: 'Report as Excel',filename: 'Grievances',
    extend:'excelHtml5',title:'Grievances/Feedback', exportOptions: {
        columns: [1, 2, 4,5,6,7],
    }}
   ], 
                oLanguage:
                {
                "sLengthMenu":"Show _MENU_  Entries"},
              
                "ajax" : {
                url:"<?php echo base_url();?>application/views/feedback/filter.php",
                type:"POST",
                data:{
                category:category,sub_category:sub_category,from_date:from_date,to_date:to_date,Admin:Admin
                }
                
                }
            });

            }
            function fill_datatabl(from_date='',to_date='')
            {
          $('#customer_data').DataTable({
                "processing" : true,
                "serverSide" : true,
                "sInfoFiltered":false,
                "order" : [],
                "columnDefs": [
            {
                "targets": [6,7],
                "visible": false,
                "searchable": false
            }],
                dom: 'lBfrtip',
   buttons: [{text: 'Report as PDF',filename: 'Grievances',
    extend:'pdf',title:'Grievances/Feedback', exportOptions: {
        columns: [0, 2, 4,5,6,7],
    }},{text: 'Report as Excel',filename: 'Grievances',
    extend:'excelHtml5',title:'Grievances/Feedback', exportOptions: {
        columns: [1, 2, 4,5,6,7],
    }}
   ], 
                oLanguage:
                {
                "sLengthMenu":"Show _MENU_  Entries"},
              
                "ajax" : {
                url:"<?php echo base_url();?>application/views/feedback/filter.php",
                type:"POST",
                data:{
                from_date:from_date,to_date:to_date,Admin:Admin
                }
                
                }
            });

            }
  
  
  $('#filter').click(function(){
    var sub_category = '';
    if($('#abc').val()!='')
    {
      sub_category =$('#abc').val();
    }
    if($('#bcd').val()!='')
    {
      sub_category =$('#bcd').val();
    }
    if($('#cde').val()!='')
    {
      sub_category =$('#cde').val();
    }
   var  category= $('#fetchval').val();
  var from_date = $('#from_date').val();  
   var to_date = $('#to_date').val();
   
   if(category!='' && sub_category!=''&&from_date!=''&&to_date!='')
   {
    $('#customer_data').DataTable().destroy();
    fill_datatable(category,sub_category,from_date,to_date);
   }
   else if(from_date!=''&&to_date!='')
   {
    $('#customer_data').DataTable().destroy();
    fill_datatabl(from_date,to_date);
   }
   else
   {

    $('#customer_data').DataTable().destroy();
    fill_datatable();
   }
  });
  
 
    $(document).on('click', '.update', function(){
  var id = $(this).attr("id");
  $('#Comment').val("");
  $('#userModal').modal('show');
  $('.modal-title').text('Response');
  var idd =$('#id').val(id);
  $('#Accept').hide();
  $('#Comment').prop('disabled',false);
  $('#action').show();

 });
 
 $(document).on('click', '.upda', function(){
  var id = $(this).attr("id");
  $('#Comment').val("");
  $('#userModal').modal('show');
  $('.modal-title').text('View');
  $('#Comment').prop('disabled',true);
  $('#action').hide();
  $('#Accept').hide();
  var idd =$('#Comment').val(id);

 });
 
 $(document).on('click', '.accept', function(){

  var id = $(this).attr("id");
  var sid = $(this).attr("name");
  $('#Comment').val("");
 
  $('#userModal').modal('show');
  $('#action').hide();
  $('#Accept').show();
  $('.modal-title').text('View');
  $('#Comment').prop('disabled',true);
 
 
  var idd =$('#Comment').val(id);
  var idd =$('#id').val(sid);

 });

 $(document).on('click', '#Accept', function(){
 var day=new Date();
 var dd=day.getDate();
 var mm=day.getMonth()+1;
 var yyyy=day.getFullYear();
 day=yyyy+"-"+mm+"-"+dd;
 
 var id=$("#id").val();
  alert(day+""+id);
              $.ajax({
                  url:'<?php echo base_url();?>application/views/feedback/filter_sol.php',
                  method:'POST',
                  data:{day:day,id:id},
                 success:function(data){
                  
                  $('#customer_data').DataTable().destroy();
  fill_datatable();
                 }
              });
 

 });

 
 $(document).on('click', '.forward', function(){
  var Gid = $(this).attr("id");
  $.ajax({
                    url:'<?php echo base_url();?>application/views/feedback/filter_sol.php',
                    method:'POST',
                    data:{Gid:Gid},
                   success:function(data){
                    
                    $('#customer_data').DataTable().destroy();
    fill_datatable();
                   }
                });
     
 

 });
 $(document).on('click', '.updat', function(){
  var id = $(this).attr("id");
  $('#userModal').modal('show');
  $('.modal-title').text('Response');
  $('#Comment').prop('disabled',true);
  $('#action').hide();
  $('#Accept').hide();
  var idd =$('#Comment').val(id);
 });


 $("#action").click(function(){
                var Comment=$("#Comment").val();
              var id=$("#id").val();
              var day=new Date();
 var dd=day.getDate();
 var mm=day.getMonth()+1;
 var yyyy=day.getFullYear();
 day=yyyy+"-"+mm+"-"+dd;
                $.ajax({
                    url:'<?php echo base_url();?>application/views/feedback/filter_sol.php',
                    method:'POST',
                    data:{Comment:Comment,id:id,day:day},
                   success:function(data){
                    
                    $('#customer_data').DataTable().destroy();
    fill_datatable();
                   }
                });
            });



});
$(document).ready(function () {
    toggleFields();
             $("#fetchval").change(function () {
    toggleFields();
    });
});

function toggleFields(){
    if ($("#fetchval").val() === "College")
        $("#ab").show();
    else
        $("#ab").hide();
        if ($("#fetchval").val() === "Department")
        $("#bc").show();
    else
        $("#bc").hide();
        if ($("#fetchval").val() === "Hostel")
        $("#cd").show();
    else
        $("#cd").hide();
        if ($("#fetchval").val() === "Other")
        $("#de").show();
    else
        $("#de").hide();
}
</script>

