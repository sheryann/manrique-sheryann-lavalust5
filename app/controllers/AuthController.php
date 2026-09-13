<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->helper('url');
    }

    public function login()
    {
        $this->call->view('auth/login');
    }

    public function authenticate()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $username = $this->io->post('username');
        $password = $this->io->post('password');

        if ($username == 'admin' && $password == 'admin123') {

            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;

            $this->call->database();

            $this->call->model('ProductModel');

            $data['products'] = $this->ProductModel->all();

            $data['username'] = $username;

            $this->call->view('products/index', $data);

        } else {

            redirect('/login');

        }
    }

    public function logout()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION = [];

        session_destroy();

        redirect('/login');
    }
}