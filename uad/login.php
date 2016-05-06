<?php

$user = $_POST['user'];
$password = $_POST['password'];

echo "the user is " .$user

?>

<html>
	<head>
  
	</head>

	<body>
	<form action="login.php" method="post">
	<b>Username:</b>
	<input type="text" name="user" /></br></br>
	<b>Password:</b>
	<input type="text" name="password" /></br>
	<input type="submit" value="Login"/>
	</form>
	</body>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>	
<script src="js/angular-ui-router.min.js"></script>	
</html>

<?php 



?>
