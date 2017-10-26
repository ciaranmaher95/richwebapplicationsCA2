<?php

header("Access-Control-Allow-Origin: *");

include 'database.php'; 

 header('Content-Type: application/json');

    $f_name = filter_input(INPUT_POST, 'first-name');
    $l_name = filter_input(INPUT_POST, 'last-name');
    $dob = filter_input(INPUT_POST, 'date');
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password');
    $password_hash = md5($password);
    
    $query = "INSERT INTO members(fname, lname, dob, email, username, password) VALUES(:f_name, :l_name, :dob, :email, :username, :password)";
    $statement = $db->prepare($query);
    $statement->bindValue(":f_name", $f_name);
    $statement->bindValue(":l_name", $l_name);
    $statement->bindValue(":dob", $dob);
    $statement->bindValue(":email", $email);
    $statement->bindValue(":username", $username);
    $statement->bindValue(":password", $password_hash);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        header("Location: ../view/error.php?msg=" . $ex->getMessage());
        exit();
    }
    $statement->closeCursor();


