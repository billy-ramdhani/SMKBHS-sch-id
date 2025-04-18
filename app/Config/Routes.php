<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Public\Home::index');

$routes->group('', ['namespace' => 'App\Controllers\Public'], function ($routes) {
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

$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('login', 'Auth::login');
    $routes->post('login', 'Auth::attemptLogin');
    $routes->get('logout', 'Auth::logout');
    $routes->get('dashboard', 'Dashboard::index', ['filter' => 'auth']);
    $routes->get('berita', 'Berita::index', ['filter' => 'auth']);
    $routes->get('berita/create', 'Berita::create', ['filter' => 'auth']);
    $routes->post('berita/store', 'Berita::store', ['filter' => 'auth']);
    $routes->get('berita/edit/(:segment)', 'Berita::edit/$1', ['filter' => 'auth']);
    $routes->post('berita/update/(:segment)', 'Berita::update/$1', ['filter' => 'auth']);
    $routes->get('berita/berita_edit/(:segment)', 'Berita::berita_edit/$1', ['filter' => 'auth']);
    $routes->get('berita/delete/(:segment)', 'Berita::delete/$1', ['filter' => 'auth']);
    $routes->get('galeri', 'Galeri::index', ['filter' => 'auth']);
    $routes->get('galeri/create', 'Galeri::create', ['filter' => 'auth']);
    $routes->post('galeri/store', 'Galeri::store', ['filter' => 'auth']);
    $routes->get('galeri/edit/(:segment)', 'Galeri::edit/$1', ['filter' => 'auth']);
    $routes->post('galeri/update/(:segment)', 'Galeri::update/$1', ['filter' => 'auth']);
    $routes->get('galeri/galeri_edit/(:segment)', 'Galeri::galeri_edit/$1', ['filter' => 'auth']);
    $routes->get('galeri/delete/(:segment)', 'Galeri::delete/$1', ['filter' => 'auth']);
});