<?php 

require('modules/ep_Jobs/metadata/detailviewdefs.php'); // include in the existing view defs
$viewdefs['ep_Jobs']['DetailView']['templateMeta']['form']['buttons'][] = array( 
    'customCode' => '<input title="{$MOD.LBL_GET_MAP_TO_JOB}" ' . 
        ' accesskey="{$APP.LBL_GET_MAP_TO_JOB_KEY}" ' . 
        ' class="button" ' . 
        ' onclick=\'document.location.href = "{$MAP_URL}"; return false;\' ' . 
        ' name="button" ' . 
        ' value="{$APP.LBL_GET_MAP_TO_JOB_TITLE}" ' . 
        ' type="submit">' 
    ); 
