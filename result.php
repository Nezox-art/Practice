<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="main.css">
	<title>Document</title>
</head>
<body>
<?php
$list = isset($_POST['list']) ? (int) $_POST['list'] : 1;
if($_COOKIE['list']==1){
	echo "<p>Выбранная валюта Euro, введенная вами сумма равна: {$_COOKIE['sum']}</p>";
	$s = $_COOKIE['sum'] * 55;
	echo $s;
} elseif($_COOKIE['list']==2){
	echo "<p>Выбранная валюта USD, введенная вами сумма равна: {$_COOKIE['sum']}</p>";
	$s = $_COOKIE['sum'] * 53;
	echo $s;
} elseif($_COOKIE['list']==3){
	echo "<p>Выбранная валюта GBP, введенная вами сумма равна: {$_COOKIE['sum']}</p>";
	$s = $_COOKIE['sum'] * 64;
	echo $s;
} else{
	echo "Пусто";
}
?>
</body>
</html>