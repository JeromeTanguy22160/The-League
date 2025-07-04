<?php
    
    
    class teamController{
        
        public function teams() : void {
            
        

        $loader = new \Twig\Loader\FilesystemLoader('templates');
                $twig = new \Twig\Environment($loader,[
                    'debug' => true,
        ]);
        
        $route = "teams";
        
        $teamManagerTeams = new TeamManager();
        
        $teams = $teamManagerTeams -> findAll();
        
<<<<<<< HEAD
        echo $twig->render('teams.html.twig', [
            'teams' => $teams
        ]);
=======
        echo $twig->render('teams.html.twig', ['teams' => $teams]);
>>>>>>> a3d4b02712f06b9da4a4daf0cb6bd6cfa61e31b5

        }
        
         public function team() : void {
            
        

        $loader = new \Twig\Loader\FilesystemLoader('templates');
                $twig = new \Twig\Environment($loader,[
                    'debug' => true,
        ]);
        
        $route = "teams";
        
        $teamManagerTeams = new TeamManager();
        
        $teams = $teamManagerTeams -> findOne();
        
        require "templates/team.html.twig";

        }
    }