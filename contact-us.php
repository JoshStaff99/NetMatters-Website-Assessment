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

            <div class="our-office-nav-container">
                <div class="container middle">
                    <ul class="our-office-nav">
                        <li><a href="index.php">Home</a></li>
                        <li>Our Offices</li>
                    </ul>
                </div>
            </div>

            <div class="section-top">
                <div class="container">
                    <h1 class="section-top-title">Our Offices</h1>
                </div>
            </div>

            <div class="office-addresses">
                <div class="service-list container">
                    <div class="office-address-row">
                        <div class="office-address-item">
                            <div class="office-image">
                                <a href="#"><img class="office-image-full" src="img/contact-us-img/cambridge.jpeg" alt="Cambridge Office"></a>
                            </div>
                            <div class="office-content">
                                <p class="h2"><a class="office-title" href="#">Cambridge Office</a></p>
                                <p class="p">
                                    Unit 1.31 
                                    <br>
                                    St Hohn's Innovation Centre,
                                    <br>
                                    Cowley Road, Milton,
                                    <br>
                                    Cambridge,
                                    <br>
                                    CB4 0WS
                                </p>
                                <div class="tel">
                                    <a class="text-web" href="#">01223 37 57 72</a>
                                </div>
                                <div class="office-btn-container">
                                    <a class="btn btn-web office-item-btn" href="#">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="office-address-item">

                        </div>
                        <div class="office-address-item">

                        </div>
                    </div>
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