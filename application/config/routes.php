<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['admin'] = 'homeadmin/admin';
$route['data_controller/insert_data'] = 'data_controller/insert_data';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
