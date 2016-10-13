<?php

require_once('modules/Releases/Release.php'); 


class BugHooks 
{ 
    public function autoSetFixedInRelease( 
        SugarBean $bean,  
        $event,  
        $arguments 
        ) 
    { 
        if ( empty($bean->fixed_in_release) ) 
            $bean->fixed_in_release = $bean->found_in_release; 
    } 
     
    public function adjustInvalidFoundInRelease( 
        SugarBean $bean,  
        $event,  
        $arguments 
        ) 
    { 
        if ( !empty($bean->fetched_row) && !empty($bean->fetched_row['found_in_release']) 
                && ( $bean->fetched_row['found_in_release'] != $bean->found_in_release ) ) { 
            $releaseBean = new Release; 
            $releaseBean->retrieve($bean->found_in_release); 
            if ( !empty($releaseBean->id) && $releaseBean->status == 'Inactive' ) 
                $bean->found_in_release = ''; 
        } 
    } 
} 
