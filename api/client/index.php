<html>
<head>
	<title></title>
</head>
<body>
	<? 
	$key = md5("1234");
	$data = json_decode(file_get_contents("http://web2.local/api/server_api/get_all.php?key={$key}"), true);

	if ($data['error'] == 1) {
		die('API error');
	}
	?>
	<table border="1">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
			</tr>
		</thead>

		<tbody>
		<? foreach ($data as $student) {?>
			<tr>
				<td><?=$student['first_name'];?></td>
				<td><?=$student['last_name'];?></td>
			</tr>
		<?}?>
		</tbody>	
	</table>

	<hr>
	<? 
	
	$student = json_decode(file_get_contents("http://web2.local/api/server_api/get_one.php?id=6&key={$key}"), true);
	
	if (!empty($student['error'])) {
		die($student['error']);
	}
	?>
	<table border="1">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td><?=$student['first_name'];?></td>
				<td><?=$student['last_name'];?></td>
			</tr>
		
		</tbody>	
	</table>
</body>
</html>