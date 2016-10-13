<?php

global $mod_strings, $app_strings, $sugar_config; 

if(ACLController::checkAccess('Applicants', 'edit', true))
    $module_menu[] = Array("index.php?module=Applicants&action=EditView&return_module=Applicants&return_action=index", $mod_strings['LNK_NEW_APPLICANT'],"CreateApplicants", 'Applicants');
if(ACLController::checkAccess('Applicants', 'list', true)) 
    $module_menu[] =Array("index.php?module=Applicants&action=index&return_module=Applicants&return_action=DetailView",                     $mod_strings['LNK_APPLICANT_LIST'],"Applicants", 'Applicants'); 
if(ACLController::checkAccess('Applicants', 'import', true)) 
    $module_menu[] =Array("index.php?module=Import&action=Step1&import_module=Applicants&return_module=Applicants&return_action=index", $app_strings['LBL_IMPORT'],"Import", 'Applicants');
