<?php
$mapping = array (
    'beans' => array (
        'Contacts' => array (
            'id' => 'id',
            'addrcity' => 'primary_address_city',
        ),
        'Accounts' => array (
            'id' => 'id',
            'addrcity' => 'billing_address_city',
        ),
    ),
    'options' => array (
        'addrcity_list' => array (
            '001' => 'sjc', //San Jose
            '032' => 'sfo', //San Francisco
        ),
    ),
);
