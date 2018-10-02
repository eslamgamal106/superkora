<?php


namespace MyVendor\Superkora;

use Superkora\Requests\Bookmaker;
use Superkora\Requests\Commentary;
use Superkora\Requests\Fixture;
use Superkora\Requests\Head2Head;
use Superkora\Requests\League;
use Superkora\Requests\Continent;
use Superkora\Requests\Country;
use Superkora\Requests\LiveScore;
use Superkora\Requests\Odds;
use Superkora\Requests\Player;
use Superkora\Requests\Round;
use Superkora\Requests\Season;
use Superkora\Requests\Standings;
use Superkora\Requests\Team;
use Superkora\Requests\TopScorer;
use Superkora\Requests\TVStation;
use Superkora\Requests\Venue;
use Superkora\Requests\Video;
use Superkora\Requests\Squad;

class Superkora {

    public function bookmakers()
    {
        return new Bookmaker();
    }

    public function commentaries()
    {
        return new Commentary();
    }

    public function leagues()
    {
        return new League();
    }

    public function head2head()
    {
        return new Head2Head();
    }

    public function continents()
    {
        return new Continent();
    }

    public function countries()
    {
        return new Country();
    }

    public function fixtures()
    {
        return new Fixture();
    }

    public function tvstations()
    {
        return new TVStation();
    }

    public function venues()
    {
        return new Venue();
    }

    public function rounds()
    {
        return new Round();
    }

    public function livescores()
    {
        return new LiveScore();
    }

    public function odds()
    {
        return new Odds();
    }

    public function players()
    {
        return new Player();
    }

    public function seasons()
    {
        return new Season();
    }

    public function standings()
    {
        return new Standings();
    }

    public function teams()
    {
        return new Team();
    }

    public function topscorers()
    {
        return new TopScorer();
    }

    public function videos()
    {
        return new Video();
    }

    public function squads()
    {
        return new Squad();
    }

}