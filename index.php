<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Ariella Kirsch</title>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<style>
.thumbnail {
    position: relative;
    border: 0 none;
    box-shadow: none;
}

.caption {
    color: #eee;
    text-shadow: 2px 2px #111;
    position: absolute;
    top: 15%;
    left: 0%;
    width: 100%;
}
</style>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W9CSBW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W9CSBW');</script>
<!-- End Google Tag Manager -->
</head>
<body>
<div style="padding:10px;">

<?php session_start(); ?>

<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Ariella Kirsch</a>
    </div>
    <div id="navbar" name="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="books/">Books</a></li>
        <li><a href="map/">Map</a></li>
        <!--<li><a href="tictactictactoe/">TicTacTicTacToe</a></li>-->
      </ul>
<?php
if ($_SESSION['user']==NULL){
echo '<form action="login.php" method="POST" class="navbar-form navbar-right">
        <div class="form-group">
      <input type="email" name="email" required placeholder="Email" class="form-control">
    </div>
    <div class="form-group">
      <input type="password" name="password" required placeholder="Password" class="form-control">
    </div>
         <input type="hidden" name="currentpage" value="/" />
    <button type="submit" class="btn btn-default">Sign in</button>
    <a href="signup.php" class="btn btn-default">Sign Up</a>
       </form>';
} else{
echo '<form action="logout.php" method="POST" class="navbar-form navbar-right">
      <input type="hidden" name="currentpage" value="/" />
    <button type="submit" class="btn btn-default">Logout</button>
       </form>';
}
?>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<center>
<div class="row" id="box-search" width="90%">
    <a href="books">
    <div class="thumbnail text-center">
        <img src="images/books.jpg" alt="" class="img-responsive img-rounded" width="960" height="150">
        <div class="caption">
            <h1 style="color:#fff;">Books</h1>
        </div>
    </div>
    </a>
</div>
<div class="row" id="box-search" width="90%">
    <a href="map">
    <div class="thumbnail text-center">
        <img src="images/globe.jpg" alt="" class="img-responsive img-rounded" width="960" height="150">
        <div class="caption">
            <h1 style="color:#fff;">Map</h1>
        </div>
    </div>
    </a>
</div>
<!--<div class="row" id="box-search" width="90%">
    <a href="tictactictactoe">
    <div class="thumbnail text-center">
        <img src="images/tictactoe.png" alt="" class="img-responsive img-rounded" width="960" height="150">
        <div class="caption">
            <h1 style="color:#fff;">TicTacTicTacToe</h1>
        </div>
    </div>
    </a>
</div>-->

</center>

</div>
</body>
</html>
