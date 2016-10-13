<?php

// Create the SOAP client instance
$soapclient = new nusoapclient('http://sugar_root_url/service/v2/soap.php?wsdl', true);
// Login to the server
$result = $soapclient->call('login',array('user_auth'=>array('user_name'=>$user_name,'password'=>md5($user_password), 'version'=>'.01'), 'application_name'=>'SoapTest'));
$session = $result['id'];
// Add the new Contact record
$result = $soapclient->call('set_entry',array('session'=>$session,'module_name'=>'Contacts', 'name_value_list'=>array(array('name'=>'last_name' , 'value'=>"Mertic"), array('name'=>'first_name' , 'value'=>'John'))));
$contact_id = $result['id'];
// Add the new Account record
$result = $soapclient->call('set_entry',array('session'=>$session,'module_name'=>'Accounts', 'name_value_list'=>array(array('name'=>'name' , 'value'=>"John's House of Cards"))));
$account_id = $result['id'];
// Now relate the contact to the account
$result = $soapclient->call('set_relationship',array('session'=>$session,'module_name' => 'Accounts', 'module_id' => $account_id, 'link_field_name' => 'contacts', 'related_ids' => array($contact_id)));

