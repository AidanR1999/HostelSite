<?php
include 'Contact.php'

    function connectToDb() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$name", $username, $password);
            $conn-> setAttribute(PDO::ATR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connection successful <br />";
            return $conn;
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }

    function addContactInfo($contact) {
        $conn = connectToDb();

        $query=$conn->prepare("");
    }
?>