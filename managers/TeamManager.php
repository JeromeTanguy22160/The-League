<?php

class TeamManager extends AbstractManager
{
    public function __construct() {
        parent::__construct();
    }
    
    public function findAll(): array {
        
        $mediaManager = new MediaManager();
        
        
        $query = $this->db->prepare('SELECT * FROM teams');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $teams = [];
        
        foreach ($result as $teamData) {
            
            $team = new Team($teamData["name"], $teamData["description"]);
            $team->setId($teamData["id"]);
            
        if (isset($teamData["media"]) && !is_null($teamData["media"])) {
            $media = $mediaManager->findOne((int) $teamData["media"]);
            $team->setMedia($media);
        }
            $teams[] = $team;
        }
        
        return $teams;
    }
    
    public function findOne(int $id):? Team  {
        
        $mediaManager = new MediaManager();
        
        $query = $this->db->prepare('SELECT * FROM teams WHERE id = :id');
        $parameters = 
        [
            "id" => $id
        ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
        if($result) {
            $media = $mediaManager -> findOne($result["media"]);
            
            if(!$media){
                return null;
            }
                
            $team = new Team($result["name"], $result["description"]);
            $team -> setId($result["id"]);
            $team -> setMedia($media);
            return $team;
        }
        
        return null;
    }
}