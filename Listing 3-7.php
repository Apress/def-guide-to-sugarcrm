<?php

$subpanel_layout = array( 
'top_buttons' => array( 
array('widget_class' => 'SubPanelTopCreateButton'), 
array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'Contacts'), 
), 
 
'where' => '', 
 
'list_fields' => array( 
'first_name'=>array( 
'name'=>'first_name', 
'usage' => 'query_only', 
), 
'last_name'=>array( 
'name'=>'last_name', 
'usage' => 'query_only', 
), 
'name'=>array( 
'name'=>'name', 
'vname' => 'LBL_LIST_NAME', 
            'sort_by' => 'last_name', 
            'sort_order' => 'asc', 
'widget_class' => 'SubPanelDetailViewLink', 
'module' => 'Contacts', 
'width' => '23%', 
), 
'account_name'=>array( 
'name'=>'account_name', 
'module' => 'Accounts', 
'target_record_key' => 'account_id', 
'target_module' => 'Accounts', 
'widget_class' => 'SubPanelDetailViewLink', 
'vname' => 'LBL_LIST_ACCOUNT_NAME', 
'width' => '22%', 
'sortable'=>false, 
), 
'account_id'=>array( 
'usage'=>'query_only', 
), 
'email1'=>array( 
'name'=>'email1', 
'vname' => 'LBL_LIST_EMAIL', 
'widget_class' => 'SubPanelEmailLink', 
'width' => '30%', 
'sortable'=>false, 
), 
'phone_work'=>array ( 
'name'=>'phone_work', 
'vname' => 'LBL_LIST_PHONE', 
'width' => '15%', 
), 
'edit_button'=>array( 
'vname' => 'LBL_EDIT_BUTTON', 
'widget_class' => 'SubPanelEditButton', 
'module' => 'Contacts', 
'width' => '5%', 
), 
'remove_button'=>array( 
'vname' => 'LBL_REMOVE', 
'widget_class' => 'SubPanelRemoveButton', 
'module' => 'Contacts', 
'width' => '5%', 
), 
), 
); 
