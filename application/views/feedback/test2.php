<?php
  
  $conn = mysqli_connect('localhost','root','','work');
  $request=$_POST['request'];
  $query="select * from students where year='$request'";
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