





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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transiti onal//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>The BasketBall Team of NIT Trichy</title>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="functions.js"></script>
<link rel="stylesheet" href="flipclock.css">
<script src="jquery.min.js"></script>
<script src="flipclock.js"></script>

</head>
<body>

<style>
    body { 
          background: url(images/bgbb.jpg) repeat center center fixed; 
         -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          max-height: 100%;
          max-width: 100%;
          }
</style>

<div class="cf">
<ul><li><a href="index.php"><h2>HOME</h2></a>
</li>
<li><a href="#mems"><h2>TEAM</h2></a>
</li>
<li><a href="#matches"><h2>MATCHES</h2></a>
</li>
<li><a href="blog.php"><h2>BLOG</h2></a>
</li>
</ul>
</div>

<div id="container">
    <div class="login">
      <div id="to"><h2>ADMIN</h2></div>
  <?php if(empty($errors) === false){
 
      echo '<p>' . implode('</p><p>', $errors) . '</p>';      
 
    } 
    ?>
      <form action="" method="post" target="">
        <input type="text" class="email_field" name="key" size="18" placeholder="Enter Key"  />
        <input type="hidden" value="sicanstudios" name="uri"/>
        <input type="hidden" name="loc" value="en_US"/>
        <input class="email_btn" name="submit" type="submit" value="DONE"/>
      </form>
    </div>
</div>
<a name="gall">
<div>
  <ul class="slides">
    <?php  
      $f = $_GET['id'];
      $images = $general->gallery($f);
      $i = 0;
      foreach($images as $reachs)
      {
        $i=$i+1;
    ?>
    <input type="radio" name="radio-btn" id="<?php echo $i;?>" checked/>
    <li class="slide-container">
    <div class="slide">
    <img src="gallery/<?php echo $reachs['file_name'];?>" alt ="<?php echo $reachs['file_name'];?>" />
        </div>
    <div class="nav">
      <label for="<?php echo $i-1;?>" class="prev">&#x2039;</label>
      <label for="<?php echo $i+1;?>" class="next">&#x203a;</label>
    </div>
    </li>
    <?php
      }
    ?>

    <li class="nav-dots">
    <?php
      for ($a=1; $a < $i ; $a++) { 
    ?>
    <label for="<?php echo $a;?>" class="nav-dot"></label>
    <?php
      }
    ?>   
    </li>
  </ul>
</div></a>
<a name="matches">
<div class="updates">
	<h2>UPDATES</h2>
	<ul style="list-style-type: none;">
		<li style="text-align:left;">
		<?php

$f= $_GET['id'];
$data = $general->posts($f);

foreach($data as $reach)
{
		   	
      echo "<tr>";
      
    echo "<div class='news_ele'>";
    echo "<p id='news_hdline' style='margin-top:2%'>".$reach['postTitle']."</p>";
    echo "<p id='news_desc' style='margin-top:-2%; font-size:12px; float:left'>".$reach['postDesc']."</p>";
    echo "<p id='news_date' style='margin-top:-2%; font-size:12px; float:right'>".$reach['postDate']."</p>";
    echo "</br>";
    echo "</div>";
	echo "</tr>";
}

?>	
		</li>
	</ul>
</div></a>
<style>
	.updates{
		border-style: ridge;
		border-color: black;
		color: black;
		font-family: Futura, "Trebuchet MS", Arial, sans-serif;
		border-radius: 5px;
		margin-left: 25px;
		margin-top: 25px;
		display: inline-block;
		width: 400px;
		height: 550px;
		text-align: center;
		background: rgba(155, 0, 0, 0.4);
	}
</style>

<div class="scoreboard">
<a name="matches"></a>
<table>
<td>
    <h2 style="text-align:center;">HOME</h2>
    <div class="clock"></div>
      <div class="counter">
        <button type="button" class="increment">+1</button>
      	<button type="button" class="decrement">-1</button>
      	<button type="button" class="reset">Reset</button>
    	</div>
	    <div style="position:relative; display:inline-block; top:-140px; margin-right:40px;">
      	<h3>First Quarter : 3</h3>	
      	<h3>Second Quarter : 3</h3>
	    </div>
	<div style="position:relative; display:inline-block; top:-140px;">
	<h3>Third Quarter : 3</h3>
	<h3>Final Quarter : 3</h3>
	</div>
</td>
<td>
    <h2>AWAY</h2>
	<div class="clock2"></div>
	<div class="counter">
	<button type="button" class="increment2">+1</button>
	<button type="button" class="decrement2">-1</button>
	<button type="button" class="reset2">Reset</button>
	</div>
	<div style="position:relative; display:inline-block; top:-140px; margin-right:40px;">	
	<h3>First Quarter : 3</h3>
	<h3>Second Quarter : 3</h3>
	</div>
	<div style="position:relative; display:inline-block; top:-140px;">
	<h3>Third Quarter : 3</h3>
	<h3>Final Quarter : 3</h3>
	</div>
