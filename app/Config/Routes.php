<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'CtrlLogin::index');
$routes->post('/login/action', 'CtrlLogin::LoginAction');
$routes->get('/login/logout', 'CtrlLogin::logout');

$routes->get('/admin', 'CtrlAdmin::index', ['filter' => 'adminfilter']);
$routes->get('/asisten', 'CtrlAsisten::index', ['filter' => 'asistenfilter']);
