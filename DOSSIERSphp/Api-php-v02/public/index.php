<?php

// header("Access-Control-Allow-Origin: https://www.hugoclavinas.online");

// $http_origin = $_SERVER['HTTP_ORIGIN'];

// $allowed_domains = array(
//     'http://localhost/projets/api/',
// );

// if (in_array($http_origin, $allowed_domains))
// {  
//     header("Access-Control-Allow-Origin: $http_origin");
// }else{
//     false;
// }

// header("Access-Control-Allow-Origin: http://localhost/projets/Api-php-v02/");

use Router\Routes;

require_once realpath("../vendor/autoload.php");

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']). DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR);
// define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . 'assets' . DIRECTORY_SEPARATOR);
// link // SCRIPTS . 'styles/css' . DIRECTORY_SEPARATOR . 'style.css' 
// define('SCRIPTS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR);

$route = new Routes($_GET['url']);

//SITE WEB
$route->get('/menus', 'App\api\controllers\ControllerApi@listMenus');
$route->get('/menu/:i', 'App\api\controllers\ControllerApi@listProduits');
// $route->get('/home', 'App\controllers\siteWeb\ControllerSw@homePageSw');
// $route->get('/menu/:params', 'App\controllers\siteWeb\ControllerSw@produitsMenu');
// $route->get('/facebook', 'App\controllers\siteWeb\ControllerSw@facebook');

//DASHBOARD / PANEL
$route->get('/', 'App\dashboard\controllers\ControllerDash@login');
$route->get('/panel', 'App\dashboard\controllers\ControllerDash@login');
$route->get('/panel/logout', 'App\dashboard\controllers\ControllerDash@login');
$route->post('/panel/auth', 'App\dashboard\controllers\ControllerDash@auth');
$route->get('/panel/loading', 'App\dashboard\controllers\ControllerDash@loading');
$route->get('/panel/home', 'App\dashboard\controllers\ControllerDash@home');
$route->get('/panel/menus', 'App\dashboard\controllers\ControllerDash@menus');
$route->get('/panel/menu/:params', 'App\dashboard\controllers\ControllerDash@produitsMenu');
$route->post('/panel/menu/:params', 'App\dashboard\controllers\ControllerDash@produitsMenu');

$route->run();