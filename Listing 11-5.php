<?php 

require_once('include/MVC/View/views/view.detail.php'); 
require_once('modules/Accounts/Account.php'); 
require_once('modules/ep_Jobs/ep_Jobs.php'); 


class ep_JobsViewDetail extends ViewDetail 
{ 
    public function __construct() 
    { 
        parent::ViewDetail(); 
    } 
  
    public function display()  
    { 
        $business_address = '123 Main Street Anytown, OH 44444'; 
        $customer_address = ''; 
         
        if ( !empty($this->ep_custome5229stomers_ida) ) { 
            $bean = new Account(); 
            $bean->retrieve($this->ep_custome5229stomers_ida); 
            if ( !empty($bean->id) ) 
                $customer_address = "{$bean->shipping_address_address} {$bean->shipping_address_city}, {$bean->shipping_address_state} {$bean->shipping_address_postalcode}"; 
        } 
        elseif ( !empty($this->ep_jobs_ac056eccounts_ida) ) { 
            $bean = new ep_Jobs(); 
            $bean->retrieve($this->ep_custome5229stomers_ida); 
            if ( !empty($bean->id) )  
                $customer_address = "{$bean->primary_address_address} {$bean->primary_address_city}, {$bean->primary_address_state} {$bean->primary_address_postalcode}"; 
        } 
         
        $this->ss->assign("MAP_URL","http://maps.google.com/maps?f=d&source=s_d&saddr={$business_address}&daddr={$customer_address}"); 
         
        parent::display(); 
    } 
} 
