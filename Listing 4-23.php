<?php

require_once('service/core/SugarWebServiceImpl.php');
 
class SugarWebServiceImpl_v2_1 extends SugarWebServiceImpl  
{
    public function get_entry($session, $module_name, $id) 
    {
        return $id;
    }     
}
