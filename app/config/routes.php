<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


$router->any('/', 'AuthController::login');

$router->any('/login', 'AuthController::login');


$router->get('/', 'ProductController::index')->middleware('auth');

$router->any('/products/create', 'ProductController::create')->middleware('auth');

$router->any('/products/edit/{id}', 'ProductController::edit')->middleware('auth');

$router->post('/products/update/{id}', 'ProductController::update')->middleware('auth');

$router->any('/products/delete/{id}', 'ProductController::delete')->middleware('auth');

$router->post('/products/destroy/{id}', 'ProductController::destroy')->middleware('auth');


$router->get('/logout', function()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION = array();

    session_destroy();

    redirect('login');
    exit;
});


$router->get('/not-logged-in', function()
{
    echo 'Please Login First.';
});

