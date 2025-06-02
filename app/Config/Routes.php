<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// aqui un ejemplo de funcion anonima 
// $routes->get('/insertar', function () {
//     return "<h1>hola insertar</h1>";
// });

$routes->get('/', 'Home::index');
$routes->post('/insertar', 'Home::insertar');
$routes->post('/actualizar', 'Home::actualizar');
$routes->get('/eliminar/(:num)', 'Home::eliminar/$1');


