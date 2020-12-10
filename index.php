<?php

require('src/controller/HomeController.php');  
require('src/controller/AddMovieController.php');   
require('src/controller/ListMovieController.php');  
require('src/controller/SearchController.php'); 
require('src/controller/CategoryController.php'); 
require('src/controller/SingleController.php'); 
require('src/service/BddAcces.php');
require('src/model/model.php');


$page = filter_input(INPUT_GET, "page");

$route = [
    "home" => HomeController::class,
    "addmovie" => AddMovieController::class,
    "listmovie" => ListMovieController::class,
    "search" => SearchController::class,
    "category" => CategoryController::class,
    "singlemovie" => SingleController::class
];

foreach($route as $routeValue=>$className) {

        if($page === $routeValue){
            $controller = new $className;
            $controller->manage();
        break;
        }
}

    if(!isset($controller)) {
        $controller = new HomeController();
        $controller->manage();
    }