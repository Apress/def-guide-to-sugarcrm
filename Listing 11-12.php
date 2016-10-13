<?php 


require_once('include/MVC/View/SugarView.php'); 


class ViewInvoices extends SugarView 
{ 
    public function __construct() 
    { 
        $this->options['show_title'] = false; 
        $this->options['show_header'] = false; 
        $this->options['show_footer'] = false;   
        $this->options['show_subpanels'] = false;  
        $this->options['show_search'] = false;  
        parent::SugarView(); 
    } 
  
    public function display() 
    { 
        global $mod_strings, $app_strings; 
     
        $this->ss->assign("MODULE_TITLE",  
                get_module_title( 
                    $mod_strings['LBL_MODULE_NAME'],  
                    $mod_strings['LBL_MODULE_NAME'] . ': ' . $app_strings['LBL_INVOICES'],  
                    true 
                    ) 
                ); 
     
        // Get the invoice data from our accounting system; it uses XML to do so 
        $returnXML = file_get_contents("http://accounting.local/getInvoiceHistory?customer_id={$this->bean->accounting_id}"); 
     
        $xml = new SimpleXMLElement($returnXML); 
     
        $invoices = array(); 
        foreach ( $xml->invoice as $invoice ) { 
            $invoices = array( 
                'date' => $invoice->date, 
                'amount' => $invoice->amount, 
                'due' => $invoice->due, 
                ); 
        } 
     
        $this->ss->assign('invoices', $invoices); 
        $this->ss->display('custom/include/MVC/tpls/invoices.tpl');

    } 
} 