</td>
</table>
</div>

<style>
.scoreboard td
  {
		color: black;
		font-family: Futura, "Trebuchet MS", Arial, sans-serif;
		margin-left: 20px;
		margin-top: 25px;
		display: inline-block;
		width: 800px;
		height: 200px;
		text-align: center;
		background: rgba(155, 0, 0, 0.4);
	}

  .clock, .clock2{
    margin:2em;
    position: relative;
    }
  .clock h2, .clock2 h2{
    color: black;
    font-weight: bold;
    float: left;
    position: relative;
    font-size: 200%;
    }
  .counter button{
  	font-size: 20px;
  	padding: 5px;
  	background: black;
  	color: white;
  	font-family: Futura, "Trebuchet MS", Arial, sans-serif;
  	position: relative;
  	top: -180px;  
  	left: -310px;
    display: none;
}
</style>

<script type="text/javascript">
  var clock;

  $(document).ready(function() {
    clock = new FlipClock($('.clock'),0, {
      clockFace: 'Counter'
    });
    $('.increment').click(function() {
			clock.increment();
		});

		$('.decrement').click(function() {
			clock.decrement();
		});

		$('.reset').click(function() {
			clock.reset();
		});

  });

  var clock2;
  $(document).ready(function() {
    clock2 = new FlipClock($('.clock2'),0, {
      clockFace: 'Counter'
    });
    $('.increment2').click(function() {
			clock2.increment();
		});

		$('.decrement2').click(function() {
			clock2.decrement();
		});

		$('.reset2').click(function() {
			clock2.reset();
		});
  });
</script>

<div>
<a name="mems"></a><div>
    <ul style="list-style-type: none;" class="members">
        <li>
            <div class="mem0"><ul style="list-style-type:none; margin:0px;">
                <li>
                        <h2 class="rotate"></h2>
			<?php
			$f= $_GET['id'];
			$data = $general->member($f);
			foreach($data as $reach)
			{
				
                               
                        	//echo "</div>";
?>
                        	
			
				<img src="uploads/<?php echo $reach['file_name'];?>" alt ="<?php echo $reach['file_name'];?>" height="130" width="150"/>
                        	
<?php
				//echo "<div class='details' style='float:right; position: relative; left:0px;'>";
 				echo "<h2>NAME :". $reach['membername']."</h2>";
                                echo "<h2>POSITION :". $reach['pos']."</h2>";
                                echo "<h2>BRANCH  :". $reach['dept']."</h2>";
				echo "<h2>AGE :". $reach['age']."</h2>";
                                echo "<h2>ROLLNO:". $reach['rollno']."</h2>";	
				//echo "</div>";
}
?>

                    </li>
                </ul></div>
        </li>
<!--<a name="mems"></a><div>
    <ul style="list-style-type: none;" class="members">
        <li>
            <div class="mem0"><ul style="list-style-type:none; margin:0px;">
                <li>
                        <h2 class="rotate">RONDO</h2>
                        <img src="images/rondo1.jpg" height="300px" width="250px">
                        <div class="hidden">
                        <img src="images/rondo2.jpg" height="300px" width="250px">
                   
                        <img src="images/rondo3.jpg" height="300px" width="250px">
                    
                        <img src="images/rondo4.jpg" height="300px" width="250px">
                        </div>
                        <div class="details" style="float:right; position: relative; left:-500px;">
                                <h2>NAME :</h2>
                                <h2>POSITION :</h2>
                                <h2>BRANCH AND YEAR :</h2>
                                <h3>ABOUT ME ---</h3>
                        </div>
                    </li>
                </ul></div>
        </li>
        <li>
                <div class="mem1">
                <ul>
                    <li>
                        <h2 class="rotate" style="left:-140px;">KEVIN</h2>
                        <img src="images/kg1.jpg" height="300px" width="250px">
                        <div class="hidden">
                        <img src="images/kg3.jpg" height="300px" width="250px">
                   
                        <img src="images/kg2.jpg" height="300px" width="250px">
                    
                        <img src="images/kg4.jpg" height="300px" width="250px">
                        </div>
                        <div class="details" style="float:right; position: relative; left:-500px;">
                                <h2>NAME :</h2>
                                <h2>POSITION :</h2>
                                <h2>BRANCH AND YEAR :</h2>
                                <h3>ABOUT ME ---</h3>
                        </div>
                    </li>
                </ul>
                </div>
        </li>-->
    </ul>   
</div>                

