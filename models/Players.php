<?php
class Players
{
     private ?int $id = null;
    private string $nickname;
    private string $bio;
    private ?Media $portrait;
    private ?int $team = null; 
      
    public function __construct(string $nickname, string $bio, ?Media $portrait, ?int $team = null)
   {
       
        $this->nickname = $nickname;
        $this->bio = $bio;
        $this->portrait = $portrait;
        $this->team = $team;
   }
    // GET GET GET GET GET GET GET GET GET GET GET GET GET GET GET GET GET GET GET GET GET GET GET GET GET GET GET
   public function getId(): int
    {
        return $this->id;
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function getPortrait(): ?Media
    {
        return $this->portrait;
    }

    public function getTeam(): ?int
    {
        return $this->team;
    }
    // SET SET SET SET SET SET SET SET SET SET SET SET SET SET SET SET SET SET SET SET SET SET SET SET
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setNickname(string $nickname): void
    {
        $this->nickname = $nickname;
    }

    public function setBio(string $bio): void
    {
        $this->bio = $bio;
    }

    public function setPortrait(Media $portrait): void
    {
        $this->portrait = $portrait;
    }

    public function setTeam(?int $team): void
    {
        $this->team = $team;
    }
}
?>