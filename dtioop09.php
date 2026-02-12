<?php
// static data, method
class Test01{
    public const U_THAILAND = "SAU";

    public static $data = "100";
    public $info = "999";

    public static function showWow(){
        // $this->info = "5555; error
        self::$data = "333";
        echo "Wow!";   
    }

    public function showHi(){
        $this->info = "555";
        self::$data = "333";
        self::showWow();
        echo "Hi!";
    }
}

Test01::$data = "200";
echo Test01::$data . "<br>";

Test01::showWow();