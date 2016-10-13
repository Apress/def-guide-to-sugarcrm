<?php

public function preProcess() 
{ 
    global $current_user; 
 
    if ( !is_admin($current_user) ) { 
        echo 'This module is for admin use only!'; 
        sugar_die(); 
    } 
} 
