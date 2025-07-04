<?php

/* MODELS */
require "models/Game.php";
require "models/Media.php";
require "models/Performance.php";
require "models/Players.php";
require "models/Team.php";

/* MANAGERS */
require "managers/AbstractManager.php";
require "managers/GameManager.php";
require "managers/MediaManager.php";
require "managers/PerformanceManager.php";
require "managers/PlayersManager.php";
require "managers/TeamManager.php";

/* MANAGERS*/
require "controlers/TeamController.php";
require "controlers/PlayerController.php";
require "controlers/GameController.php";
require "controlers/HomeController.php";

/*Services*/
require "config/Router.php";

