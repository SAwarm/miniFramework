<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Product;

class indexController extends Action {

    public function index()
    {
        //$this->view->data = array('text', 'test');

        $con = Connection::getDb();

        $product = new Product($con);

        $products = $product->getProducts();

        $this->view->data = $products;

        $this->render('index', 'layout_one');
    }

    public function about_us()
    {
        $this->view->data = array('cellphone', 'computer');
        $this->render('about_us', 'layout_two');
    }
}