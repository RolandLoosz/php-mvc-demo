<?php
class Model {

    // Connects to the database
    function connect() {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $name = "php_application";

        $conn = mysqli_connect($host, $user,$pass) or die("Connection failure!");
        if (false == mysqli_select_db($conn, $name)) {
            return null;
        }

        mysqli_query($conn, "SET NAMES UTF-8");
        mysqli_query($conn, "SET character_set_results=utf8");
        mysqli_set_charset($conn, "utf8");

        return $conn;
    }

    // Returns the users
    function getUsers() {
        if (!($conn = Model::connect())) {
            return false;
        }

        $result = mysqli_query($conn, "SELECT * FROM users ORDER BY name");
        if ($result == false) {
            die(mysqli_error($conn));
        }
        mysqli_close($conn);
        return $result;
    }

    // Returns the aadvertisements (and the associated user)
    function getAdvertisements() {
        if (!($conn = Model::connect())) {
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