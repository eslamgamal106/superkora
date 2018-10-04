<?php


namespace MyVendor\Superkora;


use  MyVendor\Superkora\SuperkoraClient;

class Match extends SuperkoraClient {

    public function all()
    {
        return $this->callData('getmatchcenter');
    }

    public function byId($matchId)
    {
        return $this->setBody([ 'matchId' => $matchId ])->call('getmatchcenter');
    }




}