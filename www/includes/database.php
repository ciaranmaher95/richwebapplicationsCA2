<?php

header("Access-Control-Allow-Origin: *");

$dsn = "mysql:host=localhost;dbname=id1302644_landmarkdb"; 
$username = "id1302644_ciaranm";
$password = "hunter";


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

