<?php

/**
 * Configurações do site
 */
$config = array(
	'Site' => array(
		'title' => 'Assando sites com CakePHP',
		'headline' => 'Desenvolva aplicações WEB com segurança e rapidez',

		'meta' => array(
			'title' => 'Assando sites com CakePHP, por Thiago Belem',
			'description' => '...',
			'robots' => false
		),

		'canonical-url' => 'curso-cakephp.com.br',
		'google-anlytics' => 'UA-23766967-1'
	)
);

Configure::write($config);