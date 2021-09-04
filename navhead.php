<div class="row-fluid">
    <div class="span12">


        <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner" >
                <div class="container">

                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <!-- Be sure to leave the brand out there if you want it shown -->


                    <!-- Everything you want hidden at 940px or less, place within here -->



                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc --> 
                      <br>
                        <a href="#"><i class="icon-facebook-sign icon-2x" id="color_white"> &nbsp;</i></a>&nbsp;
                        <a href="#"><i class="icon-twitter icon-2x" id="color_white"> &nbsp;</i></a>&nbsp;
                        
                        <a href="#"><i class="icon-google-plus icon-2x" id="color_white">&nbsp;</i></a>
                      
                        <div class="pull-right">
                            <form class="navbar-search pull-left">
                                <i class="icon-search icon-large" id="color_white"></i>
                                <input type="text" class="search-query"  placeholder="Search">
                            </form>
                        </div>

                        <!-- end collapse -->
                    </div>

                </div>
            </div>
        </div>
        <div class="hero-unit-header">
            <div class="container">

                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">

                            <div class="span7">
                                <img src="admin/images/head.png">
                                
                            </div>

                            <div class="span3">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                                </li>
                            </ul>
                            </div>
                            <div class="span2">
                                <div class="pull-right">
                                    <!--- login button -->							
                                    <div class="btn-group">
                                        <button class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Login</button>
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#student" role="button"  data-toggle="modal"><i class="icon-user icon-large"></i>&nbsp;Student</a></li>
                                            <li><a href="#teacher" role="button"  data-toggle="modal"><i class="icon-user-md icon-large"></i>&nbsp;Teacher</a></li>

                                        </ul>
                                    </div>

                                    <!-- end login -->
                                    <?php include('student_modal.php'); ?>
                                    <?php include('teacher_modal.php'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>