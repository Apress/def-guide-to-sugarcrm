<?php

$user_module_favicon = $GLOBALS['current_user']->getPreference('module_favicon');
if (!isset($user_module_favicon))
    if (isset($GLOBALS['sugar_config']['default_module_favicon'])) 
        $user_module_favicon = $GLOBALS['sugar_config']['default_module_favicon'];
    else
        $user_module_favicon = false;
