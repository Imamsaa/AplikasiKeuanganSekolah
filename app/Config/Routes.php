<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Halaman Depan
$routes->get('/', 'Login::index');
$routes->get('/register', 'Register::index');

// Halaman Admin
$routes->get('/admin', 'Admin\Home::index');

// Halaman Siswa
$routes->get('/siswa', 'Siswa\Home::index');
