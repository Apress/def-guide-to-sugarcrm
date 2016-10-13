<?php 

require_once('modules/ep_Jobs/ep_Jobs.php'); 
require_once('modules/Accounts/Account.php'); 


class ep_JobsHooks  
{ 
    public function updateProductInventory( 
        SugarBean $bean,  
        $event,  
        $arguments 
        ) 
    { 
        if ( $bean->fetched_row['status'] != 'Dispatched' && $bean->status == 'Dispatched' ) { 
            $bean->load_relationship('ep_jobs_ep_supplies'); // load the relationship between Jobs and Supplies

            foreach ( $bean->build_related_list($bean->ep_jobs_ep_supplies->getQuery(), new LeadContact) as $ep_part) {

                $ep_part->on_hand = $ep_part->on_hand - 1; 
                $ep_part->save();               
            } 
        }

    } 
} 
