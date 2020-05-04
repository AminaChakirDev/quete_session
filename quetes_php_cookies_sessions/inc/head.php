<?php
    session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    setCookie("panier[]", 0);
    if (isset($_COOKIE["panier"])) {
        $panier = $_COOKIE["panier"];
        if (isset($_GET["add_to_cart"])) {
            switch ($_GET['add_to_cart']) {
                case "36":
                    $panier["36"]++;
                    setCookie("panier[36]", $panier["36"]);
                    break;
                case "46":
                    $panier["46"]++;
                    setCookie("panier[46]", $panier["46"]);
                    break;
                case "58":
                    $panier["58"]++;
                    setCookie("panier[58]", $panier["58"]);
                    break;
                case "32":
                    $panier["32"]++;
                    setCookie("panier[32]", $panier["32"]);
                    break;
            }
        }
    }
if (isset($_GET['deconnexion'])) {
        if ($_GET['deconnexion'] == "deconnexion") {
            $_SESSION = array();
            session_destroy();
            unset($_SESSION);
           }
       }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Cookie Factory</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/styles.css"/>
</head>
<body>
<header>
    <!-- MENU ENTETE -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img class="pull-left" src="assets/img/cookie_funny_clipart.png" alt="The Cookies Factory logo">
                    <h1>The Cookies Factory</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Chocolates chips</a></li>
                    <li><a href="#">Nuts</a></li>
                    <li><a href="#">Gluten full</a></li>
                    <li>
                        <a href="/cart.php" class="btn btn-warning navbar-btn">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                            Cart
                        </a>
                    </li>
                    <li>
                        <a href="?deconnexion=deconnexion" class="btn btn-warning navbar-btn">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                            Deconnexion
                        </a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid text-right">
        <strong>Hello <?php if (!empty($_SESSION['loginname'])) { echo $_SESSION['loginname'];} else { echo "Wilder";}?> !</strong>
    </div>
</header>
