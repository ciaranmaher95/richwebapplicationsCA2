<?php

  // !!! IMPORTANT !!!
  // This is a very simple example for demonstration 
  // purposes only. At a minimum, you should add 
  // error-checking etc. 
  
  // Note: this is needed to allow requests from 
  // other domains (or from file-system files etc)
  header("Access-Control-Allow-Origin: *");
  
  // Tell the server we're sending JSON, then simple echo encoded data
  header('Content-Type: application/json');
  
  // --------------------------------------------------------------------
  // GETTING THE UPLOAD AND STORING BLOB
  // --------------------------------------------------------------------

  // Get the temporary location (on the server) the file was uploaded to
  $file_location = $_FILES['fileUpload']['tmp_name'];

  // Get the file binary data (THIS IS WHAT YOU WOULD STORE IN THE BLOB)
  $file_data = file_get_contents($file_location);


  // --------------------------------------------------------------------
  // GETTING THE UPLOAD AND STORING BLOB
  // --------------------------------------------------------------------

  // To send the blob as an AJAX response (JSON)
  // 1. Blob needs to be base64 encoded to send as JSON (i.e. turned into a string)
  // See HTML file for how to display

  echo json_encode(base64_encode($file_data));

?>

