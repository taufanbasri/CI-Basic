<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['(:any)'] = 'halaman/view/$1';
$route['default_controller'] = 'halaman/view';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
