<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
define('ExtendAPI', ossn_route()->com . 'ExtendAPI/');
function extend_api_init() {
		ossn_add_hook('services', 'methods', 'my_custom_end_point_register');
}
function my_custom_end_point_register($hook, $type, $methods, $params) {
		$methods['v1.0'][] = 'my_custom_end_point';
		return $methods;
}
ossn_register_callback('ossn', 'init', 'extend_api_init');
