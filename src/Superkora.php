<?php


namespace MyVendor\Superkora;

use Superkora\Requests\League;
use Superkora\Requests\Country;

class Superkora {


    public function leagues()
    {
        return new League();
    }

    public function countries()
    {
        return new Country();
    }

}