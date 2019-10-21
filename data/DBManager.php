<?php
    include 'Contact.php'

    function connectToDb() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hostelSite";
        
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

        if($conn != null) {
            $query=$conn->prepare("INSERT INTO Contacts VALUES(?, ?, ?, ?)");

            $query->bindParam(1, $contact->forename);
            $query->bindParam(2, $contact->surname);
            $query->bindParam(3, $contact->email);
            $query->bindParam(4, $contact->message);
        }
        else {
            echo "Error: could not write contact info to database"
        }
?>