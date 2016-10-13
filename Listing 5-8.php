<?php

require_once('include/SugarObjects/templates/person/Person.php');

class Applicants extends Person 
{ 
    // we set importable to true to enable importing in our module 
    public $importable = true;

    public function __construct() 
    { 
        parent::Person(); 
    } 
} 
