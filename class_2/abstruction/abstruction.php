<?php

abstract class Vehical{

    //normal properties and method
    private $show = "abstruct Class";

    protected function display(){

        return $this->show;
    }

    //abstruct method
    abstract public function engine(); //declare method
    
}



class car extends Vehical{

    public function engine(){//define or initialize

        return $this->display();

    }
    
}


$obj= new car();
echo $obj->engine();



?>