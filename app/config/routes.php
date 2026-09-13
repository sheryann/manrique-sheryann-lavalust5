<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$router->get('/', 'AuthController::login');

$router->get('/login', 'AuthController::login');

$router->post('/authenticate', 'AuthController::authenticate');

$router->get('/logout', 'AuthController::logout');


$router->group(
    ['prefix' => '/products', 'middleware' => 'auth'],
    function ($router) {

        $router->get('', 'ProductController::index');

        $router->get('/create', 'ProductController::create');

        $router->post('/store', 'ProductController::store');

        $router->get('/edit/{id}', 'ProductController::edit');

        $router->post('/update/{id}', 'ProductController::update');

        $router->get('/delete/{id}', 'ProductController::delete');

        $router->post('/destroy/{id}', 'ProductController::destroy');
    }
);