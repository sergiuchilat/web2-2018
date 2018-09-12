<html>
<head>
	<title></title>
</head>
<body>
	<? 
	require_once 'functions.php';
	error_reporting(E_ALL);
	$connection = mysqli_connect('localhost', 'root', '', 'web2');
	
	if(mysqli_connect_errno() !== 0){
		die('Database error');
	}


	$result = mysqli_query($connection, 'SELECT * FROM studenti');
	
	
	?>

	<table border="1">
	<thead>
		<tr>
			<th>First name</th>
			<th>Last name</th>
			<th>Phone</th>			
		</tr>
	</thead>
	<tbody>
	<?
	while ($student = mysqli_fetch_assoc($result)) {?>
			<tr>
				<td><?=formatName($student['first_name']);?></td>
				<td><?=formatName($student['last_name']);?></td>
				<td><?=$student['phone'];?></td>			
			</tr>	
	<?}?>
	</tbody>
	</table>
	CONTENT 
	<hr>
	FOOTER
</body>
</html>