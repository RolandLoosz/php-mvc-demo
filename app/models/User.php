<?php
// todo . check: ez a fájl nem fut le
class User {
	private $db;

	public function __construct()
    {
		$this->db = new Database;
	}

	// Get all users
	public function getUsers()
	{
		//prepared statement
		$this->db->query("SELECT * FROM users");

		$results = $this->db->resultSet();

		return $results;
	}


}