<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('contact', 'ContactController::index');
$routes->get('login', 'LoginController::index');
$routes->get('cart', 'ShopingCartController::index');
$routes->get('blog', 'BlogController::index');
$routes->get('technology', 'StarterTechnologyController::index');
$routes->get('beauty', 'StarterBeautyController::index');
$routes->get('retail', 'StarterRetailController::index');

