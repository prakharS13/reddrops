<?php
include ('db.php');
include ('functions.php');

?>
<html>
<head><title>RedDrops.com | User</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="style.css" type="text/css"> -->
<link rel="icon" type="image/x-icon" href="png/favicon.ico">
   
		 <style>	
                           body{
	margin:0px;	
    background-color:lightgrey;
}
.header{
	height:500px;
	width:1345px;
	background-image:url("png/blood.jpg");
}
.navigation{
	height:50px;
	width:1345px;
	background-color:rgb(220,80,80);
	padding-top:20px;
	font-size:22px;
	position:fixed;
	color:white;	
	overflow:hidden;

}
#register , #login ,#logout
{
	border:1.5px solid black;
	border-radius:20px;
	text-decoration:none;
	color:white;
	padding:5px 10px 5px 10px;
	margin-right:20px;
	font-size:25px;
	float:right;
	cursor:pointer;
	
	
	
}
#register:hover, #logout:hover
{   border:1.5px solid white;
	background-color:rgb(200,60,60);
}
#login:hover
{
	 border:1.5px solid white;
	background-color:rgb(200,60,60);
}
.register{
    height: 510px;
    width: 0;
    position: fixed;
    top:100px;
    left: 300px;
    background-color:darkslategray ;
    overflow-x: hidden;
    transition: 0.2s;
    padding-top: 60px;
	color:rgb(220,80,80);
	border-bottom:10px solid crimson;
}
.register .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 50px;
    margin-left: 50px;
	text-decoration:none;
	color:rgb(220,80,80);
}
.login{
	height: 250px;
    width: 0px;
    position: fixed;
    top: 70px;
    left: 930px;
    background-color:darkslategray ;
    overflow: hidden;
    transition: 0.2s;
    padding-top: 60px;
	color:rgb(220,80,80);	
    border-bottom:10px solid crimson;
	}
	.login a{
		text-decoration:none;
		color:white;
	}
.login .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 50px;
    margin-left: 50px;
	text-decoration:none;
	color:rgb(220,80,80);
}
#login-form form{
   
	padding-left:170px;
	margin-top:50px;
}
input[type="text"]{
	margin-left:90px;
	margin-top:10px;
	border-radius:20px;
	height:28px;
	width:200px;
}
form .search
{
	margin-left:0px;
}
select{
	margin-left:90px;
	margin-top:10px;
	border-radius:20px;
	height:28px;
	width:200px;
} 
input[type="email"]{
	margin-left:130px;
	margin-top:10px;
	border-radius:20px;
	height:28px;
	width:200px;
}
input[type="password"]{
	margin-left:20px;
	margin-top:10px;
	border-radius:20px;
	height:28px;
	width:200px;
}
input[type="submit"]{
	margin:40px 0px 0px 80px;
	border-radius:20px;
	height:28px;
	width:200px;
	color:white;
	cursor:pointer;
	background-color:rgb(220,80,80);
}
input[type="submit"]:hover{
	background-color:rgb(250,60,60);
}

.nav-button{
	
	padding:250px 200px 250px 550px;	
}
.nav-button a{
	text-decoration:none;
	color:white;
	font-size:30px;
	border:2px solid black;
	border-radius:15px;
	padding:10px 20px 10px 20px;
	background-color:rgb(220,80,80);
}
.nav-button a:hover{
	background-color:rgb(200,60,60);
	border:2px solid white;
}
.nav-button a:active{
	border:2px solid red;
}

.content{
	height:1600px;
	width:auto;
	padding-top:200px;
	padding-left:40px;
	
}

.main { 
	height:auto;
    float:left;
	width:1250px;
	font-size:15px;
	border:0.5px solid gray;
	background-color:white;
	box-shadow:4px 5px #888888;
	
}
.main form{
	float:left;
	margin:60px 0px 0px 200px;
	font-size:20px;
}
.main input[type="file"]
{

	margin-left:100px;
}
.main select
{
	margin:20px 0px 0px 60px;
	width:200px;
	height:28px;
}

