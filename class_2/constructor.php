<?php 


class Base{

    //only one constructor allowed in class default or parameter

    // constructor is magic method
    // destructor is magic method
    // constructor is called at start
    // all other function is called between
    // destructor is called at end

    public function __construct(){

        echo "constructor function call of Base"."<br>";
    }
    // public function __construct($a,$b){

    //     echo "constructor function called".$a.$b."<br>";
    // }

    public function display(){

        echo "Display function called"."<br>";
    }
  
    public function __destruct(){

        echo "Destructor function called"."<br>";
    }

    

   


  
}


class derived extends Base{


    public function __construct(){
    parent::__construct();

    echo "contructor of derived class"."<br>";


    }
    

}


$obj1 = new derived();
$obj1->display();




?>