<?php
class LeadFeed extends FeedLogicBase
{
    var $module = 'Leads';
    
    function pushFeed($bean, $event, $arguments) 
    {
        global $locale;

        $text = '';
        if(empty($bean->fetched_row)){
            $full_name = $locale->getLocaleFormattedName($bean->first_name, $bean->last_name, '');

            $text =  '{SugarFeed.CREATED_LEAD} [' . $bean->module_dir . ':' . $bean->id . ':' . $full_name . ']';
        }else{
            if(!empty($bean->fetched_row['status'] ) && $bean->fetched_row['status'] != $bean->status && $bean->status == 'Converted'){
                // Repeated here so we don't format the name on "uninteresting" events
                $full_name = $locale->getLocaleFormattedName($bean->first_name, $bean->last_name, '');

                $text =  '{SugarFeed.CONVERTED_LEAD} [' . $bean->module_dir . ':' . $bean->id . ':' . $full_name . ']';
            }
        }
        
        if(!empty($text)){
            SugarFeed::pushFeed2($text, $bean);
        }
        
    }
} 
