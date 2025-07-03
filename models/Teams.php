<?php

require "Media.php";

class Team {
    private ? int $id = null;
    
    public function __construct(private string $name, private string $description , private Media $media){
        
    }
    
    public function getId() :? int{
        return $this -> id;
    }
    public function setId(int $id) : void{
        $this -> id = $id;
    }
    
    public function getName() : string{
        return $this -> name;
    }
    public function setName(int $name) : void{
        $this -> name = $name;
    }
    
    public function getDescription() :string{
        return $this -> description;
    }
    public function setDescription(int $description) : void{
        $this -> description = $description;
    }
    
    public function getMedia() : Media{
        return $this -> media;
    }
    public function setMedia(Media $media) : void{
        $this -> media = $media;
    }
}

?>