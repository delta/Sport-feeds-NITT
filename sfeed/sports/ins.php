<?php
require ('core/init.php');
$admin_id= $_SESSION['id'];
$member_name =$_GET["member_name"];
$age=$_GET["age"];
$rollno=$_GET["rollno"];
$dept = $_GET["dept"];
$position =$_GET["position"];
if($member_name=="" && $age=="" && $rollno=="" && $dept=="" && $position=="")
{
	echo "Please enter the fields";
}
else
{ 
$sql = $users->addmember($admin_id,$member_name,$age,$rollno,$dept,$position);
//$sql=mysql_query("INSERT INTO member VALUES ('$admin_id','4','$member_name','$age','$rollno','$dept','$position')");
if($sql)
{
echo "Record indserted successfully";
}
else
{
echo "wrong";
}
}
?>
