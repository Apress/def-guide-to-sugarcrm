<?php 
 
$dictionary['Applicants']['indices'][] = array( 
        'name' =>'applicantspk',  
        'type' =>'primary',  
        'fields'=>array('id') 
    ); 
$dictionary['Applicants']['indices'][] = array( 
        'name' =>'idx_applicants_name',  
        'type' =>'index',  
        'fields'=>array('last_name','first_name')) 
    ); 
$dictionary['Applicants']['indices'][] = array( 
        'name' =>'idx_applicants_name_unique',  
        'type' =>'unique',  
        'fields'=>array('last_name','first_name','position_id'))     
    ); 
