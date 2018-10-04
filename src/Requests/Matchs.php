<?php


namespace MyVendor\Superkora;


use  MyVendor\Superkora\SuperkoraClient;

class Matchs extends SuperkoraClient {

    public function all()
    {
        return $this->callData('getfixtures');
    }

    public function byId($leagueId)
    {
        return $this->setBody([ 'leagueId' => $leagueId ])->call('getfixtures');
    }

}