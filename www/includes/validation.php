<?php 
include 'database.php';


require("addmembers.php");


    $memberUsername = filter_input(INPUT_POST, 'memberUsername');
    $memberPassword = filter_input(INPUT_POST, 'memberPassword');
    $memberPassword_hash = md5($memberPassword);
    
    $boolean = false; 

    
   $memID = member_login($db,$memberUsername, $memberPassword_hash);
    
    $name = get_member_name_by_ID($memID);
    $ifAdmin = check_member_for_admin($memID);
    if ($memID == NULL)
    {
       
       $_POST['error'] = TRUE;
       
    } else
    {
        $boolean = TRUE; 
         
        $array = array();
        array_push($array,$boolean,$memID);
 
        
        header('Content-Type: application/json');
        echo json_encode($array);
    }
   
       
