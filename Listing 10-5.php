<?php 


$viewdefs['Parts']['DetailView'] = array( 
'templateMeta' => array( 
    'form' => array( 
        'buttons'=>array( 
            'EDIT',  
            'DUPLICATE',  
            'DELETE', 
            array ( 
                'customCode' => '<input title="{$MOD.LBL_VIEWPARTIMAGE_TITLE}" accessKey="{$MOD.LBL_VIEWPARTIMAGE_BUTTON_KEY}" type="button" class="button" onClick="open_popup(\'Parts\', \'600\', \'400\', \'&action=Image&record={$fields.id.value}\');" name="image" value="{$MOD.LBL_VIEWPARTIMAGE}">' 
            ), 
        ), 
    ), 
    'maxColumns' => '2', 
    'widths' => array( 
        array('label' => '10', 'field' => '30'), 
        array('label' => '10', 'field' => '30') 
        ), 
    ), 
    'panels' =>array ( 
          array ( 
            'name', 
            'assigned_user_name', 
          ), 
          array ( 
            array ( 
                'name' => 'date_entered', 
                'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}', 
                'label' => 'LBL_DATE_ENTERED', 
                ), 
            array ( 
                'name' => 'date_modified', 
                'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}', 
                'label' => 'LBL_DATE_MODIFIED', 
            ), 
          ), 
          array ( 
            'part_reference_number', 
            'part_location', 
            ), 
          array ( 
            'description', 
            ), 
        ) 
); 
