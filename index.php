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
    <meta name="description" content="Homepage">

	<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="js/slick/slick.css">
    <link rel="stylesheet" href="js/slick/slick-theme.css">
    </head>

    <body>
        <?php include ('inc/cookies.php'); ?>
        <div class="wrapper wrapper-center">
        <?php include ('inc/header.php'); ?>
        <div class="banner-outer-container">
            <div class="slides">
                <div class="banner-background banner-background-1 slide-1"> 
                    <div class="">
                        <div class="banner container">
                            <h1>The East Of England's Leading Technology Company</h1>  
                            <p>Performance-driven digital and technology services<br>with complete transparency.</p>
                            <div class="banner-btn-container">
                                <a class="btn btn-primary-banner1" href="#" target="_blank">why choose us?<span class="banner-btn-arrow icon-arrow-right2"></span></a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="banner-background banner-background-2 slide-2"> 
                    <div class="">
                        <div class="banner container">
                            <h1>Bespoke Software</h1>  
                            <p>Delivering expert bespoke software<br>solutions across a range of industries.</p>
                            <div class="banner-btn-container2">
                                <a class="btn btn-primary-banner2" href="#" target="_blank">Find Out More<span class="banner-btn-arrow icon-arrow-right2"></span></a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="banner-background banner-background-3 slide-3"> 
                    <div class="">
                        <div class="banner container">
                            <h1>IT Support</h1>  
                            <p>Fast and cost-effective IT support<br>services for your business.</p>
                            <div class="banner-btn-container3">
                                <a class="btn btn-primary-banner3" href="#" target="_blank">Find Out More<span class="banner-btn-arrow icon-arrow-right2"></span></a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="banner-background banner-background-4 slide-4"> 
                    <div class="">
                        <div class="banner container">
                            <h1>Digital Marketing</h1>  
                            <p>Generating your new business through<br>results-driven marketing activities.</p>
                            <div class="banner-btn-container4">
                                <a class="btn btn-primary-banner4" href="#" target="_blank">Find Out More<span class="banner-btn-arrow icon-arrow-right2"></span></a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="banner-background banner-background-5 slide-5"> 
                    <div class="">
                        <div class="banner container">
                            <h1>Telecoms Services</h1>  
                            <p>A new approach to connectivity, see<br>how we can help your business.</p>
                            <div class="banner-btn-container5">
                                <a class="btn btn-primary-banner5" href="#" target="_blank">Find Out More<span class="banner-btn-arrow icon-arrow-right2"></span></a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="banner-background banner-background-6 slide-6"> 
                    <div class="">
                        <div class="banner container">
                            <h1>Web design</h1>  
                            <p>For businesses looking to make a strong<br>and effective first impression.</p>
                            <div class="banner-btn-container">
                                <a class="btn btn-primary-banner6" href="#" target="_blank">Find Out More<span class="banner-btn-arrow icon-arrow-right2"></span></a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="banner-background banner-background-7 slide-7"> 
                    <div class="">
                        <div class="banner container">
                            <h1>Cyber Security</h1>  
                            <p>Keeping Businesses and their customers<br>sensitive information protected.</p>
                            <div class="banner-btn-container7">
                                <a class="btn btn-primary-banner7" href="#" target="_blank">Find Out More<span class="banner-btn-arrow icon-arrow-right2"></span></a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="our-services">
            <div class="our-services-top container">
                <h2>Our Services</h2>
                <h1><a class="view-our-work-btn" href="#">View Our Work<span class="our-services-icon-arrow-right icon-arrow-right2"></span></a></h1>
            </div>
            <div class="container">
                <div class="service-list">
                    <div class="service-container service-large-1">
                        <div class="service software">
                            <span class="software-color icon-computer"></span>
                            <h2>Bespoke Software</h2>
                            <p>Bespoke software solutions for all your business needs including integrations and reporting.</p>
                            <a class="btn btn-service btn-software">Read More</a>
                        </div>
                    </div>
                    <div class="service-container service-large-2">
                        <div class="service it-support">
                            <span class="it-support-color icon-display"></span>
                            <h2>IT Support</h2>
                            <p>Fully managed IT support and consultancy packages tailored to meet your exact business needs.</p>
                            <a class="btn btn-service btn-it-support">Read More</a>
                        </div>
                    </div>
                    <div class="service-container service-large-3">
                        <div class="service digital-marketing">
                            <span class="digital-marketing-color icon-bar-graph"></span>
                            <h2>Digital Marketing</h2>
                            <p>Driven brand awareness & ROI through creative digital marketing campaigns.</p>
                            <br>
                            <a class="btn btn-service btn-digital-marketing">Read More</a>
                        </div>
                    </div>
                    <div class="service-container-small service-small-1">
                        <div class="service telecoms-service">
                            <span class="telecoms-service-color icon-phone_in_talk"></span>
                            <h2>Telecoms Services</h2>
                            <p>Business telephony solutions including mobile & connectivity solutions.</p>
                            <a class="btn btn-service btn-telecoms">Read More</a>
                        </div>
                    </div>
                    <div class="service-container-small service-small-2">
                        <div class="service web-design">
                            <span class="web-design-color icon-embed2"></span>
                            <h2>Web Design</h2>
                            <p>User-centric design for businesses looking to make a lasting impression.</p>
                            <a class="btn btn-service btn-web-design">Read More</a>
                        </div>
                    </div>
                    <div class="service-container-small service-small-3">
                        <div class="service cyber-security">
                            <span class="cyber-security-color icon-security"></span>
                            <h2>Cyber Security</h2>
                            <p>Prevention, testing, consultancy & breach management services.</p>
                            <a class="btn btn-service btn-cyber-security">Read More</a>
                        </div>
                    </div>
                    <div class="service-container-small service-small-4">
                        <div class="service developer-training">
                            <span class="developer-training-color icon-school"></span>
                            <h2>Developer Training</h2>
                            <p>Wed design & software training courses designed to secure a job in tech.</p>
                            <a class="btn btn-service btn-developer-training">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our-services-bottom container">
                <h3 class="view-our-work"><a class="view-our-work-btn" href="#">View Our Work<span class="our-services-icon-arrow-right icon-arrow-right2"></span></a></h3>
            </div>
        </div>
        <div class="partners">
            <div class="partner-item">
                <img src="img/partner-img/google-partner.webp" alt="Google Partner Logo">
            </div>
            <div class="partner-item">
                <img src="img/partner-img/living_wage.webp" alt="Living Wage Logo">
            </div>
            <div class="partner-item">
                <img src="img/partner-img/norfolk_prohelp.webp" alt="Norfolk Prohelp Logo">
            </div>
            <div class="partner-item"> 
                <img src="img/partner-img/investing-in-future-growth.webp" alt="Investing In Future Growth Logo">
            </div>
            <div class="partner-item"> 
                <img src="img/partner-img/norfolk-carbon-charter.webp" alt="Norfolk Carbon Charter Logo">
            </div>
            <div class="partner-item"> 
                <img src="img/PPC_logo.webp" alt="PPC Logo">
            </div>
            <div class="partner-item"> 
                <img src="img/partner-img/princess-royal-training.webp" alt="Princess Royal Training Logo">
            </div>
            <div class="partner-item"> 
                <img src="img/partner-img/future-50.webp" alt="Future 50 Logo">
            </div>
            <div class="partner-item"> 
                <img src="img/partner-img/qms.webp" alt="QMS Logo">
            </div>
            <div class="partner-item"> 
                <img src="img/partner-img/iso_27001.webp" alt="Iso Logo">
            </div>
            <div class="partner-item"> 
                <img src="img/partner-img/skills-of-tomorrow.webp" alt="Skills of Tomorrow Logo">
            </div>
            <div class="partner-item"> 
                <img src="img/partner-img/cyber-essentials-colour.webp" alt="Cyber Essentials Logo">
            </div>
        </div>
        <div class="welcome-container">
            <div class="about-row container">
                <div class="about">
                    <div>
                        <h1><strong class="about-title">Welcome To Netmatters</strong></h1>
                        <p><strong>Netmatters is a Leading <a href="#">Bespoke Software,</a> <a href="#">IT Support</a>, and <a href="#">Digital Marketing</a> company based in the East of England with offices in <a href="#">Cambridge</a>, <a href="#">Wymondham</a>, and <a href="#">Great Yarmouth</a>.</strong></p>
                        <p>We aren't tied into contracts with third-party providers, so you know that our recommendations for your business are based purely with one benefit in mind: to help improve your business with the most appropiate solutions.</p>
                        <p>We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our relationship in an upfront manner.</p>
                        <div class="welcome-section-btn-container">
                            <div class="welcome-btn-container">
                                <a class="btn btn-primary-inverse" href="#" target="_blank">why choose us?<span class="welcome-arrow icon-arrow-right2"></span></a>
                            </div>
                            <div class="welcome-btn-container">
                                <a class="btn btn-primary-inverse" href="#" target="_blank">our culture<span class="welcome-arrow icon-arrow-right2"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="what-our-clients-think">
                    <div>
                        <h1><strong class="about-title">What Our Clients Think</strong></h1>
                        <span class="welcome-star icon-star-full"></span>
                        <span class="welcome-star icon-star-full"></span>
                        <span class="welcome-star icon-star-full"></span>
                        <span class="welcome-star icon-star-full"></span>
                        <span class="welcome-star icon-star-full"></span>
                        <p class="customer-quote">Netmatters stood out from the start. Great guys and very easy to work with. Both the build and digital marketing teams are clearly skilled -they know their stuff! They delivered a website to our (high!) expectations and went over and above to ensure we were satisfied clients - and we are!</p>
                        <p class="client-quote">Eleanor Bishop, Head of Marketing - <a href="#">Ashcroft Partnership LLP</a></p>
                        <div class="welcome-section-btn-container-2">
                            <div class="google-btn-container">
                                <a class="btn btn-google" href="#" target="_blank">Google Reviews<span class="welcome-arrow icon-arrow-right2"></span></a>
                            </div>
                            <div class="trustpilot-btn-container">
                                <a class="btn btn-trustpilot" href="#" target="_blank">TrustPilot Reviews<span class="welcome-arrow icon-arrow-right2"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="latest-news">
            <div class="container-latest-news-top">
                <h2><strong>Latest News</strong></h2>
                <h3><a class="latest-news-view-all-link" href="#">View All<span class="welcome-arrow icon-arrow-right2"></span></a></h3>
            </div>
            <div class="container">
                <div class="news-list">
                    <?php include('inc/news.php'); ?>
                </div>
            </div>
            <div class="view-all-mobile-container container">
                <div class="view-all-mobile">
                <h3><a class="latest-news-view-all-link" href="#">View All<span class="welcome-arrow icon-arrow-right2"></span></a></h3>
                </div>
            </div>
        </div>
        <div class="case-studies">
                <div class="case-study-item item-1">
                    <div class="case-study-description-1">
                        <div class="case-study-tooltip-1">
                            <h3>Black Swan Care Group</h3>
                            <p>
                                Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on putting the needs of their residents first.
                            </p>
                            <a class="btn case-study-button-1" href="#">View Our Case Study<span class="case-study-btn-arrow icon-arrow-right2"></span></a>
                        </div>
                        <span class="triangle-case-study-1"></span>
                    </div>
                    <div class="case-study-image-container">
                        <img src="img/black_swan_logo.webp" alt="Black Swan Logo">
                    </div>
                </div>
                <div class="case-study-item item-2">
                    <div class="case-study-description-2">
                        <div class="case-study-tooltip-2">
                            <h3>Xupes</h3>
                        </div>
                        <span class="triangle-case-study-2"></span>
                    </div>
                    <div class="case-study-image-container">
                        <img src="img/xupes_logo.webp" alt="Xupes Logo">
                    </div>
                </div>
                <div class="case-study-item item-3">
                    <div class="case-study-description-3">
                        <div class="case-study-tooltip-3">
                            <h3>Beat</h3>
                            <p>
                                The UK's eating disorder charity founded in 1989.
                            </p>
                        </div>
                        <span class="triangle-case-study-3"></span>
                    </div>
                    <div class="case-study-image-container">
                        <img src="img/beat_logo.webp" alt="Beat Logo">
                    </div>
                </div>
                <div class="case-study-item item-4">
                    <div class="case-study-description-4">
                        <div class="case-study-tooltip-4">
                            <h3>Survey Solutions</h3>
                        </div>
                        <span class="triangle-case-study-4"></span>
                    </div>
                    <div class="case-study-image-container">
                        <img src="img/survey_solutions_logo.webp" alt="Survey Solutions Logo">
                    </div>
                </div>
                <div class="case-study-item item-5">
                    <div class="case-study-description-5">
                        <div class="case-study-tooltip-5">
                            <h3>Girl Guiding Anglia</h3>
                            <p>
                                Girl Guiding Anglia is part of Girlguiding, the UK's Leading charity for girls and young women in the UK.
                            </p>
                            <a class="btn case-study-button-5" href="#">View Our Case Study<span class="case-study-btn-arrow icon-arrow-right2"></span></a>
                        </div>
                        <span class="triangle-case-study-5"></span>
                    </div>
                    <div class="case-study-image-container">
                        <img src="img/girl_guides_anglia_logo.webp" alt="Girl Guides Anglia Logo">
                    </div>
                </div>
                <div class="case-study-item item-6">
                    <div class="case-study-description-6">
                        <div class="case-study-tooltip-6">
                            <h3>Sweetzy</h3>
                            <p>
                                Sweetzy are an online sweets retailer, based in Wymondham
                            </p>
                            <a class="btn case-study-button-6" href="#">View Our Case Study<span class="case-study-btn-arrow icon-arrow-right2"></span></a>
                        </div>
                        <span class="triangle-case-study-6"></span>
                    </div>
                    <div class="case-study-image-container">
                        <img src="img/sweetzy_logo.webp" alt="Sweetzy Logo">
                    </div>
                </div>
                <div class="case-study-item item-7">
                    <div class="case-study-description-7">
                        <div class="case-study-tooltip-7">
                            <h3>Howes Percival</h3>
                        </div>
                        <span class="triangle-case-study-7"></span>
                    </div>
                    <div class="case-study-image-container">
                        <img src="img/howespercivallogo.webp" alt="Howes Percival Logo">
                    </div>
                </div>
                <div class="case-study-item item-8">
                    <div class="case-study-description-8">
                        <div class="case-study-tooltip-8">
                            <h3>GDST</h3>
                            <p>
                                The <a href="#">Girls' Day School Trust (GDST)</a> is the UK's leading family of 25 independent girls' schools.
                            </p>
                            <a class="btn case-study-button-8" href="#">View Our Case Study<span class="case-study-btn-arrow icon-arrow-right2"></span></a>
                        </div>
                        <span class="triangle-case-study-8"></span>
                    </div>
                    <div class="case-study-image-container">
                        <img src="img/girls_day_school_trust_logob.webp" alt="Girls Day School Trust Logo">
                    </div>
                </div>
                <div class="case-study-item item-9">
                    <div class="case-study-description-9">
                        <div class="case-study-tooltip-9">
                            <h3>Ashcroft Partnership LLP</h3>
                            <p>
                                Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and are one of the top chartered accountancy firms in Cambridge, advising entrepreneurs and families.
                            </p>
                            <a class="btn case-study-button-9" href="#">View Our Case Study<span href="#" class="case-study-btn-arrow icon-arrow-right2"></span></a>
                        </div>
                        <span class="triangle-case-study-9"></span>
                    </div>
                    <div class="case-study-image-container">
                        <img src="img/ashcroftlogo_landscape_goldblack_DP60P-small.webp" alt="Ashcroft Logo">
                    </div>
                </div>
                <div class="case-study-item item-10">
                    <div class="case-study-description-10">
                        <div class="case-study-tooltip-10">
                            <h3>One Traveller</h3>
                            <p>
                                <a href="#" target="_blank">One Traveller</a>, founded in 2007, is a leading provider of solo holidays for over 50's
                            </p>
                            <a class="btn case-study-button-10" href="#">View Our Case Study<span href="#" class="case-study-btn-arrow icon-arrow-right2"></span></a>
                        </div>
                        <span class="triangle-case-study-10"></span>
                    </div>
                    <div class="case-study-image-container">
                        <img src="img/onetravellerlogo_white_figuire.webp" alt="One Traveller Logo">
                    </div>
                </div>
                <div class="case-study-item item-11">
                    <div class="case-study-description-11">
                        <div class="case-study-tooltip-11">
                            <h3>Searles Leisure Resort</h3>
                            <p>
                                Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday resort for families.
                            </p>
                            <a class="btn case-study-button-11" href="#">View Our Case Study<span class="case-study-btn-arrow icon-arrow-right2"></span></a>
                        </div>
                        <span class="triangle-case-study-11"></span>
                    </div>
                    <div class="case-study-image-container">
                        <img src="img/searles_logo.webp" alt="Searles Logo">
                    </div>
                </div>
                <div class="case-study-item item-12">
                    <div class="case-study-description-12">
                        <div class="case-study-tooltip-12">
                            <h3>Busseys</h3>
                            <p>
                                One of the UK's leading Ford dealerships.
                            </p>
                        </div>
                        <span class="triangle-case-study-12"></span>
                    </div>
                    <div class="case-study-image-container">
                        <img src="img/busseys_logo.webp" alt="Busseys Logo">
                    </div>
                </div>
                <div class="case-study-item item-13">
                    <div class="case-study-description-13">
                        <div class="case-study-tooltip-13">
                            <h3>Crane Garden Buildings</h3>
                            <p>
                                Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.
                            </p>
                        </div>
                        <span class="triangle-case-study-13"></span>
                    </div>
                    <div class="case-study-image-container">
                        <img src="img/crane_logo.webp" alt="Crane Logo">
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