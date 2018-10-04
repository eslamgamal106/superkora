<?php


namespace MyVendor\Superkora;


use  MyVendor\Superkora\SuperkoraClient;

class Standing extends SuperkoraClient {

    public function all()
    {
        return $this->callData('getseasonstandings');
    }
    
    public function byId($leagueId)
    {
        return $this->setBody([ 'leagueId' => $leagueId ])->call('getseasonstandings');
    }

}