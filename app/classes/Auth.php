<?php


namespace App\classes;


class Auth
{
    public $userName="admin";
    protected  $password =123456;
    private $accessLabel= "Main Admin";

    public function login(){
        echo "login ";

    }
    protected function register(){
        echo "In register";
    }
    private function logout(){
        echo "In logout";
    }





}