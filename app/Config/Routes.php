<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/home', 'Home::index');
$routes->get('/', 'Home::index');

$routes->get('/shop', 'Shop::index');

// Define a route with a placeholder for the product type
$routes->get('/shop/product/(:segment)', 'Shop::product/$1');
$routes->get('/shop/product', 'Shop::product');
$routes->get('/shop/product/(:segment)/(:segment)', 'Shop::product/$1/$2');
$routes->get('/admin/shop', 'Admin\Shop::index');
$routes->get('/home/validation', 'Home::validation');
$routes->get('/admin/shop/product/(:segment)/(:num)', 'Admin\Shop::product/$1/$2');


$routes->add('product', 'Shop::product');
$routes->add('product/(:any)/(:any)', 'Shop::product/$1/$2');
// $routes->add('blog', function () {
//     return "<h2>This is a blog</h2>";
// });

$routes->add('blog','Blog::index');
$routes->add('blog/post','Blog::post');

$routes->add('blog/new','Blog::new');


$routes->group('admin', function ($routes){
    $routes->add('user','Admin\Users::index');
    $routes->add('users','Admin\Users::getAllUsers');
    $routes->add('product(:any)/(:any)','Admin\Users::product/$1/$2');


    ///Blog Routes
    $routes->add('blog', 'Admin\Blog::index');
    $routes->get('blog/new','Admin\Blog::createNew');
    $routes->post('blog/new','Admin\Blog::saveBlog');



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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
