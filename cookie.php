<?php
 	$sum = $_POST['sum'];
 	$list = $_POST['list'];
    setcookie('sum', $sum);
    setcookie('list', $list);
    header('Location: result.php');
?>