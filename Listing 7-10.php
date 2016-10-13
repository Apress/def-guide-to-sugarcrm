<?php

$hook_version = 1; 
$hook_array = Array(); 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'BugHooks', 'custom/Accounts/BugHooks.php','BugHooks', 'adjustInvalidFoundInRelease'); 
$hook_array['before_save'][] = Array(1, 'BugHooks', 'custom/Accounts/BugHooks.php','BugHooks', 'autoSetFixedInRelease'); 
