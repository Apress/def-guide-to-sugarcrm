<?php  

class ViewHelloworld extends SugarView 
{     
    var $message = 'Hello World!';      
    
    public function __construct()     
    {         
        parent::SugarView();     
    }      

    public function preDisplay()     
    {         
        if ( isset($_REQUEST['message']) )             
            $this->message = $_REQUEST['message'];     
    }      

    public function display()     
    {         
        echo "<p>{$this->message}</p>";     
    } 
}
