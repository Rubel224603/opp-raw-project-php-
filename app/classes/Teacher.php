<?php


namespace App\classes;


abstract class Teacher
{
    public $city ="Dhaka";
    public $subject  ="Math";
    public function hello(){
        echo "In hello";
    }
    public abstract function test();


}