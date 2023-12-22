<?php
// Models/FootballTeam.php
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
    private $mediaType;
    private $mediaUrl;
    private $totalPlayers;

    public function __construct($db)
    {
        parent::__construct($db);
        $this->table = "FootballTeams"; 
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
    public function getMediaType(){
        return $this->mediaType;
    }
    public function getMediaUrl(){
        return $this->mediaUrl;
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
    public function setMediaType($mediaType){
        $this->mediaType = $mediaType;
    }
    public function setMediaUrl($mediaUrl){
        $this->mediaUrl = $mediaUrl;
    }

    public function setTotalPlayers($totalPlayers){
        $this->totalPlayers = $totalPlayers;
    }

    public function getFullTeamInfo()
    {
        $info = "ID : {$this->id}\n";
        $info .= "Nom : {$this->name}\n";
        $info .= "Pays : {$this->country}\n";
        $info .= "Ville : {$this->city}\n";
        $info .= "Entraîneur : {$this->coachName}\n";
        $info .= "Année de fondation : {$this->foundationYear}\n";
        $info .= "Type de média : {$this->mediaType}\n";
        $info .= "URL du média : {$this->mediaUrl}\n";
        $info .= "Nombre total de joueurs : {$this->totalPlayers}\n";

        return $info;
    }
}
    
