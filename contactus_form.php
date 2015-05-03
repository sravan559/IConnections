<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | I-Connections</title>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/iconnections.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/iconn.ico">
</head><!--/head-->
<body>
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +1 (812)-325-9047</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/groups/socc.coffeehour/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.html"><img src="images/IC-logo.gif" alt="logo" class="iconn-logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="events.html">Events</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li class="active"><a href="contactus.html">Contact Us</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
    <section id="contact-info">
        <div class="center">
            <h2>Contact Us</h2>
            <p class="lead">Please submit your concerns and queries below. We are here to help international students, scholars and their families in anyway we can.</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <a target="_blank" href="https://www.google.com/maps/dir/''/Sherwood+Oaks+Christian+Church+2700+E.+Rogers+Rd/@39.1343544,-86.4988887,14z/data=!4m8!4m7!1m0!1m5!1m1!1s0x886c66787a16039b:0x541d2ce917fc4922!2m2!1d-86.500519!2d39.134892">
                                <img src="images/sherwood_map.PNG" alt="Map location of Sherwood Church" />
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <h5>International Connections</h5>
                                <address>
                                    <p>
                                        Sherwood Oaks Christian Church<br />
                                        2700 E. Rogers Rd<br />
                                        Bloomington, IN 47401
                                    </p>
                                    <p>
                                        <label>Phone: </label> +1 (812)-334-0206<br>
                                    </p>
                                </address>

                            </li>

                            <li class="col-sm-6">
                                <h5>Elan Rajamani</h5>
                                <address>
                                    <p>
                                        <label>Phone: </label> +1 (812)-325-9047<br>
                                        <label>Email Address: </label><a href="mailto:elan@ifmusa.org"> elan@ifmusa.org</a>
                                    </p>
                                </address>
                                <h5>Ed Huff</h5>
                                <address>
                                    <p>
                                        <label>Phone: </label> +1 (812)-327-5549<br>
                                        <label>Email Address: </label><a href="mailto:huffed@indiana.edu"> huffed@indiana.edu</a>
                                    </p>
                                </address>
                                <h5> Rani Rajamani (Women Co-ordinator)</h5>
                                <address>
                                    <p>
                                        <label>Phone: </label> +1 (812)-325-9047<br>
                                        <label>Email Address: </label><a href="mailto:rani@rajamani.org"> rani@rajamani.org</a>
                                    </p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->
    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2>Submit Request</h2>
                <p class="lead">Please use this form to submit a question or provide any feedback about our services.</p>
            </div>
            <div class="row contact-wrap">
                <form method="post" action="contactus.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label class="required" for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" required maxlength="30">
                        </div>
                        <div class="form-group">
                            <label class="required" for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required maxlength="30">
                        </div>
                        <div class="form-group">
                            <label class="required" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label class="required" for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" class="form-control" maxlength="20">
                        </div>

                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label class="required" for="message">Message</label>
                            <textarea name="message" id="message" required maxlength="300" class="form-control" rows="9"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg" />
                        </div>
                    </div>
                </form>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                  &copy; 2015 International Connections. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="events.html">Events</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="contactus.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>