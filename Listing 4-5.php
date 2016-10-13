<?php
$dictionary['ext_rest_test'] = array(
    'comment' => 'vardefs for test connector',
    'fields' => array (
        'id' => array(   
            'name' => 'id',
            'vname' => 'LBL_ID',
            'type' => 'id',
            'hidden' => true,
            'comment' => 'Unique identifier'
            ),
        'addrcity' => array (
            'name' => 'addrcity',
            'input' => 'bal.location.city',
            'vname' => 'LBL_CITY',
            'type' => 'varchar',
            'comment' => 'The city address for the company',
            'options' => 'addrcity_list',
            'search' => true,
            ),
        )
    );
?>
