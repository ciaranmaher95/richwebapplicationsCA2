<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header("Access-Control-Allow-Origin: *");

$dsn = "mysql:host=localhost;dbname=richwebca2"; 
$username = "root";
$password = "";


try
{
  $db = new PDO($dsn, $username, $password); 
  $db->setAttribute(PDO:: ATTR_EMULATE_PREPARES, false); 
  $db->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION); 
    
 error_reporting(E_ALL);
  
} 
catch (Exception $ex) 
{
   $errorMessage = $ex->getMessage();
   echo($ex);
   exit();
}


//$memID = $_POST["memID"]; 

$query1 = "SELECT * FROM images ";
$statement1 = $db->prepare($query1);

try {
    $statement1->execute();
} catch (Exception $ex) {
    header("Location: ../view/error.php?msg=" . $ex->getMessage());
    exit();
}
$images = $statement1->fetchAll();
$statement1->closeCursor();

 header('Content-Type: application/json');
 
echo json_encode($images);


