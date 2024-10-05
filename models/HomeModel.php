<?php

class HomeModel {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function getProjets(){
        $this->db->query('SELECT * FROM projets');
        return $this->db->resultSet();
    }
}