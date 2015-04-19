<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// Exit if class is already defined
if ( class_exists( 'BP_Admin_Model_Page_2' ) ) {
	return;
}

/**
 * Admin Model 
 *
 * @class BP_Admin_Model_Page_2 
 * @package app/core
 * @author Abid Omar
 */
class BP_Admin_Model_Page_2 extends BP_MVC_Admin_Model {
	protected $title = 'Page 2 Title';
	protected $name = 'Page 2';
}