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
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/guru', 'Guru::index', ['filter' => 'role:guru']);
$routes->match(['get', 'post'], 'guru/update_profile', 'Guru::updateProfile', ['filter' => 'role:guru']);
$routes->get('guru/dashboard', 'Guru::index', ['filter' => 'role:guru']);

// ==============================
// 📚 MATERI ROUTES
// ==============================
$routes->get('/materi/dashboard', 'Materi::home', ['filter' => 'role:admin,guru']);
$routes->get('/materi/home', 'Materi::home2', ['filter' => 'role:admin,guru']);
$routes->get('/materi/mengenal', 'Materi::mengenal', ['filter' => 'role:admin,guru']);
$routes->get('/materi/menghafal', 'Materi::menghafal', ['filter' => 'role:admin,guru']);
$routes->get('/materi/game', 'Materi::game', ['filter' => 'role:admin,guru']);
$routes->get('/materi/harakat_hijaiyah', 'Materi::harakat', ['filter' => 'role:admin,guru']);
$routes->get('/materi/mengenal_partials', 'Materi::mengenal_partials', ['filter' => 'role:admin,guru']);
$routes->get('/materi/home_partials', 'Materi::home_content', ['filter' => 'role:admin,guru']);
$routes->get('/materi/menghafal_partials', 'Materi::menghafal_partials', ['filter' => 'role:admin,guru']);
$routes->get('/materi/harakat_hijaiyah_partials', 'Materi::harakat_hijaiyah_partials', ['filter' => 'role:admin,guru']);
$routes->get('/materi/dashboard_content', 'Materi::dashboard_content', ['filter' => 'role:admin,guru']);
$routes->get('/materi/game_partials', 'Materi::game_partials', ['filter' => 'role:admin,guru']);

// ==============================
// 🎮 GAME ROUTES - DI BAWAH PREFIX /materi/game
// ==============================
$routes->group('materi/game', ['filter' => 'role:admin,guru'], function($routes) {
    $routes->get('level-huruf/(:num)', 'Game::levelHuruf/$1');
    $routes->post('level-huruf/(:num)', 'Game::checkLevelHuruf/$1');
    $routes->get('start-harakat', 'Game::startHarakat');
    $routes->get('level-harakat/(:segment)', 'Game::levelHarakat/$1');
    $routes->post('level-harakat/(:num)', 'Game::checkLevelHarakat/$1');
    $routes->get('selesai', 'Game::selesai');
    $routes->get('spa-harakat', 'Game::spaHarakat');
    
});

// ==============================
// 🛠️ ADMIN - MANAJEMEN USER
// ==============================
$routes->group('admin', ['filter' => 'role:admin'], function($routes) {
    $routes->get('user', 'Admin::dataUser');
    $routes->get('user/tambah', 'Admin::tambahUser');
    $routes->post('user/tambah', 'Admin::simpanUser');
    $routes->get('user/edit/(:num)', 'Admin::editUser/$1');
    $routes->post('user/edit/(:num)', 'Admin::updateUser/$1');
    $routes->get('user/hapus/(:num)', 'Admin::hapusUser/$1');
    $routes->get('user/detail/(:num)', 'Admin::detailUser/$1');
    
});

// ==============================
// 🚫 UNAUTHORIZED ROUTE
// ==============================
$routes->get('/unauthorized', function () {
    return view('errors/html/unauthorized');
});
