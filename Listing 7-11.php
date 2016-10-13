<?php

class AllHooks  
{ 
    public function setGUID( 
        SugarBean $bean,  
        $event,  
        $arguments 
        ) 
    { 
        // Only execute if the we are creating a new record 
        if ( empty($bean->id) )

            $bean->id = myRecordIDGenerator(); 
    } 
} 
