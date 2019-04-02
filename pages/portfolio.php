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

$gallery = isset($_GET['gallery']) ? (int) $_GET['gallery'] : 1;
if($gallery < 1) $gallery = 1;
if($gallery > 4) $gallery = 4;

// output photos by categories
function out_cat_images($gallery) {

	switch($gallery) {
		case '1':
			$gallery_dir = "individual/";
			break;
		case '2':
			$gallery_dir = "familyes/";
			break;
		case '3':
			$gallery_dir = "other/";
			break;
	};

	$dir = "../img/photos/" . $gallery_dir;
	$images_output = get_images($dir);

	if($images_output) {
		foreach($images_output as $image) {
			echo "<div class='wrap__item'>";
				echo "<img src='" . $dir . $image . "' class='wrap__item_img'>";
			echo "</div>";
		}
	} else {
		echo "<p>в данной галерее нет фотографий</p>";
	}
}

function out_all_images() {
	$gallery = 1;
	for ($gallery = 1; $gallery < 4; $gallery++) { 
		out_cat_images($gallery);
	}
}


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

	<?php require_once "../includes/header.php"; ?>

	<main class="portfolio">
		
		<div class="categories">
			<a href="http://juliya-july/pages/portfolio.php?gallery=1" class="categories__item" id="individ">индивидуальные</a>
			<a href="http://juliya-july/pages/portfolio.php?gallery=2" class="categories__item" id="familyes">семейные</a>
			<a href="http://juliya-july/pages/portfolio.php?gallery=3" class="categories__item" id="other">разное</a>
			<a href="http://juliya-july/pages/portfolio.php?gallery=4" class="categories__item" id="all">все</a>
		</div>

		<div class="wrap">

			<!-- <?
			if($gallery < 4){
				out_cat_images($gallery);
			} else {
				out_all_images();
			}
			?> -->
			
		</div>

	</main>

	<?php require_once "../includes/footer.php"; ?>

</body>
</html>