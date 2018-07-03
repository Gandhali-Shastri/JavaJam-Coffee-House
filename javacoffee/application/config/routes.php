<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['orders'] = 'orders/ordersdata';
$route['cart'] = 'cart/cartdata';
$route['gear'] = 'gear/geardata';
$route['jobs'] = 'jobs/jobsdata';
$route['music'] = 'music/musicdata';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
	