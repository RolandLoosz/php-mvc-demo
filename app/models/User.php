<?php
class User {
	private $db;

	// todo . check usage
	public function __construct()
    {
		$this->db = new Database;
	}

	// Get all users
    /*
	public function getUsers()
	{
		//prepared statement
		$this->db->query("SELECT * FROM users");

		$results = $this->db->resultSet();

		return $results;
	}
    */

    function connect() {
        $host = "localhost";
        $user = "root";
        $pass = "";

        $conn = mysqli_connect($host, $user,$pass) or die("Connection failure!");
        if (false == mysqli_select_db($conn,"php_application")) {
            return null;
        }

        mysqli_query($conn, "SET NAMES UTF-8");
        mysqli_query($conn, "SET character_set_results=utf8");
        mysqli_set_charset($conn, "utf8");

        return $conn;
    }

    function getUsers() {
        if (!($conn = User::connect())) {
            return false;
        }

        $result = mysqli_query($conn, "SELECT * FROM users ORDER BY name");
        if ($result == false) {
            die(mysqli_error($conn));
        }
        mysqli_close($conn);
        return $result;
    }

    function getAdvertisements() {
        if (!($conn = User::connect())) {
            return false;
        }

        $stmt = "SELECT advertisements.title as ad_title, users.name as username FROM advertisements, users WHERE advertisements.userid = users.id ORDER BY ad_title";

        $result = mysqli_query($conn, $stmt);
        if ($result == false) {
            die(mysqli_error($conn));
        }
        mysqli_close($conn);
        return $result;
    }

}