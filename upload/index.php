<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<? 
	function getFileExtension($filename){
		$p = explode('.', $filename);
		return $p[count($p) - 1];
	}


	if(isset($_FILES['photo']) && $_FILES['photo']['error']  === 0){
		move_uploaded_file($_FILES['photo']['tmp_name'], 'img_upload/' . time() . '.' . getFileExtension($_FILES['photo']['name']));
	}
	?>

	<form method="post" enctype="multipart/form-data">
		<input type="file" name="photo">
		<input type="submit" value="upload">
	</form>


	<? 
	$filelist = array();
	$uploadDirectory = "img_upload/";
	if ($handle = opendir($uploadDirectory)) {
	    while ($entry = readdir($handle)) {
	        if (is_file($uploadDirectory . $entry)) {
	            $filelist[] = $entry;
	        }
	    }
	    closedir($handle);
	}

	foreach ($filelist as $file) {?>
		<img src="<?=$uploadDirectory . $file;?>">
	<?}?>

</body>
</html>