<?php

class A{ //parent

    protected $abc=10;


}

class B{  //child


public $inheritence = new A();

public function display(){

//    return $inheritence->abc=10;
}
}

$obj= new B();

echo $obj->display();

?>