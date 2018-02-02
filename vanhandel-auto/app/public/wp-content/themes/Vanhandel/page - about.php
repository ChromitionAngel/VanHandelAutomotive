<?php 
/* Template Name: About */
?>
<?php get_header(); ?>

<div id="AboutHeader" style="background-image: url('<?php the_field('title_card_image'); ?>')">
            <div class="transparentHead">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h1><b>About Van Handel Automotive</b></h1>
                            <br />
                            <?php the_field('title_card_intro') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <div id="AboutCrew">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="Sidebar">
                        <div>
                            <button id="appointment" style="margin-top: 15px;margin-bottom: 10px; "><h3 style="text-decoration: none;">make an appointment</h3></button>
                        </div>
                        <ul class="list hidden-sm hidden-xs">
                                <li class="bold"><a href="<?php the_field('side_nav_link_1', 'options') ?>"><?php the_field('side_nav_label_1', 'options') ?></a></li>
                                <li class="bold"><a href="<?php the_field('side_nav_link_2', 'options') ?>"><?php the_field('side_nav_label_2', 'options') ?></a></li>
                                <li class="bold"><a href="<?php the_field('side_nav_link_3', 'options') ?>"><?php the_field('side_nav_label_3', 'options') ?></a></li>
                                <li class="bold"><a href="<?php the_field('side_nav_link_4', 'options') ?>"><?php the_field('side_nav_label_4', 'options') ?></a></li>
                                <li class="bold"><a href="<?php the_field('side_nav_link_5', 'options') ?>"><?php the_field('side_nav_label_5', 'options') ?></a></li>
                            </ul>
                        <hr />
                        <div>
                            <h3>BUSINESS HOURS:</h3>
                            <p><?php the_field('side_bar_hours', 'options') ?></p>
                            <hr />
                            <img src="<?php the_field('certification_image_1', 'options') ?>" style="width: 150px; margin-top: 10px;">
                            <img src="<?php the_field('certification_image_2', 'options') ?>" width="150px;">
                            <p>All our members are ASE Certified and we are a Certified Service Center
                            </p>
                            <div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                            <h2 style="border-bottom: 1px solid #000">Meet The Crew</h2>
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#<?php the_field('tab_title_1') ?>" aria-controls="Chad" role="tab" data-toggle="tab"><?php the_field('tab_title_1') ?></a></li>
                                        <li role="presentation"><a href="#<?php the_field('tab_title_2') ?>" aria-controls="Tom" role="tab" data-toggle="tab"><?php the_field('tab_title_2') ?></a></li>
                                        <li role="presentation"><a href="#<?php the_field('tab_title_3') ?>" aria-controls="Brian" role="tab" data-toggle="tab"><?php the_field('tab_title_3') ?></a></li>
                                        <li role="presentation"><a href="#<?php the_field('tab_title_4') ?>" aria-controls="Michael" role="tab" data-toggle="tab"><?php the_field('tab_title_4') ?></a></li>
                                        <li role="presentation"><a href="#<?php the_field('tab_title_5') ?>" aria-controls="Nathan" role="tab" data-toggle="tab"><?php the_field('tab_title_5') ?></a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="<?php the_field('tab_title_1') ?>">
                                            <div class="tab-picture" style="background-image: url('<?php the_field('tab_image_1') ?>');" ></div>
                                            <?php the_field('tab_text_content_1') ?>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="<?php the_field('tab_title_2') ?>">
                                            <div class="tab-picture" style="background-image: url('<?php the_field('tab_image_2') ?>');"></div>
                                            <?php the_field('tab_text_content_2') ?>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="<?php the_field('tab_title_3') ?>">
                                            <div class="tab-picture" style="background-image: url('<?php the_field('tab_image_3') ?>');"></div>
                                            <?php the_field('tab_text_content_3') ?>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="<?php the_field('tab_title_4') ?>">
                                            <div class="tab-picture" style="background-image: url('<?php the_field('tab_image_4') ?>');"></div>
                                            <?php the_field('tab_text_content_4') ?>
                                            
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="<?php the_field('tab_title_5') ?>">
                                            <div class="tab-picture" style="background-image: url('<?php the_field('tab_image_5') ?>');"></div>
                                           <?php the_field('tab_text_content_5') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="AboutDescription">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 style="border-bottom: 1px solid #4C1B1B;">About Us</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <?php the_field('about_us_main_text_area') ?>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <img style="width: 50%;" src="<?php the_field('about_us_main_image')?>">
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-lg-12 col-sm-12" style="text-align: center;">
                        <?php the_field('ase_introduction') ?>
                    </div>
                </div>
                <div class="row" id="ASEQuestions">
                    <?php the_field('ase_qa_section') ?>
                </div>
            </div>
        </div>

<?php get_footer(); ?>