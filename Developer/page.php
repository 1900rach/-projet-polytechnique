
<?php
session_start();
if (empty($_SESSION['auth'])) {
   header('location:developer/index.php');
   
}
require('pa.php');
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
                
                <div class="middle text-center clearfix">
                    <div class="container">
                        <h1 class="pro-name">polytechnique <!-- <span style="color: #71b644;" > -->these<!-- </span> --></h1>
                        <p class="tagline">envoie tes recherche</p>
                        <div class="skills">
                        <div class="row content-center">
                        <div class="col-md-9"> 
                        <form class="form-group" >
                            <div class="col-md-6">
                                <input  class="form-control " type="text" arial-label="search"  placeholder="search">
                            </div>
                            <div class="col-md-3">    
                                <button class=" form-control btn btn-success" type="submit">Envoyer</button>
                            </div>    
                                    </form>
                        <!-- <form class="form-inline">
                        <input type="text" name="se" class="form-controle mr-sm-2" placeholder="search">
                            <button class="btn btn-primary" type="submit"></button> -->
                            </div>
                            </div>
                            </form>
                                     
                                    
                                     <!--
                       
                    </div>  <!-- container -->
                </div>  <!-- middle -->
                
                <div class="bottom text-center">
                    <a href="#portfolio"><i class="fa fa-angle-down fa-3x pulse"></i></a>
                </div>
            </div>  <!-- overlay-1 -->
        </div>  <!-- content-block -->

        <div class="content-block text-center" id="portfolio">
            <header class="block-heading cleafix">
                <h1>Latest Works</h1>
                <!-- <p>Take a look at some of my recent products</p> -->
            </header>

            <div class="isotope portfolio-items">
                <div class="element-item grid">
                    <div class="effect-zoe">
                        <img class="img-responsive" alt="Portfolio" src="img/work1.jpg">
                        <figcaption>
                            <h2 class="hidden-xs">Creative <span>Joe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </p>
                        </figcaption>
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                        <img class="img-responsive" alt="Portfolio" src="img/work2.jpg">
                        <figcaption>
                            <h2 class="hidden-xs">Creative <span>Joe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </p>
                        </figcaption>
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                        <img class="img-responsive" alt="Portfolio" src="img/work3.png">
                        <figcaption>
                            <h2 class="hidden-xs">Creative <span>Joe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </p>
                        </figcaption>
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                        <img class="img-responsive" alt="Portfolio" src="img/work7.jpg">
                        <figcaption>
                            <h2 class="hidden-xs">Creative <span>Joe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </p>
                        </figcaption>
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                        <img class="img-responsive" alt="Portfolio" src="img/work8.png">
                        <figcaption>
                            <h2 class="hidden-xs">Creative <span>Joe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </p>
                        </figcaption>
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                        <img class="img-responsive" alt="Portfolio" src="img/work4.jpg">
                        <figcaption>
                            <h2 class="hidden-xs">Creative <span>Joe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </p>
                        </figcaption>
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                        <img class="img-responsive" alt="Portfolio" src="img/work5.jpg">
                        <figcaption>
                            <h2 class="hidden-xs">Creative <span>Joe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </p>
                        </figcaption>
                    </div>
                </div>
                <div class="element-item grid">
                    <div class="portfolio-item effect-zoe">
                        <img class="img-responsive" alt="Portfolio" src="img/work6.jpg">
                        <figcaption>
                            <h2 class="hidden-xs">Creative <span>Joe</span></h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </p>
                        </figcaption>
                    </div>
                </div>
            </div>	<!-- isotope portfolio-items -->
            <a href="#" class="btn btn-lg btn-view">
                <i class="fa fa-eye"></i>
                <span>View All</span>
            </a>
        </div>  <!-- content-block -->

       <!--  <div class="content-block text-center" id="services">
            <div class="overlay-2">
                        <header class="block-heading cleafix">
                            <h1>More About Me</h1>
                            <p>Lorem Ipsum Text</p>
                        </header>
                        <div class="block-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <h4 class="pro-stat">Completed Project</h4>
                                        <h2 class="proj-name count1 count-timer" >020</h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4 class="pro-stat">Working Project</h4>
                                        <h2 class="proj-name count2">9</h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4 class="pro-stat">Top Rated Project</h4>
                                        <h2 class="proj-name count3">015</h2>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    overlay-2
        </div>  --> <!-- content-block -->
       
            

        <div class="content-block" id="contact">
            <div class="overlay-3">
                <header class="block-heading cleafix text-center">
                    <h1>envoie votre these</h1>
                    <!-- <p>Feel Free to Contact</p> -->
                </header>
                <div class="block-content text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 wow animated fadeInLeft">
                                <form class="contact-form" action="" method="post" enctype="multipart/form-data">
                                <input type="file" name="doc" class="form-control" placeholder="Enter  votre document">
                                    <input type="text" name="nom" class="form-control" placeholder="Enter le nom de l'encadrant">
                                    <textarea style="background-color: rgba(0,0,0,0); color: black;"  name="n" class="form-control" row="2" col="8"></textarea>
                                   
                                    <input type="submit" class="form-control" name="valider" value="valider">
                                </form>
                            </div>
                            <div class="col-md-6 wow animated fadeInRight">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="contact-info">
                                            
                                               
                                
                            </div>
                        </div>
                    </div>
                </div>	<!-- block-content -->
            </div>	<!-- overlay-3 -->
        </div>	<!-- content-block -->

        <footer id="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copyright">&copy; xyoncode</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="designed-by">Designed By <a href="http://themewagon.com/" target="_blank">ThemeWagon</a></div>
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
