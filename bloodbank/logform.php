<?php
$server="localhost";
$user="root";
$db="bloodbank";
$conn=new mysqli($server,$user,"",$db);

if(!$conn)
{ echo "error".$conn->connect_error;
}
else {
  
     if(isset($_POST["submit"]))
	 {	 
    	$username="'".$_POST["user"]."'";
         $password="'".$_POST["password"]."'";
           $email="'".$_POST["email"]."'";
            $conpassword="'".$_POST["conpassword"]."'";
		
             if($password==$conpassword)
      {	
               $sql="insert into register (username,email,password,conpassword) values($username,$email,$password,$conpassword)";
              if($conn->query($sql)==true)
                 {
	                   echo "<script>alert('You are registered successfully')</script>";
					   
                   }
             else {
	               echo $conn->error;
                   }
              $conn->close();
       }
            else 
          {
	           echo "<script>alert('password and confirm password should be equal')</script> ";
            }
	 }
	
	if(isset($_POST["submit1"]))
	   {
		   $login_email="'".$_POST["logemail"]."'";
		   $login_pass="'".$_POST["logpass"]."'";
		    $sql1="select email,password from register where email=$login_email and password=$login_pass";
			$result=$conn->query($sql1);
	       if($result->num_rows>0)
	       {  echo "<script>alert('welcome user')</script>";
		       //session_start();
		         $row=$result->fetch_assoc();
		       $_SESSION["name"]=$row["email"];
		         header("location:login.php");		  
	         }
	       else 
	    {
		  echo "<script>alert('You are not registered')</script>";
		}
		
		$conn->close();
		
		
		   
		   
	   }
	
}		
			

?>
