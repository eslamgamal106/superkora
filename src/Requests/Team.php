<?php

namespace MyVendor\Superkora;

use  MyVendor\Superkora\SuperkoraClient;

class Team extends SuperkoraClient {

    public function byId()
    {
        return $this->callData('getleagues');

    }

 

}