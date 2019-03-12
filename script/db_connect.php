<?php
    require 'db_config.php';
    
    function checkIfUserExists($un) {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $sql = 'SELECT user_password FROM user WHERE user_name = :domain_name';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':domain_name', $un);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $v) {
            echo $v[0];
            echo "<br>";
            echo $v[1];
            echo "<br>";
            echo $v[2];
            echo "<br>";
            echo "<br>";
        }
    }

    checkIfUserExists('Jens');

?>