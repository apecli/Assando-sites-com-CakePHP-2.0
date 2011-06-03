<?php

/**
 * Controller da aplicação
 *
 * @author Thiago Belem
 */
class AppController extends Controller {

	/**
	 * Antes de renderizar o site
	 *
	 * 1. Define a URL canonica da página
	 *
	 * @see Controller::beforeRender()
	 */
	public function beforeRender() {
		parent::beforeRender();

		$this->set('canonical', rtrim(str_replace($this->base, 'http://' . Configure::read('Site.canonical-url'), $this->here), ''));

		if (preg_match('/curso-?cakephp\.com\.br$/', env('HTTP_HOST')))
			$this->layout = 'construcao';
	}

}