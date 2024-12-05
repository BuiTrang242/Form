<?php
require_once 'core/Controller.php';

session_start();
 function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '<pre>';
    exit;
 }

 $controller= 'HomeController';
 $method ='index';
 $params=[];
 $url = parseUrl();
 if(is_array($url) && file_exists('app/Controllers/' .ucfirst($url[0]) .'Controller.php')){
     $controller=ucfirst($url[0] .'Controller');
     unset($url[0]);
    }
    require_once 'app/controllers/' .$controller .'.php';
    $controller = new $controller;
    if(isset($url[1])) {
        if(method_exists($controller, $url[1])){
            $method=$url[1];
            unset($url[1]);
        }
    }
    $params=$url ? array_values($url) :[];
    call_user_func_array([$controller,$method], $params);
    
   
 function parseUrl(){
    $url= trim($_SERVER['REQUEST_URI'], '/');
    return explode('/', filter_var($url, FILTER_SANITIZE_URL));
 }