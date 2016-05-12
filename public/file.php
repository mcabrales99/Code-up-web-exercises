<?php  

class File      
{
   
    public $handle;
    

    public function __construct($filename)  
    {
        $this->handle = fopen($this->filename, 'a');
    }

    public function append($text)   
    {
        fwrite($this->handle, $text);
    }

    public function close() 
    {
        fclose($this->handle);
    }

}