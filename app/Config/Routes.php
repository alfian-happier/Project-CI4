<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('create', 'HomeController::create');

// Route Login
$routes->get('login', 'Auth\AuthController::index');
$routes->post('login', 'Auth\AuthController::processLogin');

// Grup rute untuk Akses Agent
$routes->group('Agent', ['filter' => 'auth'], function ($routes) {
    // Proses Menampilkan Data
    $routes->get('list', 'Agent\AgentHomeController::index');
    // Proses Menampilkan Form Create
    $routes->get('create', 'Agent\AgentHomeController::create');

    // Proses Tambah Data Nasabah
    $routes->post('create', 'Agent\AgentHomeController::store'); // Menangani form submit
});
