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
			<a href="my_profile.php?id=<?php echo $un_id;?>" class="dropdown-item" id="vp" style="font-size: 18px;">View Profile</a>
			<a href="logout.php" class="dropdown-item" id="vp" style="font-size: 18px;">Log Out</a>
		</div>
		</li>
		
	</ul>
</div>
</div>
</nav>
	
<?php

include("dbcon.php");
$sql="SELECT COUNT(post_id) AS total FROM posts WHERE `user_id`='$un_id'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);

?>
<button class="btn btn-primary text-center" data-toggle="modal" data-target="#mymodal" style="font-size: 
28px;">Add a New Post</button>
<form method="post" enctype="multipart/form-data">
<div class="modal fade" id="mymodal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Add a New Post</h3>
				<button class="close" data-dismiss="modal">&times;</button>
			</div>
		
			<div class="modal-body">
				<div class="form-group">
					<label style="font-size: 22px;">Post Catagory</label>
					<select class="form-control" name="post_catagory">
					<option>Select a Catagory</option>
					<?php
					include("dbcon.php");
					$sql="SELECT * FROM `post_catagories`";
					$run=mysqli_query($con,$sql);
					while($data=mysqli_fetch_assoc($run))
					{
						?>
						<option value="<?php echo $data['catagory_name'];?>"><?php echo $data['catagory_name'];?></option>
						<?php
					}	
	
					?>
					</select>
				</div>
				<div class="form-group">
					<label style="font-size: 22px;">Post Image</label>
					<input type="file" name="post_image" accept="image/*" class="form-control">
				</div>
				<div class="form-group">
					<label style="font-size: 22px;">Post Title</label>
					<input type="text" name="post_title" class="form-control">
				</div>
				<div class="form-group">
					<label style="font-size: 22px;">Post Description</label>
					<textarea name="post_description" class="form-control"></textarea> 
				</div>
			</div>
		<div class="modal-footer">
			<input type="submit" name="submit_post" class="btn btn-primary" value="Add Post" style="font-size: 22px;" />
		</div>
	</div>
</div>
</div>
</form>
<br><h1 class="text-center text-primary">Recent Posts</h1><br><br>
<div class="container-fluid">

<div class="row">

<div class="col-md-3"></div>

<div class="col-sm-6 col-md-6">
<div class="row">
<?php

$sql="select * from posts";
$run=mysqli_query($con,$sql);
while($data=mysqli_fetch_assoc($run))
{
	$id=$data['user_id'];
	$sqll="select * from register_user where id='$id'";
    $runn=mysqli_query($con,$sqll);
    $dataa=mysqli_fetch_assoc($runn);
?>
<div class="col-md-4">

<img style="width: 100%;height: 150px;" src="post_images/<?php echo $data['post_image']; ?>" >

</div>
<br><br>
<div class="col-md-8">
<h2><?php echo $data['post_title']; ?></h2>
<img style="width: 50px;height: 50px;border-radius: 25px;" src="upload_images/<?php echo $dataa['image'];?>">
<span><?php echo $dataa['uname'];?></span>
<p><?php echo $data['post_date'];?></p>
<p><?php echo $data['post_description'];?></p>
<br><br>
</div>
<br><br>
<?php	
}
?>

</div>
</div>

<div class="col-md-3"></div>

</div>

</div>
</body>
</html>

<?php

if(isset($_POST['submit_post'])) 
{
$post_cat=$_POST['post_catagory'];
$post_tit=$_POST['post_title'];
$post_img=$_FILES['post_image']['name'];
$tmp_post_name=$_FILES['post_image']['tmp_name'];
move_uploaded_file($tmp_post_name,"post_images/$post_img");
$post_dis=$_POST['post_description'];
include("dbcon.php");
$date=date("m/d/Y h-i-s A");
$sql="INSERT INTO `posts`(`user_id`, `post_catagory`, `post_title`, `post_description`, `post_image`, `post_date`) VALUES ('$un_id','$post_cat','$post_tit','$post_dis','$post_img','$date')";
$run=mysqli_query($con,$sql);
if($run==true)
	{
			?>
			<script type="text/javascript">
				alert("Post Added Successfully!");
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


?>


