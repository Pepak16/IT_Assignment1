<?php

    // Logging the user in. 
    // Argument: un = username
    // Argument: pw = password
    function authentificateUser($un, $pw) {
        require_once 'db_config.php';
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

    function insertUserInfo($un, $pw, $pn, $em, $zc) {
        try {
            require_once 'db_config.php';
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = 'INSERT INTO user 
                    SELECT * FROM (SELECT :domain_id,:domain_name,:domain_pass,:domain_phone,:domain_email,:domain_zipcode) AS tmp
                    WHERE NOT EXISTS (SELECT `user_name` FROM user WHERE `user_name` = :domain_name) LIMIT 1';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':domain_id', uniqid());
            $stmt->bindParam(':domain_name', $un);
            $stmt->bindParam(':domain_pass', $pw);
            $stmt->bindParam(':domain_phone', $pn);
            $stmt->bindParam(':domain_email', $em);
            $stmt->bindParam(':domain_zipcode', $zc);
            $stmt->execute();
            $count = $stmt->rowCount();

            if ($count == 1) {
                echo 'true';
            } else {
                echo 'false';
            }
            return true;

        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }


?>