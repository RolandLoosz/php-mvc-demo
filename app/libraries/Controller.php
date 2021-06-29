<?php
// todo . delete
// Load the model and the view
class Controller {
	public function model($model)
	{
		// Require model file
		require_once '../app/models/' . $model . '.php';
		// Instantiate model
		return new $model();
	}

	// todo . delete
	// Load the view (checks for the file)
	public function view($view, $data = [])
	{
		if (file_exists('../app/views/' . $view . '.php')) {
			require_once '../app/views/' . $view . '.php';
		} else {
			die("View does not exists.");
		}
	}

/*
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
        if (!($conn = Controller::connect())) {
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
        if (!($conn = Controller::connect())) {
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
*/
}