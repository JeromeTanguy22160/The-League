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
        
        require "templates/teams.html.twig";

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
