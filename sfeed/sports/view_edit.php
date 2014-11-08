<!doctype html>
<html lang="en">
<head>
<title>View homepage</title>
	
	 <meta content="text/html; charset=utf-8" http-equiv="content-type" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link media="all and (max-width: 30em)" rel="stylesheet" href="narrow.css" />
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css"/>
	<link rel="stylesheet" type="text/css" href="css/stylemember">
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
	<script src="js/adminhome.js" type="text/javascript"></script>
	
</head>
<!--viewing details of members -->
<?php 

require ('core/init.php');

 $admin_id= $_SESSION['id'];
	
$details = $users->displaymembers($admin_id);

foreach($details as $reach)
{
		   	
	echo $reach['membername'];
			    			
}
                   
	<div id="container" style="overflow:auto">
		<ul>
 
			<li><a href="edit_home.php">Edit</a></li>
			<li><a href="view_edit.php">View</a></li>
			<li><a href="logout.php">Logout</a></li>
			
			
                        <li><a href="#"> <?php echo $username ?>  </a></li>
 
		</ul>	 
?>


