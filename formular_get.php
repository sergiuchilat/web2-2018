<html>
<head>
	<title></title>
</head>
<body>
	<form method="get">
		X <input type="text" name="x" value="<?=$_GET['x'];?>">
		Y <input type="text" name="y" value="<?=$_GET['y'];?>">
		<input type="submit">
	</form>

	<? 
	error_reporting(0);

	if(!empty($_GET)){
		$suma = $_GET['x'] + $_GET['y'];
		echo "Suma = {$suma}";	
	}else{
		echo 'Introduceti valoarea lui x si y';
	}

	
	?>
</body>
</html>