<?php  

$con=mysqli_connect("localhost","root","","unibook");
if($con==true)
{
}
else
{
   ?>
	<script type="text/javascript">
		alert("DataBase Connection Error !");
	</script>
	<?php	
}
 ?>