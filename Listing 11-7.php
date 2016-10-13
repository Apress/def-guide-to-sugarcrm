relatedParts.php 
<?php 


$module_name='ep_Supplies'; 
$subpanel_layout = array( 
'top_buttons' => array( 
array('widget_class' => 'SubPanelTopCreateButton'), 
array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name), 
), 


'where' => 'item_type = "Part"', 


'list_fields' => array( 
'name'=>array( 
'vname' => 'LBL_NAME', 
'widget_class' => 'SubPanelDetailViewLink', 
'width' => '45%', 
), 
'date_modified'=>array( 
'vname' => 'LBL_DATE_MODIFIED', 
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


relatedProducts.php 
<?php 


$module_name='ep_Supplies'; 
$subpanel_layout = array( 
'top_buttons' => array( 
array('widget_class' => 'SubPanelTopCreateButton'), 
array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name), 
), 


'where' => 'item_type = "Product"', 


'list_fields' => array( 
'name'=>array( 
'vname' => 'LBL_NAME', 
'widget_class' => 'SubPanelDetailViewLink', 
'width' => '45%', 
), 
'date_modified'=>array( 
'vname' => 'LBL_DATE_MODIFIED', 
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


relatedSupplies.php 
<?php 


$module_name='ep_Supplies'; 
$subpanel_layout = array( 
'top_buttons' => array( 
array('widget_class' => 'SubPanelTopCreateButton'), 
array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name), 
), 


'where' => 'item_type = "Supply"', 


'list_fields' => array( 
'name'=>array( 
'vname' => 'LBL_NAME', 
'widget_class' => 'SubPanelDetailViewLink', 
'width' => '45%', 
), 
'date_modified'=>array( 
'vname' => 'LBL_DATE_MODIFIED', 
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
