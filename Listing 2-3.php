<?php

class MeetingsController extends SugarController 
{     
    public function action_editview()     
    {         
        if ( isset($_REQUEST['close'] )             
            $this->bean->status = 'Held';      
    } 
}
