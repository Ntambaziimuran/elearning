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
                    <strong>AMUS History</strong>
                </div>


                <p>
                <div class="hero-unit-2">
                Amus College School Is A School In Uganda. This School Is Located In Amus Parish, Kachumbala Subcounty, Bukedea District Of Uganda.
                </div>
                </p>


            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


