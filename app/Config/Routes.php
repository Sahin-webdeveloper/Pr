<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'HomeController::index');

// Contact
$routes->get('/contact', 'HomeController::contact');

// About
$routes->get('/about', 'HomeController::about');

// Services
$routes->get('/services', 'ServiceController::index');

// Services
$routes->get('/services/(:segment)', 'ServiceController::detail/$1');

// Portfolios
$routes->get('/portfolios', 'PortfolioController::index');

// Blogs
$routes->get('/blogs', 'BlogController::index');
$routes->get('/blogs/(:segment)', 'BlogController::detail/$1');

// Test
$routes->get('/check-connection', function () {
    dd((array)\Config\Database::connect());
});

/*
 * --------------------------------------------------------------------
 * Admin Routes
 * --------------------------------------------------------------------
 */

$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('dashboard', 'AdminController::index');

    // Category routes.
    $routes->get('category', 'CategoryController::index', ['as' => 'admin.category']);

    $routes->get('category/add', 'CategoryController::create', ['as' => 'admin.category.create']);

    $routes->post('category/insert', 'CategoryController::insert', ['as' => 'admin.category.insert']);

    $routes->get('category/edit/(:num)', 'CategoryController::edit/$1', ['as' => 'admin.category.edit']);

    $routes->post('category/update/(:num)', 'CategoryController::update/$1', ['as' => 'admin.category.update']);

    $routes->get('category/delete/(:num)', 'CategoryController::delete/$1', ['as' => 'admin.category.delete']);

    // Service routes
    $routes->group('services', function ($routes) {
        $routes->get('/', 'ServiceController::index', ['as' => 'admin.service']);
        $routes->get('add', 'ServiceController::create', ['as' => 'admin.service.create']);
        $routes->post('insert', 'ServiceController::insert', ['as' => 'admin.service.insert']);
        $routes->get('edit/(:num)', 'ServiceController::edit/$1', ['as' => 'admin.service.edit']);
        $routes->post('update/(:num)', 'ServiceController::update/$1', ['as' => 'admin.service.update']);
        $routes->get('delete/(:num)', 'ServiceController::delete/$1', ['as' => 'admin.service.delete']);
    });

    // Portfolio routes
    $routes->group('portfolio', function ($routes) {
        // Portfolio
        $routes->get('/', 'PortfolioController::index', ['as' => 'admin.portfolio']);
        $routes->get('add', 'PortfolioController::create', ['as' => 'admin.portfolio.create']);
        $routes->post('insert', 'PortfolioController::insert', ['as' => 'admin.portfolio.insert']);
        $routes->get('edit/(:num)', 'PortfolioController::edit/$1', ['as' => 'admin.portfolio.edit']);
        $routes->post('update/(:num)', 'PortfolioController::update/$1', ['as' => 'admin.portfolio.update']);
        $routes->get('delete/(:num)', 'PortfolioController::delete/$1', ['as' => 'admin.portfolio.delete']);

        // Category
        $routes->get('categories', 'PortfolioCategoryController::index', ['as' => 'admin.portfolio_category']);
        $routes->get('categories/add', 'PortfolioCategoryController::create', ['as' => 'admin.portfolio_category.create']);
        $routes->post('categories/insert', 'PortfolioCategoryController::insert', ['as' => 'admin.portfolio_category.insert']);
        $routes->get('categories/edit/(:num)', 'PortfolioCategoryController::edit/$1', ['as' => 'admin.portfolio_category.edit']);
        $routes->post('categories/update/(:num)', 'PortfolioCategoryController::update/$1', ['as' => 'admin.portfolio_category.update']);
        $routes->get('categories/delete/(:num)', 'PortfolioCategoryController::delete/$1', ['as' => 'admin.portfolio_category.delete']);
    });
});

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
