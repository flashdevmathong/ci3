<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// $route['adminpage']['GET'] = 'AdminController/index';

$route['register']['GET'] = 'Auth/RegisterController/index';
$route['register']['POST'] = 'Auth/RegisterController/register';

$route['login']['GET'] = 'Auth/LoginController/index';
$route['login']['POST'] = 'Auth/LoginController/login';
$route['logout']['GET'] = 'Auth/LogoutController/logout';



$route['home']['GET'] = 'PageController/pagetodep';


$route['user']['GET'] = 'PartialsContoller/userList';
$route['useradd']['GET'] = 'PartialsContoller/addUser';
$route['userstore']['POST'] = 'PartialsContoller/storeUser';
$route['userdelete/(:any)/(:any)'] = 'PartialsContoller/deleteUser/$1/$2';
$route['useredit/(:any)'] = 'PartialsContoller/editUser/$1';
$route['userupdate'] = 'PartialsContoller/updateUser';
$route['userpdf'] = 'Welcome/index';
$route['userexcel'] = 'PHPExcel_example/index';










