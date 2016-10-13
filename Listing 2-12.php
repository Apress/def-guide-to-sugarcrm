<?php 
 
$dictionary['Applicants']['fields']['first_name'] = array( 
    'name' => 'first_name', 
    'vname' => 'LBL_FIRST_NAME', 
    'type' => 'varchar', 
    'len' => '100', 
    'comment' => 'First name of the applicant', 
    ); 
$dictionary['Applicants']['fields']['last_name'] = array ( 
     'name' => 'last_name', 
     'vname' => 'LBL_LAST_NAME', 
     'type' => 'varchar', 
     'len' => '100', 
     'comment' => 'Last lname of the applicant', 
     ); 
$dictionary['Applicants']['fields']['name'] = array ( 
     'name' => 'name', 
     'rname' => 'name', 
     'vname' => 'LBL_NAME', 
     'type' => 'name', 
     'fields' => array('first_name', 'last_name'), 
     'sort_on' => 'last_name', 
     'source' => 'non-db', 
     'group'=>'last_name', 
     'len' => '255', 
     'db_concat_fields'=> array(0=>'first_name', 1=>'last_name'), 
     'importable' => 'false', 
     ); 
  
$dictionary['Applicants']['fields']['referral_source'] = array ( 
     'name' => 'referral_source', 
     'vname' => 'LBL_REFERRAL_SOURCE', 
     'type' => 'enum', 
     'options' => 'referral_source_dom', 
     'len' => '100', 
     'audited' => true, 
     'comment' => 'Referral source of the application ( Recruiter, Existing Employee, etc )', 
     'merge_filter' => 'enabled', 
     ); 
  
$dictionary['Applicants']['fields']['position_id'] = array( 
    'name' => 'position_id', 
    'vname' => 'LBL_POSITION_ID', 
    'type' => 'id', 
    'isnull' => 'true', 
    'reportable' => false, 
    'massupdate' => false, 
    'duplicate_merge'=> 'disabled', 
    'comment' => 'ID field of the position in the Positions module' 
  ); 
  
  
$dictionary['Applicants']['fields']['position_name'] = array( 
 'name' => 'position_name', 
 'rname' => 'name', 
 'id_name' => 'position_id', 
 'vname' => 'LBL_ACCOUNT_NAME', 
 'type' => 'relate', 
 'table' => 'positions', 
 'isnull' => 'true', 
 'module' => 'Positions', 
 'dbType' => 'varchar', 
 'len' => '255', 
 'source' => 'non-db', 
 'unified_search' => false, 
 'comment' => 'Name field of the position in the Positions module' 
 ); 
