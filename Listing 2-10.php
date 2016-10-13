<?php

$entry_point_registry = array(     
    'download' => array('file' => 'download.php', 'auth' => true),     
    'export' => array('file' => 'export.php', 'auth' => true),     
    'image' => array('file' => 'modules/Campaigns/image.php', 'auth' => false),     
    'acceptDecline' => array('file' => 'modules/Contacts/AcceptDecline.php', 'auth' => false),     
    'removeme' => array('file' => 'modules/Campaigns/RemoveMe.php', 'auth' => false),     
    'process_queue' => array('file' => 'process_queue.php', 'auth' => true),     
    'process_workflow' => array('file' => 'process_workflow.php', 'auth' => true),
); 
