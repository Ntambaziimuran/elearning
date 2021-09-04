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

            </div>

            <div class="span9">

                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Head Up!</strong>&nbsp;Welcome to AMUS College E-Learning Site.
                </div>


                <p><iframe width="860" height="390" frameborder="10" scrolling="no" marginheight="0" marginwidth="auto"
                           src="https://www.google.com/maps/@1.1760913,34.1606841,15z&amp;ie=UTF8&amp;msa=0&amp;msid=203722259750162261795.0004aafd513ccced356f4&amp;sll=10.743085,122.969515&amp;sspn=0,0&amp;ll=10.743346,122.969686&amp;spn=0,0&amp;t=h&amp;vpsrc=0&amp;output=embed">
                    </iframe></p>



            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


