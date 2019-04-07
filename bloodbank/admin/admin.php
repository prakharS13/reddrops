<?php
include ('db.php');

?>
<html>
<head><title>Admin Panel</title></head>

<style>
body{
margin:0px;
}
.container{
	width:1363px;
	height:70px;
    
	}
.nav{
 height:70px;
 width:1350px;
 color:crimson;
 font-size:40px;
 text-align:center;
 background-color:#FAEBD7;
 overflow:hidden;
 border-bottom:3px solid crimson;
}
.side{
	width:300px;
	height:600px;
    font-size:20px;
	background-color:Azure;
	float:left;
    background-image:url("wallpaper.jpg");
}
.side img{
	margin:20px 20px 70px 40px ;
	width:220px;
	height:220px;
	border-radius:50%;
    border:2px solid black;
	}
.drop {
	width:300px;
	height:50px;
	text-align:left;
	cursor:pointer;
	font-size:20px;
	background-color:lightgrey;
	transition:0.4s;
	border:none;
}
.dropcontent{
	background-color:lightgrey;
	text-align:left;
	max-height: 0;
    transition: max-height 0.2s ease-out;
    overflow:hidden;
}
.active, .drop:hover{
	background-color:grey;
}
.main-content{
	width:1045px;
	height:600px;
	float:right;
}
.changeuser
{   text-align:center;
	font-size:25px;
}
.changeuser form
{
	margin :100px 20px 0px 0px;
}
.changeuser input[type="text"]
{
	margin-left:30px;
	height:25px;
}
.changeuser input[type="password"]
{    height:25px;
	margin-left:35px;
}
.changeuser input[type="submit"]
{   height:25px;
    width:100px;
	border-radius:25px;
	margin:20px 0px 20px 130px;
	cursor:pointer;
}
.newuser{
	 text-align:center;
	font-size:25px;
}
.picture{
	width:1000px;
	height:600px;
	
	
}
.picture img
{
	margin:100px 25px 0px 100px;
	border:1px solid black;
}
.picture img:hover{
	box-shadow:10px 10px 10px 10px #888;
}
</style>
<body>
<div class="container">
	<div class="nav">
		Welcome To Admin Panel
	</div>
</div>
<div class="side">
 <img src="ps.jpg" title="Prakhar Saxena">
  
 <button class="drop" >Sidebar</button>
 <div class="dropcontent">
 <a href="admin.php?addElement">Add an Element</a><br>
 <a href="admin.php?deleteElement">Delete an Element</a><br>
 <a href="admin.php?showaallElement">Show All Elements</a><br>
 </div> 
 <button class="drop" >Slideshow</button>
 <div class="dropcontent">
  <a href="admin.php?addpicture">Add a Picture</a><br>
 <a href="admin.php?deletepicture"> Delete a picture</a><br>
  <a href="admin.php?showallpictures">Show All pictures</a><br>
 </div>
 <button class="drop" >Settings</button>
 <div class="dropcontent">
 <a href="admin.php?user">Change Username & Password</a><br>
 <a href="admin.php?terms&policy">Terms & Policy</a><br>
 </div>
 
</div>
<script>
var dr=document.getElementsByClassName("drop");
var i;
for (i = 0; i < dr.length; i++) {
		  dr[i].addEventListener("click", 
		  function() {
						this.classList.toggle("active");
						var panel = this.nextElementSibling;
						if (panel.style.maxHeight){
						  panel.style.maxHeight = null;
						} else {
						  panel.style.maxHeight = panel.scrollHeight + "px";
						} 
					  }
		  );
}

</script>
<div class="main-content">
<?php
 if(isset($_GET["addElement"]))
	 echo "";
 if(isset($_GET['showallpictures']))
 {     global $con;
       
	        echo "<div class='picture'>";
	        $sql="select * from slideshow" ;
			$run=mysqli_query($con,$sql);
		     while($row=mysqli_fetch_array($run))
			{
				$id=$row['slide']; 
				echo "<img src='png/$id' width=200px height=200px>";
			}
	        echo "</div>";
 }
 if(isset($_GET["deleteElement"]))
 {
	 global $con;
	
 }
 if(isset($_GET['user']))
 {
	 echo "<div class='changeuser'>
	     
	      <form method=post>
		  Enter your old username and password ::<br><br>
		  Username <input type='text' name='user'><br><br>
		  Password <input type='password' name='pass'><br>
		  <input type='submit' name='submit'>
		  </form>
		   ";
	 	 checkuser();
	 echo  "</div>";
 }
 if(isset($_GET['addpicture']))
 {
	 include('addslide.php');
 }
 function checkuser()
{ if(isset($_POST["submit"]))
	{
      $user="'".$_POST['user']."'";
	  $pass="'".$_POST['pass']."'";
	  if($user=="" || $pass=="")
	       { echo "* Please fill out the fields";
	       }
	  else {
			  global $con;
			  $sql="select username,password from admin where username=$user and password=$pass";
			  $row=$con->query($sql);
			  if($row->num_rows>0)
			  {
				 echo "<div class='newuser'>
				    <form method=post>
		            Now change your username and password here ::<br><br>
				    New Username <input type='text' name='newuser'><br><br>
		            New Password <input type='password' name='newpass'><br>
				     <input type='submit' name='submit2'>
		             </form> 
				 
				 ";
				 changeuser();
				 echo "</div>";
				 
			  }
			  else{
				  echo "Not valid credentials";
				  }
		   }

    }

}

function changeuser()
{ if(isset($_POST["submit2"]))
	{  global $con;
      $user=$_POST['newuser'];
	  $pass=$_POST['newpass'];
	  if($user=="" || $pass=="")
	       { echo "* Please fill out the fields";
	       }
	  else {
			  global $con;
			  $sql="insert into admin(username,password) values ('$user','$pass') ";
			  $row=mysqli_query($con,$sql);
			  if($row>0)
			  {
				 echo "Changed Successfully";
				 
			  }
			  else echo $con->error;
			  
		   }

    }

}
?>


</div>


</body>
</html>