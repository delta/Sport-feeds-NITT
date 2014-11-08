<html>

<head>

	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="css/style.css" >

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css"/>

	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>

	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

	<script src="js/adminhome.js" type="text/javascript"></script>

	<title>Blog</title>

</head>

<body>

		

		<div id="bar">

		<button><a href="dashboard.php">DashBoard</a></button>

		<button><a href="register.php">users</a></button>

		<button><a href="viewwebsite.php">View website</a></button>

		<button><a href="logout.php">Logout</a></button>

		</div>

	

	<h1><p>BLOG</p></h1>

	<hr >

	



	</div>

 

</body>

</html>

<?php

//include database connection

		//require ('core/connect/connection.php');

		require ('core/init.php');	

		$admin_id= $_SESSION['id'];	

//$q="SELECT postTitle ,postDesc,postDate ,postCont FROM posts ";

$row = $users->viewwebsite($admin_id);

foreach($row as $reachs)



	//$title = $row['postTitle'];
{

 

 

 echo '<div>';

				echo '<h1>'.$reachs['postTitle'].'</h1>';

				

				echo '<h2>Posted on  '.date('jS M Y', strtotime($reachs['postDate'])).'</h2>';

				echo '<div id="content">'.$reachs['postCont'].'</div>';	

               echo '<br>'. '<br>';				

			echo '<div>';

	}		              

?>


