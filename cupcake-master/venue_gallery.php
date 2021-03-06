<?php include("include.php");
if( isset($_GET['id']) )
{
$_SESSION['id'] = $_GET['id'];
$id=$_SESSION['id'];
$res= mysqli_query($con,"SELECT * FROM profile WHERE id='$id'");
$row= mysqli_fetch_assoc($res);
$_SESSION['cname']=$row['cname'];
$haha=$_SESSION['cname'];
} ?>
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
        @media(max-width:321px) {
            #bp_banner .hero-text {
                font-size: 20px;
                left: 5px;
            }
        }

        @media(max-width:1024px) {
            #bp_banner .hero-text h1 {
                bottom: 5%;
                /* padding-top: -30%; */
                margin-top: -250px;
                left: 35%;
            }
        }

        @media(max-width: 768px) {
            #bp_banner .hero-text h1 {
                bottom: 5%;
                /* padding-top: -30%; */
                margin-top: -100px;
                left: 35%;
            }
        }

        @media(max-width: 375px) {
            #bp_banner .hero-text h1 {
                bottom: 5%;
                /* padding-top: -30%; */
                margin-top: -100px;
                left: 20%;
            }
        }

        @media(max-width: 414px) {
            #bp_banner .hero-text h1 {
                bottom: 5%;
                /* padding-top: -30%; */
                margin-top: -100px;
                margin-left: -10%;

            }

            #venue_gallery .container .row .col-md-4 img{
                /* margin: auto; */
                margin-left: 20px;
            }
        }

        @media(max-width: 320px) {
            #bp_banner .hero-text h1 {
                bottom: 5%;
                /* padding-top: -30%; */
                margin-top: -20px;
                margin-left: -10%;
                font-size: 50px;
            }
            #venue_gallery .container .row .col-md-4 img{
                /* margin: auto; */
                margin-left: -50px;
            }
        }

        @media(max-width: 360px) {
            #bp_banner .hero-text h1 {
                bottom: 5%;
                /* padding-top: -30%; */
                margin-top: -20px;
                left: 14%;
                font-size: 40px;
            }

            #venue_gallery .container .row .col-md-4 img{
                /* margin: auto; */
                margin-left: 40px;
            }

        }

        @media(max-width: 411px) {
            #bp_banner .hero-text h1 {
                bottom: 5%;
                /* padding-top: -30%; */
                margin-top: -20px;
                left: 19%;
            }
            #venue_gallery .container .row .col-md-4 img{
                /* margin: auto; */
                margin-left: 40px;
            }
        }

        @media(max-width: 1366px) {
            #bp_banner .hero-text h1 {
                bottom: 5%;
                /* padding-top: -30%; */
                margin-top: -20px;
                left: 40%;
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
                        <a href="index.html#about">About Us</a>
                    </li>
                    <li>
                        <a href="index.html#gallery">Gallery</a>
                    </li>
                    <li>
                        <a href="schedule.html">Schedule</a>
                    </li>
                    <li>
                        <a href="topcont.html">Top Contestants</a>
                    </li>
                    <li>
                        <a href="cont.html">Contestants</a>
                    </li>
                    <li>
                        <a href="index.html#judges">Judges</a>
                    </li>
                    <li>
                        <a href="index.html#sponsors">Sponsors</a>
                    </li>
                    <li>
                        <a href="index.html#contact">Contact Us</a>
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
            <h1 style="color: #fff; text-align: center; z-index: 1; ">Gallery</h1>
        </div>
    </section>
    <!--End Banner-->

    <section id="venue_gallery" style="margin-top: 5%; margin-bottom: 10%;">
        <div class="container" >
            <div class="row">
              <div class="col-md-10 col-md-push-1" style="margin-bottom: 5%;">
                  <h1 style="font-family: 'Germania One', cursive; color: #000;font-size: 50px;text-align: center;"><?php echo $haha;?></h1>
                </div>
                <?php
                  $sql="SELECT * FROM gallery WHERE vid='".$_SESSION['id']."'";
                  $res=mysqli_query($con,$sql);
                  while($row=mysqli_fetch_assoc($res)){
                    $imageURL='../Apple-master/img/gallery/'.$row['file1'];
                ?>
                <div class="col-md-4"  style="margin-top: 20px;">
                    <img src="<?php echo $imageURL; ?>" height="370px;" width="320px;" style="box-shadow: 3px 3px #4d4b4b; ">
                </div>
              <?php }  ?>

                    <!-- <div class="grid">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                            <img src="images/cupcake.jpg" alt="Sample photo">
                    </div> -->

            <!-- <div class="row" style="margin-top: 5%;">

                <div class="col-md-4 ">
                    <div class="content">
                            <a href="#">   <div class="content-overlay"></div>
                        <img class="content-image" src="images/cupcake.jpg" height="300px;" width="295px;" style="margin-left:20px;">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">College #4</h3>
                        </div></a>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="content">
                            <a href="#">    <div class="content-overlay"></div>
                        <img class="content-image" src="images/cupcake.jpg" height="300px;" width="295px;" style="margin-left:20px;">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">College #5</h3>
                        </div></a>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="content">
                            <a href="#">    <div class="content-overlay"></div>
                        <img class="content-image" src="images/cupcake.jpg" height="300px;" width="295px;" style="margin-left:20px;">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">College #6</h3>
                        </div></a>
                    </div>

                </div> -->



            </div>

    </section>


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

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>
