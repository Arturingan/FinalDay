<!-- Connect with Ragistration and login -->

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
   
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/signupstyle.css">
</head>
<body style="background-image: url('images/bg2.jpg') ">



<div class="container">
	<div class="d-flex justify-content-center" >
		<div class="card">
					<img src="images/logo.png" style="height: 100px;">
			<div class="card-header">
			<h3>Sign up</h3>
			</div>
			
<div class="card-body">
	<form action="registration.php" method="post">
		<div class="input-group form-group">
			<div class="input-group-prepend">
			</div>
	
<!-- --------------FIRSTNAME------------- -->
<h5>FirstName:</h5>
<input type="text" name="first_name" class="form-control" placeholder="FirstName">
	</div>
		<div class="input-group form-group">
			<div class="input-group-prepend">
			</div>   


<!-- --------------LASTNAME-------------- -->
<h5>LastName:</h5>
<input type="text" name="last_name" class="form-control" placeholder="LastName">
	</div>
		<div class="input-group form-group">
			<div class="input-group-prepend">
			</div>  



<!-- ------------EMAIL-------------------- -->
<h5>E-mail:</h5>
<input type="email" name="email" class="form-control" placeholder="Email">
	</div>
		<div class="input-group form-group">
			<div class="input-group-prepend">
			</div>  

<!------- USERNAME ------------------>
<h5>Username:</h5>
<input type="text" name="user" class="form-control" placeholder="Username">
	</div>
		<div class="input-group form-group">
			<div class="input-group-prepend">
			</div>   
 
<!-- ----------PASSWORD------------------ -->				    
	<h5>Password:</h5>			    
<input type="password" name="password" class="form-control" placeholder="Password">
	</div>
   
 <!-- ----------CONFIRM PASSWORD------------------ -->
<!-- <input type="password" class="form-control" placeholder="Confirm Password"> -->



		

                  
      <!-------------- SUBMIT ----------------->
  						<div class="form-group ">
						<input type="submit" value="submit" class="btn float-right submit_btn">
					</div>
                    <a href="login.php">
					<button type="button" class="btn btn-outline-success">Back</button></a>
				</form>
			</div>
	  </div>
                    </div>
                 
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</body>
</html>