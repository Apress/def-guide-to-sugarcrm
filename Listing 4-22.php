<?php

require_once('service/v2/registry.php');
 
class customregistry extends registry
{
        public function __construct($serviceClass)  
        {
            parent::__construct($serviceClass);
        }
                                               
        protected function registerFunction()  
        {
            parent::registerFunction();
            $this->serviceClass->registerFunction(
                'get_entry',
                array(
                    'session' => 'xsd:string',
                    'module_name' => 'xsd:string',
                    'id' => 'xsd:string',
                    ),
                array(
                    'return' => 'xsd:string',
                    )
                );
        }
}
