<?php

$layout_defs['Contacts']['subpanel_setup']['quotes'] => array( 
    'order' => 50, 
    'module' => 'Quotes', 
    'sort_order' => 'desc', 
    'sort_by' => 'date_quote_expected_closed', 
    'subpanel_name' => 'default', 
    'get_subpanel_data' => 'quotes', 
    'add_subpanel_data' => 'quote_id', 
    'title_key' => 'LBL_QUOTES_SUBPANEL_TITLE', 
    'get_distinct_data' =>  true, 
    'top_buttons' => array(array('widget_class' => 'SubPanelTopCreateButton')) 
); 
