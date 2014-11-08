<?php
require ('core/init.php');
$admin_id= $_SESSION['id'];
$id = $_GET['delete'];
$sql = $users->delmember($id);
//$sql=mysql_query("INSERT INTO member VALUES ('$admin_id','4','$member_name','$age','$rollno','$dept','$position')");
if($sql)
{
echo "Record deleted successfully";
}
else
{
echo "something went wrong";
}
?>
