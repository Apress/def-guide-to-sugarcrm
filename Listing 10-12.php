<?php 

global $mod_strings, $app_strings, $sugar_config;
		
if(ACLController::checkAccess('Parts', 'edit', true))$module_menu[]=Array("index.php?module=Parts&action=EditView&return_module=Parts&return_action=index", $mod_strings['LNK_NEW_PART'],"CreateParts", 'Parts');
if(ACLController::checkAccess('Parts', 'list', true))$module_menu[]=Array("index.php?module=Parts&action=index&return_module=Parts&return_action=DetailView", $mod_strings['LNK_PART_LIST'],"Parts", 'Parts');
if(ACLController::checkAccess('Parts', 'import', true))$module_menu[]=Array("index.php?module=Import&action=Step1&import_module=Parts&return_module=Parts&return_action=index", $app_strings['LBL_IMPORT'],"Import", 'Parts');
