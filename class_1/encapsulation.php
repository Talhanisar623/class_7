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


}



$asdf= new Base();

echo $asdf->SetName("xyz");
echo $asdf->GetName();



?>