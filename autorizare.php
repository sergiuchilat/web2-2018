<html>
<head>
	<title></title>
</head>
<body>

	<? 
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
		$authorised = true;
	}

	?>

	<? if(!$authorised){?>
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


	<? if($authorised){?>
	<div>
		Informatie ascunsa

		<a href="autorizare.php">Logout</a>
	</div>
	<? }?>

</body>
</html>