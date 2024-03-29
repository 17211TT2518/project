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
	$less->compileFile('less/1.less', 'css/1.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/bootstrap-3.3.7.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo $url_path ?>/css/1.css" rel="stylesheet" type="text/css" />

	
	<script src="<?php echo $url_path ?>/js/jquery-3.3.1.slim.min.js"></script>
	<script src="<?php echo $url_path ?>/js/popper.min.js"></script>
	<script src="<?php echo $url_path ?>/js/bootstrap-3.3.7.min.js"></script>
	

</head>

<body>
    <?php include './1-content.php'; ?>
	
</body>

</html>