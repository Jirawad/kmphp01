<?php
// constructor ทำงานทุกครั้งที่สร้าง Object
// destructor ทำงานทุกครั้งที่ Object ถูกทำลาย
class Test02{
    public $infoA;
 
    public function showInfoA(){
        echo "Info A มีค่าเป็น: " . $this->infoA . "<br>";
    }
 
    //สร้าง constructor
    public function __construct($infoA){
        $this->infoA = $infoA;
        echo "Welcome to SAU<br>";
    }
 
    //สร้าง destructor
    public function __destruct(){
        echo "Thank you....";
    }
}
 
$ob1 = new Test02(100);
$ob2 = new Test02(200);
 
$ob1->showInfoA();
$ob2->showInfoA();