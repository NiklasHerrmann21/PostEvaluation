﻿<?php 
 include("connect.php");
    session_start();
    $status = "failure";
    $response = "keine passende ID";

    $_kontrolle = "SELECT * from user Where email='".$_GET["email"]."' and id='".$_GET["id"]."' and Random='".$_GET["random"]."';";
	$result = mysqli_query($connect, $_kontrolle);
	$count = mysqli_num_rows($result);
	$_SESSION['email'] = $_GET["email"];

	if($count == 0) {
          header("location: index.php");
          }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Anmeldung</title>
</head>
<body id="logreg">
        <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-login">
                            <div class="panel-heading">
                                <div class="welcome-text">
                                    <p><h3>Passwort zurücksetzen bei PoValue</h3></p> 
                                    <hr>     
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                           <form id="login-form" method="post" role="form" style="display: block;">
                                            
                                               
                                                <div class="form-group">
                                                    <input autocomplete="off" type="password" id="password" tabindex="2" class="form-control" placeholder="Passwort">
                                                </div>
                                                <div class="form-group">
                                                    <input autocomplete="off" type="password" id="password-confirm" tabindex="2" class="form-control" placeholder="Passwort bestätigen">
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-sm-offset-3">
                                                            <input type="button" class="btn btn-lg btn-primary btn-block" value="Passwort zurücksetzen" onclick="pwreset()" method="post"></input>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p class="mt-5 mb-3 text-muted">&copy; 2019 PoValue</p>
            </div>
     <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                <script src="functions.js"></script>
</body>
</html>