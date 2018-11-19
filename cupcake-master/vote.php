<?php
include("include.php");
$emailid=$_GET['emailid'];
?>
<?php
SESSION_START();
if(isset($_POST["vote"]))
{
$email=$_POST['email'];
$name=$_POST['name'];
$email1=$_POST['email1'];
$phone=$_POST['phone'];
// one email id is not using more than one time
$query="SELECT * FROM vote where email1='$email1'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result))
{
    echo "<script type='text/javascript'>
    alert('you already Voted')</script>";
    echo "<script>window.location.href='topcont.php'</script>";
}
// end email id is not using more than one time
//store a image in database3
else{
$sql="INSERT INTO vote (email,name,email1,phone) VALUES ('$email','$name','$email1',$phone)";
$res=mysqli_query($con,$sql);
if($res){
header("location:topcont.php");
}
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
                margin-top: -950px;
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
                left: 20%;
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
        }

        @media(max-width: 360px) {
            #bp_banner .hero-text h1 {
                bottom: 5%;
                /* padding-top: -30%; */
                margin-top: -20px;
                left: 14%;
            }
        }

        @media(max-width: 411px) {
            #bp_banner .hero-text h1 {
                bottom: 5%;
                /* padding-top: -30%; */
                margin-top: -20px;
                left: 19%;
            }
        }

        @media(max-width: 1366px) {
            #bp_banner .hero-text h1 {
                bottom: 5%;
                /* padding-top: -30%; */
                margin-top: -210px;
                left: 40%;
            }
        }

        @media(max-width: 1500px) {
            #bp_banner .hero-text h1 {
                bottom: 5%;
                /* padding-top: -30%; */
                margin-top: -10px;
                margin-left: 5%;
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
                        <a href="index.php">Home</a>
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
                        <a href="index.php#topcont">Top Contestants</a>
                    </li>
                    <li>
                        <a href="index.php#cont">Contestants</a>
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


    <!--Begin Section: Main content-->

    <!--Begin Banner-->
    <section id="bp_banner" style="background: #fff; overflow-x: hidden">
        <img src="./images/purple_glitter.jpg" height="400;" style="width:100vw;">
        <div class="overlay"></div>

        <div class="hero-text">
            <h1 style="color: #fff; text-align: center; z-index: 1; font-size: 50px;">Vote</h1>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
    <div class="panel panel-default">
  <div class="panel-body">
    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                    <h4 class="modal-title" style="color: #000;">Vote</h4>

                </div>
                <div class="modal-body">
                    <form action="vote.php" method="POST">

                      <?php
                $sql="SELECT * FROM regis WHERE id='".$emailid."'";
                $res=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($res)){
                ?>
              <input type="hidden" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="InputName" placeholder="Enter Name">
                        <br>
                <?php } ?>

                        </select>
                        <div class="form-group">
                                    <label for="InputName">Name</label>
                                    <input type="text" name="name" class="form-control" id="InputName" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                          <label for="InputEmail">Email address</label>
                          <input type="email" class="form-control" name="email1" id="InputEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="InputNumber">Contact Number</label>
                          <input type="tel" class="form-control" id="InputNumber" name="phone" placeholder="[+91]">
                        </div>
                        <button name="vote" class="btn-primary">Vote</button>
                    </form>
                </div>

</div>
    </div>

</div>
    </div>
    </div>
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


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>
