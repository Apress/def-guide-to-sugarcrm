<?php

$hook_version = 1; 
$hook_array = Array(); 
$hook_array[‘after_save’] = Array(); 
$hook_array[‘after_save’][] = Array(1, ‘AccountHooks’, ‘custom/Accounts/AccountHooks.php’,’AccountHooks’, ‘checkForLead’); 
$hook_array[‘before_save’] = Array(); 
$hook_array[‘before_save’][] = Array(1, ‘AccountHooks’, ‘custom/Accounts/AccountHooks.php’,’AccountHooks’, ‘getParentAccountIndustry’); 
