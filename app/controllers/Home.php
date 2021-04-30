<?php

class Home extends Controller {

    public function __construct()
    {
        $this->userModel = $this->model("UserModel");
    }

    public function index($data= []){
        // echo "I am index method of " .__CLASS__. "class <br>";
      //  echo "Index method is working";  
      $data = $this->userModel->getAllUser();
        $this->view("home/index", $data);
    }

}