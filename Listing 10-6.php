<?php 


$viewdefs['Parts']['EditView'] = array( 
    'templateMeta' => array('maxColumns' => '2',  
                            'widths' => array( 
                                            array('label' => '10', 'field' => '30'),  
                                            array('label' => '10', 'field' => '30') 
                                            ),                                                                                                                                     
                                            ), 
                                             
                                             
 'panels' =>array ( 
  'default' =>  
  array ( 
    array ( 
      'name', 
      'assigned_user_name', 
    ), 
    array ( 
        'part_reference_number', 
        'part_location', 
    ), 
    array ( 
      'description', 
    ), 
  ), 
                                                     
), 
                         
); 
