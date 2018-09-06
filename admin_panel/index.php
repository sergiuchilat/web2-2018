<? 

	session_start();
	if($_GET['action'] == 'logout'){
		unset($_SESSION);
	}

	$acesData = [
		"username" => "admin",
		"password" => "1111"
	];
	

	if(
		!empty($_POST['username']) && 
		$_POST['username']===$acesData['username'] &&
		!empty($_POST['password']) && 
		$_POST['password']===$acesData['password']
	){
		$_SESSION['authorised'] = true;
	}

?>
<html>
<head>
	<title></title>
</head>
<body>

	

	<? if(!$_SESSION['authorised']){?>
	<form method="post">
		<table align="center">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Login"></td>
			</tr>

		</table>
	</form>
	<? }?>


	<? if($_SESSION['authorised']){?>
	<div>
		Informatie ascunsa
		<a href="index.php?page=p1">Page 1</a>
		<a href="index.php?page=p2">Page 2</a>
		<a href="index.php?page=p3">Page 3</a>
		<a href="index.php?action=logout">Logout</a>

	</div>
	<div>
		<? if(!empty($_GET['page'])){
			if(file_exists("pages/{$_GET['page']}.php"))
				include "pages/{$_GET['page']}.php";
			else
				include 'pages/404.php';
		}else{
			echo 'Select page';
		}
		?>
	</div>
	<? }?>

	FOOTER

</body>
</html>