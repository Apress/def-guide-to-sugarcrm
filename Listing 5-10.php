<?php

$dictionary['Applicants']['fields']['applied_position'] => array (
    'name' => 'applied_position',
    'vname' => 'LBL_APPLIED_POSITION',
    'type' => 'varchar',
    'source' => 'non-db',
    'len' => '32',
    'importable' => 'required',
); 
$dictionary['Applicants']['fields']['applied_department'] => array (
    'name' => 'applied_department',
    'vname' => 'LBL_APPLIED_DEPARTMENT',
    'type' => 'varchar',
    'source' => 'non-db',
    'len' => '32',
    'group'=>'portal',
    'reportable' => false,
    'importable' => 'false',
); 
