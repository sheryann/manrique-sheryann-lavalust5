<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function login()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // If already logged in, go directly to products
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            redirect('/products');
            exit();
        }

        if ($this->request->method() == 'post')
        {
            $username = $this->request->post('username');
            $password = $this->request->post('password');

            if ($username === 'admin' && $password === 'admin123')
            {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = 'admin';

                redirect('/products');
                exit();
            }

            $data['error'] = 'Invalid username or password.';
            $this->call->view('auth/login', $data);
            return;
        }

        $this->call->view('auth/login');
    }
}