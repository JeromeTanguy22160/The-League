<?php

class Media extends AbstractManager
{
    public function __construct() {
        parent::__construct();
    }
    
    public function findAll(): array {
        $query = $this->db->prepare('SELECT * FROM categories');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $categories = [];
        
        foreach ($result as $item) {
            $category = new Category($item["title"], $item["description"]);
            $category->setId((int)$item["id"]);
            $categories[] = $category;
        }
        
        return $categories;
    }
}