<?php

use App\Controllers\Home;
use App\Controllers\KelasController;
use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/profile', [Home::class, 'profile']);

$routes->get('/user/profile/(:any)/(:any)/(:any)', [UserController::class, 'profile']);

$routes-> get('/user/create', [UserController::class, 'create']);
$routes-> get('/user', [UserController::class, 'index']);
$routes-> post('/user/store', [UserController::class, 'store']);
$routes-> get('/user/(:any)/edit', [UserController::class, 'edit']);
$routes-> put('/user/(:any)', [UserController::class, 'update']);
$routes-> delete('/user/(:any)', [UserController::class, 'destroy']);

$routes-> get('/kelas/create', [KelasController::class, 'create']);
$routes-> get('/kelas', [KelasController::class, 'index']);
$routes-> post('/kelas/store', [KelasController::class, 'store']);
$routes-> get('/kelas/(:any)/edit', [KelasController::class, 'edit']);
$routes-> put('/kelas/(:any)', [KelasController::class, 'update']);
$routes-> delete('/kelas/(:any)', [KelasController::class, 'destroy']);

$routes-> get('user/(:any)', [UserController::class, 'show']);