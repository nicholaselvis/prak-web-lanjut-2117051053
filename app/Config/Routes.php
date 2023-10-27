<?php

use App\Controllers\Home;
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
$routes->delete('/user/(:any)', [UserController::class, 'destroy']);

$routes-> get('user/(:any)', [UserController::class, 'show']);