<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>

<? 
$studenti = [
	'1' => [
		'nume' => 'Ion Ciobanu',
		'grupa' => 'MI31Z'
	],
	'2' => [
		'nume' => 'Mihai Eminescu',
		'grupa' => 'IS31Z'
	],
	[
		'nume' => 'Vasile Alexandri',
		'grupa' => 'IS31Z'
	]
	
];

//print_r($studenti);
?>

<? 
//echo $studenti[2]['nume'];
?>

<table border="1">
	<thead>
		<tr>
			<th>Nume</th>
			<th>Grupa</th>
		</tr>
	</thead>
	<tbody>
		<? foreach ($studenti as $student){?>
		<tr>
			<td><?=$student['nume'];?></td>
			<td><?=$student['grupa'];?></td>
		</tr>
		<? }?>
	</tbody>
</table>
<hr>

<? 
$studentiBursa = [
	'9.85' => 'Ion Creanga',
	'9.99' => 'Mihai Eminescu',
	'5.85' => 'Presedintele',
	'3.85' => 'Prim ministrul'
];

unset($studentiBursa['9.99']);

ksort($studentiBursa);
?>


<? foreach ($studentiBursa as $nota=>$student) {?>
	<?=$student;?> : <?=$nota;?> <br>
<?}?>

<? 
$culori = ['red', 'green', 'blue', 'whitelime', 'cyan'];

$culoareCautata = 'white';
if(in_array($culoareCautata, $culori)){
	echo "Culoarea {$culoareCautata} exista";
}else{
	echo "Culoarea {$culoareCautata} NU exista";
}

$totalCulori = $culori;

echo "In total avem {$totalCulori} culori";

print_r(array_flip($culori));


$cifre = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($cifre as $cifra) {?>
	<?=$cifra;?><br>
<?}

do {?>
	<?=current($cifre);?><br>
<?}while (next($cifre));




?>
<hr>
<? 

$student = [
	'nume' => 'Ion', 
	'virsta' => 12,
	'adresa' => 'Moldova'
];
/*$nume = $student['nume'];
$virsta = $student['virsta'];
$adresa = $student['adresa'];*/

/*echo $nume;
echo $virsta;
echo $adresa;*/


$student = [
	'Ion', 
	12,
	'Moldova'
];

list($nume, $virsta, $adresa) = $student;

echo $nume;
echo $virsta;
echo $adresa;

?>

</body>
</html>