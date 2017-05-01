<!DOCTYPE html>
<html style="background-color:#282d32;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Tom Owen, Rithvik Mandalapu, Steve Pham, Michael Robinson">
    <title>tWoWter</title>
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
    <?php
        require_once('/home/owent0/source_html/web/Semester-Project/Connect.php');
        $dbh = ConnectDB();
    ?>
    <div>
        <div class="header-dark" style="background-size:auto;background-color:rgb(40,45,50);">
            <nav class="navbar navbar-default navigation-clean-search">
                <div class="container">
                    <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html">tWoWter <i class="fa fa-magic"></i></a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav"></ul>
                        <p class="navbar-text navbar-right"><a class="navbar-link login" href="index.php">Log In / Signup</a> </p>
                    </div>
                </div>
            </nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="text-center">The #1 place for WoW lovers.</h1></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 style="color:#fff;">Posts: </h1>
        <div class="row">
            <div class="col-md-12">
                <p class="text-left" style="color:red; font-size:20px; background-color:#fff;margin-bottom:0;">A message from our sponsor:</p>
                <p class="text-center" style="font-size:18px;background-color:#fff;margin-bottom:0;">Strike now, heroes, while he is weakened! Vanquish the Deceiver! </p>
            </div>
            <div class="col-md-12">
                <p class="text-left" style="font-size:18px;background-color:#fff;color:blue;padding-left:5px;">Kalec </p>
            </div>
            <?php
                try {
                    $query = "SELECT * FROM posts JOIN users ON (posts.user_id = users.user_id)";
                    $stmt = $dbh->prepare($query);

                    $stmt->execute();
                    $posts = $stmt->fetchAll(PDO::FETCH_OBJ);
                    $stmt = null;

                    foreach ($posts as $post) {
                        echo "<div class='col-md-12'>";
                        echo "  <p class='text-center' style='font-size18px;background-color:#fff;margin-bottom:0;'>$post->text</p>";
                        echo "</div>";

                        echo "<div class='col-md-12'>";
                        echo "  <p class='text-left' style='font-size18px;background-color:#fff;color:blue;padding-left:5px;'>$post->username</p>";
                        echo "</div>";
                    }
                } catch(PDOException $e) {
                    die ('PDO error in Getting Posts' . $e->getMessage());
                }         
            ?>
        </div>
    </div>
    <div class="container">
        <h2 style="color:#fff;">Make a Post</h2>
        <div class="row">
            <div class="col-md-12" style="font-size:16px;">
                <textarea rows="6" name="post" required="" autocomplete="off" style="width:100%;"></textarea>
            </div>
            <div class="col-md-1 col-md-offset-11 col-sm-offset-10 col-xs-offset-9">
                <button class="btn btn-default" type="submit">Post </button>
            </div>
        </div>
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
