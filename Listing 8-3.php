<?php

require_once('include/MVC/View/views/view.edit.php');

class CustomBugsViewEdit extends ViewEdit
{
    public function __construct()
    {
         parent::ViewEdit();
    }
     
    public function display()
    {
         if ( empty($this->bean->id) ) { 
             $releaseFocus = new Release();
             $releases = $releaseFocus->get_releases(TRUE, "Active"); 
             $this->bean->found_in_release = array_shift(array_keys($releases)); 
         }
         parent::display();
    }
} 
