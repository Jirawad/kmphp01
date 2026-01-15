<?php
    //arryay
    //indexed array
    $dataA = [10, 20, 30, 40, 50];
    $dataB = array(60, 70, 80, 90, 100);
    $dataC = array("saurabh", "emm", "john", "doe");

    echo $dataA[0] . '&nbsp;'; //10
    echo $dataB[1] . '&nbsp;&nbsp;'; //22
    echo $dataC[2] . '&nbsp;;&nbsp;&nbsp;'; //john

    //associtive array
    $faculty = ["as" => "saurabh", "kumar" => "yadav"];
    $subject = array("php" => "web programming", "js" => "frontend programming");   
    echo $faculty["as"] . '&nbsp;&nbsp'; //saurabh
    echo $faculty["kumar"] . '&nbsp;&nbsp'; //yadav

    echo $subject["php"] . '&nbsp;&nbsp'; //web programming
    echo $subject["js"] . '&nbsp;&nbsp'; //frontend programming

?>