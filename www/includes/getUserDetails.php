<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header("Access-Control-Allow-Origin: *");

require 'database.php';

$query1 = "SELECT * FROM members";
$statement1 = $db->prepare($query1);

try {
    $statement1->execute();
} catch (Exception $ex) {
    header("Location: ../view/error.php?msg=" . $ex->getMessage());
    exit();
}
$members = $statement1->fetchAll();
$statement1->closeCursor();
 header('Content-Type: application/json');
echo json_encode($members); 



