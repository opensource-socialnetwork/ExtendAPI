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
$a = 1;
$b = 2;
if($b > $a){
	$params['OssnServices']->successResponse("B is > A");	
} else {
	$params['OssnServices']->throwError('200', "Error B is not > A");
}
