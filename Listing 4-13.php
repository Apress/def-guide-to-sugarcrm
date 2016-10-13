<?php

// Create the SOAP client instance
$soapclient = new nusoapclient('http://sugar_root_url/service/v2/soap.php?wsdl', true);
// Login to the server
$result = $soapclient->call('login',array('user_auth'=>array('user_name'=>$user_name,'password'=>md5($user_password), 'version'=>'.01'), 'application_name'=>'SoapTest'));
$session = $result['id'];
// Get the count of records
$result = $soapclient->call('get_entries_count',array('session'=>$session, 'module_name' => 'Accounts', 'query' => '', 'deleted' => 0));
$count = $result['result_count'];

