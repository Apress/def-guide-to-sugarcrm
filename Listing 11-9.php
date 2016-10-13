<?php 


$layout_defs["ep_Items"]["subpanel_setup"]['clients'] => array( 
'order' => 100, 
'sort_order' => 'desc', 
'sort_by' => 'date_start', 
'title_key' => 'LBL_ACTIVITIES_SUBPANEL_TITLE', 
'type' => 'collection', 
'subpanel_name' => 'activities',   //this values is not associated with a physical file. 


'header_definition_from_subpanel'=> 'accounts', 


'module'=>'Activities', 
'collection_list' => array( 
'accounts' => array( 
'module' => 'Accounts', 
'subpanel_name' => 'ForJobs', 
'get_subpanel_data' => 'accounts', 
), 


                'customers' => array( 
                    'module' => 'ep_Customers', 
                    'subpanel_name' => 'ForJobs', 
                    'get_subpanel_data' => 'ep_customers', 
                ), 


) 
); 