<script>
  $(document).ready(function(){
  $(".mem0").hover(function(){
      $(".mem0 .hidden").hide();
      $(".mem0 .details").show();
  },function(){
      $(".mem0 .hidden").show();
      $(".mem0 .details").hide();
  });     
  $(".mem1").hover(function(){
      $(".mem1 .hidden").hide();
      $(".mem1 .details").show();
  },function(){
      $(".mem1 .hidden").show();
      $(".mem1 .details").hide();
  });       
  });
</script>

</div>

<style>
  body
  {
    background-color: #000000;
    color: #FFFFFF;
  }

  h1{
    font-family: Futura, "Trebuchet MS", Arial, sans-serif;
    position: relative;
    left: 30px;
  }

  #test
  {
    width: 400px;
  }

  #header
  {
    position:absolute; 
    top:-10px;
    left:0;
  }
    
  }
  #test img
  {
    position:absolute;
    left: 33%;
    top:230px;
    border-style: ridge;
    border-width: 5px;
    border-color:black;
  }

  .titleteam
  {
      text-align: left;
      -webkit-transition: color .5s ease-in;
      -moz-transition: color .5s ease-in;
      -o-transition: color .5s ease-in;
      transition: color .5s ease-in;
      position:relative;    
      color:white;
      font-size:100%;
      font-family: Futura, "Trebuchet MS", Arial, sans-serif;
      font-weight:bold;
      left:800px;
      top: 160px;
      top: 300;
  }


  .cf ul {
    -webkit-font-smoothing:antialiased;
    z-index:100;
    position:absolute; 
    top:0px;
    left:0px;
    text-align: center;
    display: inline;
    width:1300;
    margin: 0;
    padding: 15px 4px 17px 10px;
    list-style: none;
    -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    border-radius: 50%;
  border-top-left-radius: 50%;
  border-top-right-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
  }
  .cf ul h2{
    color: white;
    font-weight: bold;
    text-decoration: none;
    padding-top: 20px;
    font-size: 200%;
  }
  .cf ul a {
    -webkit-transition: all .25s ease;
         -moz-transition: all .25s ease;
          -ms-transition: all .25s ease;
           -o-transition: all .25s ease;
              transition: all .25s ease;
  }

  .cf ul li:hover {
    -webkit-animation: cham 3s infinite; 
    -moz-animation:    cham 3s infinite;
    -o-animation:      cham 3s infinite; 
    animation:         cham 3s infinite; 
  }
  @-webkit-keyframes cham {
    0%   { opacity: 1; }
    40%  { background: black;
    opacity:1.0; }
    100% { background: #555;
    opacity:1.0;
    color: brown; }
  }
  @-moz-keyframes cham {
    0%   { opacity: 1; }
    40%  { background: #555;
    opacity:1.0;
    color: black; }
    100% { background: #555;
    opacity:1.0;
    color: brown; }
  }
  @-o-keyframes cham {
    0%   { opacity: 1; }
    40%  { background: #555;
    opacity:1.0;
    color: black; }
    100% { background: #555;
    opacity:1.0;
    color: brown; }
  }
  @keyframes cham {
    0%   { opacity: 1; }
    100% { background: #555;
    opacity:1.0;
    color: brown; }
  }

  .cf ul a:link{
    color: white;
    font-weight: bold;
    text-decoration: none;
  }
  .cf ul li a:link{
    color: white;
    font-weight: bold;
    text-decoration: none;
  }
  .cf ul li h3{
    color: white;
    font-weight: bold;
    text-decoration: none;
  }
  .cf ul li, #container,
  #container_2 {
    font-family: Futura, "Trebuchet MS", Arial, sans-serif;
    text-decoration: none;
    color: white;
    font-weight:bold none;
    font-size:12px;
    display: inline-block;
    margin-right: 2px;
    position: relative;
    top:-10px;
    left:34px;
    padding: 15px 20px ;
    background: brown;
    opacity:0.3;
    cursor: pointer;
    width:130px;
    height: 130px;
    -webkit-transition: all .25s ease;
    -moz-transition: all .25s ease;
    -ms-transition: all .25s ease;
    -o-transition: all .25 ease;
    -transition: all .25s ease;
    border-top-left-radius: 10%;
    border-top-right-radius: 10%;
    border-bottom-right-radius: 10%;
    border-bottom-left-radius: 10%;
  } 


  .login h2{
    font-size: 100%;
    color: white;
    font-weight: bold;
    text-decoration: none;
    padding-top: 0px;
  }

  #container{
    text-align: center;
    position: relative;
    left: 740px;
    top: -2px;
    width: 450px;
    border-top-left-radius: 5%;
  border-top-right-radius: 5%;
  border-bottom-right-radius: 5%;
  border-bottom-left-radius: 5%;
  }


  .login {
    text-align: center;
    display: block;
    margin: 0 auto;
  }
  .login div {
    width: 320px;
    cursor: pointer;
    font-size: 25px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    margin: 0 auto;
    padding: 20px;
  }
  .login:hover>form {
    display: block;
    margin-bottom: -6px;
    height: 90px;
    padding-bottom: 35px;
    padding-top: 25px;

  }
  form input[type=text],
  form input[type=submit] {
    font-family: Futura, "Trebuchet MS", Arial, sans-serif;
    font-size: 22px;
    width: 270px;
    height: 60px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
  }
  input[type=text] {
    background: #eee;
    border: solid 2px #ddd;

  }
  form input[type=submit] {
    width: 100px;
    cursor: pointer;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-appearance: none;
    border: none;
    color: #fff;
    background: #5f7c1e;
  }
  .text_container {
    text-align: left;
    width: 500px;
    margin: 0 auto 10px;
    padding: 10px;
    cursor: pointer;
  }
  .text_container div p {
    cursor: default !important;
    margin-bottom: 10px
  }
  .visible>div {
    display: block;
    font-size: 17px;
  }
  form,
  .login:hover>div,
  .hidden>div {
    display: none
  }

  p.clear {
      clear: both;
  }

  table.profile td{
      position: relative;
      width: 400px;
      height: 450px;   
      top: 10px;
      border-style: ridge;
      border-radius: 20%;
      display: inline-table;
      margin-right: 120px;
      margin-left: 120px;
      margin-top: 120px;
      margin-bottom: 20px;
  }
  table.profile td img{
      width: 100px;
      height: 150px;  
      opacity: 1;
      position: absolute;
      float: left;
  left: 30px;
  top: 20px;  
  border-radius: 50%;
  border-top-left-radius: 50%;
  border-top-right-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
  }

  table.profile td h3{
      float: right;
      position: absolute;
      left: 140px;
      top: 20px;
  }

  .slides {
      padding: 0;
      width: 800px;
      height: 550px;
      margin: 0 auto;
      position: relative;
      float: left;
      margin-top: 25px;
      margin-left: 20px;
      border-radius: 5px;
      border-color: black;
      border-style: ridge;
    }

  .slides * {
      user-select: none;
      -ms-user-select: none;
      -moz-user-select: none;
      -khtml-user-select: none;
      -webkit-user-select: none;
      -webkit-touch-callout: none;
  }

  .slides input { display: none; }

  .slide-container { display: block; }

  .slide {
      top: 0;
      opacity: 0;
      width: 800px;
      height: 550px;
      display: block;
      position: absolute;

      transform: scale(0);

      transition: all .7s ease-in-out;
  }

  .slide img {
      width: 100%;
      height: 100%;
  }

  .nav label {
      width: 200px;
      height: 100%;
      display: none;
      position: absolute;

      opacity: 0;
      z-index: 9;
      cursor: pointer;

      transition: opacity .2s;

      color: #FFF;
      font-size: 156pt;
      text-align: center;
      line-height: 380px;
      font-family: Futura, "Trebuchet MS", Arial, sans-serif;
      background-color: rgba(255, 255, 255, .3);
      text-shadow: 0px 0px 15px rgb(119, 119, 119);
  }

  .slide:hover + .nav label { opacity: 0.5; }

  .nav label:hover { opacity: 1; }

  .nav .next { right: 0; }

  input:checked + .slide-container  .slide {
      opacity: 1;

      transform: scale(1);

      transition: opacity 1s ease-in-out;
  }

  input:checked + .slide-container .nav label { display: block; }

  .nav-dots {
    width: 100%;
    bottom: 9px;
    height: 11px;
    display: block;
    position: absolute;
    text-align: center;
  }

  .nav-dots .nav-dot {
    top: -5px;
    width: 11px;
    height: 11px;
    margin: 0 4px;
    position: relative;
    border-radius: 100%;
    display: inline-block;
    background-color: rgba(0, 0, 0, 0.6);
  }

  .nav-dots .nav-dot:hover {
    cursor: pointer;
    background-color: rgba(0, 0, 0, 0.8);
  }

  input#img-1:checked ~ .nav-dots label#img-dot-1,
  input#img-2:checked ~ .nav-dots label#img-dot-2,
  input#img-3:checked ~ .nav-dots label#img-dot-3,
  input#img-4:checked ~ .nav-dots label#img-dot-4,
  input#img-5:checked ~ .nav-dots label#img-dot-5,
  input#img-6:checked ~ .nav-dots label#img-dot-6 {
    background: rgba(0, 0, 0, 0.8);
  }

  .members li{
    list-style-type: none;
    position: relative;
    background-color: black;
    width: 1020px;
    left: 50px;
    margin-top: 25px;
  }

  .rotate {
    -webkit-transform: rotate(270deg);
    -moz-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    transform: rotate(270deg);
    position: absolute;
    left: -150px;
    top: 60px;
    font-size: 350%;
  }

  .hidden{
    display: inline-block;
  }

  .details{
    display: none;
  }
</style>
</body>
</html>


