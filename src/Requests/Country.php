<?php

namespace Sportmonks\SoccerAPI\Requests;


use Sportmonks\SoccerAPI\SoccerAPIClient;

class Country extends SoccerAPIClient {

    public function all()
    {
        return $this->callData('getcountries');
    }

    public function byId($countryId)
    {
        return $this->call('getcountries/' . $countryId);
    }

}