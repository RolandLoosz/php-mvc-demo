<?php
// todo . check: ez a fájl nem fut le
class Advertisement {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function findAllAds()
    {
        echo 'hi';

        $this->db->query('SELECT * FROM advertisements ORDER BY title');

        $results = $this->db->resultSet();

        return $results;
    }
}