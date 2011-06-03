<!doctype html>
<!--[if lt IE 7]> <html lang="pt-br" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="pt-br" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="pt-br" class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-br" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?php echo $title_for_layout . ' - ' . Configure::read('Site.meta.title'); ?></title>

	<meta name="description" content="<?php echo Configure::read('Site.meta.description'); ?>" />
	<meta name="author" content="Thiago Belem" />

	<link rel="canonical" href="<?php echo $this->Html->url($canonical); ?>" />
	<?php if (!Configure::read('Site.meta.robots')) echo $this->Html->meta('robots', null, array('name' => 'robots', 'content' => 'none')) . PHP_EOL; ?>
	<meta name="google-site-verification" content="Nu7lnulZmJaaU7I1U0boWtRdpWJ2rOkRgX0daK8QXks" />

	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- CSS -->
	<?php echo $this->Html->css('estilo') . PHP_EOL; ?>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo $this->Html->url('/favicon.ico'); ?>" />
	<link rel="apple-touch-icon" href="<?php echo $this->Html->url('/apple-touch-icon.png'); ?>">
</head>
<body class="construcao">
	<section id="content" role="main">
		<h1><?php echo Configure::read('Site.meta.title'); ?></h1>
		<h2>Em breve</h2>
	</section>
    <span class="splash"></span>
</body>
</html>