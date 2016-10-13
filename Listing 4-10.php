<?php

chdir('../..');
// name of the web service class
$webservice_class = 'SugarSoapService2';
// location of the above class
$webservice_path = 'service/v2/SugarSoapService2.php';
// name of class that is responsible for registering all the complex data types and functions available to call
$registry_class = 'registry';
// path to the above class
$registry_path = 'service/v2/registry.php';
// name of the implementation class for all the functions
$webservice_impl_class = 'SugarWebServiceImpl';
// location of the SOAP entrypoint ( should be the URI to this script )
$location = '/service/v2/soap.php';

require_once('service/core/webservice.php');
