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
        } else {
            return false;
        }
    }

    function registerUser($username, $password, $phonenumber, $email, $zipcode) {
        require 'db_connect.php';
        if (insertUserInfo($username, $password, $phonenumber, $email, $zipcode)) {
            return true;
        } else {
            return false;
        }
    }

?>