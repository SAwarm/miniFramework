<?php

namespace App\Controllers;

class indexController {

    private $view;

    public function __construct()
    {
        $this->view = new \stdClass;
    }

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

    public function render($view)
    {
        $actual_class = get_class($this);

        $actual_class = str_replace('App\\Controllers\\', '', $actual_class);

        $actual_class = strtolower(str_replace('Controller', '', $actual_class));

        require_once "./App/Views/".$actual_class."/".$view.".phtml";
    }
}