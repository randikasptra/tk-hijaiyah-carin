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
$routes->get('/siswa', 'Siswa::index');
$routes->get('/dashboard', 'Dashboard::index'); // Optional umum

// ==============================
// 📚 SISWA - HALAMAN BELAJAR
// ==============================
$routes->get('/siswa/home', 'Siswa::home');
$routes->get('/siswa/mengenal', 'Siswa::mengenal');
$routes->get('/siswa/menghafal', 'Siswa::menghafal');

// ==============================
// 🎮 GAME ROUTES
// ==============================
// Game huruf hijaiyah
$routes->get('/siswa/game', 'Siswa::game');
$routes->get('/siswa/game/level-huruf/(:num)', 'Game::levelHuruf/$1');
$routes->post('/siswa/game/level-huruf/(:num)', 'Game::checkLevelHuruf/$1');

// Game harakat hijaiyah
$routes->get('/siswa/game/start-harakat', 'Game::startHarakat');
$routes->get('/siswa/game/level-harakat/(:segment)', 'Game::levelHarakat/$1');
$routes->post('/siswa/game/level-harakat', 'Game::checkLevelHarakat');

// Game selesai
$routes->get('/siswa/game/selesai', 'Game::selesai');

// ==============================
// 🛠️ ADMIN - MANAJEMEN USER
// ==============================
$routes->get('/admin/user', 'Admin::dataUser');
$routes->get('/admin/user/tambah', 'Admin::tambahUser');
$routes->post('/admin/user/tambah', 'Admin::simpanUser');
$routes->get('/admin/user/edit/(:num)', 'Admin::editUser/$1');
$routes->post('/admin/user/edit/(:num)', 'Admin::updateUser/$1');
$routes->get('/admin/user/hapus/(:num)', 'Admin::hapusUser/$1');
