
<?php
if(!isset($_COOKIE['login']))
{
	header("location:join_us.php");
}
else
{

session_start();
$un_id=$_COOKIE["un"];
include("dbcon.php");
$sql="SELECT * FROM `register_user` WHERE `id`='$un_id'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_array($run);
$sql1="SELECT COUNT(post_id) AS total FROM posts WHERE `user_id`='$un_id'";
$run1=mysqli_query($con,$sql1);
$data1=mysqli_fetch_assoc($run1);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-dark bg-dark sticky-top navbar-expand-md">
<div class="container">
	<a href="" class="navbar-brand">UniBook</a>
	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
     <span class="navbar-toggler-icon"></span>
     </button>
	<div class="collapse navbar-collapse text-center" id="collapsibleNavbar" >
	<ul class="navbar-nav ml-auto">
		<li class="nav-item"><a href="" class="nav-link" style="font-size: 20px;">Home</a></li>
		<li class="nav-item" style="margin-right: 10px;"><a href="my_posts.php?sid=<?php echo $un_id;?>" class="nav-link" style="font-size: 20px;">My Posts&nbsp;<span class="badge badge-success"><?php echo $data1['total'];?></span></a></li>
		<li class="nav-item" style="margin-right: 10px;"><a href="" class="nav-link" style="font-size: 20px;">Messages&nbsp;<span class="badge badge-success">5</span></a></li>
			<li class="nav-item dropdown">
			<img style="width: 45px;height: 45px;border-radius: 25px;" class="responsive" id="image" src="upload_images/<?php echo $data['image'];?>" class="dropdown-toggle" data-toggle="dropdown" class="responsive">
			<div class="dropdown-menu">
			<a class="dropdown-item" id="vp" style="font-size: 18px;">View Profile</a>
			<a href="logout.php" class="dropdown-item" id="vp" style="font-size: 18px;">Log Out</a>
		</div>
		</li>		
	</ul>
</div>
</div>
</nav>
<h1 class="text-center text-primary">User Profile</h1>
<table class="container-fluid table table-striped table-responsive table-bordered">
		<thead>
		<th class="text-center" colspan="11" style="font-size: 25px;">User Info</th>
		</thead>
	<tbody>
		<tr>
			<td>Id</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>User Name</td>
			<td>E_Mail</td>
			<td>Password</td>
			<td>Gender</td>
			<td>Institution</td>
			<td>Degree</td>
			<td>Cource</td>
			<td>image</td>
			<td>Update Data</td>
		</tr>

<?php

    include("dbcon.php");
	$sql="SELECT * FROM `register_user` WHERE `id`='$un_id'";
	$run=mysqli_query($con,$sql);
    while($data=mysqli_fetch_array($run))
    {
    	?>

    	<tr>
    		<td style="padding-top: 50px;" class="text-center"><?php echo $data['id'];?></td>
    		<td style="padding-top: 50px;" class="text-center"><?php echo $data['fname'];?></td>
    		<td style="padding-top: 50px;" class="text-center"><?php echo $data['lname'];?></td>
    		<td style="padding-top: 50px;" class="text-center"><?php echo $data['uname'];?></td>
    		<td style="padding-top: 50px;" class="text-center"><?php echo $data['email'];?></td>
    		<td style="padding-top: 50px;" class="text-center"><?php echo $data['password'];?></td>
    		<td style="padding-top: 50px;" class="text-center"><?php echo $data['gender'];?></td>
    		<td style="padding-top: 50px;" class="text-center"><?php echo $data['institution'];?></td>
    		<td style="padding-top: 50px;" class="text-center"><?php echo $data['degree'];?></td>
    		<td style="padding-top: 50px;" class="text-center"><?php echo $data['cource'];?></td>
    		<td><img style="width: 100px;height: 100px;" src="upload_images/<?php echo $data['image'];?>" class="responsive"></td>
    		<td style="padding-top: 50px;" class="text-center"><button class="btn btn-primary" data-toggle="modal" data-target="#mod">Update</button><td>
    	</tr>
    	<?php

    }
?>
</tbody>
</table>
<div class="modal fade" id="mod">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Update Data</h3>
				<button class="close" data-dismiss="modal">&times;</button>
			</div>
		
			<div class="modal-body">
				
<?php
    include("dbcon.php");
	$sql="SELECT * FROM `register_user` WHERE `id`='$un_id'";
	$run=mysqli_query($con,$sql);
	$dataa=mysqli_fetch_array($run);
?>

				<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label style="font-size: 22px;">First Name </label>
				<input type="text" name="fname" value="<?php echo $dataa['fname']; ?>" class="form-control">
			</div>
			<div class="form-group">
				<label style="font-size: 22px;">Last Name </label>
				<input type="text" name="lname" value="<?php echo $dataa['lname']; ?>" class="form-control">
			</div>
			<div class="form-group">
				<label style="font-size: 22px;">User Name </label>
				<input type="text" name="uname" value="<?php echo $dataa['uname']; ?>" class="form-control">
			</div>
			<div class="form-group">
				<label style="font-size: 22px;">E_Mail </label>
				<input type="email" name="email" value="<?php echo $dataa['email']; ?>" class="form-control">
			</div>
			<div class="form-group">
				<label style="font-size: 22px;">Password</label>
				<input type="text" name="pass" value="<?php echo $dataa['password']; ?>" class="form-control">
			</div>
			<div class="form-group">
				<label style="font-size: 22px;">Gender</label>
				<select name="gender" class="form-control">
					<option value="<?php echo $dataa['gender'];?>"> <?php echo $dataa['gender'];?> </option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</div>
			<div class="form-group">
				<label style="font-size: 22px;">Institution Name</label>
				<select name="institution" class="form-control" value="<?php echo $dataa['institution']; ?>">
					<option value="uet">UET</option>
				</select>
			</div>
			<div class="form-group">
				<label style="font-size: 22px;">Degree</label>
				<select name="degree" class="form-control">
					<option value="<?php echo $dataa['degree'];?>"><?php echo $dataa['degree'];?></option>
					<option value="bsc">Bsc.</option>
					<option value="msc">Msc.</option>
				</select>
			</div>
			<div class="form-group">
				<label style="font-size: 22px;">Cource</label>
				<select name="cource" class="form-control">
					<option value="<?php echo $dataa['cource'];?>"><?php echo $dataa['cource'];?></option>
					<option value="cs">CS</option>
					<option value="ee">EE</option>
				</select>
			</div>
		
			</div>
			
		
			<div class="modal-footer text-center">
			<input type="submit" name="submit" class="btn btn-primary" value="Update Data" style="font-size: 25px;">
	    	</div>
      	</form>



		</div>
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
    include("dbcon.php");
	$sql="SELECT * FROM `register_user` WHERE `id`='$un_id'";
	$run=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($run);
	if($data==2)
	{
			?>
			<script type="text/javascript">
				alert("User Name or E-Mail Alredy Exist");
			</script>

			<?php
	}
	else
	{
	    $sql1="UPDATE `register_user` SET `fname`='$first',`lname`='$last',`uname`='$uname',`email`='$mail',`password`='$pas',`gender`='$gen',`institution`='$ins',`degree`='$deg',`cource`='$cou' WHERE `id`='$un_id'";
	$run1=mysqli_query($con,$sql1);
	if($run1==true)
	{
		?>
		<script type="text/javascript">
			alert("Record Updated successfully!");
		</script>
		<?php
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
?>