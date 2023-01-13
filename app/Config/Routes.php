<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'LibraryStore::index');
$routes->post('autores', 'LibraryStore::guardarAutores');
$routes->post('updateautores', 'LibraryStore::updateAutores');
$routes->post('libros', 'LibraryStore::guardarLibros');
$routes->post('updatelibros', 'LibraryStore::updateLibros');
$routes->get('eliminarautores/(:num)', 'LibraryStore::eliminarAutores/$1');
$routes->get('eliminarlibros/(:num)', 'LibraryStore::eliminarLibros/$1');
$routes->get('showlibros/(:num)', 'LibraryStore::showLibros/$1');
$routes->get('showautores/(:num)', 'LibraryStore::showAutores/$1');
$routes->get('trash', 'LibraryStore::trash');
$routes->get('restore', 'LibraryStore::Restore');
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
