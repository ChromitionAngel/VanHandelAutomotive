<?php 
/*Template Name: Header */

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Van handel Auto</title>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="icon" href="<?php the_field('home_image', 'options') ?>">
        <link rel="Stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="customBehaviors.js"></script>
        
        <!-- Place this tag in your head or just before your close body tag. -->
        <script src="https://apis.google.com/js/platform.js" async defer></script>
                
        <script>
            window.onscroll = function() {scrollFunction()};
            function scrollFunction() {
                if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
                    document.getElementById("scrollUp").style.display = "block";
                } else {
                    document.getElementById("scrollUp").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
    </head>
    <body <?php body_class(); ?>>
        
        <header id="header"> 
            <div id="header-top-global">
                <div class="container">
                    <div class="row">
                        <div id="cookie-law" class="alert alert-info alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>Hello!</strong> Just wanted to let you know we do automotive work too!
                        </div>
                    </div>
                </div>
            </div>
            <div id="header-contact">
                <div class="container hidden-sm hidden-xs">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <a href="<?php the_field('nav_link_1', 'options') ?>">
                                <img src="<?php the_field('home_image', 'options') ?>" width="250px;" style="padding: 5px;">
                            </a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                            <div class="row">
                                <div class="col-lg-8 col-md-6 col-sm-12">
                                    <ul class="list">
                                        <li><a href="tel:<?php the_field('phone', 'options') ?>" >Phone: <?php the_field('phone', 'options') ?></a></li>
                                        <li>
                                            <a href="mailto:<?php the_field('email', 'options') ?>">Email: <?php the_field('email', 'options') ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <button id="appointment" style="margin-top: 10px; height: 60px;"><p>make an appointment</p></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="header-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <nav class="navbar navbar-default" role="navigation">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header" style="padding: 10px 0px 10px 0px;">
                                    <a class="navbar-brand" href="<?php the_field('nav_link_1', 'options') ?>"><h1><b>Van Handel Automotive</b></h1></a>

                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded=" false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span style="margin-top: 10px;" class="icon-bar"></span>
                                        <span style="margin-top: 10px;" class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse navbar-default" id="bs-example-navbar-collapse-1">
                                    <ul class="navbar nav">
                                        <?php wp_nav_menu( array( 
                                            'theme_location' => 'header-menu',                                                 
                                        ) ); ?>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>