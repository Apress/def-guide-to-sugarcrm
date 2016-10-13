<?php

$searchdefs['Accounts'] = array( 
    'templateMeta' => array( 
        'maxColumns' => '3',  
        'widths' => array( 
            'label' => '10',  
            'field' => '30' 
            ),                  
        ), 
    'layout' => array(   
        'basic_search' => array( 
            'name',  
            'billing_address_city',  
            'phone_office', 
             array('name' => 'address_street', 'label' =>'LBL_BILLING_ADDRESS', 'type' => 'name' , 'group'=>'billing_address_street'), 
             array('name'=>'current_user_only', 'label'=>'LBL_CURRENT_USER_FILTER', 'type'=>'bool'), 
             ), 
        'advanced_search' => array( 
            'name',  
             array('name' => 'address_street', 'label' =>'LBL_ANY_ADDRESS', 'type' => 'name'), 
             array('name' => 'phone', 'label' =>'LBL_ANY_PHONE', 'type' => 'name'), 
            'website', 
             array('name' => 'address_city', 'label' =>'LBL_CITY', 'type' => 'name'), 
             array('name' => 'email', 'label' =>'LBL_ANY_EMAIL', 'type' => 'name'), 
            'annual_revenue', 
             array('name' => 'address_state', 'label' =>'LBL_STATE', 'type' => 'name'), 
            'employees', 
             array('name' => 'address_postalcode', 'label' =>'LBL_POSTAL_CODE', 'type' => 'name'), 
             array('name' => 'billing_address_country', 'label' =>'LBL_COUNTRY', 'type' => 'name', 'options' => 'countries_dom', ),  
            'ticker_symbol', 
            'sic_code', 
            'rating', 
            'ownership', 
             array('name' => 'assigned_user_id', 'type' => 'enum', 'label' => 'LBL_ASSIGNED_TO', 'function' => array('name' => 'get_user_array', 'params' => array(false))), 
            'account_type', 
            'industry', 
            ), 
        ), 
    ); 
