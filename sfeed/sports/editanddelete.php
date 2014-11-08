
<?php
require ('core/init.php');

		

	$admin_id= $_SESSION['id'];
	
	$data = $users->member($admin_id);

	
	
	foreach($data as $reach)
		{
		   	
		    
			$name=$reach['membername'] ;
			$dept = $reach['dept'];
			$age =$reach['age'];
			$rollno =$reach['rollno'];
			$pos =$reach['pos'];
			$id =$reach['id_member1'];
				
			 
                 
?>
<body>
<form name="form2" action="" method="POST">
<table>
	<tr>
		
		<td><?php echo $name?></td></br>
		<td><?php echo $age?></td>
		<td><?php echo $rollno?></td>
		<td><?php echo $dept?></td>
		<td><?php echo $pos?></td>
		
	<td colspan="2" align="center"><input type="hidden" id="delete"  value= "<?php echo $id?>" ></td>
	<td colspan="2" align="center"><input type="button" id ="da" value="delete" onClick="ds('<?php echo $id?>');"></td>
	</tr>
<tr>
<td colspan="2" align="center"><div id="d2"></div></td></tr>
<td colspan ="2" align="center"><div id="d3"></div></td></tr>
</table>
</form>
</body>	

<?php
}
?>
<script type="text/javascript">
function ds(id)
{

	
var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","del.php?delete="+document.getElementById("delete").value,false);
xmlhttp.send(null);

document.getElementById("d2").innerHTML=xmlhttp.responseText;
}

</script>
<body>
<form name="form1" action="" method="POST">
<table >
	<tr>
		<td>MemberName</td>
		<td>:</td>
		<td><input type="text" id="member_name" name="member_name">
	
	
		<td>Age</td>
		<td>:</td>
		<td><input type="number" id="age" name="age">
	
	
	
		<td>Rollno</td>
		<td>:</td>
		<td><input type="text" id="rollno" name="rollno">
		
	
		<td>Department</td>
		<td>:</td>
		<td><input type="text" id="dept" name="dept">
	
	
		<td>Position</td>
		<td>:</td>
		<td><input type="text" id="position" name="position">
	
	<td colspan="2" align="center"><input type="button" id="insert" value="insert" onClick="as();"></td>
	
	</tr>
<tr>
<td colspan="2" align="center"><div id="d1"></div></td></tr>
</table>
</form>
</body>
<script type="text/javascript">
function as()
{
	
var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","ins.php?member_name="+document.getElementById("member_name").value+"&age="+document.getElementById("age").value+"&rollno="+document.getElementById("rollno").value+"&dept="+document.getElementById("dept").value+"&position="+document.getElementById("position").value,false);
xmlhttp.send(null);

document.getElementById("d1").innerHTML=xmlhttp.responseText;
}
</script>

