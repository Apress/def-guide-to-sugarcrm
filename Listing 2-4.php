<?php  

class BugsController extends SugarController 
{     
    protected $_prevStatus = '';          
    
    public function pre_save()     
    {         
        $bugFocus = new Bug;         
        $bugFocus->retrieve($_REQUEST['record']);         
        
        if ( isset($bugFocus->id) )             
            $this->_prevStatus = $bugFocus->status;          
    
        parent::pre_save();     
    }      
    
    public function post_save()     
    {         
        if ( ($bugFocus->status != $this->bean->status)               
                && ($this->bean->status != 'Closed') ) {             
            // do something now that the bug is closed          
        }          

        parent::post_save();     
    } 
}
