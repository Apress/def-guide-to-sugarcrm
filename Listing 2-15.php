<?php 
 
$db = DBManagerFactory::getInstance(); 
 
$res = $db->query("select * from users"); 
 
while ( $row = $db->fetchByAssoc($res) ) { 
    // remove the admin privilege from any non-active users 
    if ( $row['status'] != 'Active' ) { 
        $db->query("update users set is_admin = 0 where id = '{$row['id']}'"); 
    } 
} 
