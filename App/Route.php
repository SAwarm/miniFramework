<?php

namespace App;

class Route {

    public function initRoutes()
    {
        $routes['home'] = array(
            'route'         =>  '/',
            'controller'    =>  'indexController',
            'action'        =>  'index'
        );

        $routes['about_us'] = array(
            'route'         =>  '/sobre_nos',
            'controller'    =>  'indexController',
            'action'        =>  'about_us'
        );
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}