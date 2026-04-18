<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/blog/hello-world', 'Blog::helloWorld');
$routes->get('/blog/post/(:num)', 'Blog::post/$1');
