<?php 
 
  
$dictionary['Applicants']['relationships']['applicants_modified_user' ] = array ( 
      'lhs_module' => 'Users', 
      'lhs_table' => 'users', 
      'lhs_key' => 'id', 
      'rhs_module' => 'Applicants', 
      'rhs_table' => 'applicants', 
      'rhs_key' => 'modified_user_id', 
      'relationship_type' => 'one-to-many', 
    ); 
  
  
$dictionary['Applicants']['relationships']['applicants_notes'] = array ( 
      'lhs_module' => 'Applicants', 
      'lhs_table' => 'applicants', 
      'lhs_key' => 'id', 
      'rhs_module' => 'Notes', 
      'rhs_table' => 'notes', 
      'rhs_key' => 'parent_id', 
      'relationship_type' => 'one-to-many', 
      'relationship_role_column' => 'parent_type', 
      'relationship_role_column_value' => 'Applicants', 
    ); 
