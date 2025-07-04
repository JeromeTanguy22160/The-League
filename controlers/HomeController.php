<?php

class HomeController{
        
        public function home() : void {

        $loader = new \Twig\Loader\FilesystemLoader('templates');
                $twig = new \Twig\Environment($loader,[
                    'debug' => true,
        ]);
        
        
        $playersManagerTeams = new PlayersManager();
        
        $players = $playersManagerTeams -> findAll();
        
        echo $twig->render('teams.html.twig', ['players' => $players]);

        }
     
    }
