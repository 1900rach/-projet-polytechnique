<?php
session_start();
require_once('')
if (empty($_SESSION)) {
    header('location: ../index.php');
}
$req = $bdd->prepare("SELECT * FROM THESE WHERE ID = ? AND VALIDE = ?");
$req->execute(array($_SESSION['mat'], false));
?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
    	<title>Developer</title>

    	<!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- stylesheet -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.min.css">
        <link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/main.css">

		<!-- google font -->
        <link href='http://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Rouge+Script" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Milonga' rel='stylesheet' type='text/css'>
    </head>
    <body>
    <div class="content-block" id="header">
            <div id="overlay-1">
                <header id="site-header" class="clearfix">
                    <div class="pull-left">
                    <a href="" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?= $_SESSION['nom']; ?><i class="caret"></i></span><span class="table-img"><img style="border: 2px solid black" src="../photo/<?= $_SESSION['tof']; ?>" width="10%"></span></a>
                    <a href=""><i class="fa fa-envelope"></i><?= $_SESSION['mail']; ?></a>
                </div>
                    <div class="pull-right">
                        <nav class="navbar site-nav" role="navigation">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <i class="fa fa-bars fa-2x"></i>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#header"><i class="fa fa-home"></i> <span>publication</span></a></li>
                                    <li><a href="thco.php"><i class="fa fa-bookmark"></i>these en cour</a></li>
                                    <li><a href="#services"><i class="fa fa-bullhorn"></i> notification</a></li>
                                    <li><a href="deconnexion.php"><i class="login"></i> Sign out</a></li>
                                </ul>
                            </div>  <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </header>	<!-- site-header -->
<div class="content-block" id="testimonials">
            <header class="block-heading cleafix text-center">
                <h1>What Clients Say</h1>
                <!-- <p>Lorem Ipsum Text</p> -->
            </header>
            <div class="block-content text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                        	<div class="owl-carousel">
								<div class="owl-item">
									<div class="testimonial">
                                        <!-- <img alt="Client Photo" src="img/testimonial_31-190x190.jpg"> -->
                                        <p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet.</p>
                                        <strong>Jhon Doe</strong><br>
                                        <span>Head of Ideas, Technext</span>
                                    </div>
								</div>	<!-- owl-item -->
								<div class="owl-item">
									<div class="testimonial">
                                        <img alt="Client Photo" src="img/testimonial_11-190x190.jpg">
                                        <p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet.</p>
                                        <strong>Jane Doe</strong><br>
                                        <span>CEO, Apple Inc</span>
                                    </div>
								</div>
                                	<!-- owl-item -->
								<div class="owl-item">
									<div class="testimonial">
                                        <img alt="Client Photo" src="img/testimonial_22-190x190.jpg">
                                        <p>In at accumsan risus. Nam id volutpat ante. Etiam vel mi mattis, vulputate nunc nec, sodales nibh. Etiam nulla magna, gravida eget ultricies sit amet.</p>
                                        <strong>Albert Doe</strong><br>
                                        <span>Team Lead, Design Studio</span>
                                        
                                    </div>
								</div>	<!-- owl-item -->
							</div>	<!-- owl-carousel -->
						</div>	<!-- col-md-12 -->
                    </div>	<!-- row -->
                </div>	<!-- container -->
            </div>	<!-- block-content -->
        </div>
        <div class="container">
            <button type="button" class="btn btn-primary btn-lg mb-2" style="text-decoration: none; text-align: center; "><a href="page.php">retour</a></button>
        </div>
    	<!-- content-block -->
        <footer id="site-footer">
            <div class="container">
                <div class="row">
               
                    <div class="col-sm-6">
                        <div class="copyright">&copy; xyoncode</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="designed-by">Designed By <a href="" target="_blank">xyon</a></div>
                    </div>
                </div>
            </div>
        </footer>	<!-- site-footer -->


        <!-- js -->
        <script>
            new WOW().init();
        </script>

        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.actual.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.isonscreen.js"></script>
       
        <script src="js/main.js"></script>

        <script>
        	$(document).ready(function(){
  				$('.owl-carousel').owlCarousel({
    				loop:true,
    				margin:10,
    				autoplay:true,
    				autoplayTimeout:3000,
    				autoplayHoverPause:true,
    				responsiveClass:true,
    				responsive:{
        					0:{
					            items:1,
        					},
					        600:{
					            items:1,
					        },
					        1000:{
					            items:1,
					        }
    				}
				})
			});
        </script>

	</body>
</html>
