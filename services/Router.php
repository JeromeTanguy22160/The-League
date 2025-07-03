<?php

class Router
{
    private MainController $mc;

    public function __construct()
    {
        $this->mc = new MainController();
    }
    public function handleRequest(array $get) : void
    {
        if(!isset($get["route"]))
        {
            $this->mc->home();
        }
        else if(isset($get["route"]) && $get["route"]  === "players")
        {
            $this->mc->players();
        }
        else if(isset($get["route"]) && $get["route"] === "player")
        {
            if(isset($get["id"])) {
              $this->mc->player($get["id"]);
            }
            else {
                $this->mc>home();
            }
        }
        else if(isset($get["route"]) && $get["route"] === "matchs")
        {
            $this->mc->matchs();
        }
        else if(isset($get["route"]) && $get["route"] === "match")
        {
            if(isset($get["id"])) {
              $this->mc->match($get["id"]);
            }
            else {
                $this->mc>home();
            }
        }
        else if(isset($get["route"]) && $get["route"] === "teams")
        {
            $this->mc->teams();
        }
        else if(isset($get["route"]) && $get["route"] === "team")
        {
            if(isset($get["id"])) {
              $this->mc->team($get["id"]);
            }
            else {
                $this->mc>home();
            }
        }
    }
}