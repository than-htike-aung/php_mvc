<?php

class Controller{

    // public function __construct()
    // {
    //     echo "I am parent controller<br>";
    // }

    public function view($view, $data=[]){
        if(file_exists("../app/views/" .$view. ".php")){
            require_once "../app/views/" .$view. ".php";
        }
    }

    public function model($model){
        if(file_exists("../app/models/" . $model . ".php")){
            require_once "../app/models/" .$model. ".php";
            return new $model;
        }
    }
}