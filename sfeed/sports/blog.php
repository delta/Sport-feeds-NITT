<?php

require('core/init.php');

?>
<style>
#blog
{
font-size:24;
padding:40px;
overflow:hidden;
margin-left:8%;
top:100%;
font-style:normal;
	font-family:"Cursive",sans-serif;
color:blue;
}
#content
{
padding:20px;
overflow:hidden;
margin-left:10%;
top:100%;
}
 body {
    background-color: #b0c4de;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>SPORTS_BLOG</title>
<link href="blogstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="container">
<ul id="nav">
<li id="selected"><a href="index.php">HOME</a></li>
<li><a href="">TEAM</a></li>
<li><a href="">MATCHS</a></li>
<li><a href="#">Blog</a></li>

</ul>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery.spasticNav.js"></script>
<script type="text/javascript">
$('#nav').spasticNav();
</script>
<div>
<?php
$content = $general->dashboard();
		
echo '</br></br></br></br></br>';
               
		foreach($content as $reach)
		{
		   	
		     	
		 $team_id = $reach['Id'];
		 $name = $general->team($team_id);
		 echo '<div id="blog">Message From '.$name['Team'].' Team </br> Posted on:'.$reach['postdate'].'</div>';
		 echo '<div id="content">'.$reach['messages'].'</div>';
		 
		  

			
		}
                   
		 

?>
</div>

</body>
</html>
