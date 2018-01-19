<?php 
/* Template Name: Home*/
?>
<?php get_header(); ?>
            
            
            
        <div id="carousel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                            <div class="item active" style="background-image: url('<?php the_field('carousel_image_1') ?>')">
                              <div class="carousel-caption slide-intro-0">
                                    <h2>Welcome to Van Handel Automotive</h2>
                                    <i>The best automotive shop in Sisters</i>
                                    <p>We do automotive work, back massages, tech repair, and plumbin! </p>
                                      <p>Impressed?? We know. But feel free to let us or our competitors  know anytime</p>
                                      <b>-Love, Miles</b>
                                    <ul class="list list-inline">
                                        <li><button id="appointment" style="color: white; font-size: 18px;">Make an Appointment</button></li>
                                        <li><button id="QuoteButton" style=" font-size: 18px;">
                                        Get a FREE repair quote
                                    </button></li>
                                    </ul>
                                </div>
                              </div>
                            <div class="item slide1" style="background-image: url('<?php the_field('carousel_image_2') ?>')">
                              <div class="carousel-caption slide-intro-1">
                                  <div id="ShopTimes">
                                    <h2>Business Hours</h2>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="list">
                                            <li>Monday</li>
                                            <li>Tuesday</li>
                                            <li>Wednesday</li>
                                            <li>Thursday</li>
                                            <li>Friday</li>
                                            <li>Sat-Sun</li>
                                        </ul>
                                    </div>
                                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="list">
                                            <li>8am - 5pm</li>
                                            <li>8am - 5pm</li>
                                            <li>8am - 5pm</li>
                                            <li>8am - 5pm</li>
                                            <li>8am - 5pm</li>
                                            <li>Closed</li>
                                        </ul>
                                    </div>
                                  </div>
                              </div>
                            </div>
                              <div class="item slide2" style="background-image: url('<?php the_field('carousel_image_3') ?>')">
                                  <div class="carousel-caption">
                                  </div>
                              </div>  
                          </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
        <div id="support-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <a href="<?php the_field('support_link_1') ?>"><h3><?php the_field('support_label_1') ?></h3></a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <a href="<?php the_field('support_link_2') ?>"><h3><?php the_field('support_label_2') ?></h3></a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <a href="<?php the_field('support_link_3') ?>"><h3><?php the_field('support_label_3') ?></h3></a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <a href="<?php the_field('support_link_4') ?>"><h3><?php the_field('support_label_4') ?></h3></a>
                    </div>
                </div>
            </div>
        </div>
        
    
        <div id="IntroAbout">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div>
                            <button id="appointment" style="margin-top: 15px;margin-bottom: 10px; "><h3 style="text-decoration: none;">make an appointment</h3></button>

                        </div>
                        <ul class="list hidden-sm hidden-xs">
                                <li class="bold"><a href="<?php the_field('side_nav_link_1') ?>"><?php the_field('side_nav_label_1') ?></a></li>
                                <li class="bold"><a href="<?php the_field('side_nav_link_2') ?>"><?php the_field('side_nav_label_2') ?></a></li>
                                <li class="bold"><a href="<?php the_field('side_nav_link_3') ?>"><?php the_field('side_nav_label_3') ?></a></li>
                                <li class="bold"><a href="<?php the_field('side_nav_link_4') ?>"><?php the_field('side_nav_label_4') ?></a></li>
                                <li class="bold"><a href="<?php the_field('side_nav_link_5') ?>"><?php the_field('side_nav_label_5') ?></a></li>
                            </ul>
                        <hr />
                        <div>
                            <h3>business hours</h3>
                            <h4>Monday - Friday: 8am - 5pm</h4>
                            <h4>Saturday - Sunday: Closed</h4>
                            <p>127 W Sisters Park Drive Sisters, OR 97759</p>
                            <hr />
                            <img src="<?php the_field('certification_1') ?>" style="width: 150px; margin-top: 10px;">
                            <img src="<?php the_field('certification_2') ?>" width="150px;">
                            <p>All our members are ASE Certified and we are a Certified Service Center
                            </p>
                            <div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                            <h2 style="border-bottom: 1px solid #000">Who We Are</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <p><?php the_field('who_we_are_text') ?></p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <img src="<?php the_field('who_we_are_image') ?>" width="100%;">
                                </div>
                            </div>
                            <br />
                            <hr />
                            <br />
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
                                    <img src="Images/GoogleReviewsScreenshot.png" width="100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <br />
        
        
        
        <div id="GoogleMaps">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2855.6494262676983!2d-121.55152068405658!3d44.29659807910449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54bf30b3b8369be5%3A0x49dc8b03645d5527!2sVan+Handel+Automotive+Repair!5e0!3m2!1sen!2sus!4v1513810539878" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>                    </div>
                </div>
            </div>
        </div>
<?php get_footer() ?>
