<?php 

$dictionary["ep_Customers"]["fields"]["ep_customers_ep_jobs"] = array ( 
  'name' => 'ep_customers_ep_jobs', 
  'type' => 'link', 
  'relationship' => 'ep_customers_ep_jobs', 
  'source' => 'non-db', 
); 


$dictionary["ep_Customers"]["relationships"]['ep_customers_ep_jobs'] = array ( 
    'lhs_module'=> 'ep_Customers',  
    'lhs_table'=> 'ep_customers',  
    'lhs_key' => 'id', 
    'rhs_module'=> 'ep_Jobs',  
    'rhs_table'=> 'ep_jobs',  
    'rhs_key' => 'parent_id', 
    'relationship_type'=>'one-to-many',  
    'relationship_role_column'=>'parent_type', 
    'relationship_role_column_value'=>'ep_Customers', 
); 
