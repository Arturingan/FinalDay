<!-- Connect with Sign up and Home -->

<!DOCTYPE html>
<html >
<head>
	<title>Login Page</title>
   
 	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
 
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/logstyle.css">
</head>
<body style="background-image: url('images/bg2.jpg')" >
 



<div class="container">
	<div class="login-box">
		<div class="d-flex justify-content-center h-100">
 			<div class="card" style="margin-top: 100px;">
			<div class="card-header">
				<img src="images/logo.png" style="height: 100px;">
					<h3>Sign In</h3>
							</div>
			<div class="card-body" >
<!-- ------------------------- Validation--------------------------- -->
			<form action="validation.php" method="post">
						
						<div class="input-group form-group">
						<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="user" class="form-control" placeholder="username" required>						
					</div>					
					
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="password" required>
					</div>
			

					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" style="
    					background-color: #00FF1F; margin-top: 30px;">
					
					</div>


				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="signup.php">Sign Up</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
</div>

</body>
</html>