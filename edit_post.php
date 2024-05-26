<?php
if(!isset($_COOKIE['login']))
{
	header("location:join_us.php");
}

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
<body>

<div class="container">
	<form method="post" enctype="multipart/form-data">

<?php  

	$p_id=$_GET['id'];

    include("dbcon.php");
	$sql="SELECT * FROM `posts` WHERE `post_id`='$p_id'";
	$run=mysqli_query($con,$sql);
    $data=mysqli_fetch_array($run);
    	?>
             <div class="form-group">
             	<label>Post Catagory</label>
             	<select class="form-control" name="cat">
				<?php
			    include("dbcon.php");
				$sql="SELECT * FROM `post_catagories`";
				$run=mysqli_query($con,$sql);
				while($dataa=mysqli_fetch_array($run))
				{
					?>
					<option value="<?php echo $dataa['catagory_name']; ?>"><?php echo $dataa['catagory_name']; ?></option>
					<?php
				}
				?>
				</select>
             </div>
              <div class="form-group">
             	<label>Post Title</label>
             	<input name="tit" type="text" class="form-control" value="<?php echo $data['post_title'];?>"/>
             </div> 
            <div class="form-group">
             	<label>Post Image</label>
             	<input type="file" accept="Image/*" name="image" class="form-control">
             </div>
             <div class="form-group">
             	<label>Post Description</label>
             	<textarea name="des" class="form-control"><?php echo $data['post_description'];?></textarea>
             </div> 
             <input type="submit" name="submit" class="btn btn-primary" value="Update Post" style="font-size: 20px;">
         </form>

<?php
if(isset($_POST['submit'])) 
{
$post_cat=$_POST['cat'];
$post_tit=$_POST['tit'];
$post_dis=$_POST['des'];
include("dbcon.php");
$sql="UPDATE `posts` SET `post_catagory`='$post_cat',`post_title`='$post_tit',`post_description`='$post_dis' WHERE `post_id`='$p_id'";
$run=mysqli_query($con,$sql);
if($run==true)
	{
			?>
			<script type="text/javascript">
				alert("Post Updated Successfully!");
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
</div>

</body>
</html>