.main input[type="text"]
{
    border-radius:20px;
	margin:20px 0px 0px 60px;
	box-shadow:1px 1px #888888;
	
}
.main textarea {
	margin:20px 0px 0px 100px;
	
}
.main h2,h1,h3{
	color:crimson;
}
.sidebar{
	height:60px;
    width:1345px;
	background-color:darkslategray;
	margin-right:50px;
	float:left;   
}

.sidebar li{
	list-style:none;
	padding-bottom:20px;	
	font-size:25px;
	margin-right:50px;
	float:left;
}
.sidebar a{
	text-decoration:none;
	color:white;
	 border-bottom:3px solid crimson;
}
.sidebar a:hover{
	
	border-bottom:5px solid crimson;

}


.slideshow{
height:400px;
width:1000px;

}



.footer{
	height:200px;
	width:1345px;
	background-color:black;
	border-bottom:10px solid red;
	color:white;
	font-size:15px;
}
#footer-nav a{
	text-decoration:none;
	border:1px solid white;
	border-radius :20px;
	padding:10px 15px 10px 15px;
	color:crimson;
	margin-left:30px;
}
#footer-nav a:hover{
	background-color:crimson; 
	color:white;
}
		 
			 .fade{ <!-- slides fade -->
	          animation-name:fade;
	          animation-duration:1.3s;
	          }
            @keyframes fade{
            from {opacity:0.4}
	         to {opacity:1}
         	}
	

		 </style>
</head>
<body>
<div class="header">
    <div class="navigation">
	<span style="font-size:25px;font-weight:bold;margin-left:10px;color:black;">RedDrops.com |</span> Do it once ..You'll feel good
	<a id="logout" href="login.php?logout"><?php echo $_SESSION["email"];?> </a>
	<?php
	if(isset($_GET["logout"]))
	{
		$_SESSION["email"]="";
		session_destroy();
		echo "<script>alert('You are successfully logout')
		window.open('index.php','_self');
		</script>";
	}
	?>
	<div id="myRegister" class="register fade">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	   <div id="login-form" onclick="off()">
	      
		  <center><u>REGISTER</u><br>
	       <img src="png/avatar.png"><br></center>
		  
		   <form method=post>
		    Username: <input type="text" placeholder="Enter username" name="user" required><br>
			Email :<input type="email" placeholder="Enter email" name="email" required><br>
			Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="password" placeholder="Enter password" name="password" required><br>
			Confirm Password:<input type="password" placeholder="Enter password" name="conpassword" required><br>
			<input type="submit" name="submit" value="Register">
			</form>

			</div>
    </div>
	    <div id="myLogin" class="login fade">
		   <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
		   <form method=post><center>
		    Email :<input type="email" placeholder="Enter email" name="logemail" required><br>
			Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" placeholder="Enter password" name="logpass" required><br>
			<input type="submit" name="submit1" value="Login"><br><br>
			Admin ? Login <a href="admin/login.php">here</a></center>
 			</form> 
		</div>
          
	</div>
	<div class="nav-button"><a href="index.php?id=1#main" target=_blank>DONATE BLOOD</a>
	</div>
</div>

<div class="sidebar" name="side">
	     <?php 
		  get_sidebar();
		  
		  ?>
		  
	        </div>

 <span style="margin:30px 20px 0px 400px;padding :15px 15px 15px 15px;color:white;background-color:rgb(220,80,80);border:0px solid ;font-size:25px;float:left;cursor:pointer">
 Your Little Contribution Can Save Someone's life  </span>

	 
