<?php
require ('core/init.php');

if (empty($_POST) === false) {
 
	$username = trim($_POST['key']);
	
 
	if (empty($username) === true ) {
		$errors[] = 'Sorry, but we need your access key for team.';
	} else {
 
		$login = $users->login($acessKey);
		if ($login === false) {
			$errors[] = 'Sorry, that accessKey is invalid';
		}else {
			// username/password is correct and the login method of the $users object returns the user's id, which is stored in $login.
 
 			$_SESSION['id'] =  $login; // The user's id is now set into the user's session  in the form of $_SESSION['id']     
			
			#Redirect the user team to home.php.
			header('Location: home.php'); 
			exit();
		}
	}
} 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<title>Login</title>
</head>
<body>	
	<div id="container">
		<ul>
			<li><a href="index.php">Home</a></li>
			
			<li><a href="login.php">Login</a></li>
            	</ul>
		<h1>Login</h1>
 
		<?php if(empty($errors) === false){
 
			echo '<p>' . implode('</p><p>', $errors) . '</p>';			
 
		} 
		?>
		<form method="post" action="">
			<h4>Access Key for Team-Admin:</h4>
			<input type="text" name="key">
	
			<br>
			<input type="submit" name="submit">
		</form>
	</div>
</body>
</html>

