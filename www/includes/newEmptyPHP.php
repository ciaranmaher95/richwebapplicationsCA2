<?php

include 'database.php';

    $query = "SELECT image FROM images WHERE id=1";
    $statement = $db->prepare($query);
    $statement->execute();
    $image = $statement->fetch(); 
    $img = $image['image'];
    // $file_data = file_get_contents($image);
    try {
        
    } catch (Exception $ex) {
        header("Location: ../view/error.php?msg=" . $ex->getMessage());
        exit();
    }
    $statement->closeCursor();
    
   echo '<img src="data:image/jpeg;base64,' .$image['image'] .'"/>';
      
    