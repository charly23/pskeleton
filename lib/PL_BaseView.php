<?php

class PL_BaseView {
	
	public function __construct() {

	}

	public function render( $name ) {

		$path = PSKELETON_BASEPATH . '/views/';

		require $path . $name . ".php";

	}

}