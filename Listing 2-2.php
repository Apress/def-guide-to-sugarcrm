<?php

public function action_getthemail() 
{     
    if ( mailExists() )          
        $this->view = 'getthemail';     
    else         
        $this->view = 'hasnomail'; 
} 
