<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php'))
{
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
 * Route Definitions*/
 
$routes->get('/', 'Home::index');

$routes->get('/v2', 'Home::version');
$routes->get('/v2/(:num)', 'Home::version/$1');
$routes->get('/v2/(:num)/(:any)', 'Home::version/$1/$2');

$routes->get('login', 'Login::index');
$routes->get('register', 'Register::index');

$routes->post('login', 'Login::do_login');
$routes->post('register', 'Register::do_register');