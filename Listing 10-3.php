<?php 


class Part extends Basic  
{ 
     var $new_schema = true; 
     var $module_dir = 'Parts'; 
     var $object_name = 'Part'; 
     var $table_name = 'parts'; 
     var $importable = true; 
      
     var $id; 
     var $name; 
     var $date_entered; 
     var $date_modified; 
     var $modified_user_id; 
     var $modified_by_name; 
     var $created_by; 
     var $created_by_name; 
     var $description; 
     var $deleted; 
     var $created_by_link; 
     var $modified_user_link; 
     var $team_id; 
     var $team_set_id; 
     var $team_count; 
     var $team_name; 
     var $team_link; 
     var $team_count_link; 
     var $teams; 
     var $assigned_user_id; 
     var $assigned_user_name; 
     var $assigned_user_link; 
     var $part_reference_number;

     var $part_location;

      
     public function __construct() 
     { 
          parent::Basic(); 
     } 


     public function bean_implements($interface) 
     { 
          switch ($interface) { 
               case 'ACL': return true; 
          } 
      
          return false; 
     } 


    public function fetchImageURL()

    {

        if ( !empty($this->part_reference_number) ) 
            return 'http://partimageserver.local/getImage/' . $partBean->part_reference_number; 


        return 'include/images/blank.gif';

    }



    public function save( 
        $check_notify = false 
        )

    {

        // Default the part_location field if it's not otherwise specified

        if ( empty($this->part_location) ) {

            if ( strpos($this->part_reference_number,'790-') !== FALSE ) 
                $this->part_location = 'Warehouse';

            elseif ( strpos($this->part_reference_number,'890-') !== FALSE ) 
                $this->part_location = 'Stockroom';

        } 
        return parent::save($check_notify);

    } 
} 
