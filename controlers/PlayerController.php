<?php


class PlayerController{
        
        public function players() : void {

        $loader = new \Twig\Loader\FilesystemLoader('templates');
                $twig = new \Twig\Environment($loader,[
                    'debug' => true,
        ]);
        
        
        $playersManagerTeams = new PlayersManager();
        
        $players = $playersManagerTeams -> findAll();
        
        echo $twig->render('players.html.twig', ['players' => $players]);

        }
        
         public function player() : void {

        $loader = new \Twig\Loader\FilesystemLoader('templates');
                $twig = new \Twig\Environment($loader,[
                    'debug' => true,
        ]);
        
        $id = isset($_GET["id"]);
        $id = $_GET["id"];
        
        $playerManagerTeams = new PlayersManager();
        
        $player = $playerManagerTeams -> findOne($id);
        
        echo $twig->render('player.html.twig', ['player' => $player]);

        }
    }