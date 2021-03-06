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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/auth/login', 'Auth::login');
$routes->get('/auth/register', 'Auth::register');
$routes->get('/logout', 'Auth::logout');
$routes->get('/', 'Customer::index');
$routes->get('/laundry/dashboard/(:segment)', 'Customer::dashboard/$1');
$routes->get('/laundry/cuci', 'Customer::cuci');
$routes->get('/laundry/setrika', 'Customer::setrika');
$routes->get('/laundry/cuci-setrika', 'Customer::cuci_setrika');
$routes->get('/laundry/checkout', 'Customer::checkout');
$routes->get('/laundry/pembayaran/(:segment)', 'Customer::pembayaran/$1');
$routes->get('/laundry/invoice/(:segment)', 'Customer::invoice/$1');
$routes->post('/laundry/redirectCheckout', 'Customer::redirectCheckout');
$routes->post('/laundry/saveLayanan', 'Customer::saveLayanan');
$routes->post('/laundry/savePembayaran/(:num)', 'Customer::savePembayaran/$1');
$routes->get('/admin/userlist', 'Admin::userlist');
$routes->get('/admin/transaksi', 'Admin::index');
$routes->get('/admin/detail/(:num)', 'Admin::detail/$1');
$routes->get('/admin/edit/(:num)', 'Admin::edit/$1');
$routes->get('/admin/edit-user/(:num)', 'Admin::edit_user/$1');
/**
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
