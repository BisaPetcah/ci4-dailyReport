<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function () {
    return view('404');
});
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Auth::index', ['filter' => 'noAuth']);
$routes->post('/', 'Auth::proses_login', ['filter' => 'noAuth']);

$routes->get('/register-admin', 'Auth::registerAdmin', ['filter' => 'noAuth']);
$routes->post('/register-admin', 'Auth::proses_registerAdmin', ['filter' => 'noAuth']);

//$routes->group('main', ['filter' => 'auth'], function ($routes) {
$routes->get('/admin', 'Admin\Dashboard::index', ['filter' => 'auth']);
$routes->get('/admin/pembimbing', 'Admin\Pembimbing::index', ['filter' => 'auth']);

$routes->get('/pembimbing', 'Pembimbing\Dashboard::index', ['filter' => 'auth']);

$routes->get('/siswa', 'Siswa\Feedback::index', ['filter' => 'auth']);
//});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
