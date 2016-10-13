<?php

$viewdefs['Notes']['DetailView'] = array( 
    'templateMeta' => array('maxColumns' => '2',  
        'widths' => array( 
            array('label' => '10', 'field' => '30'),  
            array('label' => '10', 'field' => '30') 
            ), 
        ), 
    'panels' => array( 
        array ( 
            'contact_name', 
            array ( 
                'name' => 'parent_name', 
                'customLabel' => '{sugar_translate label=\'LBL_MODULE_NAME\' module=$fields.parent_type.value}', 
                ), 
            ), 
        array ( 
            array('name' => 'contact_phone', 'type'=>'phone', 'label' => 'LBL_PHONE'),  
            ), 
        array ( 
            array('name' => 'contact_email', 'label' => 'LBL_EMAIL_ADDRESS'),  
            ), 
        array ( 
            array('name' => 'name', 'label' => 'LBL_SUBJECT'), 
            ), 
        array( 
            array('name'=>'filename', 'type'=>'file', 'displayParams'=>array('id'=>'id', 'link'=>'filename')), 
            ), 
        array ( 
            array('name' => 'description', 'label' => 'LBL_NOTE_STATUS'), 
            ),   
),  
); 
