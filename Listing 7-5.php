<?php

class AccountHooks 
{ 
    public function reassignNewRecordTeamBasedOnIndustry( 
        SugarBean $bean,  
        $event,  
        $arguments 
        ) 
    { 
        $teamBean = new Team;

        // Set the team based upon the given industry. 
        switch ( $bean->industry ) {

        case "Banking": 

            $teamBean->retrieve("Banking"); 
            $bean->team_id = $teamBean->id;

            break;

        case "Energy":  
            $teamBean->retrieve("Banking"); 
            $bean->team_id = $teamBean->id;

            break; 
        }

    } 
} 
