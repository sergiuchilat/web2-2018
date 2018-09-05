<html>
<head>
	<title></title>
</head>
<body>

<? 
$sir = 'abcde';
echo "Lungimea sirului este " . strlen($sir);

?>
<hr>
<? 


$propozitie = "Astazi a plouat afara";

$cuvinte = explode(" ", $propozitie);

print_r($cuvinte);

$scriitori = [
	"Ion Creagna",
	"Mihai Eminescu",
	"Vasile Alecsandri",
	"Ion Druta",
];

?>

<table border="1">
	<thead>
		<tr>
			<th>Nume</th>
			<th>Prenume</th>
		</tr>
	</thead>
	<tbody>
		<? foreach ($scriitori as $scriitor){
		list($nume, $prenume) = explode(" ", $scriitor);
		?>
		<tr>
			<td><?=$nume;?></td>
			<td><?=$prenume;?></td>
		</tr>
		<? }?>
	</tbody>
</table>

<hr>
<? 
$cuvinte = ['Astazi', 'a', 'plouat', 'afara'];

echo implode(' ', $cuvinte);
?>
<hr>
<?
echo md5(1);

?><hr>
<?
$nume = "ion";
echo ucfirst($nume);

?>
<hr>
<?
$nume = " Ion ";
echo "Eu ma numesc [" . $nume . "]";
echo "Eu ma numesc [" . trim($nume) . "]";

?>
<hr>
<?
$sir = "Astazi este miercuri";
echo $sir;

$sir = str_replace('miercuri', 'joi', "Astazi este miercuri");
echo $sir;
echo str_shuffle($sir);
?>

<hr>
<? 
$literaCautata = 'i';
$alfabet = 'abcdefghijklmnopqrstvwxyz';
echo "Litera cautata este pe pozitia " . strpos($alfabet, $literaCautata);
?>

<hr>
<?php
$email  = 'name@example.com';
$domain = strstr($email, '@');
$user = strstr($email, '@', true); // Начиная с PHP 5.3.0
echo "User = " . $user;
echo "Domain = " . $domain;
?>

<hr>
<?
$nume = "ion creanga";
echo ucfirst($nume);
$nume = "ion creanga";
echo ucwords($nume);

?>

</body>
</html>