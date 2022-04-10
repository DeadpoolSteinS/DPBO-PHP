<?php
class FootballTeam
{
    private $name;
    private $origin;
    private $year;
    private $players = array();

    // set default data
    public function __construct($name = "-", $origin = "-", $year = "-", $players = array())
    {
        $this->name = $name;
        $this->origin = $origin;
        $this->year = $year;
        $this->players = $players;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

    public function getOrigin()
    {
        return $this->origin;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setPlayers($players)
    {
        $this->players = $players;
    }

    public function getPlayers()
    {
        return $this->players;
    }

    public function addPlayer($player)
    {
        $this->players[] = $player;
    }

    public function showTeam()
    {
        echo "Team Name      : " . $this->getName() . "<br>";
        echo "Origin Country : " . $this->getOrigin() . "<br>";
        echo "Year of Build  : " . $this->getYear() . "<br>";

        $players = $this->getPlayers();
        for($i = 0; $i < count($players); $i++)
        {
            echo "- " . $players[$i] . "<br>";
        }
    }
}
?>