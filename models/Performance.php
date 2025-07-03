<?php 

    class Performance{
        private ? int $id = null;
        private Players $player;
        private Games $game;
        private int $points;
        private int $assists;
        
        public function __construct(int $points , int $assists){
            $this->points = $points;
            $this->assists = $assists;
        }
        
        
        //get
        public function getId() : ?int {
            return $this->id;
        }
        
        public function getPlayer() : Players {
            return $this->player;
        }
        
        public function getGame() : Games {
            return $this->game;
        }
        
        public function getPoints() : int {
            return $this->points;
        }
        
        public function getAssists() : int {
            return $this->assists;
        }
        
    
    
    
        //set
        
        public function setId(int $id) : void {
            $this->id = $id;
        }
        
        public function setPlayer(Players $player) : void {
            $this->player = $player;
        }
        
        public function setGame(Games $game) : void {
            $this->game = $game;
        }
        
        public function setPoints(int $points) : void {
            $this->points = $points;
        }
        
        public function setAssists(int $assists) : void {
            $this->assists = $assists;
        }
    }



?>