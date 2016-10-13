<?php

Chdir('../..');
$webservice_class = 'SugarSoapService2';
$webservice_path = 'service/v2/SugarSoapService2.php';
$registry_class = 'customregistry';
$registry_path = 'custom/service/v2_1/customregistry.php';
$webservice_impl_class = 'SugarWebServiceImpl_v2_1';
$location = '/custom/service/v2_1/soap.php';
require_once('service/core/webservice.php');
