<?php

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/ApplicantsDashlet/ApplicantsDashlet.php');

class ApplicantsDashlet extends DashletGeneric

{
    public function __construct( 
            $id,

            $def = null 
            )

    {
        global $current_user, $app_strings;
        require('modules/ApplicantsDashlet/metadata/dashletviewdefs.php');

        parent::DashletGeneric($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'test_basic');

        $this->searchFields = $dashletData['ApplicantsDashlet']['searchFields'];
        $this->columns = $dashletData['ApplicantsDashlet']['columns'];

        $this->seedBean = new ApplicantsDashlet();        
    }
} 
