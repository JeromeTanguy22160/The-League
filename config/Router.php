<?php

class Router
{
    private TeamController $tc;
    

    public function __construct()
    {
        $this->tc = new TeamController();
    }
    
    
    
    public function handleRequest(array $get) : void
    {
        if(!isset($get["route"]))
        {
            $this->tc->home();
        }
        else if(isset($get["route"]) && $get["route"]  === "players")
        {
            $this->tc->players();
        }
        else if(isset($get["route"]) && $get["route"] === "player")
        {
            if(isset($get["id"])) {
              $this->tc->player($get["id"]);
            }
            else {
                $this->tc>home();
            }
        }
        else if(isset($get["route"]) && $get["route"] === "matchs")
        {
            $this->tc->matchs();
        }
        else if(isset($get["route"]) && $get["route"] === "match")
        {
            if(isset($get["id"])) {
              $this->tc->match($get["id"]);
            }
            else {
                $this->tc>home();
            }
        }
        else if(isset($get["route"]) && $get["route"] === "teams")
        {
            $this->tc->teams();
        }
        else if(isset($get["route"]) && $get["route"] === "team")
        {
            if(isset($get["id"])) {
              $this->tc->team($get["id"]);
            }
            else {
                $this->tc>home();
            }
        }
    }
}