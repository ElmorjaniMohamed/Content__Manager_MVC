<?php
namespace App\Models\Entities;

use App\Models\Model;

class FootballTeam extends Model
{
    private $id;
    private $name;
    private $country;
    private $city;
    private $coachName;
    private $foundationYear;
    private $totalPlayers;

    public function __construct($db)
    {
        parent::__construct($db);
        $this->setTable('FootballTeams');
    }
    // Getters
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getCountry()
    {
        return $this->country;
    }
    public function getCity(){
        return $this->city;
    }
    public function getcoachName(){
        return $this->coachName;
    }
    public function getFoundationYear(){
        return $this->foundationYear;
    }
    public function getTotalPlayers(){
        return $this->totalPlayers;
    }


    
    // Setters
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setCountry($country)
    {
        $this->country = $country;
    }
    public function setCity($city){
        $this->city = $city;
    }
    public function setcoachName($coachName){
        $this->coachName = $coachName;
    }
    public function setFoundationYear($foundationYear){
        $this->foundationYear = $foundationYear;
    }

    public function setTotalPlayers($totalPlayers){
        $this->totalPlayers = $totalPlayers;
    }
}
    
