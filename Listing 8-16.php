<?php

$dictionary['Contract']['indices'][] = array( 
    'name' => 'idx_contract_id_name_refcode', 
    'type' => 'index', 
    'fields' => array('id', 'name', 'reference_code') 
    ); 
