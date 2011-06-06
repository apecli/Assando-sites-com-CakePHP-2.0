<!doctype html>
<!--[if lt IE 7]> <html lang="pt-BR" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="pt-BR" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="pt-BR" class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-BR" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?php echo $title_for_layout . ' - ' . Configure::read('Site.meta.title'); ?></title>

	<meta name="description" content="<?php echo Configure::read('Site.meta.description'); ?>" />
	<meta name="author" content="Thiago Belem" />
	<meta name="language" content="pt-BR" />
	<meta name="generator" content="CakePHP <?php echo Configure::version(); ?>" />

	<link rel="canonical" href="<?php echo $this->Html->url($canonical); ?>" />
	<?php if (!Configure::read('Site.meta.robots')) echo $this->Html->meta('robots', null, array('name' => 'robots', 'content' => 'none')) . PHP_EOL; ?>

	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- CSS -->
	<link href="http://fonts.googleapis.com/css?family=Ubuntu|The+Girl+Next+Door|Nunito" rel="stylesheet" />
	<?php echo $this->Html->css(array('960', 'estilo')) . PHP_EOL; ?>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo $this->Html->url('/favicon.ico'); ?>" />
	<link rel="apple-touch-icon" href="<?php echo $this->Html->url('/apple-touch-icon.png'); ?>" />

	<!-- Verification codes -->
	<meta name="google-site-verification" content="Nu7lnulZmJaaU7I1U0boWtRdpWJ2rOkRgX0daK8QXks" />
	<meta name="google-site-verification" content="bpLRVmTEyj5jP9lX-t99vnUCz4Pr1YM2Fz-CMAELEg8" />

	<?php if (!Configure::read('debug')) echo $this->element('google-analytics'); echo PHP_EOL; ?>
</head>
<body class="<?php if (Configure::read('debug')) echo 'debug'; ?>">

<div id="wraper" class="container_12">
	<?php echo $this->element('header'); ?>

	<?php echo $this->element('menu'); ?>

	<section id="content" role="main" class="grid_8">
		<?php echo $content_for_layout . PHP_EOL; ?>
	</section>

	<?php echo $this->element('sidebar') . PHP_EOL; ?>
</div>

	<?php echo $this->Html->script(array('https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js', 'scripts')); ?>
</body>
</html>