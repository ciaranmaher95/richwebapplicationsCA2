<?php

header("Access-Control-Allow-Origin: *");
// Tell the server we're sending JSON, then simple echo encoded data

include 'database.php';


 
  header('Content-Type: application/json');
  // --------------------------------------------------------------------
  // GETTING THE UPLOAD AND STORING BLOB
  // --------------------------------------------------------------------


  // Get the temporary location (on the server) the file was uploaded to
  $file_location = $_FILES['fileUpload']['tmp_name'];

  // Get the file binary data (THIS IS WHAT YOU WOULD STORE IN THE BLOB)
  
  $file_data = file_get_contents($file_location);
  
  $image = addslashes(base64_encode($file_data ));

$userid = filter_input(INPUT_POST, 'userid');
  $title = filter_input(INPUT_POST, 'title');
$desc = filter_input(INPUT_POST, 'desc');

$lat = filter_input(INPUT_POST, 'lat');
$lng = filter_input(INPUT_POST, 'lng');

    $query = "INSERT INTO images(userid, title, description, image, lat, lng) VALUES(:userid,:title, :desc, :image, :lat, :lng)";
    $statement = $db->prepare($query);
    $statement->bindValue(":userid", $userid);
    $statement->bindValue(":title", $title);
    $statement->bindValue(":desc", $desc);
    $statement->bindValue(":image", $image);
    $statement->bindValue(":lat", $lat);
    $statement->bindValue(":lng", $lng);
    try {
        $statement->execute();
    } catch (Exception $ex) {
        echo($ex);
        exit();
    }
    $statement->closeCursor();
    
    
