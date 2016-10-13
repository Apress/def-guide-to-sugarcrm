<?php

// Create the SOAP client instance
$soapclient = new nusoapclient('http://sugar_root_url/service/v2/soap.php?wsdl', true);
// Login to the server
$result = $soapclient->call('login',array('user_auth'=>array('user_name'=>$user_name,'password'=>md5($user_password), 'version'=>'.01'), 'application_name'=>'SoapTest'));
$session = $result['id'];
// Grab the given record's attachment
$result = $soapclient->call('get_note_attachment',array('session'=>$session,'id'=>$note_id ));
$file_contents = base64_decode($result['note_attachment']['file']);
$filename = $result['note_attachment']['filename'];
// Now store the contents in a local file
file_put_contents($filename,$file_contents);

