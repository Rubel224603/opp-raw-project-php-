<?php


namespace App\classes;


trait Category
{
    public $x =20;
    public $y=30;
    public $result;
    public function sum(){

         $this->result = $this->x + $this->y;

         echo $this->result;
     }
     public function minus(){

         $this->result = $this->x - $this->y;

         echo $this->result;
     }
}