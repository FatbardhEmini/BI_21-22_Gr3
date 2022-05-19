<?php 
// Imports
require 'config/db.php';

class Blog {
    private Database $db;
    private string $tableName = 'blogs';

    public function __construct() {
        $this->db = new Database();
        $this->initialize();
    }

    public function initialize()
    {
        $query = "CREATE TABLE IF NOT EXISTS " . $this->tableName . " (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(30) NOT NULL,
            excerpt TEXT NOT NULL,
            published BOOL DEFAULT false,
            thumbnail VARCHAR(300) NOT NULL,
            tags VARCHAR(100) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        if(!$this->db->query($query)) printf("Error message: %s\n", $this->db->error);
    }

    public function index() {
        $query = 'SELECT * FROM ' . $this->tableName . ';';
        return $this->db->get_results($query);
    }


    public function seed()
    {
        $posts = [
            [
                "title" => "What we can explain",
                "excerpt" => "Appalicious covers a wide range of math topics, so we can be your study buddy from second grade to senior year...",
                "tags" => "fun,creative,experience",
                "published" => true,
                "created_at" => date("Y/m/d"),
                "thumbnail" => "https://images.unsplash.com/photo-1648737155328-0c0012cf2f20?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170",
            ]
        ];
        
        $column_names = array_keys($posts[0]);
        
        $query = 'INSERT INTO `blogs` (' . implode(",", $column_names) . ') VALUES';
        foreach($posts as $index=>$post) {
            $query .= "('" . implode("','", array_values($post)) . "')";
            if($index == count($posts) - 1) $query .= ';';
            else $query .= ',';
        }
        if(!$this->db->query($query)) printf("Error message: %s\n", $this->db->error);
        else return $this->index();
    }
}

