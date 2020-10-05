<?php
   include("config.php");
   session_start();
  $tw=$_SESSION['discount'];
  echo "the total amount along with discount is" ;
  echo $tw;

	   if(isset($_POST['order']))
	  {
		  $userid=$_POST['userid'];
      $address = $_POST['address'];
	  $name =$_POST['name'];
	  $city=$_POST['city'];
	  $pincode=$_POST['pincode'];
	  $phone=$_POST['phone'];
	   
      
	  
      $sql = " insert into order_details(userid,name,adreess,city,pincode,mobile,totalcost) values('$userid','$name','$address','$city','$pincode','$phone','$tw')";
     $result = mysqli_query($db,$sql);
	 
     if($result)
	 {
	 echo "successfully ordered";
	 header('location:thankyou.php');
	 }
     else
     {
	 echo "sorry theri may b some problem" ;}
	 }
?>
<html>
<head><title>your order  Page</title>
      
      
   </head>
   
    <body style="background-image:url('bake12.jpg');background-repeat:no-repeat;background-size:cover;">
	   <br><h1 id="h1"align="center">Your Details</h1><hr id="hr1"><br>
      <div align = "center">
         <div style = "width:450px; border: solid 5px red; height:350px" align = "left">
            <div style = "background-color:green; color:#FFFFFF; padding:3px;height:20px"><b>order:-</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
			   <table>
			   <tr>
			   <th>
                  <label>userID:</label><br><input style = "height:20px" type = "text" name = "userid" class = "box" required /><br /><br />
			   </th>
			  
			   <th>
				   <label>Name:</label><br><input style = "height:20px" type = "text" name = "name" class = "box" required /><br /><br />
				</th>
				</tr>
								<tr>
				 <th>
                  <label>address:</label><br><input style = "height:40px" "width:450px" type = "text" name = "address" class = "box" required /><br /><br />
			   </th>
			   </tr>
				<tr>
				 <th>
                  <label>city:</label><br><input style = "height:20px" type = "text" name = "city" class = "box" required /><br /><br />
			   </th>
			
				 <th>
                  <label>pincode:</label><br><input style = "height:20px" type = "text" name = "pincode" class = "box" required /><br /><br />
			   </th>
			   </tr>
			   
			    <th>
                  <label>phone:</label><br><input style = "height:20px" type = "text" name = "phone" class = "box" required /><br /><br />
			   </th>
				</tr>
				
				
		        
				</table>
                  <input id="sub" type = "submit" name="order" value = "order"/>
				  
               </form>
			  
					<?php if(isset($error)){ echo "Enter the valid productid or your are alredy in"; } ?>
            </div>
				
         </div>
			<br><br>
			      </div>
	  
	  
	 
	  </body>
<html>