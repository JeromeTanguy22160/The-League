<?php


class GameController{
        
        public function matchs() : void {

        $loader = new \Twig\Loader\FilesystemLoader('templates');
        $twig = new \Twig\Environment($loader,[
                    'debug' => true,
        ]);
        
        
        $GameManagerTeams = new GameManager();
        
        $games = $GameManagerTeams -> findAll();
        
        echo $twig->render('matchs.html.twig', ['games' => $games]);

        }
        
         public function match() : void {


        $loader = new \Twig\Loader\FilesystemLoader('templates');
                $twig = new \Twig\Environment($loader,[
                    'debug' => true,
        ]);
        
        $id = isset($_GET["id"]);
        $id = $_GET["id"];
        
        $GameManagerTeams = new GameManager();
        
        $game = $GameManagerTeams -> findOne($id);
        
        echo $twig->render('match.html.twig', ['game' => $game]);

        }
    }