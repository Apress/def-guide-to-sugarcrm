<?php

$cache = new wsdlcache("C:\temp", $cachelifetimeinseconds);
$wsdl = $cache->get("http://localhost/soap.php?wsdl");
if (is_null($wsdl)) {
    // Retrieve the WSDL file and store it in the cache
    $wsdl = new wsdl("http://localhost/soap.php?wsdl");
    $cache->put($wsdl);
} else {
    $wsdl->debug_str = '';
    $wsdl->debug('Retrieved from cache');
} // else
// instantiate the soap client using the cached wsdl file
$soapclient = new nusoapclient($wsdl, true);

