<?php 


$dictionary['Part'] = array( 
    'table' => 'parts', 
    'audited' => true, 
    'fields' => array( 
        'part_reference_number'=> 
          array ( 
            'name' => 'part_reference_number', 
            'vname' => 'LBL_PART_REFERENCE_NUMBER', 
            'type' => 'varchar', 
            'len' => '255', 
      ), 
      'part_location'=> 
          array ( 
            'name' => 'part_location', 
            'vname' => 'LBL_PART_REFERENCE_NUMBER', 
            'type' => 'enum', 
            'len' => '50', 
            'options' => 'parts_part_location_dom', 
      ), 
    ), 
    'indices' => array(
        array('name' => 'idx_parts_part_ref_id', 'type' => 'index', 'fields' => array('id', 'part_reference_number')), 
        array('name' => 'idx_parts_part_location_id', 'type' => 'index', 'fields' => array('id', 'part_location')), 
    ), 
    'relationships' => array ( 
    ), 
    'optimistic_lock' => true, 
); 


require_once('include/SugarObjects/VardefManager.php'); 
VardefManager::createVardef('Parts', 'Part', array('basic', 'assignable')); 
