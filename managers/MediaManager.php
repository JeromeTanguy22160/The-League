<?php

class MediaManager extends AbstractManager
{
    public function __construct() {
        parent::__construct();
    }
    
    public function findOne(int $id): ?Media {
        $query = $this->db->prepare('SELECT * FROM media WHERE id = :id');
        $parameters =
        [
            "id" => $id    
        ];
        $query->execute($parameters);
        $item = $query->fetch(PDO::FETCH_ASSOC);

        if ($item) {
            $media = new Media($item["url"], $item["alt"]);
            $media->setId($item["id"]);
            return $media;
        }
        return null;
    }
    
    public function findAll(): array {
        $medias=[];
        $query = $this->db->prepare('SELECT * FROM media');
        $query->execute();
        $items = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($items as $item) {
            $media = new Media($item["url"], $item["alt"]);
            $media->setId($item["id"]);
            $medias[]= $media;
        }
        return $medias;
    }
}