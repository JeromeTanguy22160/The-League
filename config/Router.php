<?php

class Router
{
    private TeamController $tc;
    private GameController $gc;
    private PlayerController $pc;
    private HomeController $hc;
    

    public function __construct()
    {
        $this->tc = new TeamController();
        $this->gc = new GameController();
        $this->pc = new PlayerController();
        $this->hc = new HomeController();
    }
    
    
    
    public function handleRequest(array $get) : void
    {
        if(!isset($get["route"]))
        {
            $this->hc->home();
        }
        else if(isset($get["route"]) && $get["route"]  === "players")
        {
            $this->pc->players();
        }
        else if(isset($get["route"]) && $get["route"] === "player")
        {
            if(isset($get["id"])) {
              $this->pc->player($get["id"]);
            }
            else {
                $this->hc>home();
            }
        }
        else if(isset($get["route"]) && $get["route"] === "matchs")
        {
            $this->gc->matchs();
        }
        else if(isset($get["route"]) && $get["route"] === "match")
        {
            if(isset($get["id"])) {
              $this->gc->match($get["id"]);
            }
            else {
                $this->hc>home();
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
                $this->hc>home();
            }
        }
    }
}