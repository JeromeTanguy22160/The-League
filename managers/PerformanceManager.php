<?php


class PerformanceManager extends AbstractManager{
    
    public function __construct(){
        parent::__construct();
    }
        
    

    public function findOne(int $id) : ? Performance 
    {
        $pm = new PlayersManager();
        $gm = new GamesManager();

        $query = $this->db->prepare('SELECT * FROM player_performance WHERE id=:id');

        $parameters = [  
            "id" => $id
        ];

        $query->execute($parameters); 
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($result)
        {
            $player = $pm->findOne($result["player"]); 
            $game = $gm->findOne($result["game"]);
            
             if (!$player || !$game) {
                return null;
            }
            
            $performance = new Performance($result["points"], $result["assists"]);
            
            
            
            $performance->setId($result["id"]); 
            $performance->setPlayer($player);
            $performance->setGame($game);

            return $performance;
        }

        return null;
    }
    
    
    
    public function findAll(): array
    {
        $pm = new PlayersManager();
        $gm = new GamesManager();
    
        $performances = [];
    
        $query = $this->db->prepare('SELECT * FROM player_performance');
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
    
        foreach ($results as $result) {
            $player = $pm->findOne($result["player"]);
            $game = $gm->findOne($result["game"]);
    
            if (!$player || !$game) {
                continue; 
            }
    
            $performance = new Performance($result["points"], $result["assists"]);
            $performance->setId($result["id"]);
            $performance->setPlayer($player);
            $performance->setGame($game);
    
            $performances[] = $performance;
        }
    
        return $performances;
    }
    
    




















