<?php

require_once('include/connectors/sources/ext/rest/rest.php');

class ext_rest_sample extends ext_rest 
{
    protected $service_url = 'http://example.com/rest/'; 
    protected $_has_testing_enabled = true;


    public function getItem($args=array(), $module=null)
    {
        $curl = curl_init($this->service_url.'item/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $args);
        $curl_response = curl_exec($curl);
        curl_close($curl);

        return json_decode($curl_response);
    }

    public function getList($args=array(), $module=null)
    {
        $curl = curl_init($this->service_url.'list/');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $args);
        $curl_response = curl_exec($curl);
        curl_close($curl);

        $ids = json_decode($curl_response);
        $returnArray = array();
        foreach ( $ids as $id )
            $returnArray[$id] = $this->getList(array('id'=>$id));

        return $returnArray;
    } 


    public function test()
    {
        $item = $this->getItem(array('id'=>'1'));
        return !empty($item['firstname']) && ($item['firstname'] == 'John');
    } 
}
