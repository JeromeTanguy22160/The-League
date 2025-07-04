<?php



class PlayersManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function findOne(int $id): ?Players
{
    $query = $this->pdo->prepare('SELECT * FROM players WHERE id = :id');
    $query->execute(['id' => $id]);
    $row = $query->fetch(PDO::FETCH_ASSOC);
    
    if ($row) {
        $mm = new MediaManager($this->db);
        
        $portrait = $mm->findOne($row['portrait']);
        
        
        $player = new Players($row['nickname'], $row['bio'], $row['portrait'], $row['team']);
        $player->setId($row['id']);
        return $player;
    }
    return null;
} 

   public function findAll(): array
   
   {
       $query = $this->db->query('SELECT * FROM players');
       $results = $query->FetchAll(PDO::FETCH_ASSOC);
       $players = [];
       
       $mm = new MediaManager($this->db);
       
       foreach ($results as $row) {
           $portrait = $mm->findOne($row['portrait']);
           $player = new Players($row['nickname'], $row['bio'], $row['portrait'], $row['team']);
           $player->setId($row['id']);
           $players[] = $player;
       }
       return $players;
   }
}
?>