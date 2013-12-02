<?php
/*
Plugin Name: Plugin Skeleton
Description: Based Plugin Structure
Version: 1.0
Author: Plonta Creative
Author URI: http://plontacreative.com/
*/


if(!  class_exists('PSkeleton_Bootstrap') ) {

	require 'config/constants.php';

	require 'lib/PSkeleton_Bootstrap.php';

	if(! class_exists('PL_BaseController') ) { 
		require PSKELETON_LIB . '/PL_BaseController.php';
	}

	if(! class_exists('PL_BaseModel') ) { 
		require PSKELETON_LIB . '/PL_BaseModel.php';
	}

	if(! class_exists('PL_BaseView') ) { 
		require PSKELETON_LIB . '/PL_BaseView.php';
	}

	$pskBootstrap = new PSkeleton_Bootstrap();

	spl_autoload_register( array('PSkeleton_Bootstrap', 'autoloadControllers') );

}