<?php


namespace App\classes;
use App\classes\Auth;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Teacher;
use App\classes\Category;


class Person extends Teacher implements ExampleOne,ExampleTwo
{
    // use trait;
    use Category;

    public $name = "Rubel";
    private  $email ="cserubelhosen@gmail.com";
    protected $mobile = "019503835841";
    public $auth;

    //public stattic  property & method;

    public static $fatherName ="Abdul Hasem";

    public static function demo(){
       return self::$fatherName;
    }

    public function walk(){
        $this->auth = new Auth();

        echo $this->auth->userName;

        //echo $this->auth->login();
        //echo $this->auth->logout();
       // echo $this->auth->register();

        //echo $this->auth->password;

        //echo $this->auth->accessLabel;

        echo  $this->speak();
        echo $this->run();
        echo"</br>";

        echo $this->city;
        echo $this->x;
    }
    private function run(){
        echo "In run";

    }
    protected function speak(){
        echo "In speak";

    }

    public function one()
    {
        // TODO: Implement one() method.
    }

    public function two()
    {
        // TODO: Implement two() method.
    }

    public function three()
    {
        // TODO: Implement three() method.
    }

    public function four()
    {
        // TODO: Implement four() method.
    }

    public function add()
    {
        // TODO: Implement add() method.
    }

    public function remove()
    {
        // TODO: Implement remove() method.
    }

    public function div()
    {
        // TODO: Implement div() method.
    }

    public function test()
    {
        // TODO: Implement test() method.
    }
}