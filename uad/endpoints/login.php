<?php
  include("../connection.php");
  $data = json_decode(file_get_contents("php://input"));
  
  $password = $data->password;
  $username = $data->username;
  
  $userInfo = $db->query("SELECT email FROM users 
  		WHERE email ='$username' AND passwrod='$password'");
  echo $username;
  echo $password;
  echo $userInfo->num_rows;
  if ($userInfo->num_rows > 0) {
  	echo "<table><tr><th>ID</th><th>Name</th></tr>";
  	// output data of each row
  	while($row = $userInfo->fetch_assoc()) {
  		echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
  	}
  	echo "</table>";
  } else {
  	echo "0 results";
  }
  
  echo json_encode($userInfo)

?>