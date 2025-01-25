<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true); 

$routes->get('/landing', 'Home::landing');
$routes->get('/', 'Home::landing');
$routes->get('/index', 'Admin::index', ['filter' => 'login']);
$routes->get('/minuman', 'Home::minuman');
$routes->get('/cemilan', 'Home::cemilan');
$routes->get('/makanan', 'Home::makanan');
$routes->get('/hubungikami', 'Home::hubungikami');
$routes->get('/keranjang', 'Home::keranjang');
$routes->get('/tminuman', 'Admin::minum');
$routes->get('/tmakanan', 'Admin::makan');
$routes->get('/tcemilan', 'Admin::cemil');
$routes->get('/luser', 'Admin::luser');
$routes->get('/menu', 'Home::isimenu');
$routes->get('/keranjang', 'Home::keranjang');
$routes->get('/beli', 'Home::beli');
$routes->post('simpan_transaksi', 'Transaksi::simpan');

$routes->get('/listmenu', 'MenuCrudController::index');
$routes->post('/listmenu/create', 'MenuCrudController::create');
$routes->post('/listmenu/edit/(:num)', 'MenuCrudController::edit/$1');
$routes->post('/listmenu/delete/(:num)', 'MenuCrudController::delete/$1');


