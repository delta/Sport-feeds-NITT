<?php
require ('core/init.php');

if (empty($_POST) === false) {
 
	$accessKey = trim($_POST['key']);
	
 
	if (empty($accessKey) === true ) {
		$errors[] = 'Sorry, but we need your access key for team.';
	} else {
 
		$login = $users->login($accessKey);
		if ($login === false) {
			$errors[] = 'Sorry, that accessKey is invalid';
		}else {
			// username/password is correct and the login method of the $users object returns the user's id, which is stored in $login
 
 			$_SESSION['id'] =  $login;// The user's id is now set into the user's session  in the form of $_SESSION['id']     
			echo $_SESSION['id'];
			if(isset($_SESSION['id']))
			{
			#Redirect the user team to home.php.
			header('Location: edit_home.php');
			}
			else
			{
				echo "cannot open without login";
			} 
			exit();
		}
	}
} 
?>
<html>
<head>
<title>Football Feed</title>
</head>
<style>
#container1
{
	height:100%;
	width:100%
}
#toptab
{
	height:8%;
	width:100%;
}
.tab_ele
{
	float:left;
	background-color:#CCC;
	opacity:0.5;
	height:100%;
	width:auot;
	margin-left:15px;
	padding:8px 8px 8px 8px;
	font-family:"Adobe Gothic Std B";
	color:#333;
}
.tab_ele_no
{
	float:left;
	background-color:#CCC;
	opacity:0.5;
	height:100%;
	width:auot;
	margin-left:20px;
	padding:8px 8px 8px 8px;
	font-family:"Adobe Gothic Std B";
	color:#333;
}
.tab_ele:hover
{
	-webkit-animation:zfac 2s;
	-webkit-animation-fill-mode:forwards;
-moz-animation:zfac 2s;
	-moz-animation-fill-mode:forwards;

}
@-webkit-keyframes zfac{
	0% {-webkit-transform:scale(1,1);
	    opacity:0.5;
		color:#333;}
	10% {-webkit-transform:scale(1.2,1.2);
	    opacity:0.75;
		background-color:#CCC;}
	40% {-webkit-transform:scale(1,1);
	      opacity:1.0;
		  color:#FFF;
		  background-color:#000;}
    100% {-webkit-transform:scale(1,1);
	      opacity:1.0;
		  color:#FFF;
		  background-color:#C00;}

}
#pics
{
	margin-left:1.5%;
	margin-top:1.5%;
	border-style:solid;
	border-color:#FFF;
	border-width:2%;
	float:left;
	width:30%;
	height:64%;
	font-family:"Adobe Gothic Std B";
	color:#FFF;
	font-weight:bold;
	font-size:16px;
}

#pics:hover .pic_cir
{
	-webkit-animation:pic_func 1s;
	-webkit-animation-fill-mode:forwards;
	-moz-animation:pic_func 1s;
	-moz-animation-fill-mode:forwards;

}

@-webkit-keyframes pic_func
{
	0% { -webkit-transform:scale(1,1)}
	25% { -webkit-transform:scale(1.2,1.2)}
	50% { -webkit-transform:scale(1,1)}
	100% { -webkit-transform:scale(1,1)}
}



#news
{
	
	margin-left:1.5%;
	margin-top:1.5%;
	border-style:solid;
	border-color:#FFF;
	border-width:2%;
	float:left;
	width:28%;
	height:84%;
	font-family:"Adobe Gothic Std B";
	color:#FFF;
	font-weight:bold;
	font-size:16px;
}

#admin
{
	
	margin-left:1.5%;
	margin-top:-9%;
	border-style:solid;
	border-color:#FFF;
	border-width:2%;
	float:left;
	width:30%;
	height:17.25%;
	font-family:"Adobe Gothic Std B";
	color:#FFF;
	font-weight:bold;
	font-size:16px;
}

#news:hover
{
	background-image:url(Res/trans_w.png);
}
#news:hover p
{
	color:#000;
}


#live
{
	margin-left:1.5%;
	margin-top:1.5%;
	border-style:solid;
	border-color:#FFF;
	border-width:2%;
	float:left;
	width:35.5%;
	height:84%;
	font-family:"Adobe Gothic Std B";
	color:#FFF;
	font-weight:bold;
	font-size:16px;
}

#live:hover
{
	background-image:url(Res/trans_w.png);
	color:#000;
}

#live:hover .away
{
	background-color:#000;
}

#live:hover 
{
	-webkit-animation:p_func 1s;
	-webkit-animation-fill-mode:forwards;
}

@-webkit-keyframes p_func
{
	0% { -webkit-transform:scale(1,1)}
	25% { -webkit-transform:scale(1.05,1.05)}
	50% { -webkit-transform:scale(1,1)}
	100% { -webkit-transform:scale(1,1)}
}

.pic_cir
{
	background-color:#FFF;
	float:left;
	height:13%;
	width:18%;
	margin-left:4%;
	margin-bottom:1%;
	z-index:-1;
}
.pic_cir:hover
{
	-webkit-animation:picfac 2s;
	-webkit-animation-fill-mode:forwards;
	z-index:100;
	position:absolute;
	left:0px;
}
@-webkit-keyframes picfac{
	0% {}
	100%{z-index:100;
	background-color:#FFF;
	height:39%;
	width:28%;
	left:0px;
	margin-left:3%;
	margin-bottom:3%;
}
}

.news_ele
{
	width:93.5%;
	height:8%;
	background-size:cover;
	margin-left:3%;
	margin-bottom:3%;
}

.news_ele:hover
{
	-webkit-animation:glw 2s;
	-webkit-animation-fill-mode:forwards;
}

@-webkit-keyframes glw
{
	0% {}
	100% {background-color:#F00};
}

.bar
{
	height:5%;
	margin-left:3%;
}

#shot_home
{
	background-color:#F00;
	width:70%;
}

#shot_away
{
	width:10%;
}

#pos_away
{
	width:55%;
}

#pos_home
{
	background-color:#F00;
	width:45%;
}
#cor_away
{
	width:30%;
}

#cor_home
{
	background-color:#F00;
	width:80%;
}
#fol_away
{
	width:67%;
}

#fol_home
{
	background-color:#F00;
	width:13%;
}

.away
{
	background-color:#FFF;
	height:5%;
	margin-left:3%;
}
#container2
{
	height:100%;
	width:100%
}
.box
{
	overflow:scroll;
	overflow-x:hidden;
	margin-left:1.5%;
	margin-top:1.5%;
	border-style:solid;
	border-color:#FFF;
	border-width:2%;
	float:left;
	font-family:"Adobe Gothic Std B";
	color:#FFF;
	font-weight:bold;
	font-size:16px;
	height:93%;
	width:96.5%;
}

.player
{
	float:left;
	height:30%;
	width:20%;
	margin-left:4%;
	margin-top:4%;
}

.player:hover
{
	-webkit-animation:pla_z 1s;
	-webkit-animation-fill-mode:forwards;
}

.player:hover .inner
{
	-webkit-animation:pla_z 1s;
	-webkit-animation-fill-mode:forwards;
	background-color:#F00;
}


@-webkit-keyframes pla_z
{
	0% { -webkit-transform:scale(1,1)}
	25% { -webkit-transform:scale(1.1,1.1)}
	
	100% { -webkit-transform:scale(1,1)}
}

.imgbox
{
	height:70%;
	width:45%;
	background-size:cover;
}
.inner
{
	background-color:#000;
	height:30%;
	width:100%;
}

</style><body style=" background:url(Res/football.jpg) repeat center center fixed; max-height:100%; max-width:100%;">
<div id="container">
  <div id="container1">
  
  <div id="toptab">
   <a href="index.php" style="text-decoration:none"><div class="tab_ele" style="background-color:#9F0; color:#FFF; opacity:0.9">INDEX</div></a>
   <a href="#team" style="text-decoration:none"><div class="tab_ele">TEAM</div></a>
   <a href="#login" style="text-decoration:none"><div class="tab_ele">ADMIN</div></a>
   <div class="tab_ele_no" style="width:75%"></div>
  </div>
  
  <div id="pics" >
   <p style="margin-left:4%;"> DAYS OF GLORY</p>
<?php
$f= $_GET['id'];
	$images = $general->gallery($f);
	foreach($images as $reachs)
	{

	?>
<div class='pic_cir'>
<img src="gallery/<?php echo $reachs['file_name'];?>" alt ="<?php echo $reachs['file_name'];?>"height="50" width="50" />
</div>
<?php
}
?>

    </div>
  
  <div id="live" >
  <p style="margin-left:3%">LIVE</p>
  <p style="font-size:50px; margin-left:5%; margin-top:-7%">NITT</p>
  <p style="font-size:50px; margin-top:-24%; margin-left:80%">3</p>
  <p style="font-size:50px; margin-left:5%; margin-top:-15%">Sasthra</p>
  <p style="font-size:50px; margin-top:-24%; margin-left:80%">1</p>
  <p style="margin-top:-10%; margin-left:3%">SHOTS</p>
  <div id="shot_home" class="bar" style="margin-top:-2%"></div>
  <div id="shot_away" class="away"></div>
  <p style="margin-top:2%; margin-left:3%">POSSESSION</p>
  <div id="pos_home" class="bar" style="margin-top:-2%"></div>
  <div id="pos_away" class="away"></div>
  <p style="margin-top:2%; margin-left:3%">CORNERS</p>
  <div id="cor_home" class="bar" style="margin-top:-2%"></div>
  <div id="cor_away" class="away"></div>
  <p style="margin-top:2%; margin-left:3%">FOULS</p>
  <div id="fol_home" class="bar" style="margin-top:-2%"></div>
  <div id="fol_away" class="away"></div>
  
  <p style="margin-left:90%; margin-top:-116%">36'</p>
  
  
  
  </div>
    
  <div id="news" >
  <p style="margin-left:3%">LATEST UPDATES</p>
<?php
$f= $_GET['id'];
$data = $general->posts($f);

foreach($data as $reach)
{
		   	
      echo "<tr>";
      
    echo "<div class='news_ele'>";
    echo "<p id='news_hdline' style='margin-top:2%'>".$reach['postTitle']."</p>";
    echo "<p id='news_date' style='margin-top:-2%; font-size:12px; float:right'>".$reach['postDate']."</p>";
    echo "</div>";
	echo "</tr>";
}

?>
    
    
    <!--<div class="news_more" style="height:3%; margin-top:-2%">
    <p id="news_hdline" style="margin-top:7%; float:right; margin-right:-18.5%;">MORE >></p>
    </div>-->
  </div>
  
 <a name="login">
  <div id="admin" >
<p style="margin-left:3%">ADMIN ACCESS</p>
	<?php if(empty($errors) === false){
 
			echo '<p>' . implode('</p><p>', $errors) . '</p>';			
 
		} 
		?>
  
   <form action="" method="post" target="">
  <p style="margin-left:3%">ACCESS KEY :
  <input type="text" name="key"/></p>
  <input class="email_btn" name="submit" type="submit" value="Done"style=" margin-top:-4%"  />
  </form>
  </div>
  </div>
</a>
  
 
  <div id="container2">
   <div class="box">
<a name="team">
     <p style="margin-left:2%">TEAM SHEET</p>
	<?php
	$f= $_GET['id'];
	$data = $general->member($f);
		foreach($data as $reach)
		{
			echo "<div class='player'>";
       			echo "<div class='inner'>";  
         		echo "<p style='margin-top:10%; margin-left:5%;'>".$reach['membername']."</p>";
         		echo "<p style='margin-top:-3%; margin-left:5%;'>".$reach['dept']."</p>";
         		echo "<p style='margin-top:-13.5%; margin-left:35%;'>".$reach['age']."</p>";
         		echo "<p style='margin-top:-15%; margin-left:70%'>".$reach['pos']."</p>";
       			
       			//echo "<div class='imgbox' style='background-image:url(Res/Jordi-Roura-121107-Smiling-R-300.jpg)'></div>";
			
		


	?>
     
    <div class='imgbox'>
	<img src="uploads/<?php echo $reach['file_name'];?>" alt ="<?php echo $reach['file_name'];?>" height="130" width="100"/>

    </div>
</div>
</div>
<?php
}
?>
    <!-- <div class="player">
       <div class="inner" >
         <p style="margin-top:10%; margin-left:5%;">Alester Fraser</p>
         <p style="margin-top:-3%; margin-left:5%;">Civil</p>
         <p style="margin-top:-13.5%; margin-left:35%;">19</p>
         <p style="margin-top:-15%; margin-left:90%">ST</p>
       </div>
       <div class="imgbox" style="background-image:url(Res/Jordi-Roura-121107-Smiling-R-300.jpg)"></div>
     </div>
     
     <div class="player">
       <div class="inner" >
         <p style="margin-top:10%; margin-left:5%;">Alester Fraser</p>
         <p style="margin-top:-3%; margin-left:5%;">Civil</p>
         <p style="margin-top:-13.5%; margin-left:35%;">19</p>
         <p style="margin-top:-15%; margin-left:90%">ST</p>
       </div>
       <div class="imgbox" style="background-image:url(Res/Jordi-Roura-121107-Smiling-R-300.jpg)"></div>
     </div>
     
     <div class="player">
       <div class="inner" >
         <p style="margin-top:10%; margin-left:5%;">Alester Fraser</p>
         <p style="margin-top:-3%; margin-left:5%;">Civil</p>
         <p style="margin-top:-13.5%; margin-left:35%;">19</p>
         <p style="margin-top:-15%; margin-left:90%">ST</p>
       </div>
       <div class="imgbox" style="background-image:url(Res/Jordi-Roura-121107-Smiling-R-300.jpg)"></div>
     </div>
     
      <div class="player">
       <div class="inner" >
         <p style="margin-top:10%; margin-left:5%;">Alester Fraser</p>
         <p style="margin-top:-3%; margin-left:5%;">Civil</p>
         <p style="margin-top:-13.5%; margin-left:35%;">19</p>
         <p style="margin-top:-15%; margin-left:90%">ST</p>
       </div>
       <div class="imgbox" style="background-image:url(Res/Jordi-Roura-121107-Smiling-R-300.jpg)"></div>
     </div>-->
     
     
   </div> 
  </div>

</a>
</div>
</body>
</html>
