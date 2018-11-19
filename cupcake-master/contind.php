<?php
include "include.php";
$emailid = $_GET['emailid'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Face Of Bengaluru-2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/infinite-slider.css" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">

    <script src="main.js"></script>


    <style>
        html, body{
            overflow-x: hidden;
        }
        #bp_banner .hero-text
       {
            color: #fff !important;
            text-align: center;
            z-index: 1;
            font-size: 50px;
        }

      @media(max-width: 414px) {
            #bp_banner .hero-text h1
            {
                bottom: 5%;
                margin-top: -5px;
                margin-left: -20%;
                font-size: 48px;
            }
        }

         @media(max-width: 320px) {
            #bp_banner .hero-text h1
            {
                bottom: 5%;
                margin-top: -5px;
                margin-left: -28%;
                font-size: 48px;
            }
        }


        @media(min-width: 768px)
         {
            #bp_banner .hero-text h1
            {
                bottom: 5%;
                margin-top: -30px;
                margin-left: -7%;
                /* font-size: 60px; */
            }

        }


         @media(min-width: 1025px) {
            #bp_banner .hero-text h1
            {
                bottom: 5%;
                margin-top: -40px;
                margin-left: -4%;
                /* font-size: 40px; */
            }
        }

    </style>

</head>

<body>
    <!--Begin Navbar-->

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="padding: 10px;">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>



                <a class="navbar-brand" href="index.html">
                    <img alt="Brand" src="images/LogoMakr_5es2Bi.png" height="50px;" width="50px;" style="margin-top: -30%; overflow: hidden;">
                </a>


            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right " style="margin-top: 10px;">
                    <li>
                        <a href="index.php#home">Home</a>
                    </li>
                    <li>
                        <a href="index.php#about">About Us</a>
                    </li>
                    <li>
                        <a href="index.php#gallery">Gallery</a>
                    </li>
                    <li>
                        <a href="schedule.php">Schedule</a>
                    </li>
                    <li>
                        <a href="topcont.php">Top Contestants</a>
                    </li>
                    <li>
                        <a href="cont.php">Contestants</a>
                    </li>
                    <li>
                        <a href="index.php#judges">Judges</a>
                    </li>
                    <li>
                        <a href="index.php#sponsors">Sponsors</a>
                    </li>
                    <li>
                        <a href="index.php#contact">Contact Us</a>
                    </li>

                    <li>
                        <button type="Login" class="btn btn-primary" style="color: #fff; margin-top: 10px;" data-toggle="modal" data-target="#loginModal">Login
                            <a href="login.html"></a>
                        </button>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!--End Navbar-->


    <!--Begin Section: Main content-->

    <!--Begin Banner-->
    <section id="bp_banner" style="background: #fff; overflow-x: hidden">
        <img src="./images/purple_glitter.jpg" height="400;" style="width:100vw;">
        <div class="overlay"></div>

        <div class="hero-text">
            <h1 style="color: #fff; text-align: center; z-index: 1; font-size: 70px; margin-left: -5%;">Contestants</h1>
        </div>
    </section>
    <!--End Banner-->

    <div class="row">
        <div class="container">
            <div class="col-md-4">
                    <div class="panel panel-default" style="margin-top: 5%; height: 250px; width: 180px;">
                    <?php
$query = mysqli_query($con, "SELECT * FROM regis WHERE id='" . $emailid . "'");
while ($row = mysqli_fetch_array($query)) {

    ?>
                    <div class="panel-body">
                              <img src="<?php echo '../Apple-master/img/users/' . $row['file1']; ?>" height="170px;" width="140px;" >

                </div>
                            <center><a href="vote.php?emailid=<?php echo $row['id']; ?>"><h4>Vote</h4></a></center>

            </div>
            </div>

            <div class="col-md-4" id="userinfo" style="margin-top: 5%;">

            <fieldset>
                <legend>User Information</legend>
                <h4>First Name: <span><?php echo $row['fname']; ?></span></h4>
                <h4>Last Name: <span><?php echo $row['lname']; ?></span></h4>
                <h4>Age: <span><?php echo $row['age']; ?></span></h4>
                <h4>Height: <span><?php echo $row['height']; ?></span></h4>
                <h4>Weight: <span><?php echo $row['weight']; ?></span></h4>
            </fieldset>
            </div>

           <div class="col-md-4">
                    <div class="panel panel-default" style="margin-top: 5%; margin-left: 8%; height: 250px; width: 180px; background: rgb(47, 25, 70); color: #fff;">
                            <div class="panel-body">
                            <?php
$sql = "SELECT count(name) AS total FROM vote WHERE email='" . $row['email'] . "'";
    $result = mysqli_query($con, $sql);
    $values = mysqli_fetch_array($result);
    $num_rows = $values['total'];

    echo '<i class="fa fa-thumbs-o-up fa-5x" aria-hidden="true" style="margin-left: 30%; margin-bottom: 10%; margin-top: 20%;"></i>';
    echo "<center><h2>" . $num_rows . "</h2></center>";
    ?>
                            </div>
                    </div>
            </div>

<?php }?>
        </div>
    </div>
                </div></div>

    <div class="row" style="margin-top: 5%; margin-bottom: 10%;">
        <div class="container">
            <center>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/1eVTbpkhWSw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </center>
        </div>
    </div>









    <!--End Section: Main Content-->

    <!--Begin Section: Contact Us-->
    <section id="sponsors" style="background: #1a1724;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-push-2">
                        <h1 style="font-family: 'Germania One', cursive; color: #fff;  font-size: 50px;margin-bottom: 5%; margin-top: 5%; margin-left: 30%;">Contact Us</h1>
                    </div>

                    <div class="col-md-4" style="margin-top: 5%; ">
                        <center>
                            <img src="images/LogoMakr_5es2Bi.png" height="140px;" width="170px;">
                        </center>
                    </div>

                    <div class="col-md-4" style="font-size: 16px; color: #fff;">
                        <center>
                            <h3>
                                <b>Quick Links</b>
                            </h3>
                            <ul style="list-style: none; margin-top: 5%;">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="index.html#about">About Us</a>
                                </li>
                                <li>
                                    <a href="schedule.html">Schedule</a>
                                </li>
                                <li>
                                    <a href="index.html#gallery">Gallery</a>
                                </li>
                                <li>
                                    <a href="index.html#judges">Judges</a>
                                </li>
                                <li>
                                    <a href="index.html#sponsors">Sponsors</a>
                                </li>
                                <li>
                                    <a href="cont.html">Contestants</a>
                                </li>
                                <li>
                                    <a href="topcont.html">Top Contestants</a>
                                </li>
                            </ul>

                        </center>
                    </div>

                    <div class="col-md-4" style="font-size: 16px; color: #fff;">
                        <center>
                            <h3>
                                <b>Connect with Us</b>
                            </h3>
                            <ul class="footer-follow">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>

                            </ul>
                        </center>
                    </div>


                </div>
            </div>
        </section>
        <div class="row" style="background: rgb(54, 54, 54); color: #fff;">
            <div class="col-md-8 col-md-push-4">
                <!-- footer copyright -->
                <div class="footer-copyright">
                    <p>Copyright © 2018. All Rights Reserved. Designed by
                        <a href="http://fametechnologies.in/" target="_blank">Fame Technologies</a>
                    </p>
                </div>
                <!-- /footer copyright -->
            </div>
        </div>


        <!--End Section: Contact Us-->

        <!--Modal-->
        <!--Login Modal-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        <h4 class="modal-title" style="color: #000;">Login</h4>

                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                              <label for="InputEmail">Email address</label>
                              <input type="email" class="form-control" id="InputEmail" placeholder="Email">
                            </div>
                            <div class="form-group">
                              <label for="InputPassword">Password</label>
                              <input type="password" class="form-control" id="InputPassword" placeholder="Password">
                            </div>
                            <a href="userprof.html" type="submit" class="btn btn-success">Login</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
         <!--Vote Modal-->
   <div class="modal fade" id="voteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    <h4 class="modal-title" style="color: #000;">Vote</h4>

                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                                    <label for="InputName">Name</label>
                                    <input type="text" class="form-control" id="InputName" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                          <label for="InputEmail">Email address</label>
                          <input type="email" class="form-control" id="InputEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="InputNumber">Contact Number</label>
                          <input type="tel" class="form-control" id="InputNumber" placeholder="[+91]">
                        </div>
                        <button class="btn-primary">Vote</button>
                    </form>
                </div>

            </div>
        </div>
    </div>



         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    </body>

    </html>
