<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<? 
	error_reporting(E_ALL);
	$fileName = 'studenti.json';
	if(!empty($_POST['first_name']) && !empty($_POST['last_name'])){
		$fileData = file_get_contents($fileName);
		$studenti = json_decode($fileData, true);
		$newElement = [
			"first_name" => trim($_POST['first_name']),
			"last_name" => trim($_POST['last_name']),
			"average_mark" => 0
		];
		$studenti[] = $newElement;
		file_put_contents($fileName, json_encode($studenti));
	}
	?>	

	<form method="post">
		First name <input type="text" name="first_name"><br>
		Last name <input type="text" name="last_name"><br>
		<input type="submit" value="Add"><br>
	</form>

</body>
</html>