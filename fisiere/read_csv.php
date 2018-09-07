<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<? 

require_once 'functions.php';
require_once 'functions.php';


$fileName = 'studenti.csv';
$handle = fopen($fileName, "r");
$firstLine = true;
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

while (($columns = fgetcsv($handle, 1000, ",")) !== FALSE) {
	    if(!$firstLine){	
			?>
				<tr>
					<td><?=formatName($columns[0]);?></td>
					<td><?=formatName($columns[1]);?></td>
					<td><?=$columns[2];?></td>			
				</tr>	
		<?
		
		}
		$firstLine = false;
}
?>
</tbody>
</table>
	
</body>
</html>