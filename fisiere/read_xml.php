<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<? 

require_once 'functions.php';
require_once 'functions.php';


$fileName = 'studenti.xml';
$studenti = simplexml_load_file($fileName);
?>
<table border="1">
	<thead>
		<tr>
			<th>First name</th>
			<th>Last name</th>
			<th>Average</th>			
		</tr>
	</thead>
	<tbody>
<?

foreach ($studenti->children() as $student) {

	?>
		<tr>
			<td><?=formatName($student->first_name);?></td>
			<td><?=formatName($student->last_name);?></td>
			<td><?=$student->average_mark;?></td>			
		</tr>	
<?}
?>
</tbody>
</table>
	
</body>
</html>