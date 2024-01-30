<?php

class A { //parent

    protected $abc=10;


}

class B {  //child

  private  $inheritence = new A();
public function display(){
 
}
}



class C extends B{


}













$obj= new B();

echo $obj->display();

?>