<!DOCTYPE html>
<html>
	<head>
		<title>tWOWter</title>

		<meta name="Author" content="Tom Owen, Steve Pham, Rithvik Mandalapu, and Michael Robinson">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="styles.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php

		?>

		<div class="main">
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
						</button>
						<a class="navbar-brand" href="#">tWOWter</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="container">
				<h1>Login or Create Your Account</h1>
				<!-- Start Login form -->
				<form>
					<div class="row">
						<div class="col-md-6">
								<div class="form-group">
									<h2>New Account:</h2>
								</div>
								<div class="form-group">
									<label for="usrnm">Username:</label>
									<input type="text" name="username" class="form-control" id="createUsername" placeholder="Your awesome username" required/>
								</div>
								<div class="form-group">
									<label for="email">Email:</label>
									<input type="email" placeholder="Email" class="form-control" id="createEmail" required/>
								</div>

								<div class="form-group">
									<label for="pwd">Password:</label>
									<input type="password" placeholder="password" class="form-control" id="createPassword" required/>
								</div>

								<button type="submit" class="btn btn-default">Create Account</button>
								<!-- We may need this 
								<input type="submit" onclick="myFunction()" value="Create Account">
								-->
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<h2>Login:</h2>
							</div>

							<div class="form-group">
								<label for="usrnm">Username:</label>
								<input type="text" name="username" class="form-control" id="createUsername" placeholder="Your awesome username" required/>
							</div>

							<div class="form-group">
								<label for="pwd">Password:</label>
								<input type="password" placeholder="password" class="form-control" id="createPassword" required/>
							</div>	

							<button type="submit" class="btn btn-default">Login</button>
							<!-- We may need this 
								<input type="submit" onclick="myFunction()" value="Login">
							-->
						</div>
					</div>
				</form>		
				<!-- End Login form -->		
			</div>
			
					


		</div>

		<a href="http://validator.w3.org/check/referer">
            <img style="border:0;width:70px;height:20px;float:left;padding-right:10px;" src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1!">
        </a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">
            <img style="border:0;width:70px;height:20px;float:left;padding-right:10px;" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!">
        </a>
	</body>
</html>