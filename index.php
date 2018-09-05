PHP <br/>
<?php echo 'Hello from PHP'; ?>
<br>
<? echo 'Hello 2';?>
<br>
<?=1+2;?>
<?='Hello 3';?>
<hr>
<? 

echo $abc + 2;
?>
<br>
<?
$x = 1; 
$y = 2;

echo $x + $y;

?>
<br>
<?
$x = 1; 
$y = 'a';
echo $x + $y ;
?>

<br>
<?
$x = 1; 
$y = '2a';
echo $x + $y ;
?>

<br>
<?
$x = 1; 
$y = '24a3';
echo $x + $y ;
?>

<br>
<?
$x = "A"; 
$y = 'B';
echo $x . $y ;
?>


<br>
<?
$x = 1; 
$y = 2;
echo $x . $y ;
?>

<? 
for($i = 1 ; $i <= 10 ; $i++){
	echo '<br>' . $i;//Asa tip de afisare nu trebuie sa fie utilizat
}
?>

<? 
for($i = 1 ; $i <= 10 ; $i++){
	?><br><?=$i;//Asa este corect
}
?>

<? 
$list = ["Ion Creanga", "Mihai Eminescu"];

foreach ($list as $item) {
	echo $item;
}
?>

<? 
$list = ["Ion Creanga", "Mihai Eminescu", 3.14];

foreach ($list as $item) {
	echo $item;
}
?>