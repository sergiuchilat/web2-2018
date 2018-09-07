<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
	<? 
	$fileName = 'text.txt';
	$fileData = file_get_contents($fileName);
	echo $fileData;
	?>
	<hr>	
	<pre><?=$fileData?></pre>
	<hr>	

	<? 
	$fileName = 'text.txt';
	$fileData = file_get_contents($fileName);
	$lines = explode("\n", $fileData);
	foreach ($lines	 as $line) {
		echo $line; ?><br><?
	}
	?>
	<hr>	
	<? 
	$fileName = 'text.txt';
	$fileData = file_get_contents($fileName);
	$fileData = str_replace("\n", "<br>", $fileData);
	echo $fileData;
	?>

	<hr>	
	<? 
	$fileName = 'text.txt';
	$lines = file($fileName);
	foreach ($lines	 as $line) {
		echo $line; ?><br><?
	}
	?>

	<hr>	
	<? 
	$fileName = 'studenti.csv';
	$handle = fopen($fileName, "r");
	$firstLine = true;
	while (($columns = fgetcsv($handle, 1000, ",")) !== FALSE) {
	    if(!$firstLine){	
		    foreach ($columns as $column) {
		     	echo $column; ?><br><?
		    }
	    }
	    $firstLine = false;
	}
	fclose($handle);
	?>
</body>
</html>