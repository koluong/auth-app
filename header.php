<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bithereum Exchange</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
        <link href="css/style.css" rel="stylesheet">
    </head>
<body>

    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Bithereum</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="user.php">Portfolio</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cred.php">Login</a></li>
                    <li><a href="https://www.gdax.com">Built on GDAX</a></li>
                </ul>
                </div>
            </div>
        </nav>
    </header>