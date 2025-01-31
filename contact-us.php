<?php
//include('inc/connection.php');
//include('inc/contactform.php');

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
                <div class="office-list container">
                    <div class="office-address-row">

                        <div class="office-address-item">
                            <div class="office-image">
                                <a href="#"><img class="office-image-full" src="img/contact-us-img/cambridge.jpeg" alt="Cambridge Office"></a>
                            </div>
                            <div class="office-content">
                                <p class="h2"><a class="office-title" href="#">Cambridge Office</a></p>
                                <p class="p">
                                    Unit 1.31, 
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
                            <div class="office-image">
                                <a href="#"><img class="office-image-full" src="img/contact-us-img/wymondham.jpeg" alt="Wymondham Office"></a>
                            </div>
                            <div class="office-content">
                                <p class="h2"><a class="office-title" href="#">Wymondham Office</a></p>
                                <p class="p">
                                    Unit 15, 
                                    <br>
                                    Penfold Drive,
                                    <br>
                                    Gateway 11 Business Park,
                                    <br>
                                    Wymondham, Norfolk,
                                    <br>
                                    NR18 0WZ
                                </p>
                                 <div class="tel">
                                    <a class="text-web" href="#">01603 70 40 20</a>
                                </div>
                                <div class="office-btn-container">
                                    <a class="btn btn-web office-item-btn" href="#">View More</a>
                                </div>
                            </div>
                        </div>

                        <div class="office-address-item">
                            <div class="office-image">
                                <a href="#"><img class="office-image-full" src="img/contact-us-img/yarmouth-2.jpeg" alt="Great Yarmouth Office"></a>
                            </div>
                            <div class="office-content">
                                <p class="h2"><a class="office-title" href="#">Great Yarmouth Office</a></p>
                                <p class="p">
                                    Suite F23,
                                    <br>
                                    Beacon Innovation Centre,
                                    <br>
                                    Beacon Park, Gorleston,
                                    <br>
                                    Great Yarmouth, Norfolk,
                                    <br>
                                    NR31 7RA
                                </p>
                                <div class="tel">
                                    <a class="text-web" href="#">01493 60 32 04</a>
                                </div>
                                <div class="office-btn-container">
                                    <a class="btn btn-web office-item-btn" href="#">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container bottom-row">
                    <div class="ofh-it-support-container">
                        <div>
                            <div>
                                <p><strong>Email us on:</strong><br></p>
                                <p><a class="text-web underline">sales@netmatters.com</a></p>
                                <P><strong>Business hours:</strong></p>
                                <p><strong>Monday - Friday 07:00 - 18:00</strong></p>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div>
                                    <div class="accordion out-of-hours">
                                        <h4><a><p class="Ofh-button">Out of Hours IT Support<em class="fa fa-chevron-down rotate"></em></p></a></h4>
                                        <div class="ofh-it-support-hidden">
                                            <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks</p>
                                            <p>
                                                <strong>Monday - Friday 18:00 - 22:00</strong>
                                                <strong>Saturday 08:00 - 16:00</strong>
                                                <br>
                                                <strong>Sunday 10:00 - 18:00</strong>
                                            </p>
                                            <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours voicemail. A technician will contact you on the number provided within 45 minutes of your call.</P>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-us-form-container">
                        <form id="contact-form" name="contactForm" class="" method="POST" action="inc/contactform.php" onsubmit="return validateForm()">
                            <div class="alert alert-danger-hidden" id="alert">

                            </div>
                            <div class="form-row">
                                <div class="form-input-group form-input-left">
                                    <div class="form-group">
                                        <label class="required" for="name">Your Name</label>
                                        <input id="name" class="form-control" name="name" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-input-group form-input-right">
                                    <div class="form-group">
                                        <label class="" for="company">Company Name</label>
                                        <input id="company" class="form-control" name="company" type="text" value="">
                                    </div> 
                                </div>
                                <div class="form-input-group form-input-left">
                                    <div class="form-group">
                                        <label class="required" for="email">Your Email</label>
                                        <input id="email" class="form-control" name="email" type="email" value="">
                                    </div> 
                                </div>
                                <div class="form-input-group form-input-right">
                                    <div class="form-group">
                                        <label class="required" for="telephone">Your Telephone Number</label>
                                        <input id="telephone" class="form-control" name="telephone" type="text" value="">
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="required" for="message">Message</label>
                                <textarea id="message" class="form-control" name="message">Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?</textarea>
                            </div>
                            <div class="form-group">
                                <label class="checkbox">
                                    <span class="media">
                                        <span class="media-left checkbox-left">
                                            <span class="button">

                                            </span>
                                        </span>
                                        <span class="media-body">
                                            Please tick this box if you wish to receive marketing information from us. Please see our
                                            <a href="#" target="_blank">Privacy Policy</a>
                                            for more information on how we keep your data safe.
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-group form-label recaptcha-terms">
                                <span>
                                    This site is protected by reCAPTCHA and the Google
                                    <a href="#" target="_blank"><u>Privacy Policy</u></a>
                                    and
                                    <a href="#" target="_blank"><u>Terms of Service</u></a>
                                    apply.
                                </span>
                            </div>
                            <div class="form-action-block">
                                <button class="btn btn-primary enquiry-btn" id="submitBtn">Send Enquiry</button>
                                <small class="helper-text">
                                    <span class="text-danger">*</span>Fields Required
                                </small>
                            </div>
                        </form>
                    </div>
            </div>

        </div>
        <?php include ('inc/footer.php'); ?>
    <?php include ('inc/side-menu.php'); ?>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="js/slick/slick.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jscontact-us.js"></script>
    </body>
</html>