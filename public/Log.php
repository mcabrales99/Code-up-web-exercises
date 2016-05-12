<?php  

class Log

{
    public $filename;
    public $handle;
    public $prefix;

     public function __construct($prefix = "log")

    {   
        $currentDateTime = date('Y-m-d');
        $this->prefix = $prefix;
        $this->filename = $this->prefix . "-$currentDateTime.log";
        $this->handle = fopen($this->filename, 'a');

    }

    public function logMessage($logLevel,$message)    

    {
        $currentDateTime = date('Y-m-d');
       
        $currentTime = date('h:i:s');

        $messageString = $currentDateTime . $currentTime . $logLevel . $message . PHP_EOL;

        fwrite($this->handle, $messageString); 
    }

    public function logInfo($message)
    {
        $this->logMessage(" INFO", $message);
    }

    //logInfo(" This is an info message");

    public function logError($message) 
    {
        $this->logMessage(" ERROR", $message);
    }

    //logError(" This is an Error message");

    public function __destruct()
    {
        fclose($this->handle);
    }

   

}