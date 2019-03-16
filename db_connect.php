<?php
    
    //Checks whether the user exists in the DB or not.
    // Argument: un = username
    function checkIfUserExists($un) {
        require 'db_config.php';
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $sql = 'SELECT user_name FROM user WHERE user_name = :domain_name';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':domain_name', $un);
        $stmt->execute();
        $result = $stmt->fetchAll();

        if ($result[0] === NULL) {
            return false;
        } else {
            return true;
        }
    }

    // Logging the user in. 
    // Argument: un = username
    // Argument: pw = password
    function authentificateUser($un, $pw) {
        require 'db_config.php';
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $sql = 'SELECT user_id FROM user WHERE user_name = :domain_name AND user_password = :domain_pass';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':domain_name', $un);
        $stmt->bindParam(':domain_pass', $pw);
        $stmt->execute();
        $result = $stmt->fetchAll();
        
        if ($result[0] == NULL) {
            return false;
        } else {
            return true;
        }
    }

 

?>