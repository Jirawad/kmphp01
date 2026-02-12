<?php
//final ใช้กับ class หรือ method
 
final class Person{  //ไม่สามารถสืบทอดได้
    //data, method member
}
 
class Animal{
     //data, method member
     public function run(){ echo "วิงเร็วโครต"; }
 
     //final method ไม่สามารถ Overiding ได้
     final public function eat(){ echo "กินอาหารทั่วๆ ไป"; }
}
 
//------------------------------
class Dog extends Animal{  
    //Overiding method
    public function run(){ echo "วิงช้าจัง"; }
 
    // public function eat(){ echo "กินอาหารหวานได้อย่างเดียว"; } Error
}
 
// class Student extends Person{  } Error