<div class="content">
      <div class="slideshow" style="margin:0px 0px 20px 150px;">
	   <?php slides();
        
	   ?>
	   <script>
	   		var index=0;
		slideShow();
		function slideShow()
		{
		var i;
		var slides=document.getElementsByClassName("slides");

		for(i=0;i < slides.length ; i++)
		{ slides[i].style.display = "none";
		}

		index++;
		if(index>slides.length)
		{ index=1;
		}
		slides[index-1].style.display ="block";
		setTimeout(slideShow,3000);
		}

	   </script>
	  
	 
	</div>
	  <a name="main">
	  <span style="margin:0px 0px 70px 450px;padding :15px 15px 15px 15px;color:white;background-color:rgb(220,80,80);font-size:25px;float:left;cursor:pointer">
 Donate Blood Donate Smile &#9786;  </span></a>
	  
	 
    <div class="main">
    <?php // 	registeruser(); ?>
	
	<?php
	             get_content();
				 
	 
								 function get_content()
								 {  global $con;
									$track;
								 if(isset($_GET["id"]))
								 {		 $id_detail=$_GET["id"];
									   
					switch($id_detail)
				  { 
					   case 1:
									   echo " <center style='margin:20px 0px 0px 60px;font-size:20px;'>Please fill out below form and get registered .<br>You will be notified with the nearest hospital nearby you via email .
											 <br>Till then keep doing great things.</center>"?>
											 <form method="post" enctype="multipart/form-data">
												Image :<input type="file" name="image"><br>
											   Fullname :&nbsp&nbsp&nbsp&nbsp<input type='text' name='fullname' required><br>
												Age : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type='text' name='age' required><br>
												 Mobile No. :<input type='text' name='mobile' required><br>
												 State : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <select name="state" required>
                                    <option>---------------STATE----------------</option>
									<option value='Madhya Pradesh'>Madhya Pradesh</option>
									</select><br>
												  City : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <select name="city" required>
                                    <option>---------------CITY----------------</option>
									<option value='Gwalior'>Gwalior</option>
									</select><br>					   
												   Blood Group :
												   <select name="bg" required>
												   <option value="A+">A+</option>
												   <option value="A-">A-</option>
												   <option value="B+">B+</option>
												   <option value="B-">B-</option>
												   <option value="AB+">AB+</option>
												   <option value="AB-">AB-</option>
												   <option value="O+">O+</option>
												   <option value="O-">O-</option>
												   </select>
												   <br> 	 
													Address :<textarea cols=30 rows=4 name="address" required></textarea><br>					   
													 Zip Code :&nbsp&nbsp&nbsp&nbsp<input type='text' name='zip' required><br>
													   <input type='Submit' value='submit' name="Sub"><br>

											  </form>
											
				<?php 
				    
				   if(isset($_POST["Sub"]))
						   { 
					          
					          $photo=$_FILES["image"]['name'];
					          $photo_tmp=$_FILES["image"]['tmp_name'];
        					  move_uploaded_file($photo_tmp,"users/$photo");
					          $fullname=$_POST['fullname'];
							  $age=$_POST['age'];
							  $mobile=$_POST['mobile'];
							  $state=$_POST['state'];
							  $city=$_POST['city'];
							  $blood=$_POST['bg'];
							  $address=$_POST['address'];
							  $zip=$_POST['zip'];
							  if(!$photo)
							  {  $photo="avatar.png";
								$query="insert into request (image,fullname,age,mobile,state,city,address,bloodgrp,zip) values ('$photo','$fullname','$age','$mobile','$state','$city','$address','$blood','$zip')";                        
							  }
							  else{
							  $query="insert into request (image,fullname,age,mobile,state,city,address,bloodgrp,zip) values ('$photo','$fullname','$age','$mobile','$state','$city','$address','$blood','$zip')";                        
							   } //$run=mysqli_query($query,$con);
							  //echo $query;
							  if($con->query($query)==true)
							  { echo "Thank you for accepting to Donate Blood.";
						        echo '<script>alert("Thank you for accepting to Donate Blood.")</script>';                              
							  }
							  else
							  {/*  echo $con->error; */
								echo "Technical Error";  
							  }
							   
						   }
	
				  
				  break;
				 
	       case 2:
		   
		  echo "Are You In A Need Of Blood ?";
		   
		   break;
	       case 3:
		   echo "<center><h2>Donators</h2></center> ";
		    get_donators();
		   break;
		    case 5:
		    echo "<center style='margin:10px 0px 0px 50px;font-size:18px;'><h2 style='margin-left:50px;'>Benefits Of Blood Donations ::-</h2>
<h3>Health Benefits Of Donating Blood</h3>
Blood donation not only makes the receiver’s life good but also helps the donor<br> to maintain good health. The benefits are mentioned below.
<h3>Prevents Hemochromatosis</h3>
Health benefits of blood donation include reduced risk of hemochromatosis. Hemochromatosis is<br> a health condition that arises due to excess absorption of iron by the body. This may be inherited or<br> may be caused due to alcoholism, anemia or other disorders. Regular blood donation may help in<br> reducing iron overload. Make sure that the donor meets the standard blood donation eligibility criteria.
<h3>Anti-cancer Benefits</h3>
Blood donation helps in lowering the risk of cancer. By donating blood the iron stores in the body<br> are maintained at healthy levels. A reduction in the iron level in the body is linked with low cancer risk.
<h3>Maintains Healthy Heart & Liver</h3>
Blood donation is beneficial in reducing the risk of heart and liver ailments caused by the iron<br> overload in the body. Intake of iron-rich diet may increase the iron levels in the body<br>, and since only limited proportions can be absorbed, excess iron gets stored in heart, liver, and pancreas.<br>This, in turn, increases the risk of cirrhosis, liver failure, damage to the pancreas, and heart abnormalities<br> like irregular heart rhythms. Blood donation helps in maintaining the iron levels and<br> reduces the risk of various health ailments.
<h3>Weight loss</h3>
Regular blood donation reduces the weight of the donors. This is helpful for those who are obese <br>and are at a higher risk of cardiovascular diseases and other health disorders. However, blood donation<br> should not be very frequent and you may consult your doctor before donating blood to avoid any health issues.<br>
Stimulates Blood Cell Production After donating blood, the body works to replenish the blood loss.<br> This stimulates the production of new blood cells and, in turn, helps in maintaining good health.
		</center> "; 
		  
		   break;
		    case 6:
		   echo "Offers<br>
		        PayTm cash of &#8377 10
				";
		   break;
		    case 7:
		   echo "<font style='font-size:20px;'>We have prepared a website for blood donation. In it You need a login ID and mandatory strong password for secure login. So it's for security of a donator. So if you don't have an valid email account you can register from our website by filling your private information like your name,mobile No,. D.O.B, Address some of the information is needed to register.
So while successfully login you will redirected to main page where you can choose your choice whether you want blood or donate both option are there .
So when you select your desired choice then you have to follow some of the basic step related to your choice.
If you select that you want blood then you simply fill the form in it the basic information is needed like which blood group you want that type of thing you have to follow.
Same for donating blood also.
Then our work is to tell you nearest hospital from you can donate as well as purchase your desire blood group.
After these all process we will get feedback from your side. If you will get any problem in that procedure then we will work as per your valuable feedback.
So we want that our website is in 1st position in India in blood related work. So we need your help. If you like our service then you can share our website.
So thanks for coming our website.</font>";
		   break;		     
		    case 9:
			 echo "<center style='margin:20px 0px 0px 50px;font-size:18px;'><h2>HELP / FAQS / DONATION PROCESSORS ::-</h2>
<h2>Blood Donation Process ::-</h2>
It is always good to plan blood donation in advance. Consult your doctor before donating blood if there<br> are any health issues or concerns. It is always good to have a healthy diet weeks before the donation. <br>On the day of donation, make sure you are well hydrated, so keep drinking plenty of fluids. One should<br> wear comfortable clothes during the donation process. In case you are undergoing any treatment or<br> medication, it is advisable to inform the blood bank/clinic/hospital where you are donating blood.
<h2>FAQs ::-</h2>
<h3>How often can you Donate Blood?</h3>
One has to wait for 56 days or 8 weeks between whole blood donations. The waiting period is 112 days or<br> 16 weeks between power red donations. Avoid donation if you’re suffering from any disorders, and consult<br> your doctor before doing it.
<h3>How much Blood do you Donate?</h3>
You can donate one unit or 350 ml of blood every 8 weeks. Organizations such as American Red Cross<br> organize donation camps where one can participate and donate blood. You can also donate blood at any hospital.
<h3>How Old do you Have to be to Donate Blood?</h3>
Donor’s age must be between 18-60 years and their weight should be more than 45 kgs to be able to donate blood.<br> Any healthy person can donate blood after the required gap of 56 days. This wait time helps replenish<br> the blood levels in the donor’s body
<h3>Who cannot Donate Blood?</h3>
Individuals below the age of 18 and above 60 and with weight lower than 110 lbs cannot donate blood. A person with<br> active infection, acute infection or diseases like HIV AIDS should not donate blood. It is advisable to consult a doctor<br> and share medical history before going for blood donation.
</center>";
		  break;
		   default:
		   echo" MAIN PAGE CONTENT:-
 WELCOME TO OUR BLOOD BANK WEBSITE.
AS YOU KNOW BLOOD CANNOT BE CREATED IT CAN ONLY BE DONATED                                                       SO IN THIS WEBSITE WE HAVE  PROVIDED  A PLATFORM FOR THOSE WHO WANTS TO DONATE  BLOOD AND FOR THOSE WHO NEEDS BLOOD
OUR  WEBSITE IS TOTALLY DIFFERENT FROM USUAL BLOOD BANK CENTRES .                                                     NOW THE QUESTION IS HOW ???                                                                                                                             SO FIRST OF ALL WE TAKE  SOME BASIC DETAILS OF USERS AND PROVIDE INFORMATION OF NEARBY  BLOOD BANK CENTRES AS PER THEIR  RESIDENCE .SO IN THIS WAY WE  MAKES THIS WORK EASIER AND CONVINENT FOR  THE INDIGENT PEOPLE.
WE WORK AS A MEDIATOR AND  ESTABLISH A GOOD  AND TRUSTED COMMUNICATION BETWEEN BLOOD BANK ORGANIZATIONS AND CUSTOMERS.
 SAVING A LIFE DOES NOT REQUIRE HEROIC DEEDS. SO CONNECT WITH US AND DONATE  FEW DROPS WE ASSURE YOU IT WILL DEFINITELY FEEL GOOD .";
    break;



		   }
	   
	 }	   else
	 {
		 echo " <center><span style='font-size:35px;font-weight:bold;;color:crimson;'>RedDrops.in |</span> <span style='font-size:20px;'> Do it once ..You'll feel good </span><br><br>
				<img src='png/bloodd.jpg' style='width:65%;height:25%;border:2px solid black;'>
				<p style='font-size:20px;'>WELCOME TO <b>REDDROPS.INFO</b> . AS WE ALL KNOW THAT BLOOD IS SO MUCH PRECIOUS AND CANNOT BE CREATED IT CAN ONLY BE DONATED .
				SO IN THIS WEBSITE WE HAVE  PROVIDED  A PLATFORM FOR THOSE WHO WANTS TO DONATE  BLOOD AND FOR THOSE WHO NEEDS BLOOD
				OUR  WEBSITE IS TOTALLY DIFFERENT FROM USUAL BLOOD BANK CENTRES .NOW THE QUESTION IS HOW ??? SO FIRST OF ALL WE TAKE  SOME BASIC DETAILS OF USERS AND PROVIDE INFORMATION OF NEARBY  BLOOD BANK CENTRES AS PER THEIR  RESIDENCE .SO IN THIS WAY WE  MAKES THIS WORK EASIER AND CONVINENT FOR  THE INDIGENT PEOPLE.
				WE WORK AS A MEDIATOR AND  ESTABLISH A GOOD  AND TRUSTED COMMUNICATION BETWEEN BLOOD BANK ORGANIZATIONS AND CUSTOMERS. SAVING A LIFE DOES NOT REQUIRE HEROIC DEEDS. SO CONNECT WITH US AND DONATE  FEW DROPS WE ASSURE YOU IT WILL DEFINITELY FEEL GOOD .
				</p><center>";
	 } 
		   
	 }   
		
		 
	 ?>

	
	
	
	   
	</div>
	 
	
	
