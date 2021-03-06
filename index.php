<?php
// index.php Logging in for tWoWter
// Tom Owen Rithvik Mandalapu Steve Pham Michael Robinson

session_start();

?>

<?php
    require_once('/home/owent0/source_html/web/Semester-Project/Connect.php');
    $dbh = ConnectDB();
        
    $_SESSION['userID'] = 0;
?>

<?php

    if(isset($_POST['login']) &&
        isset($_POST['username']) && !empty($_POST['username']) &&
        isset($_POST['password']) && !empty($_POST['password']) ) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['userid'] = 0;
            try {
                
                $username = $_POST['username'];
                $pass = $_POST['password'];
                
                $query = "SELECT * FROM users WHERE username='$username' AND password='$pass'";
                $stmt = $dbh->prepare($query);
                
                $stmt->execute();

                $users = $stmt->fetchAll(PDO::FETCH_OBJ);

                $rows = $stmt->rowCount();
                $stmt = null;
                if($rows > 0) {
                    $query = "SELECT user_id FROM users WHERE username='$username'";
                    $stmt = $dbh->prepare($query);

                    $stmt->execute();

                    $use = $stmt->fetchAll(PDO::FETCH_OBJ);
                    
                    $userid = 0;

                    foreach($use as $user) {
                        $userid = $user->user_id;
                    }
                    $_SESSION['userid'] = $userid;
                    $_SESSION['username'] = $username;
                    $stmt = null;

                    header("Location:session.php");
                } 
                else {
                    echo "<p style='color: red;'>Couldn't log you in</p> \n";
                }

            } catch(PDOException $e) {
                die('PDO error inserting(): '. $e->getMessage());
                echo "<p>Could not sign you up</p> \n";
            }
    }
?>
<!DOCTYPE html>
<html style="background-color:rgb(40,45,50);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Tom Owen, Rithvik Mandalapu, Steve Pham, Michael Robinson">
    <title>tWoWter Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
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
                    <div class="navbar-header"><a class="navbar-brand navbar-link">tWoWter <i class="fa fa-magic"></i></a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <p class="navbar-text navbar-right"><a class="navbar-link login" href="signup.php">Sign up</a> </p>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="login-clean" style="background-color:rgb(40,45,50);">
        <form action="" method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate" style="color:rgb(238,9,47);"></i></div>
            <div class="form-group">
                <input class="form-control" type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" name="login" style="background-color:rgb(238,9,47);">Log In</button>
            </div>
        </form>
    </div>

    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-6 item text">
                        <h3>tWoWter </h3>
                        <p>A social media site where all WoW lovers can get together and talk about WoW.</p>
                    </div>
                    <div class="col-md-3 col-md-pull-6 col-sm-4 item">
                        <h3>About</h3>
                        <h3>Team Members:</h3>
                        <ul>
                            <li><a href="http://elvis.rowan.edu/~owent0/web/hw2-list/hw2-list.html">Tom Owen</a>
                                <a href="https://github.com/owent0" style="padding-left:10px;"> <i class="fa fa-github"></i></a>
                            </li>
                            <li><a href="http://elvis.rowan.edu/~mandalapr0/web/hw2-list/hw2-list.html">Rithvik Mandalpu</a></li>
                            <li><a href="http://elvis.rowan.edu/~phams0/web/hw2-list/hw2-list.html">Steve Pham</a></li>
                            <li><a href="http://elvis.rowan.edu/~robinsonm5/web/hw2-list/hw2-list.html">Michael Robinson</a></li>
                        </ul>
                    </div>
                </div>
                <p class="copyright">tWoWter 2017</p>
                <p style="color:#ffffff;font-size:18px;"> <a href="http://validator.w3.org/check/referer" style="color:#ffffff;">HTML </a> / <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" style="color:#ffffff;">CSS </a></p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
