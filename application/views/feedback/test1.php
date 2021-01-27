<html>
<head>
<style>
table
{
  border-collapse: collapse;
    width: 600px;
}
th
{

}
tr{

}
td
{
  padding: 10px 20px 10px 20px;
}
    select
    {
        padding: 10px 20px 10px 20px;
        margin: 10px;
        font-size: 18px;
        display: inline-block;
        
    }
    option 
    {
        padding: 10px 20px 10px 20px;
    }
    #ab
    {
        font-size: 18px;
        display: inline-block;
    }
</style>
<?= link_tag('application/assets/jquery.js')?>
  <script src="<?php echo base_url();?>assets/jquery.js"></script>
  <script src=""></script>
<script>
    $(document).ready(function()
                     {
        $("#fetchval").on('change',function()
                         {
            var keyword = $(this).val();
            $.ajax(
            {
                url:'<?php echo base_url();?>application/views/feedback/test2.php',
                type:'POST',
                data:'request='+keyword,
                
                beforeSend:function()
                {
                    $("#table-container").html('Working...');
                    
                },
                success:function(data)
                {
                    $("#table-container").html(data);
                },
            });
        });
    });
    
</script>
</head>
<body>
<h1>Ajax Filter Table</h1>
<div id="ab">Fetch Results By:</div><select id="fetchval" name="fetchby" >
    <option value="1st">1st year</option>
    <option value="2nd">2nd year</option>
    <option value="3rd">3rd year</option>
    <option value="Graduate">Graduate</option>
</select>
<br>
<br>
<div id="table-container">
<?php
  $conn = mysqli_connect('localhost','root','','work');
  $query="select * from students";
  $output=mysqli_query($conn,$query);
echo '<table border="1"';
    echo '<tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Roll No.</th>
      <th>Year</th>
    </tr>';
  while($fetch = mysqli_fetch_assoc($output))
  {
    
      echo '<tr>';
      echo '<td>'.$fetch['first_name'].'</td>';
      echo '<td>'.$fetch['last_name'].'</td>';
      echo '<td>'.$fetch['roll_number'].'</td>';
      echo '<td>'.$fetch['year'].'</td>';
      echo '</tr>';
    
  };
echo '</table>';
 ?>

</div>
</body>
</html>