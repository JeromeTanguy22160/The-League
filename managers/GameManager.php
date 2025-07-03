<?php

class GameManager extends AbstractManager
{
    public function __construct() {
        parent::__construct();
    }
    
    public function findAll(): array {
        
        $query = $this->db->prepare('SELECT * FROM games');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $games = [];
        
        foreach ($result as $gameData) {
            $createdAt = new \DateTimeImmutable($gameData["created_at"]);
            
            $game = new Game($gameData["name"], $createdAt , $gameData["team_1"],$gameData["team_2"], $gameData["winner"]);
            $game -> setId($gameData["id"]);
            $games[] = $game;
        }
        
        return $games;
    }
    
    public function findOne(int $id):? Game{
        
        
        $query = $this->db->prepare('SELECT * FROM games WHERE id = :id');
        $parameters = 
        [
            "id" => $id
        ];
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
        if($result) {
            $createdAt = new \DateTimeImmutable($result["created_at"]);
           
            $game = new Game($result["name"], $createdAt , $result["team_1"],$result["team_2"], $result["winner"]);
            $game -> setId($result["id"]);
            return $game;
        }
        
        return null;
    }
}