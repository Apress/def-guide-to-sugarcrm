<?php 


require_once("modules/ep_VendorOrders/ep_VendorOrders.php"); 


class ep_SuppliesController extends SugarController 
{ 
    public function __construct() 
    { 
        parent::SugarController(); 
    } 
     
    public function action_reorder() 
    { 
        global $current_user; 
         
        if ( empty($this->bean->id) ) 
            sugar_die("A record number must be specified to reorder"); 
         
        $bean = new ep_VendorOrders; 
         
        $bean->name   = $this->bean->name; 
        $bean->status = 'Requested'; 
        $bean->assigned_user_id = $current_user->retrieve_user_id('reorder'); 
        $bean->save(true); 


        $this->bean->load_relationship('ep_supplies_ep_vendororders'); 
        $this->bean->add($bean->id); 
         
        $this->bean->status = 'On Reorder'; 
        $this->bean->save(); 
         
        SugarApplication::redirect('index.php?module=ep_Supplies&action=DetailView&record=' . $this->bean->id . ''); 
    } 
} 
