<?php


class PlayerController{
        
        public function players() : void {

        $loader = new \Twig\Loader\FilesystemLoader('templates');
                $twig = new \Twig\Environment($loader,[
                    'debug' => true,
        ]);
        
        
        $playersManagerTeams = new PlayersManager();
        
        $players = $playersManagerTeams -> findAll();
        
        require "templates/matchs.html.twig";

        }
        
         public function match() : void {


        $loader = new \Twig\Loader\FilesystemLoader('templates');
                $twig = new \Twig\Environment($loader,[
                    'debug' => true,
        ]);
        
        
        $playerManagerTeams = new PlayersManager();
        
        $player = $playerManagerTeams -> findOne();
        
        require "templates/match.html.twig";

        }
    }