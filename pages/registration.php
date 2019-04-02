<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Juliya-July запись</title>
	<base href="http://juliya-july/">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/registration.css">
	<link rel="stylesheet" type="text/css" href="css/daterangepicker.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/moment.js"></script>
	<script type="text/javascript" src="js/daterangepicker.js"></script>
	<script type="text/javascript" src="js/registration.js"></script>
</head>
<body>
	
	<?php require_once "../includes/header.php"; ?>
	
	<main class="registration-container">
		<div class="text">
			<p>Вы можете оставить заявку на фотосессию, указав удобное вам время и дату.</p>
			<br>
			<hr class="hr">
			<br>
		</div>

		<form class="form" id="form" method="post">
			<div class="form-item">
				<input name="name" type="text" id="name" placeholder="ваше имя*" class="input" required>
				<label for="name" class="label">Имя:</label>
			</div>
			<div class="form-item">
				<input name="phone" type="text" id="phone" placeholder="ваш телефон*" class="input" required>
				<label for="phone" class="label">Телефон:</label>
			</div>
			<div class="form-item">
				<input name="date" type="text" id="date" placeholder="желаемая дата" class="input">
				<label for="date" class="label">Дата:</label>
			</div>
			<div class="form-item">
				<input name="time" type="time" id="time" placeholder="желаемое время" class="input">
				<label for="time" class="label">Время:</label>
			</div>
			<div class="form-item">
				<select class="input select" name="photoset">
					<option>индивидуальная</option>
					<option>рекламная</option>
					<option>love story</option>
					<option>семейная</option>
				</select>
				<label class="label">Вид фотосессии:</label>
			</div>
			<div class="form-item">
				<button  type="submit" class="button" id="submit">отправить</button>
			</div>
		</form>

		<div class="text"></div>
	</main>

	<?php require_once "../includes/footer.php"; ?>

</body>
</html>