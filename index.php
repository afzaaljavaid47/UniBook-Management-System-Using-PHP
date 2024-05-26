<!DOCTYPE html>
<html lang="en">
<head>
  <title>UniBook</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/main.js"></script>
  <style type="text/css">
    #hov:hover
    {
      background-color: #F85A16;
    }
    .site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
    
  </style>
</head>
<body>


 <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="container"><!-- Brand -->
  <a class="navbar-brand" href="#">UniBook</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto text-center">
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size: 20px;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about" style="font-size: 20px;">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services" style="font-size: 20px;">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact" style="font-size: 20px;">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-primary" data-toggle="modal" data-target="#mymodal" style="font-size: 18px;color: white;">Log In</a>
      </li>
      </li>
      <li class="nav-item" style="margin-left: 10px;">
        <a class="nav-link btn btn-success" href="join_us.php" style="font-size: 18px;color: white;">Join Us</a>
      </li>
    </ul>
</div>
  </div>
</nav> 
<div class="modal fade" id="mymodal">
    <div class=" modal-dialog">
    <div class="modal-content">
    <form method="post">
        <div class="modal-header">
        <h2 class="text-primary">Log In</h2>
        <button class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label style="font-size: 22px;">User Name </label>
                <input type="text" name="unames" class="form-control" required="" pattern="[A-Za-z0-9]{6,}" title="Name Contain At Least Six Characters(Only Alphabets are Allowed)">
            </div>
            <div class="form-group">
                <label style="font-size: 22px;" >Password </label>
                <input type="password" name="passs" class="form-control" required="">
            </div>
        </div>
        <div class="modal-footer">
            <input type="submit" name="submit_login" class="bta btn btn-primary" value="Log In" style="font-size: 19px;">
        </div>
    </form>
    </div>
</div>
</div>

<?php
if(isset($_POST['submit_login']))
{
  $un=$_POST['unames'];
  $pa=$_POST['passs'];
  include("dbcon.php");
  $sql="SELECT * FROM `register_user` WHERE `uname`='$un' and `password`='$pa'";
  $run=mysqli_query($con,$sql);
  $data=mysqli_fetch_assoc($run);
  if($data>0)
  {
    setcookie("login","1");
    setcookie("un",$data['id']);
      ?>
      <script type="text/javascript">
        alert("Log In Successfully !");
        window.location.href="user_profile.php";
      </script>

      <?php
  }
  else
  {
      ?>
    <script type="text/javascript">
      alert("User Name or Password is incorrect!");
    </script>
    <?php
  }
  }
