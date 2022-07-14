<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="main.css">
	<title>Document</title>
</head>
<body>
<div class="main-block">
	<form action="cookie.php" method="post">
		<p>Конвертер валют</p>
		<div class="currency">
		<input class="sum" name="sum" type="text">
			<select name="list" required>
				<option value="1">Euro</option>
				<option value="2">USD</option>
				<option value="3">GBP</option>
			</select>
			<span>&hArr;</span>
			<select name="list1" required>
				<option value="1">RUB</option>
			</select>
			<input class="submit" type="submit" name="submit" value="Пересчитать">
		</div>
	
	</form>
	</div>
</body>
</html>