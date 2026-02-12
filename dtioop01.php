<?php
//PHP OOP (Class and Object)
 
//สร้างคลาส (Class)
class Test01{
    //data-attribute-property-filed member เกี่ยวกับค่าข้อมูล
    public $dataA;
    public $dataB = "Hello...<br>";
 
    //method-function member เกี่ยวกับกับทำงาน
    public function showWow(){
        echo "Wow...<br>";
    }
 
    public function showWoo(){
        echo "Woo...<br>";
    }
}
 
//สร้างออบเจ็กต์ (Object) จากคลาส (Class)
$ob1 = new Test01();
$ob2 = new Test01();
 
//การใช้งาน Data ของ Object
$ob1->dataA = "Hi...<br>";
echo $ob2->dataB;
 
//การใช้งาน Method ของ Object
$ob1->showWow();
$ob2->showWow();