<?php

namespace App\Controllers;

use MF\Controller\Action;

class indexController extends Action {

    private $view;

    public function index()
    {
        $this->view->data = array('text', 'test');
        $this->render('index');
    }

    public function about_us()
    {
        $this->view->data = array('cellphone', 'computer');
        $this->render('about_us');
    }
}