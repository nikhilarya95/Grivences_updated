<?php
$connect = new PDO("mysql:host=localhost:3300;dbname=kec1", "root", "");

$Admin=$_POST['Admin'];
$query='';
$column = array('s_id','User','Uname','Category','Scategory','GpostDate','comments','comments','Gsolution','Gsolutions','button','Forward');
if($Admin!='Principal')
{
$query = "SELECT * FROM userverification natural join grievancesdetails where Scategory='$Admin' AND ";
}
else{
    $query = "SELECT * FROM userverification natural join grievancesdetails where";
}

if(isset($_POST["from_date"], $_POST["to_date"]))
{
if(isset($_POST['category'], $_POST['sub_category']) && $_POST['category'] != '' && $_POST['sub_category'] != '')
{
   
 $query .= ' Category =  "'.$_POST['category'].'"  AND  Scategory= "'.$_POST['sub_category'].'" AND GpostDate BETWEEN "'.$_POST["from_date"].'" AND "'.$_POST["to_date"].'" AND ';
}
if($Admin!='Principal' && $_POST["from_date"]!='' && $_POST["to_date"]!='')
{
 $query .= 'GpostDate BETWEEN "'.$_POST["from_date"].'" AND "'.$_POST["to_date"].'" AND ';
}
}


if(isset($_POST["search"]["value"]))
{
    $query .= '(Gid LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR U_name LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR Category LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR Scategory LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR User LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR GpostDate LIKE "%'.$_POST["search"]["value"].'%") ';
   
 
}
if(isset($_POST['order']))
{
    
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY s_id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();



$data = array();


foreach($result as $row)
{
 $sub_array = array();
  $sub_array[] = $row['Gid'];
 $sub_array[] = $row['User'];
 $sub_array[] = $row['U_name'];
 $sub_array[] = $row['Category'];
 $sub_array[] = $row['Scategory'];
 $sub_array[] = $row['GpostDate'];
 $sub_array[] = $row['comments'];
 $sub_array[] = $row['Gsolution'];
//  if($row['GacceptedDate']!='0000-00-00')
//  {
 $sub_array[] ='<button type="button" name="update" id="'. $row['comments'].'" class="btn btn-info btn-xs upda">View</button>';
//  }
//  else{
//     $sub_array[] ='<button type="button" name="'.$row["Gid"].'" id="'. $row['comments'].'" class="btn btn-info btn-xs accept">View</button>';
//  }
 if( $row['Gsolution']==''&&$row['Gstatus']=='0'&&$Admin!='Principal' )
 {
 $sub_array[]='<button type="button" name="update" id="'.$row["Gid"].'" class="btn btn-info btn-xs update">Reply</button>';
 $sub_array[]='<td><button type="button" name="update" id="'.$row["s_id"].'" class="btn btn-info btn-xs forward">Forward</button></td>';

}
elseif( ($row['Gsolution']==''&&$row['Gstatus']!='0'&&$Admin=='Principal')||($row['Gsolution']==''&&$row['Gstatus']=='0'&&$Admin=='Principal'&&$row['Category']=='College'))

{
    $sub_array[]='<button  type="button"  id="'.$row["Gid"].'" class="btn btn-info btn-xs update">Reply</button>';
    $sub_array[]='<td><button disabled="true" type="button" name="update" id="'.$row["s_id"].'" class="btn btn-danger btn-xs forward">Forward</button></td>';
    
}
elseif( $row['Gsolution']==''&&$row['Gstatus']=='0'&&$Admin=='Principal')
{
$sub_array[]='<button  disabled="true" type="button"class="btn btn-info btn-xs">Reply</button>';
$sub_array[]='<td><button disabled="true" type="button" name="update" id="'.$row["s_id"].'" class="btn btn-danger btn-xs forward">Forward</button></td>';

}
elseif( $row['Gsolution']==''&&$row['Gstatus']=='2'&&$Admin!='Principal')
{
$sub_array[]='<button  disabled="true" type="button"class="btn btn-danger btn-xs">Reply</button>';
$sub_array[]='<td><button disabled="true" type="button" name="update" id="'.$row["s_id"].'" class="btn btn-danger btn-xs forward">Forward</button></td>';

}

 else{
    $sub_array[]='<button type="button" name="update" id="'.$row["Gsolution"].'" class="btn btn-info btn-xs updat">View</button>';
    $sub_array[]='<td><button disabled="true" name="update" id="'.$row["s_id"].'" class="btn btn-danger btn-xs update">Forward</button></td>';

}
 

 
 $data[] = $sub_array;
}

function count_all_data($connect,$Admin)
{  
    $query='';

    if($Admin!='Principal')
    {
        $query = "SELECT * FROM userverification natural join grievancesdetails where Scategory='$Admin'";
 
}
else{
    $query = "SELECT * FROM userverification natural join grievancesdetails ";
}
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 "draw"       =>  intval($_POST["draw"]),
 "recordsTotal"   =>  count_all_data($connect,$Admin),
 "recordsFiltered"  =>  $number_filter_row,
 "data"       =>  $data
);


echo json_encode($output);

?>