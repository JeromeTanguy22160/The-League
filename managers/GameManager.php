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
            
            $game = new Game($gameData["name"], $gameData["date"], $gameData["team_1"],$gameData["team_2"], $gameData["winner"]);
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
            $game = new Game($result["name"], $result["date"] , $result["team_1"],$result["team_2"], $result["winner"]);
            $game -> setId($result["id"]);
            return $game;
        }
        
        return null;
    }
}