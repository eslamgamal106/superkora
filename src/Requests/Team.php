<?php

namespace MyVendor\Superkora;

use  MyVendor\Superkora\SuperkoraClient;

class Team extends SuperkoraClient {

    public function all()
    {
        return $this->callData('getteamsbyleagueid');

    }
    public function byId($leagueId)
    {
        return $this->setBody([ 'leagueId' => $leagueId ])->call('getteamsbyleagueid');
    }
 

}