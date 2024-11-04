<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'HomeController::index');
$routes->get('/register', 'RegisterController::index');
$routes->post('/register/store', 'RegisterController::store');
$routes->get('login', 'AuthController::login');
$routes->post('/loginProcess', 'AuthController::loginProcess');
$routes->get('dashboard', 'DashboardController::index');
$routes->get('dashboard/estudiante', 'DashboardController::estudiante');
$routes->get('dashboard/docente', 'DashboardController::docente');
$routes->get('dashboard/administrador', 'DashboardController::administrador');
$routes->get('/logout', 'LogoutController::index');





//$routes->get('HomeController::index'/register', 'RegisterController::index');