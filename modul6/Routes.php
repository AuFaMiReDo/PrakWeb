<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Rute untuk halaman utama
$routes->get('home/index', 'Home::index'); // Rute untuk beranda
$routes->get('home/profil', 'Home::profil'); // Rute untuk profil
