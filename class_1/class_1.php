<?php 

class Base{

    //rule of encapsulation
    //variable private
    //setter and getter method


    private $name;
    private $address;

    //setter method
    public function SetName($a){

        $this->name=$a;

    }

    public function SetAddress($b){

        $this->address=$b;

    }
    //getter method


    public function GetName(){

        return $this->name;
    }

    public function GetAddress(){

        return $this->address;
    }






    //============================
    //Access Modifier
    /*
    1 public
    2 private
    3 protected

    */

    private $abc=12;


}

// $obj1= new Base();

// $obj1->abc = 57;

// echo $obj1->abc;


// $obj2= new Base();
// echo $obj2->abc;


$asdf= new Base();

echo $asdf->SetName("xyz");
echo $asdf->GetName();



?>