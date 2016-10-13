<?php

public function create_export_query( 
    &$order_by,

    &$where,

    $relate_link_join='' 
    )
{ 
    $custom_join = $this->custom_fields->getJOIN(true, true,$where);
    $custom_join['join'] .= $relate_link_join;



    $query = "SELECT
                                contacts.*,email_addresses.email_address email1,
                                accounts.name as account_name, 
                                accounts.employees as account_employees, 
                                accounts.industry as account_industry,

                                users.user_name as assigned_user_name ";
    if($custom_join){
        $query .= $custom_join['select'];
    }
    $query .= " FROM contacts ";
    $query .= "LEFT JOIN users
                                    ON contacts.assigned_user_id=users.id ";
    $query .= "LEFT JOIN accounts_contacts
                                    ON ( contacts.id=accounts_contacts.contact_id and (accounts_contacts.deleted is null or accounts_contacts.deleted = 0))
                                    LEFT JOIN accounts
                                    ON accounts_contacts.account_id=accounts.id ";
                        
    //join email address table too.
    $query .=  ' LEFT JOIN  email_addr_bean_rel on contacts.id = email_addr_bean_rel.bean_id and email_addr_bean_rel.bean_module=\'Contacts\' and email_addr_bean_rel.deleted=0 and email_addr_bean_rel.primary_address=1 ';
    $query .=  ' LEFT JOIN email_addresses on email_addresses.id = email_addr_bean_rel.email_address_id ' ;
                        
    if($custom_join){
        $query .= $custom_join['join'];
    }

    $where_auto = "( accounts.deleted IS NULL OR accounts.deleted=0 )
                      AND contacts.deleted=0 ";

    if($where != "")
        $query .= "where ($where) AND ".$where_auto;
    else
        $query .= "where ".$where_auto;

    if(!empty($order_by))
        $query .=  " ORDER BY ". $this->process_order_by($order_by, null);

    return $query; 
} 