?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/group-study.jpg" style="width: 100%;height: 91vh;" alt="Study in Groups">
       <div class="carousel-caption">
    <h1 style="text-shadow: 0 0 10px #000, 0 0 20px #000, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #000, 0 0 60px #000, 0 0 70px #000">Want to Study in Groups</h1>
    <h3 style="text-shadow: 2px 2px red;">Here We Have a Lot of Groups To Educate You</h3>
    <a href="join_us.php"><button class="btn btn-lg btn-primary" style="font-size: 20px;letter-spacing: 1px;">Join Us</button></a>
  </div>
    </div>
    <div class="carousel-item">
      <img src="img/teachers.jpg" style="width: 100%;height: 91vh;" alt="Lot Number of Greate Teachers">
       <div class="carousel-caption">
    <h1 style="text-shadow: 0 0 10px #000, 0 0 20px #000, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #000, 0 0 60px #000, 0 0 70px #000">Get Your Answers</h1>
    <h3 style="text-shadow: 2px 2px red;">Here We Have a Lot of Teachers and Senior Members To Educate You</h3>
    <a href="join_us.php"><button class="btn btn-lg btn-primary" style="font-size: 20px;letter-spacing: 1px;">Join Us</button></a>
  </div>
    </div>
     <div class="carousel-item">
      <img src="img/learn-something-new.jpg" style="width: 100%;height: 91vh;" alt="Learn Something New">
       <div class="carousel-caption">
    <h1 style="text-shadow: 0 0 10px #000, 0 0 20px #000, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #000, 0 0 60px #000, 0 0 70px #000">Create Your Own Social Circle</h1>
    <h3 style="text-shadow: 3px 3px blue;">Here You can Open Your Own Community</h3>
    <a href="join_us.php"><button class="btn btn-lg btn-primary" style="font-size: 20px;letter-spacing: 1px;">Join Us</button></a>
  </div>
    </div>
    <div class="carousel-item">
      <img src="img/projects.jpg" style="width: 100%;height: 91vh;" alt="Work on Projects">
       <div class="carousel-caption">
   <h1 style="text-shadow: 0 0 10px #000, 0 0 20px #000, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #000, 0 0 60px #000, 0 0 70px #000">Work on Projects And Learn New Things</h1>
    <h3 style="text-shadow: 2px 2px red;">We Have a Lot of Projects To Work On</h3>
    <a href="join_us.php"><button class="btn btn-lg btn-primary" style="font-size: 20px;letter-spacing: 1px;">Join Us</button></a>
  </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  <div id="about" style="background-color: wheat;">
    <h1 class="text-center" style="padding-top: 20px;padding-bottom: 15px;font-weight: 700;">About Us</h1>
    <div class="container">
    <div class="row">
      <div class="col-md-3 bg-light text-center" style=" box-shadow: 4px 4px 12px 1px #808080;border-bottom-right-radius: 15px;border-top-left-radius: 15px;">
        <img src="img/rizwan.PNG" style="width: 200px;height: 200px;border-radius: 100px;margin-top: 20px;">
        <hr style="width: 100%; height: 1px"> 
        <h2 style="margin-top: 0;">Rizwan</h2>
        <h5 style="padding-bottom: 10px;">Content Writer</h5>
      </div><br>
      <div class="col-md-1"></div>
      <div class="col-md-4 bg-light text-center" style=" box-shadow: 4px 4px 12px 1px #808080;border-top-right-radius: 15px;border-bottom-left-radius: 15px;">
        <img src="img/rizwan.jpeg" style="width: 200px;height: 200px;border-radius: 100px;margin-top: 20px;">
        <hr style="width: 100%; height: 1px"> 
        <h2 style="margin-top: 0;">Rizwan Ramzan</h2>
        <h5>Front End Designer</h5>
      </div><br>
      <div class="col-md-1"></div>
      <div class="col-md-3 bg-light text-center" style=" box-shadow: 4px 4px 12px 1px #808080;border-bottom-right-radius: 15px;border-top-left-radius: 15px;">
        <img src="img/arslan.PNG" style="width: 200px;height: 200px;border-radius: 100px;margin-top: 20px;">
        <hr style="width: 100%; height: 1px"> 
        <h2 style="margin-top: 0;">Arslan Server</h2>
        <h5>PHP Developer</h5>
      </div><br>
    </div>
  </div>
    <p class="container" style="text-align:center;padding: 30px;font-size: 18px;"> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>





<div id="contact" style="background-color: wheat;">
    <h1 class="text-center" style="padding-top: 20px;padding-bottom: 15px;font-weight: 700;">Contact Us</h1>
    <div class="container">
    <div class="row">
      
      <div class="col-md-6 bg-dark" style="color: white;padding: 40px;">
      <div class="text-center">
        <h3 style="padding-bottom: 15px;">Contact Us on</h3>
         <img src="img/gmail.png">
         <span style="margin-left: 20px;">afzaaljavaid47@gmail.com</span><br>
         <img src="img/phone.png">
         <span style="margin-left: 20px;">+92 349-7462877</span><br>
         <img src="img/whatsapp.png">
         <span style="margin-left: 20px;">+92 349-7677974</span>
         <h3 style="padding: 20px;">Follow Us on</h3>
         <a href="https://www.facebook.com/afzaal.javaid.7" target="_blank"><img src="img/Facebook.png"></a>
         <a href="https://www.youtube.com/channel/UCibncDsYcrp8A_4bGzoKW6Q" target="_blank"><img src="img/youtube.png"></a>
         <a href="https://twitter.com/AfzaalJavaid4" target="_blank"><img src="img/twitter.png"></a>
         <a href="https://www.linkedin.com/in/afzaal-javaid-888228193/" target="_blank"><img src="img/linkedin.png"></a>
      </div>
      </div>
      
      <div class="col-md-6 bg-light">
        <h2 style="font-size: 30px;padding: 25px;" class="text-center">Leave Us a Message</h2>
        <div class="container">
        <form method="post">
          <div class="form-group">
            <label style="font-size: 20px;">User Name:</label>
            <input type="text" class="form-control" name="un">
          </div>
          <div class="form-group">
            <label style="font-size: 20px;">E-Mail:</label>
            <input type="email" class="form-control" name="em">
          </div>
          <div class="form-group">
            <label style="font-size: 20px;">Your Message:</label>
            <textarea class="form-control" name="mes"></textarea>
          </div>
          <input type="submit" name="submit" class="btn btn-primary" value="Send" style="font-size: 20px;">
        </form>
        <br>
      </div>
      </div>
    </div>
    </div>