</div>

	


	
<div class="footer">
<br><br>
<span style="font-size:25px;font-weight:bold;margin-left:30px;color:crimson;">Blood Bank |</span> Do it once ..You'll feel good
<br><br>
<hr style="height:1px;background-color:black;width:1300px;">
<br>
<span id="footer-nav"><a href="index.php?id=7#main">About us</a> <a href="index.php?id=8#main">Contact</a> <a href="#">Careers</a></span>
<span style="float:right;font-size:15px;margin-right:40px;">FOLLOW US ON : <a href="https://www.facebook.com/Blood-Bank-416279182170731/?ref=aymt_homepage_panel" target="_blank"><img src="png/fb.png"></a>  <a target="_blank" href="https://www.instagram.com/blood_bank_online"><img src="png/insta.png"></a>  <a href="https://twitter.com/BankBloodbank" target=_blank><img src="png/twitter.png"></a></span>
<br><br>
<hr style="height:1px;background-color:black;width:1300px;">

<marquee behavior="alternate" style=""><span style="font-size:18px;font-weight:bold;margin-left:10px;color:crimson;">&copy 2018 BloodBank.com</marquee> 
</div>





<script>    //Slidshow script

	//login and register collision solved	  
  var login=document.getElementById("register");
			 login.addEventListener("click",function(){
				if( document.getElementById("myRegister").style.width =="700px")
				{
					document.getElementById("myRegister").style.width = "0";
				}
				else {
					document.getElementById("myRegister").style.width ="700px";
					document.getElementById("myLogin").style.width="0px";
				}
				 
			 });
			 var register=document.getElementById("login");
			 register.addEventListener("click",function(){
				if( document.getElementById("myLogin").style.width =="400px")
				{
					document.getElementById("myLogin").style.width = "0";
					
				}
				else {
					document.getElementById("myLogin").style.width ="400px";
					document.getElementById("myRegister").style.width = "0";
				}
				 
			 });
		/* 	 register.addEventListener("mouseover",function(){
				document.getElementById("myLogin").style.width ="400px";
				 document.getElementById("myRegister").style.width = "0";
			 }); */
			 function closeNav() {
             document.getElementById("myRegister").style.width = "0";
             
             }
			 function closeNav2() {
             document.getElementById("myLogin").style.width = "0";
             
             }
 </script>
