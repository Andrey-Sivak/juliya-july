<?php 

function get_images($dir) {
	$files = scandir($dir);
	if(!$files) return false;
	$pattern = "#\.(jpe?g)$#";
	foreach ($files as $key => $file) {
		if(!preg_match($pattern, $file)) {
			unset($files[$key]);
		}	
	}
	$files = array_merge($files);
	return $files;
}

$dir = "../img/photos/familyes/";
$images = get_images($dir);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Juliya-July портфолио</title>
	<base href="http://juliya-july/">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/portfolio.css">
	<script type="text/javascript" src="js/macy.js"></script>
	<script type="text/javascript" src="js/portfolio.js"></script>
</head>
<body>
	<header class="heading">
		<a href="index.html" class="heading__logo">
			<img src="../img/logo.svg" class="heading__logo-img">
		</a>
		<ul class="heading__menu">
			<li><a href="index.html">главная</a></li>
			<li><a href="../pages/portfolio.php">портфолио</a></li>
			<li><a href="../pages/coasts.html">цены и акции</a></li>
			<li><a href="../pages/about_me.html">обо мне</a></li>
			<li><a href="../pages/rewiews.html">отзывы</a></li>
			<li><a href="../pages/registration.html">записаться</a></li>
		</ul>
		<div>
			<a class="heading__phone" href="tel://+79787625391">+7(978)-76-25-391</a>
			<p class="heading__location">г. Севастополь, Крым</p>
		</div>
	</header>
	<hr>

	<main class="portfolio">
		<div class="categories">
			<a href="#" class="categories__item" id="individ">индивидуальные</a>
			<a href="#" class="categories__item" id="familyes">семейные</a>
			<a href="" class="categories__item" id="other">разное</a>
			<a href="" class="categories__item" id="all">все</a>
		</div>
		<div class="wrap">
			<?php if ($images): ?>
			<?php foreach ($images as $image):?>
				<div class="wrap__item">
					<img src="<?=$dir . $image?>" class="wrap__item_img">
				</div>
			<?php endforeach; ?>
			<?php else: ?>
			<p>в данной галерее нет фотографий</p>
			<?php endif; ?>
		</div>
	</main>

	<footer class="footer">
		<p>Juliya July - индивидуальные фотосессии в Крыму и Севастополе</p>
		<p class="footer__copy">&copy; Все изображения защищены авторским правом</p>
	</footer>
</body>
</html>