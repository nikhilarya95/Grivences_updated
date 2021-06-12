<?php
$conn = new mysqli('localhost', 'root', '', 'kec1');
if(isset($_POST['Comment'], $_POST['id'],$_POST['day']))
{
$comment=$_POST['Comment'];
$id=$_POST['id'];
$day=$_POST['day'];
$sql = "UPDATE grievancesdetails SET Gsolution='$comment',Gstatus='1',GclosedDate='$day' WHERE Gid ='$id';";
if ($conn->query($sql) === TRUE) {
    $query = "SELECT * FROM grievancesdetails where Gid='$id'";
    $result=$conn->query($query);
    $row=$result->fetch_assoc();
    $Uemail=$row['Uemail'];
    $to=$Uemail;
    $subject="Your Grievance Response";
    $text=$comment;
    $headers="From: Grievence@kongu.edu";
    mail($to,$subject,$text,$header);

}
else 
{
    echo "failed";
}
}
if(isset($_POST['Gid']))
{
    $id=$_POST['Gid'];
    $sql = "UPDATE grievancesdetails SET Gstatus='2' WHERE s_id ='$id';";
    if ($conn->query($sql) === TRUE) {
        echo"succeaa";
    }
}
if(isset($_POST['day'], $_POST['id']))
{
    $id=$_POST['id'];
    $current_day=$_POST['day'];
    echo $current_day;
    $sql = "UPDATE grievancesdetails SET GacceptedDate=' $current_day' WHERE Gid ='$id';";
    if ($conn->query($sql) === TRUE) {
        echo"success";
    }
}
?>
