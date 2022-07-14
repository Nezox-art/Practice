<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="cookie.php" method="post">
		<h3>Исходная валюта</h3>
		<p><select name="list" required>
			<option value="1">Euro</option>
			<option value="2">USD</option>
			<option value="3">GBP</option>
		</select></p>
		<h3>Сумма</h3>
		<input name="sum" type="text"><br>
		<input type="submit" name="submit" value="Пересчитать">
	</form>
</body>
</html>