<?php
   include("config.php");
   session_start();
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	   if(isset($_POST['sub1']))
	  {
		 
      $myuserid = mysqli_real_escape_string($db,$_POST['userid']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
	 
      $sql = "SELECT adminname FROM admin WHERE adminname = '$myuserid' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       
          
      $count = mysqli_num_rows($result);
	   if($count == 1) {
       
         $_SESSION['login_user'] = $myuserid;
           header("location:welcome.php");		 
         
         
      }
         
      }
	  
	   
	  if(isset($_POST['sub2'])){
		   $myusername= mysqli_real_escape_string($db,$_POST['userid']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT username FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       
      
      $count = mysqli_num_rows($result);
	  
	   if($count == 1) {
       
         $_SESSION['login_user'] = $myuserid;
         
         header("location:index.php");
      }
         
      }
   }
   
?>
<html>

   <head>

      <title> Login Page</title>
	  </head>
	        	<body style="background-image:url('bake2.jpg');background-repeat:no-repeat;background-size:cover;">

      <link href="style.css" rel="stylesheet" type="text/css">
	 <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background:transperant;
	position:absolute;
	right:100;
	font-size:25;
	
}

li {
    float: right;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 20px 20px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background:black;
}

.active {
    background-color: red;
}
</style>
   </head>
   <body>
	    <header>
		<div class="column">
		<ul class="main-nav">
		  <li><a href="contactus.php"style="color:white">CONTACT US</a></li>
		   <li><a href="aboutus.php"style="color:orange">  ABOUT US</a></li>
		   <li><a href="viewfeedback.php"style="color:green"> REVIEWS</a></li>
		   <li><a href="staff.php"style="color:blue"> STAFF</a></li>
		   </ul>
		   <a href="viewcoupons.php"Style="color:black"><h4> YOUR COUPON</h4></a>
		   </div>
		
		</header>
	   <h1 id="h1" align="centre" style= "color:blue; font-weight:bold;padding:5px;position:left top;top:110;left:30">CHILL OUT BAKERY</h1><hr align="center" id="hr1"><br> 
      <div align = "center" >
         <div style = "width:200px; height:50px" align = "">
            <div style = "color:black; padding:3px;"><b><h2>Login:-</h2></b></div>
		
            <div style = "margin:0px">
            <div >
			<table>
               
               <form action = "" method = "post">
			   <tr>
			   <th>
			   <label style="color:black"> USER ID</label>
                  <input style = "height:25px;height:20px;width:70%" type = "text" name = "userid" class = "box" placeholder="User Name" required /><br /><br />
                
                  </th>
				  </tr>
				  <tr>
				  <th>
				  <label style="color:black"> PASSWORD</label>
				  <input style = "height:25px;height:20px;width:70%"  type = "password" name = "password" class = "box" placeholder="Password" required /><br/><br />
                 </th>
                 </tr>	
				 </table>
				 <input style="color:blue" type = "submit" name="sub1" value = "Admin"/> <input style="color:blue"  type = "submit" name="sub2" value = "Customer"/><br /><hr style="width:50%"><hr style="width:70%"><hr style="width:50%">
				 <tr>
		<a href='register.php'>New User</a>

				  
               </form>
			  
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>