</div>
<br>




<div id="services" style="background-color: wheat;margin-top: 0px;">
    <h1 class="text-center" style="padding-top: 20px;padding-bottom: 15px;font-weight: 700;">Services</h1>
    <div class="container">
    <div class="row">
      <div class="col-md-3 bg-light text-center" style=" box-shadow: 4px 4px 12px 1px #808080;border-bottom-right-radius: 15px;border-top-left-radius: 15px;">
        <img src="img/bms.jpg" style="width: 200px;height: 200px;border-radius: 100px;margin-top: 20px;">
        <hr style="width: 100%; height: 1px"> 
        <h2 style="margin-top: 0;"></h2>
        <h5 style="padding-bottom: 10px;"></h5>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-4 bg-light text-center" style=" box-shadow: 4px 4px 12px 1px #808080;border-top-right-radius: 15px;border-bottom-left-radius: 15px;">
        <img src="img/bed.jpg" style="width: 200px;height: 200px;border-radius: 100px;margin-top: 20px;">
        <hr style="width: 100%; height: 1px"> 
        <h2 style="margin-top: 0;"></h2>
        <h5></h5>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3 bg-light text-center" style=" box-shadow: 4px 4px 12px 1px #808080;border-bottom-right-radius: 15px;border-top-left-radius: 15px;">
        <img src="img/g3.jpg" style="width: 200px;height: 200px;border-radius: 100px;margin-top: 20px;">
        <hr style="width: 100%; height: 1px"> 
        <h2 style="margin-top: 0;"></h2>
        <h5></h5>
      </div>
    </div>


    03324780516
    
  </div>
    <p class="container" style="text-align:center;padding: 30px;font-size: 18px;"> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>


  <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
           <h3 style="color: white;">A Little About UNIBOOK.</h3>
              <p style="color:white;">This is social website Only used for EDUCATION purpose.</p>
              <a href="join_us.php"><button id="hov" class="btn btn-primary">Become A Member</button></a>
        
          </div>

          <div class="col-xs-6 col-md-3">
            
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#about">About Us</a></li>
              <li><a href="#contact">Contact Us</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="index.php">UniBook</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="https://www.facebook.com/afzaal.javaid.7"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="https://twitter.com/AfzaalJavaid4"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="https://www.instagram.com/afzaaljavaid179/   "><i class="fa fa-instagram"></i></a></li>
              <li><a class="linkedin" href="https://www.linkedin.com/in/afzaal-javaid-888228193/"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="linkedin" href="afzaaljavaid47@gmail.com"><i class="fa fa-envelope"></i></a></li> 
              <li><a class="linkedin" href="https://www.youtube.com/channel/UCibncDsYcrp8A_4bGzoKW6Q"><i class="fa fa-youtube"></i></a></li> 

            </ul>
          </div>
        </div>
      </div>
</footer>








</body>
</html>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include("dbcon.php");
if(isset($_POST['submit']))
{
  $n=$_POST['un'];
  $e=$_POST['em'];
  $m=$_POST['mes'];
  $sql="INSERT INTO `messages`(`name`, `email`, `message`) VALUES ('$n','$e','$m')";
  $run=mysqli_query($con,$sql);
  if($run==TRUE)
  {
  require 'vendor/autoload.php';
  $mail = new PHPMailer(true);
  try
  {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'afzaaljavaid179@gmail.com';                     // SMTP username
    $mail->Password   = 'afzaal475456';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to
    $mail->setFrom('afzaaljavaid179@gmail.com', 'Web Response');
    $mail->addAddress('unibook009@gmail.com'); 
    $mail->addReplyTo($e,'Reply');
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Some One Send You a Message From UniBook";
    $mail->Body    = $m;
    $mail->send();
    echo 'Message has been sent';
    ?>
    <script type="text/javascript">
      alert("Message Send Successfully");
      window.location.href="index.php#contact";
    </script>
    <?php
}
catch (Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    
  }
  else
   {
    ?>
    <script type="text/javascript">
      alert("Some Error! Check it Please");
    </script>
    <?php
  } 
}


?>





