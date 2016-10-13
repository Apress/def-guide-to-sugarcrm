<?php

// Create the SOAP client instance
$soapclient = new nusoapclient('http://sugar_root_url/service/v2/soap.php?wsdl', true);
// Login to the server
$result = $soapclient->call('login',array('user_auth'=>array('user_name'=>$user_name,'password'=>md5($user_password), 'version'=>'.01'), 'application_name'=>'SoapTest'));
$session = $result['id'];
// Get the list of records
$result = $soapclient->call('get_entry_list',array('session'=>$session,'module_name'=>'Contacts','query'=>'', 'order_by'=>'','offset'=>0,'select_fields'=>array(),'link_name_to_fields_array' => '', 'max_results'=>10,'deleted'=>-1));
$records_returned = $result['result_count'];
$next_offset = $result['next_offset'];
$field_list = $result['entry_list'];

