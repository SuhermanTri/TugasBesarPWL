<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/product', 'Product::index');
$routes->get('/tender', 'TenderController::tender');

$routes->get('/product/update/(:num)', 'Product::update/$1');
$routes->get('/product/delete/(:num)', 'Product::delete/$1');
