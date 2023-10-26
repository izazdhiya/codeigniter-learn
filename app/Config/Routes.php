<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AktivitasController::index');
$routes->get('/mata-pelajaran', 'MataPelajaranController::index');
$routes->get('/tugas', 'TugasController::index');
$routes->get('/jadwal', 'JadwalController::index');
$routes->get('/informasi', 'InformasiController::index');
$routes->get('/profil', 'ProfileController::index');

service('auth')->routes($routes);
$routes->setDefaultController('AuthController');
