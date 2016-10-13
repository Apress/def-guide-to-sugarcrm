<?php

require_once('include/SugarFields/Fields/File/SugarFieldFile.php'); 


class SugarFieldFilereadonly extends SugarFieldFile  
{ 
    public function save(&$bean, $params, $field, $properties) 
    {

        if ( !empty($bean->id) && isset($_REQUEST[$field]) )

            unset($_REQUEST[$field]); 
         
        return parent::save(bean, $params, $field, $properties); 
    }

} 
