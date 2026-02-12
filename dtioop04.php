<?php
//Inheritance
class SauA{
    public $infoA = "SAU A";
    public function showInfoA(){
        echo $this->infoA . "...<br>";
    }
}

class SauB extends SauA{
    public $infoB = "SAU B";
}
class SauC extends SauB{
    public function showHi(){
        echo "Hi...<br>";
    }
}

$ob1 = new SauA(); //มี member 2
$ob1 = new SauB(); //มี member 3
$ob1 = new SauC(); //มี member 4

$ob3 ->showInfoA();