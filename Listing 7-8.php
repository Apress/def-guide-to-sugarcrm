<?php

class CaseHooks  
{ 
    public function alertSystemAdminOfCaseNumbers( 
        SugarBean $bean,  
        $event,  
        $arguments 
        ) 
    { 
        // Don't execute if the we  aren't creating a new record 
        if ( !empty($this->fetched_row) && !empty($bean->fetched_row['id']) )
            return; 

        $casesBean = new Case;
        $casesBean->retrieve($bean->id);
        if ( !empty($casesBean->id) && $casesBean->case_number % 1000 == 0 ) { 
            $GLOBALS['log']->info("Reached case number " . $casesBean->case_number . "!"); 
        }

    } 
} 
