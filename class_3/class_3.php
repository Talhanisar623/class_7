<?php

//trait
//namespace
//polymorphism => method overwriting/overriding
//what is polymorphism eik hi function hai characterstict and properties are change in every class


abstract class Vehical{

    abstract function engine();
}

//polymorphism ki jer address ke sath
// 2 classes hein apas mein inherit hein 
// both classes have display function
// class b extends a 
// if we call display by object of b which display function work

//abstruct method tak polymorphism exist krti hai abstruct method ko overwrite krein  --
// -- to wo as a polymorphism kam krti hai



//difference between abstruct and interface
//abstruct class we can call normal function and variable constructor and destructor --
// -- but in interface we can not
//for inhertitence of interface we use implements and for abstruct class we use extends
?>