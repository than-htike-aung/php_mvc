<?php
class UserModel {

    private $db;
    
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllUser(){
        $this->db->query("SELECT * FROM php_mvc.users");
        return $this->db->multipleSet();
    }
}