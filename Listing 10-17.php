<?php 

require_once('include/Dashlets/DashletGeneric.php'); 
require_once('modules/Parts/Part.php'); 


class PartsDashlet extends DashletGeneric  
{  
    public function PartsDashlet( 
        $id,  
        $def = null)  
    { 
        global $current_user, $app_strings; 
        require('modules/Parts/metadata/partsdashletviewdef.php'); 


        parent::DashletGeneric($id, $def); 


        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'test_parts'); 


        $this->searchFields = $dashletData['PartsDashlet']['searchFields']; 
        $this->columns = $dashletData['PartsDashlet']['columns']; 


        $this->seedBean = new Part();         
    } 
} 
