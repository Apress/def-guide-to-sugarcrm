<?php

require_once('modules/Leads/Lead.php'); 
require_once('modules/Accounts/Account.php'); 


class AccountHooks  
{ 
    public function checkForLead( 
        SugarBean $bean,  
        $event,  
        $arguments 
        ) 
    { 
        $leadFocus = new Lead; 
        $leadFocus->retrieve_by_string_fields( 
            array( 
                'name' => $bean->name, 
                'primary_address_street' => $bean->billing_address_street, 
                'primary_address_city' => $bean->billing_address_city, 
                'primary_address_state' => $bean->billing_address_state, 
                'primary_address_postalcode' => $bean->billing_address_postalcode, 
                'primary_address_country' => $bean->billing_address_country, 
                'account_id' => '',

                ),  
            false); 
        if ( !empty($leadFocus->id) ) { 
            $bean->load_relationship('leads'); 
            $bean->leads->add($leadFocus->id); 
        } 
    } 
     
    public function getParentAccountIndustry( 
        SugarBean $bean,  
        $event,  
        $arguments 
        ) 
    { 
        if ( empty($bean->industry) && !empty($bean->parent_id) ) { 
            $parentAccountFocus = new Account(); 
            $parentAccountFocus->retrieve($bean->parent_id); 
            if ( !empty($parentAccountFocus->id) ) 
                $bean->industry = $parentAccountFocus->industry; 
        } 
    } 
} 
