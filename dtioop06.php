<?php
//abstract class ไม่สามารถสร้าง object ได้
abstract class Sau01{
    //มี member ได้เหมือนกับ class ปกติ class ทั่วไป
    public function metA(){ echo "AAA<br>"; }


    // มี abstract method ได้
    abstract public function metB();
    abstract public function metC():string;
}


//interface class ไม่สามารถสร้าง object ได้
interface Sau02{
    // public function modA () { echo "modA...<br>"; }

    // มี abstract method ได้เท่านั้น
    public function modB();    
    public function modC():int;
}

//------------------
// $ob1 = new Sau01(); error
// $ob2 = new Sau02(); error