<?php


namespace MyVendor\Superkora;

use MyVendor\Superkora\League;
use MyVendor\Superkora\Country;
use MyVendor\Superkora\Team;

class Superkora {

    public function leagues()
    {
        return new League();
    }

    public function countries()
    {
        return new Country();
    }

    public function teams()
    {
        return new Team();
    }

}