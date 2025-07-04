<?php
    
    
    class teamController{
        
        public function teams() : void {
            
        

        $loader = new \Twig\Loader\FilesystemLoader('templates');
                $twig = new \Twig\Environment($loader,[
                    'debug' => true,
        ]);
        
        $teamManagerTeams = new TeamManager();
        
        $teams = $teamManagerTeams -> findAll();
        
        echo $twig->render('teams.html.twig', ['teams' => $teams]);

        }
        
        public function team() : void {
        
        $loader = new \Twig\Loader\FilesystemLoader('templates');
                $twig = new \Twig\Environment($loader,[
                    'debug' => true,
        ]);
        
        $id = isset($_GET["id"]);
        $id = $_GET["id"];
        
        $teamManagerTeams = new TeamManager();
        
        $team = $teamManagerTeams -> findOne($id);
        
        echo $twig->render('team.html.twig', ['team' => $team]);

        }
    }