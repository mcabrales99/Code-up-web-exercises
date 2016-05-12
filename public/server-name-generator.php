<?php


require_once '../name-generator2.php';


    
function pageController()   {


    // return ['message' => "Your server name is " . Generate::random1(). "-" . Generate::random2() . "\n"];
    return ['serverName' => Generate::getServerName()];

}
extract(pageController());

echo $serverName . PHP_EOL;

    


