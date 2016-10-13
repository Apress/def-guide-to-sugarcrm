<?php

public function getRegion( 
    SugarBean $bean,  
    $event,  
    $arguments 
    ) 
{ 
    switch ( strtoupper($bean->billing_address_state) ) { 
    case "AL": 
    case "AK": 
    case "AZ": 
    case "AR": 
    case "CA": 
    case "CO": 
    case "CT": 
            $bean->region_c = $app_list_strings['account_region_dom']['Region1'];
            break;
    case "DE": 
    case "FL": 
    case "GA": 
    case "HI": 
    case "ID": 
    case "IL": 
    case "IN": 
    case "IA": 
    case "KS": 
    case "KY": 
            $bean->region_c = $app_list_strings['account_region_dom']['Region2'];
            break; 
    case "LA": 
    case "ME": 
    case "MD": 
    case "MA": 
    case "MI": 
    case "MN": 
    case "MS": 
    case "MO": 
    case "MT": 
    case "NE": 
    case "NV": 
    case "NH": 
    case "NJ": 
    case "NM": 
            $bean->region_c = $app_list_strings['account_region_dom']['Region3'];
            break; 
    case "NY": 
    case "NC": 
    case "ND": 
    case "OH": 
    case "OK": 
    case "OR": 
    case "PA": 
    case "RI": 
    case "SC": 
    case "SD": 
    case "TN": 
    case "TX": 
    case "UT": 
    case "VT": 
    case "VA": 
            $bean->region_c = $app_list_strings['account_region_dom']['Region4'];
            break; 
    case "WA": 
    case "WV": 
    case "WI": 
            $bean->region_c = $app_list_strings['account_region_dom']['Region5'];
            break; 
    }
} 
