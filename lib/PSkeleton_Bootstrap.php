<?php

class PSkeleton_Bootstrap {
	

	public static function autoloadControllers( $class ) {

		$path = PSKELETON_BASEPATH . '/controllers/';

		require $path . $class . '.php';

	}

}