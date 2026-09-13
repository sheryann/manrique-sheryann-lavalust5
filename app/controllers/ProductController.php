<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->helper('url');
    }

    public function index()
    {
        $this->call->database();
        $this->call->model('ProductModel');

        $data['products'] = $this->ProductModel->all();
        $data['username'] = $_SESSION['username'];

        $this->call->view('products/index', $data);
    }

    public function create()
    {
        $this->call->database();
        $this->call->model('ProductModel');

        if ($this->request->method() == 'post')
        {
            $data = [
                'product_name' => $this->request->post('product_name'),
                'description'  => $this->request->post('description'),
                'price'        => $this->request->post('price'),
                'quantity'     => $this->request->post('quantity')
            ];

            $this->ProductModel->insert($data);

            redirect('/products');
            exit();
        }

        $this->call->view('products/create');
    }

    public function edit($id)
    {
        $this->call->database();
        $this->call->model('ProductModel');

        $data['product'] = $this->ProductModel->find($id);

        $this->call->view('products/edit', $data);
    }

    public function update($id)
    {
        $this->call->database();
        $this->call->model('ProductModel');

        $data = [
            'product_name' => $this->request->post('product_name'),
            'description'  => $this->request->post('description'),
            'price'        => $this->request->post('price'),
            'quantity'     => $this->request->post('quantity')
        ];

        $this->ProductModel->update($id, $data);

        redirect('/products');
        exit();
    }

    public function delete($id)
    {
        $this->call->database();
        $this->call->model('ProductModel');

        $data['product'] = $this->ProductModel->find($id);

        $this->call->view('products/delete', $data);
    }

    public function destroy($id)
    {
        $this->call->database();
        $this->call->model('ProductModel');

        $this->ProductModel->delete($id);

        redirect('/products');
        exit();
    }
}

