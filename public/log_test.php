<?php  

require_once 'file.php';


require_once 'Log.php';


$log = new Log();



$log->logInfo(" This is an info message");
$log->logError(" This is an Error message");

$file = new File('file.text');
$file-> append("hello Joshua");
$file-> close();
