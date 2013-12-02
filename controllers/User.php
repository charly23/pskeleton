<?php

class User extends PL_BaseController {
	
	public function __construct() {

		parent::__construct();

	}

	public function userRegistrationForm() {

		$form = $this->view->render('user/registration-form', $echo=false);


		return $form;
	}

	public function submitRegistration() {


		if( $_POST ) {
			$this->loadModel('User');

			var_dump($this->model);

			die();

		}



	}

}