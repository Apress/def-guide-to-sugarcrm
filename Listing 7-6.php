<?php

class AccountHooks 
{ 
    public function reassignNewRecordTeamBasedOnIndustry( 
        SugarBean $bean,  
        $event,  
        $arguments 
        ) 
    { 
        // Don't execute if the we aren't creating a new record 
        if ( !empty($bean->fetched_row) && !empty($bean->fetched_row['id']) )

            return; 
     
        $teamBean = new Team; 
        // Set the team based upon the given industry. 
        switch ( $bean->industry ) {

        case "Banking": 

            $teamBean->retrieve_by_string_fields (array('name' =>"Banking"),false); 
            $bean->team_id = $teamBean->id;

            break;

        case "Energy":  
            $teamBean-> retrieve_by_string_fields (array('name' =>"Energy"),false); 
            $bean->team_id = $teamBean->id;

            break; 
        }

    } 
} 
