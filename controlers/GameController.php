<?php


class GameController{
        
        public function matchs() : void {

        $loader = new \Twig\Loader\FilesystemLoader('templates');
                $twig = new \Twig\Environment($loader,[
                    'debug' => true,
        ]);
        
        
        $GameManagerTeams = new GameManager();
        
        $games = $GameManagerTeams -> findAll();
        
        require "templates/matchs.html.twig";

        }
        
         public function match() : void {


        $loader = new \Twig\Loader\FilesystemLoader('templates');
                $twig = new \Twig\Environment($loader,[
                    'debug' => true,
        ]);
        
        
        $GameManagerTeams = new GameManager();
        
        $games = $GameManagerTeams -> findOne();
        
        require "templates/match.html.twig";

        }
    }