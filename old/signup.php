<!DOCTYPE html>
<html style="background-color:rgb(40,45,50);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Tom Owen, Rithvik Mandalapu, Steve Pham, Michael Robinson">
    <title>tWOWter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color:rgb(40,45,50);">
    <div style="background-color:rgb(40,45,50);">
        <div class="header-dark" style="background-color:rgb(40,45,50);">
            <nav class="navbar navbar-default navigation-clean-search">
                <div class="container">
                    <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php">tWOWter <i class="fa fa-magic"></i></a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <p class="navbar-text navbar-right"><a class="navbar-link login" href="login.php">Log In</a> <a class="btn btn-default action-button" role="button" href="signup.php">Sign Up</a></p>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    
<?php
    if ( isset($_GET['email'])   &&  !empty($_GET['email'])   && 
     isset($_GET['password'])  &&  !empty($_GET['password'])     ) {
?>

    <div class="register-photo" style="color:rgb(1,1,1);background-color:rgb(40,45,50);">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/warlock.jpg&quot;);"></div>
            <form method="post" style="background-color:rgb(60,78,96);">
                <h2 class="text-center" style="color:rgb(230,231,234);"><strong>Create</strong> an account.</h2>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" style="background-color:rgb(74,71,244);">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
