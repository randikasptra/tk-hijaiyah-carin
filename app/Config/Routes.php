<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ==============================
// 🔐 AUTH ROUTES
// ==============================
$routes->get('/', 'Auth::login');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/logout', 'Auth::logout');

// ==============================
// 👤 ROLE-BASED DASHBOARDS
// ==============================
$routes->get('/admin', 'Admin::index');
$routes->get('/guru', 'Guru::index');

// ==============================
// 📚 MATERI ROUTES
// ==============================
$routes->get('/materi/dashboard', 'Materi::home');
$routes->get('/materi/home', 'Materi::home');
$routes->get('/materi/mengenal', 'Materi::mengenal');
$routes->get('/materi/menghafal', 'Materi::menghafal');
$routes->get('/materi/game', 'Materi::game');
$routes->get('/materi/harakat_hijaiyah', 'Materi::harakat');

// ==============================
// 🎮 GAME ROUTES - DI BAWAH PREFIX /materi/game
// ==============================
$routes->group('materi/game', function($routes) {
    $routes->get('level-huruf/(:num)', 'Game::levelHuruf/$1');
    $routes->post('level-huruf/(:num)', 'Game::checkLevelHuruf/$1');
    $routes->get('start-harakat', 'Game::startHarakat');
    $routes->get('level-harakat/(:segment)', 'Game::levelHarakat/$1');
    $routes->post('level-harakat', 'Game::checkLevelHarakat');
    $routes->get('selesai', 'Game::selesai');
});

// ==============================
// 🛠️ ADMIN - MANAJEMEN USER
// ==============================
$routes->get('/admin/user', 'Admin::dataUser');
$routes->get('/admin/user/tambah', 'Admin::tambahUser');
$routes->post('/admin/user/tambah', 'Admin::simpanUser');
$routes->get('/admin/user/edit/(:num)', 'Admin::editUser/$1');
$routes->post('/admin/user/edit/(:num)', 'Admin::updateUser/$1');
$routes->get('/admin/user/hapus/(:num)', 'Admin::hapusUser/$1');
