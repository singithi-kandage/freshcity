<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/sign-in.css">
	<script src="../resources/library/js/jquery/jquery-3.3.1.min.js"></script>
	<script src="../resources/library/js/bootstrap/bootstrap.min.js"></script>
</head>
<body>

		<?php
			$output = ""; 
		
		?>
		<div class="background-overlay">
		
			<div class="rounded-box w-50 mx-auto">
				<div class="rounded-box-header">
					<h1 class="text-center">Sign In</h1>
				</div>
				<div class="rounded-box-body">
					<form action="php/sign-in.php" method="post" onsubmit=" return ValidateAdmin()">
						<p class="text-danger text-center" id="message"><?php echo $output?></p>
						<input class="form-control w-75 mx-auto"type="text" name="username" id="username" placeholder="Username">
						<input class="form-control w-75 mx-auto" type="password" name="password" id="password" placeholder="Password">
						<input class="form-control w-25 mx-auto" type="submit" id="submit" value="Submit">
					<form>
					<div class="text-center">
						<a class="text" href="forgot-password.php">Forgot Password?</a><br/>
						<a class="mx-auto" href="create-account.php">Create Account</a>
					</div>
				</div>
			</div>
			<br/>
			<a href="index.php"><button class=" form-control mx-auto" id="home-button">Home</button></a>	
		</div>
		<script>
			function ValidateAdmin(){
				
				var username = $("#username").val();
				var password = $("#password").val();
				var warning = $("#message");
				var message = "";
				
				warning.hide();
				warning.html("");
				
				if(username == ""){
				
					message += "Username is required. ";
				}
							
				if(password == ""){
				
					message += "Password is required. ";
				}
				
				if(message != ""){			
					warning.text(message);
					warning.show();
					return false;			
				}
				else{
					return true;
				}
			
			}
		</script>
</body>
</html>

