<?php
    //function
    function sshowhello(): void {
        echo "<h1 style='color: blue;'>Hello World!</h1>" . "<br>";
    }

    sshowhello();
    sshowhello();

    function showfullname($fname, $lname) : void {
        echo "Fullname:" . $fname . " " . $lname . "<br>";

    }

    showfullname("John", "Doe");
    showfullname("Emm", "Smith");

    function returnpara(): int{
        echo "This is a return paragraph function." . "<br>";
        return 123456;
    }
    
    echo '<hr>';

    echo returnpara();
    $data = returnpara();
    echo "<br>" . $data . "SAU";

    //have parameter has return
    function subnum ($num1, $num2) : mixed {
        $sub = $num1 + $num2;
        return $sub;
    }

    echo " <br/><br/>100+200 =" . subnum (100, 200);

    //arrow function
    $woo = fn(): string => "<br/>woo woo woo!";

    echo $woo();

    $hi1 = fn($nickname0) => "hello " . $nickname0 . "<br/>";
    
    echo $hi1(nickname0: "Sam");
?>