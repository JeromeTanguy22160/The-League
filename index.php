<?php

require_once __DIR__ . '/config/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
        $twig = new \Twig\Environment($loader,[
            'debug' => true,
]);

$data = [
    "links" => ["Les teams","Les players","Les matchs"],
    "title" => "Les teams de la league"
    ];
$teams = [
    [
        'name' => 'ANGRY OWLS',
        'description' => 'A team of angry owls',
        'logo' => 'images/angry-owls.png',
        'button_text' => 'DÉCOUVREZ ANGRY OWLS'
    ],
    [
        'name' => 'CHATTY PARROTS',
        'description' => 'A team of chatty parrots',
        'logo' => 'images/chatty-parrots.png',
        'button_text' => 'DÉCOUVREZ CHATTY PARROTS'
    ],
    [
        'name' => 'PANTHERS',
        'description' => 'A team of panthers',
        'logo' => 'images/panthers.png',
        'button_text' => 'DÉCOUVREZ PANTHERS'
    ],
    [
        'name' => 'SPARROW',
        'description' => 'The spies from the east',
        'logo' => 'images/sparrow.png',
        'button_text' => 'DÉCOUVREZ SPARROW'
    ],
    [
        'name' => 'VENDETTA',
        'description' => 'A knack for revenge',
        'logo' => 'images/vendetta.png',
        'button_text' => 'DÉCOUVREZ VENDETTA'
    ] 
];

echo $twig->render("teams.html.twig", ["teams" => $teams, "data"=> $data, "page_title" => "The League"]);
?>