<?php 

$dictionary["Accounts"]["fields"]["accounts_ep_jobs"] = array ( 
  'name' => 'accounts_ep_jobs', 
  'type' => 'link', 
  'relationship' => 'accounts_ep_jobs', 
  'source' => 'non-db', 
); 


$dictionary["Accounts"]["relationships"]['accounts_ep_jobs'] = array ( 
    'lhs_module'=> 'Accounts',  
    'lhs_table'=> 'accounts',  
    'lhs_key' => 'id', 
    'rhs_module'=> 'ep_Jobs',  
    'rhs_table'=> 'ep_jobs',  
    'rhs_key' => 'parent_id', 
    'relationship_type'=>'one-to-many',  
    'relationship_role_column'=>'parent_type', 
    'relationship_role_column_value'=>'Accounts', 
); 
