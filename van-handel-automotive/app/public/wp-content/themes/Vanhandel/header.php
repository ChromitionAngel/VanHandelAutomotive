<!DOCTYPE html>
<html>
    <head>
        <title>Van handel Auto</title>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        
        <link rel="Stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="CustomBehaviors.js"></script>
        
        <!-- Place this tag in your head or just before your close body tag. -->
        <script src="https://apis.google.com/js/platform.js" async defer></script>

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
                            <img src="http://vanhandel-auto.local/wp-content/uploads/2018/01/VH-Logo.png" width="125px;">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                            <div class="row">
                                <div class="col-lg-8 col-md-6">
                                    <ul class="list">
                                        <li><a>Work #</a></li>
                                        <li><a>Phone #</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <button id="appointment" style="margin-top: 10px; height: 60px;"><p>make an appointment</p></button>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-lg-offset-2 col-lg-10 col-md-10 col-md-offset-2">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Search for...">
                                    </div><!-- /input-group -->
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
                                    <a class="navbar-brand" href="#"><h1><b>Van Handel Automotive</b></h1></a>

                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded=" false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span style="margin-top: 10px;" class="icon-bar"></span>
                                        <span style="margin-top: 10px;" class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse navbar-default" id="bs-example-navbar-collapse-1">
                                  <ul class="nav navbar-nav">
                                     <li>
                                      <a href="index.html"><p>Home</p></a>
                                    </li>
                                    <li class="divider-vertical"></li>
                                    <li class="dropdown">
                                      <a href="pages/services.html"><p>services</p></a>
                                      <ul class="dropdown-menu">
                                        <li><a href="#">Link</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Link</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Link</a></li>
                                      </ul>
                                    </li>
                                    <li class="divider-vertical"></li>
                                    <li class="dropdown">
                                      <a href="pages/about.html"><p>about us</p></a>
                                      <ul class="dropdown-menu">
                                        <li><a href="pages/about.html#AboutCrew">Our Crew</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="pages/about.html#AboutDescription">Who We Are</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="pages/about.html#Gallery">Gallery</a></li>
                                      </ul>
                                    </li>
                                    <li class="divider-vertical"></li>
                                    <li>
                                      <a href="pages/directions.html" role="button"><p>directions</p></a>
                                    </li>
                                    <li class="divider-vertical"></li>
                                    <li class="dropdown">
                                      <a href="pages/contact.html"><p>contact</p></a>
                                      <ul class="dropdown-menu">
                                        <li><a href="#">Link</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Link</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Link</a></li>
                                      </ul>
                                    </li>
                                  </ul><!--End nav List-->
                                </div><!-- /.navbar-collapse -->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>