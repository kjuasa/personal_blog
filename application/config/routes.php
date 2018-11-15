<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['users/register'] = 'users/register';

$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/(:any)'] = 'posts/view/$1';

$route['pages'] = 'pages/home';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
