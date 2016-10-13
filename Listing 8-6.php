<?php

$searchdefs['Contacts'] = array( 
    'templateMeta' => array( 
        'maxColumns' => '2',  
        'widths' => array('label' => '15', 'field' => '35'),  
        ), 
    'layout' => array( 
        'basic_search' => array( 
            'first_name',  
            'last_name',  
            'account_name', 
            array('name'=>'current_user_only', 'label'=>'LBL_CURRENT_USER_FILTER', 'type'=>'bool'), 
            ), 
        'advanced_search' => array( 
            'first_name',  
            array('name' => 'address_street', 'label' =>'LBL_ANY_ADDRESS', 'type' => 'name'), 
            array('name' => 'phone', 'label' =>'LBL_ANY_PHONE', 'type' => 'name'), 
            'last_name',  
            array('name' => 'address_city', 'label' =>'LBL_CITY', 'type' => 'name'), 
            array('name' => 'email', 'label' =>'LBL_ANY_EMAIL', 'type' => 'name'), 
            'account_name', 
            array('name' => 'address_state', 'label' =>'LBL_STATE', 'type' => 'name'), 
            'do_not_call', 
            'assistant', 
            array('name' => 'address_postalcode', 'label' =>'LBL_POSTAL_CODE', 'type' => 'name'), 
            array('name' => 'primary_address_country', 'label' =>'LBL_COUNTRY', 'type' => 'name', 'options' => 'countries_dom', ),  
            'lead_source', 
            array('name' => 'assigned_user_id', 'type' => 'enum', 'label' => 'LBL_ASSIGNED_TO', 'function' => array('name' => 'get_user_array', 'params' => array(false))), 
            ), 
        ), 
    ); 
