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
        <br>
        <div class="row no-gutters">
<?php

    $u_id=$_COOKIE["un"];

    include("dbcon.php");   
	$sql="SELECT * FROM `posts` WHERE `user_id`='$u_id'";
	$run=mysqli_query($con,$sql);
    while($data=mysqli_fetch_array($run))
    {
    	?>
        <div class="col-md-6">
        <img style="width: 500px;height: 400px;" src="post_images/<?php echo $data['post_image'];?>">
        <br><br><br><br>    
        </div>
        <div class="col-md-6">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Catagory</li>
            <li class="breadcrumb-item active"><?php echo $data['post_catagory'];?></li>
        </ol>
        <h1><a href=""><?php echo $data['post_title'];?></a></h1>
        <p><?php echo $data['post_description'];?></p>
        <p style="float: right;"><a href="edit_post.php?id=<?php echo $data['post_id'];?>" class="btn btn-primary" class="tooltip" title="Post Id <?php echo $data['post_id'];?>" style="font-size: 20px;">Edit Post</a></p>
        </div>      
        <?php
    }

?>
</div>
</div>
</body>
</html>
</head>
