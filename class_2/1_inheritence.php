<?php

class A { //parent

    protected $abc=10;


}

class B extends A{  //child

public function display(){
   return $this->abc=10;
}
}

$obj= new B();

echo $obj->display();

?>