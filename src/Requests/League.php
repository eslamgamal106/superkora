<?php


namespace MyVendor\Superkora;


use Superkora\SuperkoraClient;

class League extends SuperkoraClient {

    public function all()
    {
        return $this->callData('leagues');
    }

    public function byId($competitionId)
    {
        return $this->call('leagues/' . $competitionId);
    }

}