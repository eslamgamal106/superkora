<?php


namespace MyVendor\Superkora;


use  MyVendor\Superkora\SuperkoraClient;

class League extends SuperkoraClient {

    public function all()
    {
        return $this->callData('getleagues');
    }

 
}