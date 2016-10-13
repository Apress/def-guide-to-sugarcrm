<?php

$viewdefs['Contacts']['EditView'] = array( 
    'templateMeta' => array( 
        'form'=>array( 
            'hidden'=>array( 
                '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">', 
                '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">', 
                '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">', 
                '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">', 
                '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">' 
                ), 
        'buttons'=>array('SAVE', 'CANCEL', 'FIND_DUPLICATES'),
            ), 
                'maxColumns' => '2',  
        'widths' => array( 
            array('label' => '10', 'field' => '30'),  
            array('label' => '10', 'field' => '30'), 
            ), 
        ), 
    'panels' =>array ( 
        'lbl_contact_information' => array ( 
            array ( 
                array ( 
                    'name' => 'first_name', 
                    'customCode' => '{html_options name="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">', 
                ), 
                'phone_work', 
                ), 
            array ( 
                array('name'=>'last_name','displayParams'=>array('required'=>true),), 
                'phone_mobile', 
                ), 
            array ( 
                array('name'=>'account_name', 'displayParams'=>array('key'=>'billing', 'copy'=>'primary', 'billingKey'=>'primary', 'additionalFields'=>array('phone_office'=>'phone_work'))), 
                'phone_home', 
                ), 
            array ( 
                'lead_source', 
                'phone_other', 
                ), 
            array ( 
                'campaign_name', 
                'phone_fax', 
                ), 
            array ( 
                'title', 
                'birthdate', 
                ), 
            array ( 
                'department', 
                ), 
            array ( 
                'report_to_name', 
                'assistant', 
                ), 
            array ( 
                'sync_contact', 
                'assistant_phone', 
                ), 
            array ( 
                'do_not_call', 
                ), 
            array ( 
                'assigned_user_name', 
                ), 
            ), 
        'lbl_email_addresses'=>array( 
            array('email1') 
            ), 
        'lbl_address_information' => array ( 
            array ( 
                array ( 
                    'name' => 'primary_address_street', 
                    'hideLabel' => true,       
                    'type' => 'address', 
                    'displayParams'=>array('key'=>'primary', 'rows'=>2, 'cols'=>30, 'maxlength'=>150), 
                    ), 
                array ( 
                    'name' => 'alt_address_street', 
                    'hideLabel'=>true, 
                    'type' => 'address', 
                    'displayParams'=>array('key'=>'alt', 'copy'=>'primary', 'rows'=>2, 'cols'=>30, 'maxlength'=>150),       
                    ), 
                ),   
            ), 
        'lbl_description_information' => array ( 
            array ( 
                array( 
                    'name'=>'description',  
                    'displayParams'=>array('rows'=>6, 'cols'=>80),  
                    'label'=>'LBL_DESCRIPTION' 
                    ), 
                ), 
          ), 
    ) 
); 
