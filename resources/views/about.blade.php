<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Personal | Teamplate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
         body {
            background-color: rgb(255, 239, 174);
            font-family: 'Poppins', sans-serif;
            color: rgb(103, 0, 0);
        }
        .table-container {
            max-width: 1000px; /* Increased width */
            margin: 50px auto;
            padding: 30px;
            background-color: rgb(255, 255, 255);
            border-radius: 15px; /* More curve for modern look */
            box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.2);
        }
        h2 {
            color: rgb(103, 0, 0);
            text-align: center;
            font-size: 3rem; /* Increased heading size */
            margin-bottom: 25px;
            font-weight: 700;
        }
        table {
            width: 100%;
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
            overflow: hidden;
        }
        th {
            background-color: rgb(103, 0, 0);
            color: rgb(255, 255, 255);
            font-size: 1.8rem; /* Bigger table headers */
            padding: 15px;
            text-align: center;
        }
        td {
            font-size: 1.5rem; /* Bigger font for readability */
            text-align: center;
            padding: 15px;
            border: 2px solid rgb(103, 0, 0); /* Thicker border */
            transition: all 0.3s ease-in-out; /* Smooth effect */
        }
        table, th, td {
            border-collapse: collapse;
        }
        .rounded-table {
            border-radius: 10px;
            overflow: hidden;
        }

        /* Hover Effects */
        tbody tr:hover {
            background-color: rgba(103, 0, 0, 0.1); /* Light red hover */
            transition: background-color 0.3s ease-in-out;
        }
        tbody td:hover {
            transform: scale(1.05); /* Slightly enlarges the cell */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds depth */
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .personal-details {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: rgb(255, 255, 255);
            border-radius: 15px;
            box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.2);
        }

        .personal-details h2 {
            color: rgb(103, 0, 0);
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 25px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .personal-details ul {
            list-style: none;
            padding: 0;
            font-size: 1.3rem;
        }

        .personal-details li {
            background: rgba(103, 0, 0, 0.1);
            margin: 10px 0;
            padding: 15px;
            border-radius: 10px;
            font-weight: 500;
            display: flex;
            align-items: center;
            transition: all 0.3s ease-in-out;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .personal-details strong {
            color: rgb(103, 0, 0);
            width: 180px;
            display: inline-block;
            font-size: 1.4rem;
            font-weight: 700;
        }

        /* Hover Effects */
        .personal-details li:hover {
            transform: scale(1.05);
            background: rgba(103, 0, 0, 0.2);
            box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
    
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        @include('navbar')
        <!-- Header End -->
    </header>
    <main>
        <!--? Hero Area Start-->
        <div class="hero-area2 d-flex align-items-center">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-12">
                        <!-- Hero Caption -->
                        <div class="hero-cap pt-100">
                            <h2>My Protfolio</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero Area End-->
        <!--? About 1 Start-->
        <section class="about-area section-padding40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>About Us</h2>
                        </div>
                        <p>Technology has always fascinated me—its ability to solve problems, create seamless experiences, and push the boundaries of what’s possible. I enjoy exploring modern tools and frameworks, constantly learning new ways to improve my development skills. From building applications to experimenting with innovative solutions, I thrive on turning ideas into reality through code.</p>
                        <!-- <p>At the moment, this journey has brought me to Cloud Academy in Mendrisio, Switzerland where I am a full-time Product Designer. In this position, as with freelance, I am working remotely and I have been for approximately two years.</p> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/gallery/about1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row pt-40">
                <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="experience">
                        <span>06 years</span>
                        <p>of experience</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="experience">
                        <span>$40M+</span>
                        <p>invested in projects I was<br> involved in</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="experience">
                        <span>Multiple</span>
                        <p>industry awards</p>
                    </div>
                </div> -->
               
            </div>
            
        </div>
        
        </section>
        <div class="table-container">
    <h2>Educational Details</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Degree</th>
                <th>Institution</th>
                <th>Year</th>
                <th>Field of Study</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Master of Computer Applications (MCA)</td>
                <td>Atmiya University</td>
                <td>2023 - Present</td>
                <td>Computer Applications</td>
            </tr>
            <tr>
                <td>Bachelor of Computer Applications (BCA)</td>
                <td>Atmiya University</td>
                <td>2020 - 2023</td>
                <td>Computer Applications</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="personal-details">
    <h2>Personal Details</h2>
    <ul>
        <li><strong>Name:</strong> Savan Sardhara</li>
        <li><strong>Email:</strong> savansardhara36@gmail.com</li>
        <li><strong>Location:</strong> Kolithad,Rajkot,India </li>
        <li><strong>Languages:</strong> English, Gujarati, Hindi</li>
        <li><strong>Interests:</strong> AI, Web & Mobile Development, Public Speaking, Tech Exploration</li>
    </ul>
</div>
        <!-- About  End-->
    </main>
    <footer>
        <div class="footer-wrappr">
            <div class="footer-top">
                <!-- Want To work -->
                <section class="wantToWork-area ">
                    <div class="container">
                        <div class="wants-wrapper w-padding2">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-7 col-lg-9 col-md-8">
                                    <div class="wantToWork-caption wantToWork-caption2">
                                        <h2>Do you want to know more about me?</h2>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-4">
                                    <a href="#" class="btn white-btn f-right sm-left">Download CV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Want To work End -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- contact-form -->
                            <div class="form-wrapper">
                                <div class="row ">
                                    <div class="col-xl-12">
                                        <div class="small-tittle mb-30">
                                            <h4>Contact Me</h4>
                                        </div>
                                    </div>
                                </div>
                                <form id="contact-form" action="#" method="POST">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-box user-icon mb-25">
                                                <input type="text" name="name" placeholder="Your name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-box email-icon mb-25">
                                                <input type="text" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-box email-icon mb-25">
                                                <input type="text" name="email" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-box message-icon mb-25">
                                                <textarea name="message" id="message" placeholder="Message"></textarea>
                                            </div>
                                            <div class="submit-info">
                                                <button class="submit-btn2" type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-4">
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <div class="footer-copy-right f-right">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>


    
    </body>
</html>