<?php

Chdir('../..');
$webservice_class = 'SugarRestService';
$webservice_path = 'service/v2/SugarRestService.php';
$registry_class = 'customregistry';
$registry_path = 'custom/service/v2_1/customregistry.php';
$webservice_impl_class = 'SugarRestServiceImpl_v2_1';
$location = '/custom/service/v2_1/rest.php';
require_once('service/core/webservice.php');
