<html>
<head></head>
<title>Football</title>
<style>
#container
{
	height:100%;
	width:100%
}
#toptab
{
	height:8%;
	width:auto;
}
ul
{
	list-style-type: none;
	display:inline;
}
ul li
{
	display:inline;
	margin:0 10px 0 0;   
}
.nope
{
	text-decoration:none;
}
.tab_ele
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

#b-box
{
	margin-left:1.5%;
	margin-top:1.5%;
	border-style:solid;
	border-color:#FFF;
	border-width:2%;
	float:left;
	width:60%;
	height:83%;
	font-family:"Adobe Gothic Std B";
	color:#FFF;
	font-weight:bold;
	font-size:16px;
}

.s-box
{
	margin-left:1.5%;
	margin-top:1.5%;
	border-style:solid;
	border-color:#FFF;
	border-width:2%;
	float:left;
	width:96.5%;
	height:29.0%;
	font-family:"Adobe Gothic Std B";
	color:#FFF;
	font-weight:bold;
	font-size:16px;
}

.det_inside
{
	margin-left:2.5%;
	margin-top:3.5%;
	border-style:solid;
	border-color:#FFF;
	border-width:2%;
	float:left;
	width:93.5%;
	height:28.0%;
	font-family:"Adobe Gothic Std B";
	color:#FFF;
	font-weight:bold;
	font-size:16px;
}

#details
{
	border-style:solid;
	border-color:#FFF;
	border-width:2%;
	margin-left:1.5%;
	margin-top:1.5%;
	float:left;
	width:35.0%;
	height:83.0%;
	font-family:"Adobe Gothic Std B";
	color:#FFF;
	font-weight:bold;
	font-size:16px;
}

.players
{
	margin-left:1.5%;
	margin-top:1.5%;
	border-style:solid;
	border-color:#FFF;
	border-width:2%;
	float:left;
	width:14.1%;
	height:80.5%;
	font-family:"Adobe Gothic Std B";
	color:#FFF;
	font-weight:bold;
	font-size:16px;	
}

.det
{
	margin-left:1.5%;
	margin-top:1.5%;
	border-style:solid;
	border-color:#000;
	border-width:2%;
	float:left;
	width:80.1%;
	height:5.5%;
	font-family:"Adobe Gothic Std B";
	color:#FFF;
	font-weight:bold;
	font-size:16px;
	background-color:#000;
}

.players :hover 
{
	-webkit-animation:glow 2s;
	-webkit-animation-fill-mode:forwards;
}

@-webkit-keyframes glow
{
	0% { color:#FFF;}
	100% { color:#36F;}
}

#banner
{
	width:91.25%;
	height:9.75%;
	font-family:"Adobe Gothic Std B";
	text-align:center;
	border-style:solid;
	border-width:2%;
	border-color:#FFF;
	float:left;
	color:#FFF;
	margin-left:1.5%;
	margin-top:-3.75%;
	font-size:320%;
}

#letter
{
	font-size:500%;
	font-weight:bold;
	margin-left:25.5%;
	margin-top:-10%;
}

#letter : hover
{
	-webkit-animation: letclr 2s;
	-webkit-animation-fill-mode:forwards;
}

@-webkit-keyframes letclr
{
	0% {}
	100% { color:#030;}
}

#naime
{
	font-size:100%;
	font-weight:none;
	margin-left:5%;
	margin-top:-88%;
}

#role
{
	font-size:100%;
	font-weight:none;
	margin-left:0%;
	margin-top:-10%;
	text-align:center;
}

#inb_text
{
	margin-left:50%;
	font-size:120%;
	margin-top:+0.5%;
}

#pla_det
{
	background-image:"";
	background-size:cover;
}

</style>

<script>
var xvar;
var vyar;
var m_div;
var bcknm;
document.addEventListener("mousemove",function(e){
	xvar=e.clientX||e.pageX;
	vyar=e.clientY||e.pageY;
	
	m_div = document.elementFromPoint(xvar, vyar);
	var d_ab=document.getElementById("pla_det");
	if(m_div.className=="players")
	{
		
		var nm=m_div.children[1].innerHTML;
		var nm_cpy=nm;
		nm.replace(/ /g,'');
		bcknm="url(Res/"+nm+".jpeg)";
		bcknm=bcknm.replace(/ /g,'');
		document.getElementById("pla_det").style.backgroundImage=bcknm;
		d_ab.children[0].innerHTML="NAME: "+nm_cpy.toUpperCase();
		
	}

});
</script>

<body background="Res/football.jpg">
<div id="container">
  
  <div id="toptab">
   <div class="tab_ele">BACK</div>
  </div>
  
  <div id="banner">TEAMSHEET</div> 
  
  <div id="b-box">
    <div id="STRIKE" class="s-box">
      <div class="players" >
        <p id="letter">A</p>
        <p id="naime">Alester Fraser</p>
        <p id="role">Striker</p>
      </div>
      <div class="players">
        <p id="letter">S</p>
        <p id="naime">Sherine Davis</p>
        <p id="role">Striker</p>
      </div>
      <div class="players">
        <p id="letter">R</p>
        <p id="naime" style="font-size:14px">Rafael Manners</p>
        <p id="role" style="margin-top:-6%">Striker</p>
      </div>
      <div class="players"></div>
      <div class="players"></div>
      <div class="players"></div>
    </div>
    <div id="MIDFIELD" class="s-box">
      <div class="players"></div>
      <div class="players"></div>
      <div class="players"></div>
      <div class="players"></div>
      <div class="players"></div>
      <div class="players"></div>
    </div>
    <div id="DEFENSE" class="s-box"> 
      <div class="players"></div>
      <div class="players"></div>
      <div class="players"></div>
      <div class="players"></div>
      <div class="players"></div>
      <div class="players"></div>
    </div>
  </div>
  
  <div id="details">
    <div class="det_inside" style="background-image:url(Res/manager.jpg); background-size:cover">
      <p id="inb_text">NAME : LUIZ ENRIQUE</p>
      <p id="inb_text" style="margin-top:-2%">DEPARTMENT : CSE</p>
      <p id="inb_text" style="margin-top:-2%">YEAR : 2ND</p>
      <p id="inb_text" style="margin-top:-2%">ROLE : CAPTAIN</p>
    </div>
    <div class="det_inside" style="background-image:url(Res/Untitled-1.jpg); background-size:cover">
      <p id="inb_text">NAME : JORDI ROURA</p>
      <p id="inb_text" style="margin-top:-2%">DEPARTMENT : ICE</p>
      <p id="inb_text" style="margin-top:-2%">YEAR : 4TH</p>
      <p id="inb_text" style="margin-top:-2%">YEAR : VICE CAPTAIN</p>
    </div>
    <div class="det_inside" id="pla_det">
      <p id="inb_text">NAME : </p>
      <p id="inb_text" style="margin-top:-2%">DEPARTMENT : </p>
      <p id="inb_text" style="margin-top:-2%">YEAR : </p>
      <p id="inb_text" style="margin-top:-2%">YEAR : </p>
    </div>
  </div>  
   
  
</div>
</body>

</html>