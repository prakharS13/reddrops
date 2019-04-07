<?php $con=new mysqli("localhost","root","","bloodbank");

?>
<html>
<body style="font-size:25px;">

<form method="post"  enctype="multipart/form-data" style="margin:200px 0px 0px 200px;" >
Add picture in your slideshow bar ::<br><br>
<input type=file name="image" required>

<input type=submit name="submit">
</form>
<?php
if(isset($_POST["submit"]))
{    
    $photo=$_FILES['image']['name'];
	$photo_tmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($photo_tmp,"png/$photo");
	
	$sql="insert into slideshow(slide) values('$photo') ";

	
	if($con->query($sql)==true)
	{
		echo '<center>file inserted successfully</center>';
	}
	else {
		echo $con->error; 
	}
}

?>
</body>
</html>