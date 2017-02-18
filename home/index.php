<?php 
require_once("../index.php"); 
require_once('config.php');  
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CFIC Student Details</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">SMC-CFIC </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">           
					<li>
                        <a class="page-scroll" href="#page-top">Log-in</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">           
					  		  
					  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
					  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
					  
						  <link rel="stylesheet" href="css/loginstyle.css">
					  <div class="form">
						  
						  <ul class="tab-group">
							<li style="display:none" class="tab active"><a href="#signup">Sign Up</a></li>
							<li style="display:none" class="tab"><a href="#login">Log In</a></li>
						  </ul>
						  
						  <div class="tab-content">
							<div id="signup" style="display:none" >   
							  <h1>Student Details</h1>
							  
							  <form action="/" method="post">
							  
							  <div class="top-row">
								<div class="field-wrap">
								  <label>
									First Name<span class="req">*</span>
								  </label>
								  <input type="text" placeholder="Firstname" required autocomplete=off" />
								</div>
							
								<div class="field-wrap">
								  <label>
									Last Name<span class="req">*</span>
								  </label>
								  <input type="text" placeholder="Last Name" required autocomplete="off"/>
								</div>
							  </div>
							   <div class="field-wrap">
								  <label>
									Course/Year<span class="req">*</span>
								  </label>
								  <input type="text" placeholder="Course/Year" required autocomplete="off" />
								</div>
							
								<div class="field-wrap">
								  <label>
									ID Number<span class="req">*</span>
								  </label>
								  <input type="text" placeholder="ID Number" required autocomplete="off"/>
								</div>
							   <div class="field-wrap">
								<label>
								  Religion<span class="req">*</span>
								</label>
								<input type="email" placeholder="Religion" required autocomplete="off"/>
							  </div>
							   <div class="field-wrap">
								<label>
								  Contact<span class="req">*</span>
								</label>
								<input type="email" placeholder="Contact No." required autocomplete="off"/>
							  </div>

							  <div class="field-wrap">
								<label>
								  Email Address<span class="req">*</span>
								</label>
								<input type="email" placeholder="Email Address" required autocomplete="off"/>
							  </div>
							  
							  <div class="field-wrap">
								<label>
								  Set A Password<span class="req">*</span>
								</label>
								<input type="password" placeholder="Password" required autocomplete="off"/>
							  </div>

							  <button type="submit" class="button button-block"/>Get Started</button>
							  
							  </form>

							</div>
							
							<div id="login" style="display:block">   
							  <h1>Welcome Back!</h1>
                                <?php if (!empty(session('status'))): ?>
                                    <div class="alert alert-danger">
                                        <?php  
                                            print session('status');      
                                        ?>
                                    </div>
                                <?php endif ?>

                                <h2 class="pull-left" > Student Login </h2>
                              <!-- student login -->
							  <form action="<?php print $postLogin; ?>" method="post">
							   <?php 
                                    print csrf_field(); 
                               ?>
								<div class="field-wrap">
								<label>
								  Email Address<span class="req">*</span>
								</label>
								<input name="id_number" type="text" placeholder="Id Number" required autocomplete="off"/>
							  </div> 
							  <div class="field-wrap">
								<label>
								  Password<span class="req">*</span>
								</label>
								<input name="password" type="password" placeholder="Password" required autocomplete="off"/>
							  </div> 
							  <p class="forgot" style="display:none"><a href="#">Forgot Password?</a></p> 
							  <button class="button button-block"/>Log In</button> 
							  </form>


                                <br>

                                <h2 class="pull-left"> Personnel Login </h2>
                            <!-- personnel login -->
                            <form action="<?php print $postLoginPersonnel; ?>" method="post">
                                <?php
                                print csrf_field();
                                ?>
                                <div class="field-wrap">
                                    <label>
                                        Email Address<span class="req">*</span>
                                    </label>
                                    <input name="id_number" type="text" placeholder="Id Number" required autocomplete="off"/>
                                </div>
                                <div class="field-wrap">
                                    <label>
                                        Password<span class="req">*</span>
                                    </label>
                                    <input name="password" type="password" placeholder="Password" required autocomplete="off"/>
                                </div>
                                <p class="forgot" style="display:none"><a href="#">Forgot Password?</a></p>
                                <button class="button button-block"/>Log In</button>
                            </form>

                            </div>
						  </div><!-- tab-content --> 
					</div> <!-- /form -->
					  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
						<script src="js/index.js"></script>
                <hr>
                <!--<p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>-->
                <!--<a href="#register" class="btn btn-primary btn-xl page-scroll">Find Out More</a>-->
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About Us?</h2>
                    <hr class="light">
                    <p class="text-faded">CFIC which stands for Christian Formation for Ignacian Leadership Center molds the spiritual aspect of the student as well as the personnel in St. Michael's College. It caters with services like Retreats and Recollection, spiritual growth or formation, liturgical services such as mass and sacraments like confession, baptism, BEC or Basic Eklesia Community which points out the formation for non-Catholics or Catholics. </p>
					<a href="http://www.smciligan.edu.ph/index.php?option=page&pageID=1&slug=smc.history" class="page-scroll btn btn-default btn-xl sr-button">Learn More About Us!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Core Values</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-fire text-primary sr-icons"></i>
                        <h3>FAITH</h3> </br>
                        <ul  class="text-muted"><li><p>is believing in the substance of things hoped for, and in the sign that the things not seen are true (Hebrews 11).</p></li></ul> </br>
						<ul  class="text-muted"><li><p>is the unwavering trust in the complete fidelity of God's love; Clinging to God in good and "Not so good times".</p></li></ul> </br>
						<ul  class="text-muted"><li><p>is the trust, hope and belief in the goodness of a person being the image of God.</p></li></ul> </br>
						<ul  class="text-muted"><li><p>is the deep conviction that God deeply cares for us and will always act with our best interest at heart.</p></li></ul> </br>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-trophy text-primary sr-icons"></i>
                        <h3>EXCELLENCE</h3></br>
                        <ul  class="text-muted"><li><p>is the drive and passion to become the best of who and what we are before God and human kind in all aspects of our life</p></li></ul> </br>
						<ul  class="text-muted"><li><p>is an attitude to sustain improvement at all times in all areas of importance in one's life at the best level.</p></li></ul> </br>
						<ul  class="text-muted"><li><p>is to do the right things at the right time, all time.</p></li></ul> </br>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                        <h3>SERVICE</h3></br>
                        <ul  class="text-muted"><li><p>is reaching out to others to develop their capabilities and help them liberate themselves from the quagmire of social, cultural and economic scarcity and deficiencies.</p></li></ul> </br>
						<ul  class="text-muted"><li><p>is an act of kindness and generosity to sustain and dignify the lives of others.</p></li></ul> </br>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-users text-primary sr-icons"></i>
                        <h3>Vision and Mission</h3></br>
                        <p class="text-muted"><b>Vision</b></p>
						<p class="text-muted">---</p>
						<p class="text-muted">is an act of kindness and generosity to sustain and dignify the lives of others.</p></ul> </br>
						<p class="text-muted"><b>Mission</b></p>
						<p class="text-muted">---</p>
						<p class="text-muted">We commit ourselves to:</p></ul></br>
						<p class="text-muted">1. Develop culture of appreciation, support and harmony and live with compassion and humility.</p></ul></br>
						<p class="text-muted">2. Grow in prayer and reflection, practice discernment and attain interior freedom.</p></ul></br>
						<p class="text-muted">3. Be open to global opportunities and trends to develop and maximize potentials and capabilities in order to become enterprising world class individuals who practice the values of Faith, Excellence and Service.</p></ul></br>
						<p class="text-muted">4. Advocate deep understanding of cultural diversity for peace and communion and promote environmental preservation.</p></ul></br>
						<p class="text-muted">5. Build up resources and sustain the ministry.</p></ul></br>
						<p class="text-muted">6. Consistently provide greater educational accessibility and opportunities to the poor.</p></ul></br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                   ...
                                </div>
                                <div class="project-name">
                                    Retreat
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    ...
                                </div>
                                <div class="project-name">
                                    Recollection
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    ...
                                </div>
                                <div class="project-name">
                                    SMC Living Rosary
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    ...
                                </div>
                                <div class="project-name">
                                    First Friday Mass
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    ...
                                </div>
                                <div class="project-name">
                                    Our Lady of Assumption Feast Mass
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    ...
                                </div>
                                <div class="project-name">
                                    Holy Spirit Mass
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Visit our school website!</h2>
                <a href="http://www.smciligan.edu.ph/" class="btn btn-default btn-xl sr-button">Click Here!</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>If you have any concerns, give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">cfic@gmail.com</a></p>
                </div>
				
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
