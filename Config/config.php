<?php

/**
 * Configurações do site
 */
$config = array(
	'Site' => array(
		'title' => 'Assando sites com CakePHP',
		'headline' => 'O curso onde você...',

		'meta' => array(
			'title' => 'Assando sites com CakePHP, por Thiago Belem',
			'description' => '...',
			'robots' => false
		),

		'canonical-url' => 'curso-cakephp.com.br',
		'google-anlytics' => 'UA-XXXXX-X'
	)
);

Configure::write($config);