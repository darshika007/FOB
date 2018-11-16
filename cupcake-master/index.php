<?php include("include.php");
if(isset($_POST['email']))
 $email=$_POST['email'];
 if(isset($_POST['pwd']))
 $pwd=$_POST['pwd'];
 if(isset($_POST['login'])){
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
$query=mysqli_query($con,"SELECT * FROM regis WHERE email='$email' and pwd='$pwd'");
    if(mysqli_num_rows($query)>0){
        //url is not working
        session_start();
        $_SESSION['logged in'] = 'true';
    $_SESSION['email'] = $email;
    //end url is not working
header("Location:userprof.php?emailid=$email");
    }
    // end to terive the name and password
else{
   header("location:index.php");
 }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Face Of Bengaluru-2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/infinite-slider.css"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <!--CDN for slick-->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
    <script src="main.js"></script>
    <style>
        body {
            background-color: #fff;
            /* margin: 0px; */
            overflow-x: hidden;
            font-family: arial;
            color: #fff;
        }

        /* h1{
        margin:0;
    } */

        a {
            color: #0078ff;
        }

        #canvas {
            width: 100%;
            /* height:700px; */
            height: 110vh;
            /* overflow: hidden; */
            position: absolute;
            top: 0;
            left: 0;
            background-color: #1a1724;
        }

        .canvas-wrap {
            position: relative;

        }

        div.canvas-content {
            position: relative;
            z-index: 2;
            color: #fff;
            text-align: center;
            padding-top: 350px;
            font-family: 'Aref Ruqaa', serif;

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
                    <img alt="Brand" src="images/LogoMakr_5es2Bi.png" height="50px;" width="50px;" style="margin-top: -30%;">
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
                        <button type="Login" class="btn btn-primary" style="color: #fff; margin-top: 10px;" data-toggle="modal" data-target="#loginModal">Login</button>

                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!--End Navbar-->



    <!--Begin: Home Section-->
    <section class="canvas-wrap" id="home">
        <div class="canvas-content">
            <h1 style=" font-size: 80px; font-weight: 600;">Face Of Bengaluru-2018</h1>
        </div>
        <div id="canvas" class="gradient"></div>

    </section>
    <!-- <section id="home" style="top: -10%; height: 100vh;">

                    <div id="canvas" class="gradient" style="position: absolute;  text-align: center; position: absolute;   color: white;">
                            <h1  style="font-family: 'Aref Ruqaa', serif; margin-top: 50%;">Face Of Bengaluru-2018</h1>
                    </div>
                    <div class="canvas-content">

                    </div>
                </div>

    </section> -->
    <!--End: Home Section-->


    <!--Begin section: About-->
    <section id="about" style="margin-top: 30%; color: #000">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-push-2">
                    <h1 style="font-family: 'Germania One', cursive; font-size: 50px;">Do you think you have what it takes to be the Face Of Bengaluru?</h1>

                    <p style="text-align: justify; font-size: 18px; margin-top: 5%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis repudiandae quis id doloremque, ullam
                        odit temporibus maiores, numquam, unde autem in quas corrupti ipsam veniam ad veritatis impedit dolores
                        quo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eaque deleniti vero quis quisquam
                        architecto corporis? Eligendi, molestias! Harum sunt obcaecati reiciendis distinctio ratione quisquam
                        vel laborum commodi dolore corrupti.</p>
                    <br>
                    <p style="text-align: justify; font-size: 18px; ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis repudiandae quis id doloremque, ullam
                        odit temporibus maiores, numquam, unde autem in quas corrupti ipsam veniam ad veritatis impedit dolores
                        quo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eaque deleniti vero quis quisquam
                        architecto corporis? Eligendi, molestias! Harum sunt obcaecati reiciendis distinctio ratione quisquam
                        vel laborum commodi dolore corrupti.</p>

                        <a href="reg.php"><button type="Login" class="btn" style="color: #fff; margin-top: 10px; float: right; background: #ff3300;">Register Now!
                    </button></a>
                </div>



            </div>

        </div>
        </div>
        </div>
    </section>


    <!--End section: About-->


    <!--Begin section: Gallery-->

    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-push-2" style="margin-top: 10%;">
                    <h1 style="font-family: 'Germania One', cursive; color: #000; margin-left: 30%; font-size: 50px;margin-bottom: 5%;">Gallery</h1>
                </div>
                            <?php
                               $count=0;
                               $sql="SELECT profile.id,gallery.vid,profile.cname,gallery.file1 FROM profile,gallery where profile.id=gallery.vid ORDER BY id DESC";
                               $res=mysqli_query($con,$sql);
                               while($row=mysqli_fetch_assoc($res)){
                                 $imageURL='../Apple-master/img/gallery/'. $row['file1'];
                                   $count=$count+1;
                               if($count==7){
                               break;
                               }
                              else{
                               ?>
                <div class="col-md-4" style="margin-bottom:5%;">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="<?php echo $imageURL; ?>" height="300px;" width="295px;" style="margin-left:20px;">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title"><?php echo $row['cname']; ?></h3>
                        </div>
                    </div>
                </div>
                <?php } }?>
                <a href="gallery.php"><button type="Login" class="btn" style="color: #fff;margin-left:88%; background: #2078aa;">View More
                  </button>  </a>
            </div>

        </div>
    </section>
    <!--End section: Gallery-->


    <!--Begin Section: Judges-->

    <section id="judges" style="margin-top:10%; margin-bottom: 10%;">
        <div class="row">
            <div class="container" style="padding-left: 5%;">
                <div class="col-md-10 col-md-push-2" style="margin-bottom: 5%;">
                    <h1 style="font-family: 'Germania One', cursive; color: #000; margin-left: 30%; font-size: 50px;">Judges</h1>
                </div>
                <?php

                $sql="SELECT * FROM judge ORDER BY id DESC";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                  $imageURL='../Apple-master/img/judges/'.$row['file1'];
                  $nameURL = $row['name'];
                  $desigURL = $row['designation'];
                  ?>
                <div class="col-md-3">
                    <div class="content" style="padding-left: 7%;">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="<?php echo $imageURL; ?>" alt="Judge" class="image" height="215px;" width="130px;" >
                        <div class="content-details fadeIn-top">
                            <h3 class="content-title"><?php echo $nameURL;?></h3>
                            <p><?php echo $desigURL ?></p>
                        </div>
                    </div>
                </div>
              <?php } ?>
            </div>
        </div>
    </section>



    <!--End Section: Judges-->

    <!--Begin Section: Sponsors-->

    <section id="sponsors" style="margin-bottom: 8%;">
        <div class="container">
            <div class="row">
                    <div class="col-md-10 col-md-push-2">
                            <h1 style="font-family: 'Germania One', cursive; color: #000; margin-left: 30%; font-size: 50px;margin-bottom: 5%;">Sponsors</h1>
                    </div>
                   <div class="col-md-10 col-md-push-2" ></div>

                   <marquee behavior="scroll" direction="left"  scrollamount=10>
                     <?php
                     $sql="SELECT * FROM sponser";
                     $res=mysqli_query($con,$sql);
                     while($row=mysqli_fetch_assoc($res)){
                       $imageURL='../Apple-master/img/sponsors/'.$row['file1'];
                     ?>
                    <img src="<?php echo $imageURL; ?>" width="140" height="120" alt="Cupcake Inc." style="padding-right: 20px;"/>
                  <?php } ?>
                </marquee>
                   <!-- <div class="your-class">
                    <div><img src="images/cupcake.jpg" alt=""></div>
                    <div><img src="images/cupcake.jpg" alt=""></div>
                    <div><img src="images/cupcake.jpg" alt=""></div>
                  </div> -->
                   <!-- <div class="container">
                        <section class="customer-logos slider">
                          <div class="slide"><img src="images/image1.png" height="100px;" width="100px;"></div>
                          <div class="slide"><img src="images/image2.png"></div>
                          <div class="slide"><img src="images/image3.png"></div>
                          <div class="slide"><img src="images/image4.png"></div>
                          <div class="slide"><img src="images/image5.png"></div>
                          <div class="slide"><img src="images/image6.png"></div>
                          <div class="slide"><img src="images/image7.png"></div>
                          <div class="slide"><img src="images/image8.png"></div>
                        </section>
                      </div> -->
            </div>
        </div>
    </section>


    <!--End Section: Sponsors-->


    <!--Begin Section: Contact Us-->
    <section id="contact" style="background: #1a1724;">
        <div class="container">
            <div class="row">
                    <div class="col-md-10 col-md-push-2" >
                            <h1 style="font-family: 'Germania One', cursive; color: #fff;  font-size: 50px;margin-bottom: 5%; margin-top: 5%; margin-left: 30%;">Contact Us</h1>
                    </div>

                    <div class="col-md-4" style="margin-top: 5%; ">
                       <center><img src="images/LogoMakr_5es2Bi.png" height="140px;" width="170px;">
                    </center>
                    </div>

                    <div class="col-md-4" style="font-size: 16px;">
                        <center>
                        <h3 ><b>Quick Links</b></h3>
                        <ul style="list-style: none; margin-top: 5%;">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="index.html#about">About Us</a></li>
                            <li><a href="schedule.html">Schedule</a></li>
                            <li><a href="index.html#gallery">Gallery</a></li>
                            <li><a href="index.html#judges">Judges</a></li>
                            <li><a href="index.html#sponsors">Sponsors</a></li>
                            <li><a href="cont.html">Contestants</a></li>
                            <li><a href="topcont.html">Top Contestants</a></li>
                        </ul>

                        </center>
                    </div>

                    <div class="col-md-4" style="font-size: 16px;">
                            <center>
                            <h3 ><b>Connect with Us</b></h3>
                            <ul class="footer-follow">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                            </ul>
                            </center>
                    </div>


            </div>
        </div>
    </section>
            <div class="row" style="background: rgb(54, 54, 54);">
                <div class="col-md-8 col-md-push-4">
                    <!-- footer copyright -->
                    <div class="footer-copyright">
                            <p>Copyright © 2018. All Rights Reserved. Designed by <a href="http://fametechnologies.in/" target="_blank">Fame Technologies</a></p>
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
                    <form method="post" action="index.php">
                        <div class="form-group">
                          <label for="InputEmail">Email address</label>
                          <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="InputPassword">Password</label>
                          <input type="password" class="form-control" id="InputPassword" name="pwd" placeholder="Password">
                        </div>
                          <button type="submit" name="login" class="btn btn-success">Login</button>
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

    <script src="js/three.min.js"></script>
    <!-- Helpers -->
    <script src="js/projector.js"></script>
    <script src="js/canvas-renderer.js"></script>

    <!-- Visualitzation adjustments -->
    <script src="js/3d-lines-animation.js"></script>

    <!-- Animated background color -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/color.js"></script>



<!--Slick Carousel-->
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){
    $('.your-class').slick({


    });
  });
  </script> -->

<!--Carousel-->


    <!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
    <script src="https://use.fontawesome.com/826a7e3dce.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"></script> -->
</body>

</html>
