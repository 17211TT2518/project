<?php
	$url_host = 'http://'.$_SERVER['HTTP_HOST'];
	$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
	$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
	
	preg_match_all($pattern_uri, __DIR__, $matches);
	$url_path = $url_host . $matches[1][0];
	$url_path = str_replace('\\', '/', $url_path);

	if (!class_exists('lessc')) {
		$dir_block = dirname($_SERVER['SCRIPT_FILENAME']);		
		require_once($dir_block.'/libs/lessc.inc.php');
	}
	
	$less = new lessc;
	$less->compileFile('less/12.less', 'css/12.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>12</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/swiper.min.css"/>
<link href="<?php echo $url_path ?>/css/12.css" rel="stylesheet" type="text/css" />
	

	<script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo $url_path ?>/js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo $url_path ?>/js/popper.min.js"></script>
	<script src="<?php echo $url_path ?>/js/jquery.js"></script>
</head>

<body>
    <?php include './12-content.php'; ?>
    <script src="js/swiper.min.js"></script>
     <script type="text/javascript" src="/js/fontawesome-all.min.js"></script>
	<!-- Initialize Swiper -->
	<script>
		var galleryThumbs = new Swiper('.gallery-thumbs', {
		spaceBetween: 10,
		slidesPerView: 4,
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		});
		var galleryTop = new Swiper('.gallery-top', {
		spaceBetween: 10,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		thumbs: {
			swiper: galleryThumbs
		}
		});
	</script>
</body>

</html>