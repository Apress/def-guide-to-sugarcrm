<?php 
$layout_defs["ep_Supplies"]["subpanel_setup"]["ep_supplies_ep_supplies_1"] = array ( 
  'order' => 110, 
  'module' => 'ep_Supplies', 
  'subpanel_name' => 'relatedProducts', 
  'sort_order' => 'asc', 
  'sort_by' => 'id', 
  'title_key' => 'LBL_RELATED_PRODUCTS', 
  'get_subpanel_data' => 'ep_supplies_ep_supplies', 
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


$layout_defs["ep_Supplies"]["subpanel_setup"]["ep_supplies_ep_supplies_2"] = array ( 
  'order' => 120, 
  'module' => 'ep_Supplies', 
  'subpanel_name' => 'relatedParts', 
  'sort_order' => 'asc', 
  'sort_by' => 'id', 
  'title_key' => 'LBL_RELATED_PARTS', 
  'get_subpanel_data' => 'ep_supplies_ep_supplies', 
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


$layout_defs["ep_Supplies"]["subpanel_setup"]["ep_supplies_ep_supplies_3"] = array ( 
  'order' => 130, 
  'module' => 'ep_Supplies', 
  'subpanel_name' => 'relatedSupplies', 
  'sort_order' => 'asc', 
  'sort_by' => 'id', 
  'title_key' => 'LBL_RELATED_SUPPLIES', 
  'get_subpanel_data' => 'ep_supplies_ep_supplies', 
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


unset(layout_defs["ep_Supplies"]["subpanel_setup"]["ep_supplies_ep_supplies"]); 
