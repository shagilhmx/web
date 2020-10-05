<?php
  include('config.php');
	   if(isset($_POST['register']))
	  {
      $username = $_POST['username'];
	  $cust_name = $_POST['cust_name'];
	  $phone=$_POST['phone'];
        $cust_id=$_POST
		['cust_id'];
	  $address =$_POST['address'];
       $password = $_POST['password']; 
	  $conform_password = $_POST['conform_password']; 
        $email=$_POST['email'];
      
	 		  if($password ==$conform_password ){
	  
      $sql = "insert into user(cust_name,cust_id,username,password,address,phone,email) values('$cust_name','$cust_id','$username','$password','$address','$phone','$email')";
      $result = mysqli_query($db,$sql);
	  
	   }
	   
	  if($result)
	  {
	  echo "successfully regestired";
	  
	   $sql1="select exec_time from trigger_time where userid=$cust_id";
	        $result1 = mysqli_query($db,$sql1);
	$ee= mysqli_fetch_array($result1);

					echo $ee['exec_time'];
				   
	  
	   $sql = "insert into user(cust_name,cust_id,username,password,address,phone,email) values('$cust_name','$cust_id','$username','$password','$address','$phone','$email')";
      $result = mysqli_query($db,$sql);
	  
	  }
		  else{
			
	     echo "Error in registration";
		 }
   }
?>
<html>
<head>
<style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:20px;
			color: black;
         }
		 
		  #h1{color:red;
		 font-size:70px}
		 #hr1{background-color:yellow;height:2px;width:900px}
		 #sub{background-color:orange;
		        width:150px;height:30px ;font-size:20px}
         
     
		
      </style>
      
   </head>
   
   <body style="background-image:url('image11.jpg');background-repeat:no-repeat;background-size:cover;">
	   <br><h1 id="h1"align="center">Welcome to our bakery</h1><hr id="hr1"><br>
      <div align = "center">
         <div style = "width:550px; border: solid 5px yellow; height:550px" align = "left">
            <div style = "background-color:green; color:#FFFFFF; padding:3px;height:20px"><b>Please register here:-</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
			   <table>
			   <tr>
			   <th>
                  <label>CustID:</label><br><input style = "height:20px" type = "text" name = "cust_id" class = "box" required /><br /><br />
			   </th>
			   <th>
				   <label>Customer Name:</label><br><input style = "height:20px" type = "text" name = "cust_name" class = "box" required /><br /><br />
				</th>
				</tr>
							   <tr>
			   <th>
                  <label>Address:</label><br><input style = "height:20px" type = "text" name = "address" class = "box" required /><br /><br />
			   </th>
				
				
				<tr><th>
					 <label>Phone</label><br><input style = "height:20px" type = "text" name = "phone" class = "box" required /><br /><br />
				</th>
					  
			    </tr>
			   <tr>
			   <th>
                  <label>Username:</label><br><input style = "height:20px" type = "text" name = "username" class = "box" required /><br /><br />
			   </th>				
		        <tr>
							   <tr>
			   <th>
                  <label>Email:</label><br><input style = "height:20px" type = "text" name = "email" class = "box" required /><br /><br />
			   </th></tr>
			   <tr>
				   <th>
                  <label>Password  :</label><br><input style = "height:20px" type = "password" name = "password" class = "box" required /><br/><br />
				  </th>
				   <th>
				  <label>Confirm Password  :</label><br><input style = "height:20px" type = "password" name = "conform_password" class = "box" required /><br/><br />
				  </th>
				 </tr>
				</table>
                  <input id="sub" type = "submit" name="register" value = "Register"/>
				   <a href="login.php">LOGIN</a>
				  
               </form>
			  
					<?php if(isset($error)){ echo "Enter the valid UserID or your are alredy in"; } ?>
            </div>
				
         </div>
			
      </div>
	  </body>
<html>