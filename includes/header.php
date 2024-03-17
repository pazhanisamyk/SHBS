<div class="header">
                <div class="container">
                    <div class="header-top-grids">
                        <div class="agileits-logo">
                            <h1><a href="index.php">SHBS </a></h1>
                        </div>
                        <div class="top-nav">
                            <nav class="navbar navbar-default">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                                    <nav>
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="index.php"><b>Home</b></a></li>
                                            <li><a href="about.php"><b>About</b></a></li>
                                            <li><a href="halls.php"><b>Halls</b></a></li>
                                            <?php if (strlen($_SESSION['obbsuid']!=0)) {?>
                                            <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>My Account</b><span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="hvr-bounce-to-bottom" href="profile.php"><b>Profile</b></a></li>
                                                    <li><a class="hvr-bounce-to-bottom" href="booking-history.php"><b>Booking History</b></a></li>   
                                                     <li><a class="hvr-bounce-to-bottom" href="change-password.php"><b>Change Password</b></a></li>
                                                    <li><a class="hvr-bounce-to-bottom" href="logout.php"><b>Logout</b></a></li>        
                                                </ul>
                                            </li> <?php } ?> 

                                            <li><a href="mail.php"><b>Mail Us</b></a></li>

                                        </ul>
                                    </nav>
                                </div>
                                <!-- /.navbar-collapse -->
                            </nav>
                        </div>
                        <br>
                        <?php if (strlen($_SESSION['obbsuid']==0)) {?>
                        <div class="collapse navbar-collapse nav-wil">
                            <ul style="color: black;">
                                <li style="color: black;background-color: white;margin-left: 85%;border-top-right-radius: 25px; border-top-left-radius: 25px"><a style="color:blue;font-weight: bold;" href="login.php">Login</a></li>
                                            <li style="color: black;font-weight: bold; background-color: white;margin-left: 85%;"> <a style="color:blue" href="signup.php">Register</a></li>
                                            <li style="background-color: white;margin-left: 85%;border-bottom-left-radius:  25px;border-bottom-right-radius: 25px"><a style="color:blue; font-weight: bold;" href="admin/login.php">Admin</a></li>
                               <?php } ?>
                            </ul>

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>