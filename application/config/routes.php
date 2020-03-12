<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['(:any)'] = "admin/view/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
