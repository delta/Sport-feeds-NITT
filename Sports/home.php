<?php
require ('core/init.php');

$user 	= $users->teamdata($_SESSION['id']);
$username 	= $user['Team'];
 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<title>Home Page of AnyTeam</title>
</head>
<body>	
	<div id="container" style="overflow:auto">
		<ul>
 
			
			<li><a href="logout.php">Logout</a></li>
                        <li><a href="#"> <?php echo $username ?>  </a></li>
 
		</ul>
		<h1> <?php echo $username, '!'; echo $_SESSION['id']; ?></h1><!-- This is just to display details for a specific team -->
	</div>
</body>
</html>
