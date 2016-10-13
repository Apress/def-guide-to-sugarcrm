<?php 
 
$viewdefs['Accounts']['DetailView']['panels'] = array( 
    'default' => array( 
        array( 
            'name', 
            'phone_office' 
        ), 
        array( 
            'parent_name', 
            'account_type' 
        ), 
    ), 
    'lbl_account_information' =>  array( 
        array( 
            'ownership', 
            'rating' 
        ), 
        array( 
            'industry', 
            'sic_code' 
        ), 
        array( 
            'employees', 
            'annual_revenue' 
        ), 
    ), 
); 
