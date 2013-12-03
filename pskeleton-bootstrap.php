<?php

class PSkeleton_Bootstrap extends PL_Bootstrap {

	protected $controllers;

	public function __construct() {

		$this->addAction('wp', array('User', 'submitRegistration') );

		$this->addShortcode('user-registration', array('User', 'userRegistrationForm'));

	}


}