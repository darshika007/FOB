<?php
include("include.php");
function GetImageExtension($imagetype)
 {
   if(empty($imagetype)) return false;
   switch($imagetype)
   {
       case 'image/bmp': return '.bmp';
       case 'image/gif': return '.gif';
       case 'image/jpeg': return '.jpg';
       case 'image/png': return '.png';
       default: return false;
   }
 }

if(isset($_POST['submit']))
{
  $target1 = "../Apple-master/img/users/".basename($_FILES["file1"]["name"]);
  $file1=$_FILES['file1']['name'];
  $error = $_FILES['file1']['error'];
  $imgtype=$_FILES['file1']['type'];
  $ext= GetImageExtension($imgtype);
  $target2 = "../Apple-master/img/proof/".basename($_FILES["file2"]["name"]);
  $file2=$_FILES['file2']['name'];
  $error = $_FILES['file2']['error'];
  $imgtype=$_FILES['file2']['type'];
  $ext= GetImageExtension($imgtype);
$phone=$_POST['phone'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$age=$_POST['age'];
$weight=$_POST['weight'];
$radio=$_POST['radio'];
$date=$_POST['date'];
$drop1=$_POST['drop1'];
$link=$_POST['link'];
$talent=$_POST['talent'];
$yourself=$_POST['yourself'];
$height=$_POST['height'];
$pwd=$_POST['pwd'];
$query="SELECT * FROM regis where email='$email' or phone='$phone'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result))
{
    echo "<script type='text/javascript'>
    alert('you already Registered')</script>";
    echo "<script>window.location.href='reg.php'</script>";
}
else
{
  $sql = "INSERT INTO regis(file1,file2,phone,fname,lname,email,age,weight,radio,date,drop1,link,talent,yourself,height,pwd)";
  $sql1="VALUES('$file1','$file2','$phone','$fname','$lname','$email','$age','$weight','$radio','$date','$drop1','$link','$talent','$yourself','$height','$pwd')";
  $res=mysqli_query($con,$sql.$sql1);
  if($res)
  {
    $hah=move_uploaded_file($_FILES['file1']['tmp_name'],$target1);
    $heh=move_uploaded_file($_FILES['file2']['tmp_name'],$target2);
       $msg = "Registered successfully";
      echo "<script type='text/javascript'>alert('$msg');window.location.href='reg.php';</script>";


  }
  else{
  echo "<script type='text/javascript'>
  alert('Could not Register! Try again')</script>";
  echo "<script>window.location.href='reg.php'</script>";
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
                        <a href="index.php#about">About Us</a>
                    </li>
                    <li>
                        <a href="index.php#gallery">Gallery</a>
                    </li>
                    <li>
                        <a href="index.php#schedule">Schedule</a>
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
                        <button type="Login" class="btn btn-primary" style="color: #fff; margin-top: 10px;">Login
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
            <h1 style="color: #fff; text-align: center; z-index: 1; font-size: 70px;">Registration</h1>
        </div>
    </section>
    <!--End Banner-->

    <div class="row" style="margin-top: 5%; margin-bottom: 10%;">
        <div class="container">
            <div class="col-md-6 col-md-push-3">
    <section id="regform">
        <div class="well" style="padding-bottom: 50px;">
        <form action="reg.php" method="POST" enctype="multipart/form-data" onsubmit="return myfun()">
                <div class="form-group">
                        <label for="InputFName">First Name</label>
                        <input type="text" name="fname" class="form-control" id="InputFName" placeholder="Enter First Name" required="">
                </div>

                <div class="form-group">
                        <label for="InputLName">Last Name</label>
                        <input type="text" name="lname" class="form-control" id="InputLName" placeholder="Enter Last Name" required="">
                </div>

                <div class="form-group">
                        <label for="InputEmail">Email Address</label>
                        <input type="email"  name="email" class="form-control" id="InputEmail" placeholder="Enter Email Address" required="">
                </div>
                <div class="form-group">
                        <label for="InputEmail">Password</label>
                        <input type="password"  name="pwd" class="form-control" id="pwd" placeholder="Enter Email Address" required="">
                </div>
                <div class="form-group">
                        <label for="InputEmail">Confirm Password</label>
                        <input type="password"  name="cpwd" class="form-control" id="cpwd" placeholder="Enter Email Address" required="">
                </div>
                <div class="form-group">
                        <label for="InputNo">Contact Number</label>
                        <input type="phone" name="phone" class="form-control" id="phone" placeholder="[+91]" value="">
                        <span id="message" style="color:red"></span>
              </div>

                <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Profile Image</label>
                        <input type="file"  name="file1" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <div class="radio">
                    <b>Gender</b><br>
                        <label>
                          <input type="radio" id="redio" name="radio" value="Female" checked="checked">
                         Female
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" id="radio" name="radio" value="Male" checked="checked">
                          Male
                        </label>
                </div>

                <div class="form-group">
                        <label for="Inputdob">Date of Birth(DD/MM/YY)</label>
                        <input type="date" name="date" class="form-control" id="Inputdob" required="">
                </div>
                <div class="form-group">
                        <label for="Inputdob">Age</label>
                        <input type="text" name="age" class="form-control" id="Inputdob" required="">
                </div>
                <div class="form-group">
                        <label for="Inputdob">Weight</label>
                        <input type="text" name="weight" class="form-control" id="Inputdob" required="">
                </div>
                <div class="form-group">
                        <label for="Inputdob">Height</label>
                        <input type="text" name="height" class="form-control" id="Inputdob" required="">
                </div>
                <div class="form-group">
                        <label for="InputVenue">Venue</label>
                        <select class="form-control form-control-sm" name="drop1" id="drop1" required="">
                        <?php
                                    $query=mysqli_query($con,"SELECT * FROM schedule");
                                   while ($row = mysqli_fetch_array($query))
                                     {
                                         ?>
                                    <option> <?php echo $row['venu']; ?></option>
                                        <?php } ?>
                        </select>
                </div>


                <div class="form-group">
                        <label for="exampleFormControlFile2">Upload Image for ID Proof</label>
                        <input type="file" name="file2" class="form-control-file" id="exampleFormControlFile2">
                </div>

                <div class="form-group">
                        <label for="Inputtal">What is your special talent?</label>
                        <textarea class="form-control" name="talent" rows="5" id="Inputtal"></textarea>

                </div>

                <div class="form-group">
                        <label for="Inputbio">Tell us more about yourself</label>
                        <textarea class="form-control" name="yourself" rows="5" id="Inputbio"></textarea>

                </div>

                <div class="form-group">
                        <label for="InputLink">Copy & Paste the link to your Youtube Video</label>
                        <input type="text" name="link" class="form-control" id="InputLink" placeholder="Enter YouTube Link">
                </div>

                <button type="submit" id="btnSubmit" name="submit" class="btn btn-success btn-md" style="float: right;">Register</button>


        </form>
        </div>
    </section>
    </div>
    </div>
    </div>

   <!--End Section: Main content-->

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

<!--script for password and confirm password-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function ()
        {
            var password = $("#pwd").val();
            var confirmPassword = $("#cpwd").val();
            if (password != confirmPassword)
             {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });

</script>
<!--end password and confirm  password script-->


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
function myfun(){
    var a = document.getElementById("phone").value;
    if(a==""){
        document.getElementById("message").innerHTML="**pls fill mobile number";
        return false;
    }
    if(isNaN(a)){
        document.getElementById("message").innerHTML="**enter only numeric values";
        return false;
    }
    if(a.length<10) {
        document.getElementById("message").innerHTML="**mobile number must be 10 digit";
        return false;
    }
    if(a.length>10){
        document.getElementById("message").innerHTML="**mobile number must be 10 digit";
        return false;
    }
    }
</script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>
