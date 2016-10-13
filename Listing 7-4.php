<?php

class LoginHooks  
{ 
    public function alertSystemAdminOfBadAdminLogin( 
        $event,  
        $arguments 
        ) 
    { 
        if ( $_REQUEST['user_name'] == 'admin' ) { 
            mail("admin@localhost","BAD ADMIN LOGIN","Someone tried to login to the admin account and failed. Better check it out!"); 
        } 
    }

} 
