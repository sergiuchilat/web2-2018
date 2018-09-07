<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<? 
	if(!empty($_POST['first_name']) && !empty($_POST['last_name'])){
		$filenName = "studenti.dat";
		$newLine = trim($_POST['first_name']) . " " . trim($_POST['last_name']) . "\n";
		file_put_contents($filenName, $newLine, FILE_APPEND);
	}
	?>	

	<form method="post">
		First name <input type="text" name="first_name"><br>
		Last name <input type="text" name="last_name"><br>
		<input type="submit" value="Add"><br>
	</form>

</body>
</html>