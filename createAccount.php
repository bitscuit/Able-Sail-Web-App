<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Get form information and store within variable
	$username = ($_POST["username"]);
	$email = ($_POST["email"]);
	$password = ($_POST["password"]);
	$cPassword = ($_POST["cPassword"]);	
		// Include helper functions
	include("./data_model/model.php");

	$model = new Database_Reader;

		// If valid user, insert information into database
	if ($model->valid_user($username, $password) === true){
		$model->new_user($username, $email, $password);
	};

	header('Location: register.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript" src="createAccountScript.js"></script>
	<link rel="stylesheet" type="text/css" href="PLACEHOLDER.css">
	<meta charset="UTF-8">
	<title>Create Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="demoFiles/theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<section class="container">
		<h1>Create Account</h1>
	<form action="register.php" method="post" id="form" onsubmit="return finalValidate('username', 'results')">
		<div class="form-group">
			<label for="username">Enter your Username: </label>
			<input class="form-control" type="text" name="username">
		</div>
		<div class="form-group">
			<label for="password">Enter your Password: </label>
			<input class="form-control" type="password" name="password">
		</div>
		<div class="form-group">
			<label for="password">Confirm your password: </label>
			<input class="form-control" type="password" name="password">
		</div>
		<div class="form-group">
			<label for="email">Enter your Email: </label>
			<input class="form-control" type="email" name="email">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary form-control">
		</div>

		<h3 id="results"><h3>
		</form>
	</section>		
</body>
</html>