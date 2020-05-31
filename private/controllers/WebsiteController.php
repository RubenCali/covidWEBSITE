<?php

namespace Website\Controllers;

/**
 * Class HomeController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class WebsiteController {

	
	public function login() {
		$template_engine = get_template_engine();
		echo $template_engine->render('login');
		
	}
	public function register() {
		$template_engine = get_template_engine();
		echo $template_engine->render('registration');
	
	}
	public function geinlogdepagina() {
		$template_engine = get_template_engine();
		echo $template_engine->render('geinlogdepagina');
		
	}
}