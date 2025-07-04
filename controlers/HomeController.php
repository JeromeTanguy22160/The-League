<?php

class HomeController{
        
        public function home() : void {

        $loader = new \Twig\Loader\FilesystemLoader('templates');
                $twig = new \Twig\Environment($loader,[
                    'debug' => true,
        ]);
        
        $teamManagerTeams = new TeamManager();
        
        $teams = $teamManagerTeams -> findAll();
        
        echo $twig->render('home.html.twig', ['teams' => $teams]);

        }
     
    }
