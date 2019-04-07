<?php
 include ('db.php');
 ?>
<html>
<head><title>Admin Login</title></head>
<style>
header{
margin:100px 0px 0px 400px;
box-shadow:5px 10px 5px 10px #888888;
width:500px;
height:400px;
font-size:25px;
}
div{
width:500px;
height:100px;
font-size:35px;
text-align:center;
border-bottom:1px solid black;
color:crimson;
}
input[type="submit"]
{
width:200px;
height:30px;
border-radius:25px;
background-color:crimson;
margin:50px 0px 20px 70px;
color:white;
}
input[type="text"]
{
width:200px;
height:25px;
border-radius:25px;
margin:50px 0px 20px 50px;	
}
input[type="password"]
{
width:200px;
height:25px;
border-radius:25px;
margin:0px 0px 20px 50px;		
}
</style>
<body>
<header>
<div><br>Admin Login</div>
<center>
<form method="post">
Username: <input type="text" name="adminuser"><br>
Password: <input type="password" name="adminpassword"><br>
<input type="submit" name="submit">
</form>
<?php
 checkuser();
?>
</center>
</header>
</body>
<?php
 //$con=new mysqli("localhost","root","","bloodbank");
function checkuser()
{ if(isset($_POST["submit"]))
	{
      $user="'".$_POST['adminuser']."'";
	  $pass="'".$_POST['adminpassword']."'";
	  if($user==""||$pass=="")
	       { echo "* Please fill out the fields";
	       }
	  else {
			  global $con;
			  $sql="select username,password from admin where username=$user and password=$pass";
			  $row=$con->query($sql);
			  if($row->num_rows>0)
			  {
				 echo "<script> alert('Welcome admin')</script>";		
				 echo "<script>window.location('admin.php')</script>";
			  }
			  else{
				  echo "Not an admin";
				  }
		   }

    }
}
?>
</html>