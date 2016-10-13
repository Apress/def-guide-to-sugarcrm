currentOrders.php 
<?php 


$module_name='ep_VendorOrders'; 
$subpanel_layout = array( 
'top_buttons' => array( 
array('widget_class' => 'SubPanelTopCreateButton'), 
array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name), 
), 


'where' => 'order_status != "Completed"', 


'list_fields' => array( 
'name'=>array( 
'vname' => 'LBL_NAME', 
'widget_class' => 'SubPanelDetailViewLink', 
'width' => '45%', 
), 
'date_entered'=>array( 
'vname' => 'LBL_DATE_ENTERED', 
'width' => '45%', 
), 
'edit_button'=>array( 
'widget_class' => 'SubPanelEditButton', 
'module' => $module_name, 
'width' => '4%', 
), 
'remove_button'=>array( 
'widget_class' => 'SubPanelRemoveButton', 
'module' => $module_name, 
'width' => '5%', 
), 
), 
); 


?> 


previousOrders.php 
<?php 


$module_name='ep_VendorOrders'; 
$subpanel_layout = array( 
'top_buttons' => array( 
array('widget_class' => 'SubPanelTopCreateButton'), 
array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name), 
), 


'where' => 'order_status = "Completed"', 


'list_fields' => array( 
'name'=>array( 
'vname' => 'LBL_NAME', 
'widget_class' => 'SubPanelDetailViewLink', 
'width' => '45%', 
), 
'date_entered'=>array( 
'vname' => 'LBL_DATE_ENTERED', 
'width' => '45%', 
), 
'edit_button'=>array( 
'widget_class' => 'SubPanelEditButton', 
'module' => $module_name, 
'width' => '4%', 
), 
'remove_button'=>array( 
'widget_class' => 'SubPanelRemoveButton', 
'module' => $module_name, 
'width' => '5%', 
), 
), 
); 


?> 


SubPanelDefintions 
<?php 
$layout_defs["ep_Vendors"]["subpanel_setup"]["ep_vendors_ep_vendororders_1"] = array ( 
  'order' => 110, 
  'module' => 'ep_Vendors', 
  'subpanel_name' => 'currentOrders', 
  'sort_order' => 'asc', 
  'sort_by' => 'id', 
  'title_key' => 'LBL_CURRENT_ORDERS', 
  'get_subpanel_data' => 'ep_vendors_ep_vendororders', 
  'top_buttons' =>  
  array ( 
    0 =>  
    array ( 
      'widget_class' => 'SubPanelTopCreateButton', 
    ), 
    1 =>  
    array ( 
      'widget_class' => 'SubPanelTopSelectButton', 
      'mode' => 'MultiSelect', 
    ), 
  ), 
); 


$layout_defs["ep_Vendors"]["subpanel_setup"]["ep_vendors_ep_vendororders_2"] = array ( 
  'order' => 120, 
  'module' => 'ep_Vendors', 
  'subpanel_name' => 'previousOrders', 
  'sort_order' => 'asc', 
  'sort_by' => 'id', 
  'title_key' => 'LBL_PREVIOUS_ORDERS', 
  'get_subpanel_data' => 'ep_vendors_ep_vendororders', 
  'top_buttons' =>  
  array ( 
    0 =>  
    array ( 
      'widget_class' => 'SubPanelTopCreateButton', 
    ), 
    1 =>  
    array ( 
      'widget_class' => 'SubPanelTopSelectButton', 
      'mode' => 'MultiSelect', 
    ), 
  ), 
); 

?>
