
<?php 
include "db.php";
	/* function donate()
		 {
		 
			echo "<script>alert('hi')</script>";
		 
		 }	 */	
		  
     
	 function get_sidebar()
		 {   global $con;
			 $query="select * from sidebar ";
			 $run=mysqli_query($con,$query);
			 while ($row=mysqli_fetch_array($run))
			 {
		
				$side_id = $row['id']; 
				$side_title=$row['sidebar-cat'];
				echo "<ul> <li><a href='index.php?id=$side_id#main'>$side_title</a></li> </ul>";
			 }
		 }
	 function get_donators()
	 {
		 global $con;
		  
		 $query="select * from request ";
		 $run=mysqli_query($con,$query);
          ?><table border=0px width=870px height=700px style="margin:30px 0px 0px 10px">
                <tr style="background-color:rgb(220,80,80);color:white;">
				 <td align=center>IMAGE</td>
				 <td align=center>FULLNAME</td>
				 <td align=center>AGE</td>
				 <td align=center>MOBILE</td>
				 <td align=center>STATE</td>
				 <td align=center>CITY</td>
				 <td align=center>ADDRESS</td>
				 <td align=center>BLOOD GROUP</td>
				 <td align=center>ZIP</td>
				 </tr>		  
       <?php		  
		while($run_user=mysqli_fetch_array($run))
		 {   
			 $image=$run_user['image'];
			 $fullname=$run_user['fullname'];
			 $age=$run_user['age'];
			 $mobile=$run_user['mobile'];
			 $state=$run_user['state'];
			 $city=$run_user['city'];
			 $address=$run_user['address'];
			 $blood_group=$run_user['bloodgrp'];
			 $zip=$run_user['zip'];
	     ?>
			 
		  <tr>
				 <td align=center><img src="users/<?php echo $image ?>" style="border:1px solid black" height=100 width=100 /></td>
				 <td align=center><?php echo $fullname ?></td>
				 <td align=center><?php echo $age ?></td>
				 <td align=center><?php echo $mobile ?></td>
				 <td align=center><?php echo $state ?></td>
				 <td align=center><?php echo $city ?></td>
				 <td align=center><?php echo $address ?></td>
				 <td align=center><?php echo $blood_group ?></td>
				 <td align=center><?php echo $zip ?></td>
				 </tr>
			 
		 <?php } ?>
		     </table>
	 
		 
	 <?php } ?>
	 
	 <?php
	 function slides(){  //slideshow function
		  global $con;   //new slides will be added through addslide.php
			 $query="select * from slideshow ";
			 $run=mysqli_query($con,$query);
			 while ($row=mysqli_fetch_array($run))
			 {	$slide_title=$row['slide'];
			
				echo  "
				      <div class='slides fade'>
			          <img src='png/$slide_title '  >      
					  </div> 
					   ";
					  
			 }	 	
	 }
	 ?>
	<?php  
	function get_search(){
		  global $con;
												   if(isset($_POST["srch"]))
              { $blood=$_POST['bg'];
		        
		        $query1="select * from request where bloodgrp='$blood'";
				$run=mysqli_query($con,$query1);
				
				?><table border=0px width=870px height=100px style="margin:30px 0px 20px 10px">
                <tr style="background-color:rgb(220,80,80);color:white;">
				 <td align=center>IMAGE</td>
				 <td align=center>FULLNAME</td>
				 <td align=center>AGE</td>
				 <td align=center>MOBILE</td>
				 <td align=center>STATE</td>
				 <td align=center>CITY</td>
				 <td align=center>ADDRESS</td>
				 <td align=center>BLOOD GROUP</td>
				 <td align=center>ZIP</td>
				 </tr>		  
       <?php	
       if($run->num_rows>0)
	   
		while($run_user=mysqli_fetch_array($run))
		 {   
			 $image=$run_user['image'];
			 $fullname=$run_user['fullname'];
			 $age=$run_user['age'];
			 $mobile=$run_user['mobile'];
			 $state=$run_user['state'];
			 $city=$run_user['city'];
			 $address=$run_user['address'];
			 $blood_group=$run_user['bloodgrp'];
			 $zip=$run_user['zip'];
	     ?>
			 
		  <tr>
				 <td align=center><img src="users/<?php echo $image ?>" style="border:1px solid black" height=100 width=100 /></td>
				 <td align=center><?php echo $fullname ?></td>
				 <td align=center><?php echo $age ?></td>
				 <td align=center><?php echo $mobile ?></td>
				 <td align=center><?php echo $state ?></td>
				 <td align=center><?php echo $city ?></td>
				 <td align=center><?php echo $address ?></td>
				 <td align=center><?php echo $blood_group ?></td>
				 <td align=center><?php echo $zip ?></td>
				 </tr>
			 
		 <?php }
            else{
				echo "Sorry We dont have at present any donator";
 			}
		 ?>
		     </table>
	 
		 
	 <?php } ?>
	
		                                   
	<?php }	?>	
	 