<?php
/*
Plugin Name: Plugin Skeleton
Description: Based Plugin Structure
Version: 1.0
Author: Plonta Creative
Author URI: http://plontacreative.com/
*/

error_reporting(E_ALL);

// replace PSkeleton_Bootsrap with the name of your Bootstrap Class	
if( ! class_exists('PSkeleton_Bootstrap') ) {

	require 'config/constants.php';

	if(! class_exists('PL_BaseController') ) { 
		require PSKELETON_LIB . '/PL_BaseController.php';
	}

	if(! class_exists('PL_BaseModel') ) { 
		require PSKELETON_LIB . '/PL_BaseModel.php';
	}

	if(! class_exists('PL_BaseView') ) { 
		require PSKELETON_LIB . '/PL_BaseView.php';
	}

	if(! class_exists('PL_Bootstrap') ) { 
		require PSKELETON_LIB . '/PL_Bootstrap.php';
	}


	// replace pskeelton-bootsrap.php with your bootstrap file name
	require 'pskeleton-bootstrap.php';

	// replace PSkeleton_Bootsrap with the name of your Bootstrap Class	
	spl_autoload_register( array('PSkeleton_Bootstrap', 'autoloadControllers') );

	$pskBootstrap = new PSkeleton_Bootstrap();

}