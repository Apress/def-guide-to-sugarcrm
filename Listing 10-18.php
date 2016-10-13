<?php 

require_once('include/MVC/View/SugarView.php'); 
         
class PartsViewImage extends SugarView  
{ 
    /** 
     * Constructor 
     */ 
    public function __construct() 
    { 
        parent::SugarView(); 
    } 


    /**  
     * display the form 
     */ 
    public function display() 
    { 
        if ( !isset($_REQUEST['record']) ) 
            return; 


        $partBean = new Part(); 
        $partBean->retrieve($_REQUEST['record']); 
         
        echo '<img src="' . $partBean->fetchImageURL() . '" />'; 
    } 
} 
