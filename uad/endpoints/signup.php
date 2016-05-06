<?php
    include("../connection.php");
    $data = json_decode(file_get_contents("php://input"));
    $username = $data->username;
    $password = $data->password;
    
    $q = "INSERT INTO users (email, password) VALUES (?, ?)";
    
    $query = $db->prepare($q);
    $query->bind_param( "ss", $username, $password);
    $query->execute();
    /*  $execute = $query->execute(array(
     ":email" => "abc",
     ":password" => "abc"
     ));
    */
     
    echo json_encode($username);
   
?>