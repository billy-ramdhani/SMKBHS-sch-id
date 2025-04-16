<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Public\Home::index');

$routes->group('', ['namespace' => 'App\Controllers\Public'], function($routes) {
    $routes->get('profil/(:segment)', 'Page::profil/$1');
    $routes->get('guru', 'Page::guru');
    $routes->get('sarana', 'Page::sarana');
    $routes->get('berita', 'Page::berita');
    $routes->get('berita/(:segment)', 'Page::berita_detail/$1');
    $routes->get('galeri', 'Page::galeri');
    $routes->get('prestasi', 'Page::prestasi');
    $routes->get('ppdb', 'Page::ppdb');
    $routes->get('kontak', 'Page::kontak');
});

$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function($routes) {
    $routes->get('login', 'Auth::login');
    $routes->post('login', 'Auth::attemptLogin');
    $routes->get('logout', 'Auth::logout');
    $routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);
});