<?php
 if(isset($_POST["submit"]))
		 {	 global $con;
			$username="'".$_POST["user"]."'";
			 $password="'".$_POST["password"]."'";
			   $email="'".$_POST["email"]."'";
				$conpassword="'".$_POST["conpassword"]."'";
			
				 if($password==$conpassword)
		  {	
				   $sql="insert into register (username,email,password,conpassword) values($username,$email,$password,$conpassword)";
				  if($con->query($sql)==true)
					 {     
						   echo "You are registered successfully";
						   
					   }
				 else {
					   echo $con->error;
					   }
				  $con->close();
		   }
				else 
			  {
				   echo "Password and Confirm Password doesn't match";
				}
		}
  
	
		if(isset($_POST["submit1"]))
		   {   global $con;
			   $login_email="'".$_POST["logemail"]."'";
			   $login_pass="'".$_POST["logpass"]."'";
				$sql1="select email,password from register where email=$login_email and password=$login_pass";
				$result=$con->query($sql1);
			   if($result->num_rows>0)
			   {  echo "<script>alert('welcome user')</script>";
		          
		         $row=$result->fetch_assoc();
					
                     $_SESSION["email"]=$row["email"];
                 // echo "<script>window.open('login.php');</script>";
					 
				 }
			   else 
			{
			  echo "<script>alert('You are not registered')</script>";
			}
			
			$con->close();
			}
?>
 </body>
</html>