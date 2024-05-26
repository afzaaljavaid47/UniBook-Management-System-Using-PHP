<?php

session_start();
include("dbcon.php");

?>


<!DOCTYPE html>
<html>


<head>
	<html lang="en">
	<title>UniBook(Social Network)</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="UniBook">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">

	.video-responsive{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
}
.video-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
</style>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-md sticky-top">
	<div class="container">
	<a href="" class="navbar-brand">UniBook</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#nicha"><span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse bs-navbar-collapse" role="navigation" id="nicha">
	<ul class="navbar-nav ml-auto text-center">
		<li class="nav-item"><a href="./" class="nav-link" style="font-size: 18px;">Home</a></li>
		<li class="nav-item"><a href="" class="nav-link" style="font-size: 18px;">About Us</a></li>
		<li class="nav-item"><a href="" class="nav-link" style="font-size: 18px;">Services</a></li>
		<li class="nav-item"><a href="" class="nav-link" style="font-size: 18px;">Contact Us</a></li>
		<li class="nav-item">
		<button class="btn bg-primary" data-toggle="modal" data-target="#mymodal" style="font-size:18px;color: white;">
				Log In
			</button>
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
<style type="text/css">
	@media only screen and (max-width: 400px)
	{
		.bta
		{
			margin-top: 20px;
		}

	}s
</style>
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

<div class="container-fluid row">
	
<div class="col-md-6">

<h2 style="padding: 20px;" class="text-center text-primary">Why We Join UniBook</h2>
<div class="video-responsive">
<iframe class="responsive" width="560" height="315" src="https://www.youtube.com/embed/W40RryWiMhc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
	<div class="col-md-6"><br>
	<div class="card">
    <div class="card-header bg-primary">
	<div class="text-center" style="font-size: 25px;font-weight: 520;color: white;">
	Sign Up to UniBook
    </div>
    </div>
    
    <div class="card-body">
    	<form method="post" enctype="multipart/form-data">			
    	<div class="row">
    		
    		<div class="col-md-6">


    			<div class="form-group">
				<label style="font-size: 18px;">First Name </label>
				<input type="text" name="fname" class="form-control" required="" placeholder="Enter First Name........." pattern="[A-Za-z]{3,}" title="Name Contain At Least Three Characters(Only Alphabets are Allowed)">
			</div>
			<div class="form-group">
				<label style="font-size: 18px;">User Name </label>
				<input type="text" name="uname" class="form-control" required="" placeholder="Enter User Name........." pattern="[A-Za-z0-9]{6,}" title="Name Contain At Least Six Characters(Only Alphabets are Allowed)">
			</div>
			
           <div class="form-group">
				<label style="font-size: 18px;">Password</label>
				<input type="password" name="pass" class="form-control" required="" placeholder="Enter Password........." required="" pattern="[A-Za-z0-9]{6,}" title="Password Must be Six Characters Long">
			</div>
			<div class="form-group">
				<label style="font-size: 18px;">Institution Name</label>
				<select name="institution" class="form-control" required>
					<option value="">Select Institution Name</option>
					<option value="uet">UET</option>
					<option value="nust">NUST</option>
					<option value="fast">FAST</option>
				</select>
			</div>

			<div class="form-group">
				<label style="font-size: 18px;">Cource</label>
				<select name="cource" class="form-control" required="">
					<option value="">Select Cource</option>
					<option value="cs">CS</option>
					<option value="ee">EE</option>
					<option value="me">ME</option>
					<option value="ce">CE</option>
					<option value="bme">BME</option>
				</select>
			</div>




			
    		</div>




    		<div class="col-md-6">
    		
            <div class="form-group">
				<label style="font-size: 18px;">Last Name </label>
				<input type="text" name="lname" class="form-control" required="" placeholder="Enter Last Name........." pattern="[A-Za-z]{3,}" title="Name Contain At Least Three Characters(Only Alphabets are Allowed)">
			</div>
			
 <div class="form-group">
				<label style="font-size: 18px;">E-Mail </label>
				<input type="email" name="email" class="form-control" required="" placeholder="Enter E_Mail........." required="">
			</div>
    			
			<div class="form-group">
				<label style="font-size: 18px;">Gender</label>
				<select name="gender" class="form-control" required="">
					<option value="">Select gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</div>
			
			<div class="form-group">
				<label style="font-size: 18px;">Degree</label>
				<select name="degree" class="form-control" required="">
					<option value="">Select Degree Title</option>
					<option value="bs">BS.</option>
					<option value="msc">Msc.</option>
				</select>
			</div>

			<div class="form-group">
				<label style="font-size: 18px;">Select Your Image</label><span class="text-danger"> (size < 300KB)</span> 
				<input type="file" name="image" class="form-control" accept="image/*" class="form-control" required="">
			</div>
    		</div>
    		
			</div>
			<div class="text-center card-footer no-gutters">
			<input type="submit" name="submit" class="btn btn-primary" value="Register a User" style="font-size: 20px;">
		</div>
	</form>
	</div>
	<br><br>
</div>
<br><br>
</div>
</div>
</body>
</html>



<?php

if(isset($_POST['submit'])) 
{
	$first=$_POST['fname'];
	$last=$_POST['lname'];
	$uname=$_POST['uname'];
	$mail=$_POST['email'];
	$pas=$_POST['pass'];
	$gen=$_POST['gender'];
	$ins=$_POST['institution'];
	$deg=$_POST['degree'];
	$cou=$_POST['cource'];
	$img=$_FILES['image']['name'];
	$tmp=$_FILES['image']['tmp_name'];
	$imagename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    if ($_FILES["image"]["size"] > 300000) 
    {
			?>
		<script type="text/javascript">
			alert("Image Size Should be Less Than 300KB ");
		</script>
		<?php
    }
    else
    {
    move_uploaded_file($tempname,"upload_images/$imagename");
    include("dbcon.php");
	$sql="SELECT * FROM `register_user` WHERE `uname`='$uname' or `email`='$mail'";
	$run=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($run);
	if($data>0)
	{
			?>
			<script type="text/javascript">
				alert("User Name or E-Mail Alredy Exist");
			</script>

			<?php
	}
	else
	{
	    $sql1="INSERT INTO `register_user`(`fname`, `lname`, `uname`, `email`, `password`, `gender`, `institution`, `degree`, `cource`, `image`) VALUES ('$first','$last','$uname','$mail','$pas','$gen','$ins','$deg','$cou','$imagename')";
	$run1=mysqli_query($con,$sql1);
	if($run1==true)
	{
		?>
		<script type="text/javascript">
			alert("Record Submitted successfully!");
		</script>
		<?php
		echo "hello $uname thank you for registering an account on AGI site <a href='verify.php?name=$uname'>Click Here</a> to verify your account";		
$username = "923497677974";///Your Username
$password = "475456";///Your Password
$mobile = "923497462877";///Recepient Mobile Number
$sender = "18229";
$message = "";

////sending sms

$post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
$url = "https://sendpk.com/api/sms.php?username=923497677974&password=475456";
$ch = curl_init();
$timeout = 30; // set to zero for no timeout
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$result = curl_exec($ch); 
/*Print Responce*/
echo $result; 

	}
	else
	{
		?>
		<script type="text/javascript">
			alert("Some Errors Please Try Again!");
		</script>
		<?php
	}	
	}
	}
}

?>



