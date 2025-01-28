<?php
include('inc/connection.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
      	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="ROBOTS" content="NOINDEX,NOFOLLOW">
    <meta name="author" content="Joshua Stafford">
    <meta name="description" content="Contact-us">

	<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="js/slick/slick.css">
    <link rel="stylesheet" href="js/slick/slick-theme.css">
    </head>
    <body>
        <?php include ('inc/cookies.php'); ?>
        <div class="wrapper wrapper-center">
            <?php include ('inc/header.php'); ?>

            <div class="container middle">
                <div class="our-office-nav-container">
                    <ul class="our-office-nav">
                        <li><a href="index.php">Home /</a></li>
                        <li>Our Offices</li>
                    </ul>
                </div>
            </div>

            <?php include ('inc/footer.php'); ?>
        </div>
    <?php include ('inc/side-menu.php'); ?>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="js/slick/slick.min.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>