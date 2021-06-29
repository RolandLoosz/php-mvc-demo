<?php
class Advertisement {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function findAllAds()
    {

        $this->db->query('SELECT * FROM advertisements ORDER BY title');

        $results = $this->db->resultSet();

        return $results;
    }
}