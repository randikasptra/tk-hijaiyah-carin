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

// 🔧 Optional: Dashboard umum (kalau butuh untuk default redirect)
$routes->get('/dashboard', 'Dashboard::index');


$routes->get('/siswa', 'Siswa::index'); // dashboard siswa
$routes->get('/siswa/home', 'Siswa::home'); // halaman awal belajar (setelah klik Mulai)
$routes->get('/siswa/mengenal', 'Siswa::mengenal'); // halaman belajar huruf hijaiyah
$routes->get('/siswa/menghafal', 'Siswa::menghafal'); // halaman belajar huruf hijaiyah
$routes->get('/siswa/game', 'Siswa::game'); // halaman game


// $routes->get('/siswa/game', 'Game::index'); // halaman pilih level
$routes->get('/siswa/game/tebak-huruf', 'Game::tebakHuruf');
$routes->post('/siswa/game/cek', 'Game::cekHuruf');

$routes->get('/siswa/game/tebak-harakat', 'Game::tebakHarakat');
$routes->post('/siswa/game/cek-harakat', 'Game::cekHarakat');
