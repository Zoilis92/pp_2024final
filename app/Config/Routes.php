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


$routes->get('usuarios', 'UsuariosController::index');
$routes->get('usuarios/create', 'UsuariosController::create');
$routes->post('usuarios/store', 'UsuariosController::store');
$routes->get('usuarios/edit/(:num)', 'UsuariosController::edit/$1');
$routes->post('usuarios/update/(:num)', 'UsuariosController::update/$1');
$routes->get('usuarios/delete/(:num)', 'UsuariosController::delete/$1');


$routes->get('carreras', 'CarreraController::index');
$routes->get('carreras/create', 'CarreraController::create');
$routes->post('carreras/store', 'CarreraController::store');
$routes->get('carreras/edit/(:num)', 'CarreraController::edit/$1');
$routes->post('carreras/update/(:num)', 'CarreraController::update/$1');
$routes->get('carreras/delete/(:num)', 'CarreraController::delete/$1');


$routes->get('cursos', 'CursosController::index');
$routes->get('cursos/create', 'CursosController::create');
$routes->post('cursos/store', 'CursosController::store');
$routes->get('cursos/edit/(:num)', 'CursosController::edit/$1');
$routes->post('cursos/update/(:num)', 'CursosController::update/$1');
$routes->post('cursos/delete/(:num)', 'CursosController::delete/$1');

$routes->get('notas', 'NotasController::index');
$routes->get('notas/create', 'NotasController::create');
$routes->post('notas/store', 'NotasController::store');
$routes->get('notas/edit/(:num)', 'NotasController::edit/$1');
$routes->post('notas/update/(:num)', 'NotasController::update/$1');
$routes->post('notas/delete/(:num)', 'NotasController::delete/$1');

$routes->get('estudiantes/misCursos', 'Estudiantes::misCursos');

$routes->get('creditos', 'CreditosController::index');
$routes->post('creditos/guardar', 'CreditosController::guardar');



//$routes->get('HomeController::index'/register', 'RegisterController::index');