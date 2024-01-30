<?php 



interface Vehical{//normal function not allowed
    //interface is not class function in it is called function not method
    //function in the interface are by default abstruct function

    //interface variable not allowed in it

    public function engine();
    public function horn();
    public function tyre();



    // $abc;

    
}

class Car implements Vehical{

    public function engine(){}
    public function horn(){}
    public function tyre(){}


}






?>