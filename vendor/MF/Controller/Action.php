<?php

namespace MF\Controller;

abstract class Action {

    private $view;

    public function __construct()
    {
        $this->view = new \stdClass;
    }

    public function render($view)
    {
        $actual_class = get_class($this);

        $actual_class = str_replace('App\\Controllers\\', '', $actual_class);

        $actual_class = strtolower(str_replace('Controller', '', $actual_class));

        require_once "./../App/Views/".$actual_class."/".$view.".phtml";
    }
}