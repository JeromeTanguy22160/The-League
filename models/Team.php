<?php


class Team {
    private ?int $id = null;
    private ?Media $media = null;
    
    public function __construct(private string $name, private string $description){
        
    }
    
    public function getId() :?int{
        return $this -> id;
    }
    public function setId(int $id) : void{
        $this -> id = $id;
    }
    
    public function getName() : string{
        return $this -> name;
    }
    public function setName(string $name) : void{
        $this -> name = $name;
    }
    
    public function getDescription() :string{
        return $this -> description;
    }
    public function setDescription(string $description) : void{
        $this -> description = $description;
    }
    
    public function getMedia() :?Media{
        return $this -> media;
    }
    public function setMedia(Media $media) : void{
        $this -> media = $media;
    }
}

?>