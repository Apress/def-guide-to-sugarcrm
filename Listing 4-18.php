<?php

// Create the SOAP client instance
$soapclient = new nusoapclient('http://sugar_root_url/service/v2/soap.php?wsdl', true);
// Login to the server
$result = $soapclient->call('login',array('user_auth'=>array('user_name'=>$user_name,'password'=>md5($user_password), 'version'=>'.01'), 'application_name'=>'SoapTest'));
$session = $result['id'];
// Add the new note record
$result = $soapclient->call('set_entry',array('session'=>$session,'module_name'=>'Notes', 'name_value_list'=>array(array('name'=>'name' , 'value'=>"My new note"), array('name'=>'description' , 'value'=>'This is a note with a file attached to it'))));
$id = $result['id'];
// Now attach the file to the newly created note
$file = base64_encode(file_get_contents('attach.txt'));
$result = $soapclient->call('set_note_attachment',array('session'=>$session,'note'=>array('id'=>$id, 'filename'=>'attach.txt','file'=>$file) ));
$id = $result['id'];

