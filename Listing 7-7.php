<?php

class CaseHooks  
{ 
    public function alertSystemAdminOfCaseNumbers( 
        SugarBean $bean,  
        $event,  
        $arguments 
        ) 
    { 
        // Don't execute if the we aren't creating a new record 
        if ( !empty($bean->fetched_row) && !empty($bean->fetched_row['id']) )

            return; 



        if ( $bean->case_number % 1000 == 0 ) { 
            $GLOBALS['log']->info("Reached case number " . $bean->case_number . "!"); 
        } 
    }

} 
