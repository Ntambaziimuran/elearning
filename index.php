<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">

                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>

                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">


                        <strong><li class="nav-header" style="color: red;">Links</li></strong>
                        <li class="active">
                            <a href="#"><i class="icon-home icon-2x" ></i>&nbsp; &nbsp;HOME
                                <div class="pull-right">
                                    <i class="icon-hand-right icon-2x"></i>
                                </div> 
                            </a>
                        </li>

                        <li><a href="sitemap.php"><i class="icon-map-marker icon-2x"></i>&nbsp;&nbsp;LOCATION
                                <div class="pull-right">
                                    <i class="icon-hand-right icon-2x"></i>
                                </div> 
                        </a></li>
                        <li><a href="contact.php"><i class="icon-phone icon-2x"></i>&nbsp;&nbsp;CONTACT US
                                <div class="pull-right">
                                    <i class="icon-hand-right icon-2x"></i>
                                </div> 
                            </a>                
                        </li>
                        <li class="nav-header"><b style="color: red;">About US</b></li>
                        <li><a href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-2x"></i>&nbsp; &nbsp;OUR MISSION
                                <div class="pull-right">
                                    <i class="icon-hand-right icon-2x"></i>
                                </div> 
                            </a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-2x"></i>&nbsp; &nbsp;OUR VISION
                                <div class="pull-right">
                                    <i class="icon-hand-right icon-2x"></i>
                                </div> 
                            </a></li>
                        <li><a href="history.php"><i class="icon-list-alt icon-2x"></i>&nbsp; &nbsp;BACKGROUND
                                <div class="pull-right">
                                    <i class="icon-hand-right icon-2x"></i>
                                </div> 
                            </a></li>

                    </ul>
                </div>
                <br>


            </div>
            <div class="span9">
                <section class="main">
                    <div class="custom-calendar-wrap">
                        <div id="custom-inner" class="custom-inner">
                            <div class="custom-header clearfix">
                                <nav>
                                    <span id="custom-prev" class="custom-prev"></span>
                                    <span id="custom-next" class="custom-next"></span>
                                </nav>
                                <h2 id="custom-month" class="custom-month"></h2>
                                <h3 id="custom-year" class="custom-year"></h3>
                            </div>
                            <div id="calendar" class="fc-calendar-container"></div>
                        </div>
                    </div>
                </section>

    
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>WELCOME TO AMUS COLLEGE.!</strong>
                </div>
                <div class="slider-wrapper theme-default">
                <?php include('slider.php'); ?>
                </div>
                <!-- end slider -->
            </div>

        </div>

    </div>
    <!---------------->
    <div class="container">

        <div class="row-fluid">
            <div class="span12">

                <div class="row-fluid">
                    <div class="span9">
                        <div class="alert alert-success"><i class="icon-user icon-2x"></i>&nbsp;<strong>HEAD MASTERS COMMUNICATION</strong></div>
                        <div class="hero-unit-2">
                            Announcements
                            In support to the thrust of the government to improve the health status of 
                            neighboring barangays, the Faculty and Staff of CHMSC ECS Fortune Towne, 
                            Bacolod City, launched its Medical Mission in Patag, Silay City. It was conducted
                             last March 2010, to address the health needs of the people. A medical 
                             consultation is given to the residents of SitioPatag to attend to their health
                              related problems that may need medical treatment. Medical tablets for headache, 
                              flu, fever, antibiotics and others were availed by the residents.
                        </div>

                    </div>
                    <div class="span3">
                        <div class="alert alert-info">
                            <i class="icon-building icon-large"></i>&nbsp;Campuses

                        </div>
                        <div class="hero-unit-3">
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Talisay Campus</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Fortune Towne Campus</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Binalbagan Campus</a></p>
                            <p><a href=""><i class="icon-sign-blank"></i>&nbsp;Alijis Campus</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <br>
        

        <?php include('footer.php'); ?>
    </div>


</div>
</div>






</body>
</html>


