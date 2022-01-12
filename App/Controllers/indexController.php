<?php

namespace App\Controllers;

use MF\Controller\Action;

class indexController extends Action {

    public function index()
    {
        $this->view->data = array('text', 'test');
        $this->render('index', 'layout_one');
    }

    public function about_us()
    {
        $this->view->data = array('cellphone', 'computer');
        $this->render('about_us', 'layout_two');
    }
}