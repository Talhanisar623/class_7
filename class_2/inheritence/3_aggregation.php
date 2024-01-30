<?php

class A { //parent

    protected $abc=10;


}

class B{  //child

    protected $inheritence = new A();

    public function display(){

        // return $inheritence->abc=10;
        
    }

}

class C extends B{

  

}

$obj= new B();

echo $obj->display();

?>