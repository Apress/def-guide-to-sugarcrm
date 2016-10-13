<?php

require_once('modules/ep_Jobs/ep_Jobs.php'); 
require_once('modules/Accounts/Account.php'); 


class ep_JobsHooks  
{ 
    public function assignToInvoicing( 
        SugarBean $bean,  
        $event,  
        $arguments 
        ) 
    { 
        global $current_user; 

    

        if ( !$bean->fetched_row['ready_to_invoice'] && $bean-> ready_to_invoice ) 
            $bean->assigned_user_id = $current_user->retrieve_user_id('invoicing'); 
    } 
} 
