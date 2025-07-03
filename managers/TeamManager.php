<?php

class TeamManager extends AbstractManager
{
    public function __construct() {
        parent::__construct();
    }
    
    public function findAll(): array {
        $query = $this->db->prepare('SELECT * FROM teams');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $teams = [];
        
        foreach ($result as $teamData) {
            $media = new Media($teamData["logo"], $teamData["alt"]);
            $team = new Team($teamData["name"], $teamData["description"], $media);
            $team->setId($teamData["id"]);
            $teams[] = $team;
        }
        
        return $teams;
    }
    
    public function findOne(int $id):? Team  {
        $query = $this->db->prepare('SELECT * FROM teams WHERE id = :id');
        $parameters = 
        [
            "id" => $id
        ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
        if($result) {
            $media = new Media($team["logo"], $team["alt"]);
            $team = new Team($team["name"], $team["description"], $media);
            $team->setId($team["id"]);
            return $team;
        }
        
        return null;
    }
}