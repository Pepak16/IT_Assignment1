<?php

// if (authentificateUser('Jens','123123pp')) {
//     echo 'logged in';
// } else {
//     echo 'fail';
// }

    function loginUser($username, $password) {
        require 'db_connect.php';
        if (authentificateUser($username,$password)) {
            return true;
            echo 'logged in successfully';
        } else {
            return false;
            echo 'wrong user info';
        }
    }


?>