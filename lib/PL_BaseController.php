<?php

class PL_BaseController {

	public function __construct() {

		//$this->view = new PL_BaseView();

	}

	public function loadModel( $model_name ) {

		$path = PSKELETON_BASEPATH . '/models/';

		$file = strtolower($model_name) . "_model";

		require $path . $model_name . ".php" ;

	}
	
}