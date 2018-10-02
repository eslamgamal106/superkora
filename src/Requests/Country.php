<?php


namespace MyVendor\Superkora;


use Superkora\SuperkoraClient;

class Country extends SuperkoraClient {

    public function all()
    {
        return $this->callData('getcountries');
    }

    public function byId($countryId)
    {
        return $this->call('CountryId/' . $countryId);
    }

}