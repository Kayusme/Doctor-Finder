<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['add-doctor'] = 'show';

$route['admin-login'] = 'welcome/admin_login';

$route['add-doc'] = 'backend/add_doc';
$route['add-hos'] = 'backend/add_hos';
$route['go-admin'] = 'backend/index';
