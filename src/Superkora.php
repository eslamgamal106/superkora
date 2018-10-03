<?php


namespace MyVendor\Superkora;

use MyVendor\Superkora\League;
use MyVendor\Superkora\Matchs;
use MyVendor\Superkora\Team;
use MyVendor\Superkora\Match;
use MyVendor\Superkora\Standing;

class Superkora {

    public function leagues()
    {
        return new League();
    }

    public function matchs()
    {
        return new Matchs();
    }

    public function teams()
    {
        return new Team();
    }

    public function singlematch()
    {
        return new Match();
    }
    public function standings()
    {
        return new Standing();
    }


}