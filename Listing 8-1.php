<?php

require_once('include/MVC/View/SugarView.php'); 


class CustomAccountsViewQuickinfo extends SugarView 
{ 
    public function __construct() 
    {
        parent::SugarView(); 
    } 


    public function preDisplay() 
    { 
        if ( empty($_REQUEST['record']) ) 
            sugar_die($GLOBALS['app_strings']['ERROR_NO_RECORD']); 
         
        if ( !$this->bean->ACLAccess('view') ) { 
            ACLController::displayNoAccess(true); 
            sugar_cleanup(true); 
        } 
    } 
     
    public function display() 
    { 
        echo <<<EOHTML 
<h2>{$this->bean->name}</h2> 
<p>{$this->bean->description}</p> 
EOHTML; 
    } 
} 
