<?php

class Test03{
    public $numA = 100;
    private $numB = 200;
    
    public $numC = 300;

    public function showHi(){ echo "Hi...<br >";}
    private function showHello(){ echo "Hello....<br>";}
    function showHey(){ echo "Hey...<br>";}

    //--->->->->->----
    public function metA(){
        echo "NumA:" .$this->numA . "<br>";
        echo "NumB:" .$this->numB . "<br>";
        echo "NumC:" .$this->numC . "<br>";
        $this->showHi();
        $this->showHello();
        $this->showHey();
    }
}

$ob1 = new Test03();
$ob1->numA = 111;

$ob1->showHi();