<?php

// Create the SOAP client instance
$soapclient = new nusoapclient('http://sugar_root_url/service/v2/soap.php?wsdl', true);
// Login to the server
$result = $soapclient->call('login',array('user_auth'=>array('user_name'=>$user_name,'password'=>md5($user_password), 'version'=>'.01'), 'application_name'=>'SoapTest'));
$session = $result['id'];
// Specify the list of records to add
$name_value_lists[] =  array(array('name'=>'last_name' , 'value'=>"Mertic"), array('name'=>'first_name' , 'value'=>'John'));
$name_value_lists[] =  array(array('name'=>'last_name' , 'value'=>"Mertic"), array('name'=>'first_name' , 'value'=>'Dominic'));
$name_value_lists[] =  array(array('name'=>'last_name' , 'value'=>"Mertic"), array('name'=>'first_name' , 'value'=>'Mallory'));
// Now add all the new records
$result = $soapclient->call('set_entries',array('session'=>$session,'module_name'=>'Contacts', 'name_value_lists'=>$name_value_lists));
$ids = $result['ids'];

