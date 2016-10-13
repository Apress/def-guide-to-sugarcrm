<?php  

class CustomBugsController extends SugarController 
{     
    public function post_save()     
    {         
        if ( ($bugFocus->status != $this->bean->status)                 
                && ($this->bean->status != 'Pending') ) {             
            // do something now that the bug is pending         
        }          
        
        parent::post_save(); // call the parent class BugsController     
    } 
}
