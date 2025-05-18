<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// 🔐 AUTH
$routes->get('/', 'Auth::login'); // Default root ke login
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/logout', 'Auth::logout');

// 👤 ROLE-BASED DASHBOARD
$routes->get('/admin', 'Admin::index');
$routes->get('/guru', 'Guru::index');
$routes->get('/siswa', 'Siswa::index');

// 🔧 Optional: Dashboard umum (kalau butuh untuk default redirect)
$routes->get('/dashboard', 'Dashboard::index');


$routes->get('/siswa/mengenal', 'Siswa::mengenal');

